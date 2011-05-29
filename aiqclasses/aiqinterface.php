<?php
$entityID = ""; 
$partnerKey = "";
$userKey = "";

include_once('keys.inc');

class AIQInterface
{
	private $auth;
	private $ws;
	public $lastOpError;
	public $errorString;
	public $lastTransactionID;
	
	public function __construct ()
	{
		$this->auth = "";
		$this->ws = new Integration_1_1();
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
            return 'Failed to login' + e;
        }
        if (!empty ($this->auth))
        {
            $orgcode = $this->FindCustomerByName ($organisation);
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
        
        $getnewsalesinvoiceparams = new GetNewSalesInvoice ($this->auth, $organisationcode);
        $result = $this->ws->GetNewSalesInvoice($getnewsalesinvoiceparams)->GetNewSalesInvoiceResult;
        if (!empty($result->Result))
        {
        	$invoice = $result->Result;
            $line = new InvoiceLine(0, 0, null, '101', 'From default', 1, 0, $amount, $amount, 0, 
            $amount, $vatcode, $vatrate, 0, 0,
            0, '1', 'BIN1', time(), null, null,
            	false, $glcode, $glcode, null, $deptcode, null);
            $invoice->Lines->InvoiceLine[] = $line;
            $invoice->ExchangeRate = 1;
            $invoice->ExternalReference = $description;
                        
            $saveinvoicegetbackinvoiceidparams = new SaveInvoiceGetBackInvoiceID ($this->auth, $invoice, true);
            $response = $this->ws->SaveInvoiceGetBackInvoiceID($saveinvoicegetbackinvoiceidparams);
             
            if ($response->SaveInvoiceGetBackInvoiceIDResult->Status == OperationStatus::Created)
            {
                $this->errorString = 'Status is Invoice Created';
                $invoiceID = $response->invoiceID;
                $postinvoicegetbacktransactionidparams = new PostInvoiceGetBackTransactionID($this->auth, $invoiceID);
                $postresponse = $this->ws->PostInvoiceGetBackTransactionID($postinvoicegetbacktransactionidparams);
                $postedResult = $postresponse->PostInvoiceGetBackTransactionIDResult;
                if ($postedResult->Status == OperationStatus::Created)
                {
                	$this->lastTransactionID = $postresponse->transactionID;
                	
                	// need to store the transaction ID somewhere, so store it in the Invoice Notes field
                	$this->SaveTransactionIDWithInvoice ($invoiceID, $postresponse->transactionID);
                    return $invoiceID;
                }
                else
                {
                    $this->lastOpError = true;
                    $this->errorString = $postedResult->Status . ' Failed to post invoice ' . $postedResult->ErrorCode;
                    return null;
                }
            }
            else
            {
                $this->lastOpError = true;
                $this->errorString = $response->SaveInvoiceGetBackInvoiceIDResult->Status . ' Failed to save invoice ' . $response->SaveInvoiceGetBackInvoiceIDResult->ErrorCode;
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
 
	public function MarkInvoiceAsPaid ($invoiceID, $reference, $amountpaid, $bankaccountcode)
	{
		$this->lastTransactionID = 0;
		$orgcode = $this->GetOrgCodeandTransactionIDFromInvoice ($invoiceID);
		$invoiceTransactionID = $this->lastTransactionID;
		if ($this->lastOpError == false)
		{
			$receiptTransactionID = $this->CreateNewSalesReceipt ($orgcode, $reference, $amountpaid, $bankaccountcode, "GEN", $invoiceID);
			if ($this->lastOpError == false)
			{
				// allocate the amount from the receipt to the invoice
				$allocatetransactionsparams = new AllocateTransactions ($this->auth, $invoiceTransactionID, $receiptTransactionID, $reference, $amountpaid, time());
 				$allocatetransactionresult = $this->ws->AllocateTransactions ($allocatetransactionsparams)->AllocateTransactionsResult;
			}
		}
		return true;
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
            foreach ($custarray->Customer as $c) 
            {
                if (strcasecmp ($c->Name,$customername) == 0)
                {
                    return $c->Code;
                }
            }
        }
        return "";
    }
    
    private function CreateNewSalesReceipt ($orgcode, $lodgementID, $amount, $BankAccountCode, $deptcode, $invoiceID)
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
        	$description = "Invoice number " . $invoiceID;
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
    
    private function GetOrgCodeandTransactionIDFromInvoice ($invoiceID)
    {
 		$this->lastOpError = true;
    	try
        {
            if (empty($this->auth))
            {
                $this->auth = $this->Login();
            }
        }
        catch (exception $e)
        {
            return 'Failed to login' + e;
        }
        if (!empty ($this->auth))
        {
        	$getinvoiceparams = new GetInvoice ($this->auth, $invoiceID);
    		$getinvoiceresult = $this->ws->GetInvoice ($getinvoiceparams)->GetInvoiceResult;
    		if ($getinvoiceresult->Result && $getinvoiceresult->Status == OperationStatus::Success)
    		{
 				$this->lastOpError = false;
    			$customercode = $this->FindCustomerByName ($getinvoiceresult->Result->AccountName);
    			$this->lastTransactionID = $getinvoiceresult->Result->Notes;
    			return $customercode;
    		}
        }
        return "";
    }
    private function  SaveTransactionIDWithInvoice ($invoiceID, $transactionID)
    {
       if (!empty ($this->auth))
        {
        	$getinvoiceparams = new GetInvoice ($this->auth, $invoiceID);
    		$getinvoiceresult = $this->ws->GetInvoice ($getinvoiceparams)->GetInvoiceResult;
    		if ($getinvoiceresult->Result && $getinvoiceresult->Status == OperationStatus::Success)
    		{
    			$invoice = $getinvoiceresult->Result;
    			$invoice->Notes = $transactionID;
           		$saveinvoiceparams = new SaveInvoice ($this->auth, $invoice, false);
            	$response = $this->ws->SaveInvoice($saveinvoiceparams);
    		}
        }    	
    }
    
 }
?>