<?php
// test server
$AIQServer = 'https://appdb.visor.ie/visor/production/dashboard/Integration/Integration_1_1.asmx?WSDL';
//production server
//$AIQServer = 'https://www.visorsoftware.com/visor/accountsiq/dashboard/Integration/Integration_1_1.asmx?WSDL';

$entityID = ""; 
$partnerKey = "";
$userKey = "";

include_once('keys.inc');
include_once ('dump.class.php');

class AIQInterface
{
	private $auth;
	private $ws;
	public $lastOpError;
	public $errorString;
	public $lastTransactionID;
	
	public function __construct ()
	{
		global $AIQServer;
		$this->auth = "";
		$this->ws = new Integration_1_1($AIQServer);
		$this->lastOpError = false;
		$this->errorString = "";
		$this->lastTransactionID = 0;
	}
	
	public function Login ()
	{
		global $entityID;
		global $partnerKey;
		global $userKey;
			
		GetKeys (0);
			
		$myLogin = new Login ($entityID, $partnerKey, $userKey);
    	$myLoginResponse = $this->ws->Login($myLogin);
    	$this->auth = $myLoginResponse->LoginResult;
    	if (empty($this->auth))
    	{
    		return false;
    	}
    	else
    	{
    		return true;
    	}
	}
	
	public function CreateOrFetchCustomer ($organisation, $address1, $address2, $email, $phone)
    {
    	$max_parameter_size = 50;
    	$organisation = substr ($organisation, 0 , $max_parameter_size);
    	$address1 = substr ($address1, 0 , $max_parameter_size);
    	$address2 = substr ($address2, 0 , $max_parameter_size);
    	$email = substr ($email, 0 , $max_parameter_size); 
    	$phone = substr ($phone, 0 , $max_parameter_size);
        $result = "";
        $this->lastOpError = false;
        try
        {
            if (empty($this->auth))
            {
                $this->auth = $this->Login();
            }
        }
        catch (exception $e)
        {
            $this->lastOpError = true;
            $this->errorString = 'Failed to login ' + $e;
            return 'Failed to login ' + $e;
        }
        if (!empty ($this->auth))
        {
            $orgcode = $this->FindCustomerByName ($organisation);
            if ($this->lastOpError)
            {
            	return $this->errorString;
            }
            
            if (!empty($orgcode))
            {
                $result = $orgcode;
            }
            else
            {
            	$newcustomerfromdefaultsparams = new GetNewCustomerFromDefaults($this->auth);
                $it = $this->ws->GetNewCustomerFromDefaults($newcustomerfromdefaultsparams)->GetNewCustomerFromDefaultsResult;
                if ($it->Status == OperationStatus::Success)
                {
                    $customer = $it->Result;
                    $customer->Name = $organisation;
                    $customer->Code = $this->CreateUniqueCustomerCode ($organisation);
                    $customer->Address1 = $address1;
                    $customer->Address2 = $address2;
                    $customer->AreaID = "IRE01";
                    $customer->Phone = $phone; 
                    $customer->Email = $email;
                    $updatecustomerparams = new UpdateCustomer($this->auth, $customer, true);
                    $updateresult = $this->ws->UpdateCustomer($updatecustomerparams);
                    if ($updateresult->UpdateCustomerResult->Result == true)
                    {
                        $result = $customer->Code; 
                    }
                    else
                    {
                        $this->errorString = ' Customer not created ' . $customer->Code . ' ' .
                        	$updateresult->UpdateCustomerResult->Result;
                        $this->lastOpError = true;
                    }
                }
                else
                {
                    $this->errorString = 'GetNewCustomerFromDefaults failed: ' . $it->ErrorMessage . ' ' . $it->Status . " End\n";
                    $this->lastOpError = true;
                }
            }
         }
         else
         {
            $this->errorString = 'Failed to log in';
            $this->lastOpError = true;
         }
         return $result;
    }

   public function CreateNewSalesInvoice ($organisationcode, $amount, $vatcode, $vatrate, $glcode, $deptcode, $description)
    {
    	$this->lastTransactionID = 0;
        $this->lastOpError = false;
        $invoiceCode = "";
        $this->errorString = 'Starting to create a sales invoice';

        $newbatchsalesinvoiceline = new BatchSalesInvoiceLine ();
        $newbatchsalesinvoiceline->NetAmount = $amount;
        $newbatchsalesinvoiceline->TaxRate = $vatrate;
        $newbatchsalesinvoiceline->GLAccountCode = $glcode;
 	    $newbatchsalesinvoiceline->TaxCode = $vatcode;
    	$newbatchsalesinvoiceline->Description = $description;
    	$newbatchsalesinvoiceline->DepartmentID = $deptcode;
        $newbatchsalesinvoicelines[] = $newbatchsalesinvoiceline;
        $newbatchsalesinvoice = new BatchSalesInvoice ($organisationcode, time(), "Web site", $description, $newbatchsalesinvoicelines, 1);

        $createbatchsalesinvoiceparams = new CreateBatchSalesInvoice ($this->auth, $newbatchsalesinvoice);
        $result = $this->ws->CreateBatchSalesInvoice($createbatchsalesinvoiceparams)->CreateBatchSalesInvoiceResult;
        if (!empty($result->Result))
        {
	        $internalInvoiceReference = $result->Result;
        }
        else
        {
	        $this->lastOpError = true;
    	    $this->errorString = $result->Status . " Error Creating Batch Sales Invoice " . $result->ErrorMessage;
    	    return null;
        }
        
        $customerCodes[] = $organisationcode;
        $getcustomersstatementparams = new GetCustomersStatement ($this->auth, time(), $customerCodes, true);
        $result = $this->ws->GetCustomersStatement($getcustomersstatementparams)->GetCustomersStatementResult;
   		if (!empty($result->Result))
        {
	        $customerStatements = $result->Result;
	        foreach ($customerStatements as $c) 
            {
              foreach ($c->TransactionList as $trans)
              {
              	//$d = new dump ($trans);
              	//$this->errorString = $d->get_html();
              	$this->lastTransactionID = "";
              	if (count ($trans) == 1)
              	{
              		$this->lastTransactionID = $trans->TransactionReference;
              		return $this->lastTransactionID;
              	}
              	else
              	{
	              	foreach ($trans as $transState)
	              	{
	              		if ($transState->Type == "SI" && $transState->InternalNumber == $internalInvoiceReference)
	              		{
	              			$this->lastTransactionID = $transState->TransactionReference;
	              			return $this->lastTransactionID;
	              		}
	              	}
              	}
              	if (empty($this->lastTransactionID))
              	{
              		$this->lastOpError = true;
              		$this->errorString = "Cannot find transaction ID";
              		return null;
              	}
              }
            }
        }
        else
        {
	        $this->lastOpError = true;
    	    $this->errorString = $result->Status . " Error Getting Customers Statement " . $result->ErrorMessage;
    	    return null;
        }
    }
 
	public function MarkInvoiceAsPaid ($invoiceTransactionID, $orgcode, $reference, $amountpaid, $bankaccountcode)
	{
		$receiptTransactionID = $this->CreateNewSalesReceipt ($orgcode, $reference, $amountpaid, $bankaccountcode, "GEN", $invoiceTransactionID);
		if ($this->lastOpError == false)
		{
			// allocate the amount from the receipt to the invoice
			$allocatetransactionsparams = new AllocateTransactions ($this->auth, $invoiceTransactionID, $receiptTransactionID, $reference, $amountpaid, time());
 			$allocatetransactionresult = $this->ws->AllocateTransactions ($allocatetransactionsparams)->AllocateTransactionsResult;
 			if ($allocatetransactionresult->Status != OperationStatus::Success)
 			{
 				$this->errorString = $allocatetransactionresult->Status . " " . $allocatetransactionresult->ErrorMessage;
 				$this->lastOpError = true;
 				return false;
 			}
 			else
 			{
 				return true;
 			}
		}
		return false;
	}

	
	// HELPER FUNCTIONS USED FROM HERE ON
	private function CreateUniqueCustomerCode ($customername)
    {
    	$postscript = 1;
    	$uniquecodefound = false;
    	while (!$uniquecodefound)
    	{
    		$uniquecode = strtoupper(substr($customername, 0, 3)) . sprintf("%02d", $postscript);
    		$getcustomerparams = new GetCustomer ($this->auth, $uniquecode);
    		$getcustomerresult = $this->ws->GetCustomer ($getcustomerparams)->GetCustomerResult;
    		if ($getcustomerresult->Result)
    		{
    			if ($postscript++ > 9999)
    			{
    				return "failed"; // should never get here
    			}
    		}
    		else
    		{
    			$uniquecodefound = true;
    		}
    	}
    	return $uniquecode;
    }
    
    private function FindCustomerByName ($customername)
    {
    	$activecustomerlistparams = new GetActiveCustomerList($this->auth);
        $cuslist = $this->ws->GetActiveCustomerList($activecustomerlistparams)->GetActiveCustomerListResult;
        if ($cuslist->Status == OperationStatus::Success)
        {
            return $this->FindCustomerInList ($cuslist, $customername);
        }
        else
        {
            $this->errorString = $cuslist->ErrorMessage;
            $this->lastOpError = true;
            return $cuslist->ErrorMessage;
        }
    }
   
    private function FindCustomerInList ($cuslist, $customername)
    {
        if (!empty($cuslist))
        {
            $custarray = $cuslist->Result;
            try
            {
            	if (!empty($custarray))
            	{
		            foreach ($custarray->Customer as $c) 
		            {
		                if (strcasecmp ($c->Name,$customername) == 0)
		                {
		                    return $c->Code;
		                }
		            }
            	}
            }
            catch (exception $e)
            {
            	return ""; // no customers
            }
        }
        return "";
    }
    
    private function CreateNewSalesReceipt ($orgcode, $lodgementID, $amount, $BankAccountCode, $deptcode, $invoiceTransactionID)
    {
        $this->lastOpError = false;
        try
        {
            if (empty($this->auth))
            {
                $this->auth = $this->Login();
            }
        }
        catch (exception $e)
        {
            $this->lastOpError = true;
            return 'Failed to login' + e;
        }
        if (!empty ($this->auth))
        {
	        $this->errorString = 'Starting to create a purchase payment';
        	$description = "Invoice transaction ID " . $invoiceTransactionID;
    	    $salesreceipt = new SalesReceipt ($orgcode, $lodgementID, $amount, $BankAccountCode, $lodgementID, time(), 1, 1, $description, $deptcode);
            $savesalesreceiptegetbacktransactionidparams = new SaveSalesReceiptGetBackTransactionID ($this->auth, $salesreceipt);
            $response = $this->ws->SaveSalesReceiptGetBackTransactionID($savesalesreceiptegetbacktransactionidparams);
             
            if ($response->SaveSalesReceiptGetBackTransactionIDResult->Status == OperationStatus::Success)
            {
                $this->errorString = 'Status is purchase payment success';
                $transactionID = $response->transactionID;
                return $transactionID;
             }
            else
            {
                $this->lastOpError = true;
                $this->errorString = $response->SaveSalesReceiptGetBackTransactionIDResult->Status . ' Failed to save invoice ' . $response->SaveSalesReceiptGetBackTransactionIDResult->ErrorCode;
                return null;
            }
        }
        else
        {
            $this->errorString = 'Failed to create new sales invoice ' . $result->ErrorMessage;
            $this->lastOpError = true;
            return null;
        }
    }
 }
?>