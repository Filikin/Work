<?php
	require_once('../aiqclasses/Integration_1_1.php');
	require ('../aiqclasses/aiqinterface.php');
?>

<?php

	if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) 
	{
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	} 
	else 
	{
		echo "<h2>Error: No name entered</h2><img id='checkmark' src='images/cancelmark.png' />";
		return;
	}
	if ((isset($_POST['email'])) && (strlen(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) > 0)) 
	{
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	}
	else 
	{
		echo "<h2>Error: Valid email address not entered</h2><img id='checkmark' src='images/cancelmark.png' />";
		return;
	}
	if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) 
	{
		$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	}
	else 
	{
		echo "<h2>Error: No phone number entered</h2><img id='checkmark' src='images/cancelmark.png' />";
		return;
	}
	if ((isset($_POST['organisation'])) && (strlen(trim($_POST['organisation'])) > 0)) 
	{
		$organisation = filter_input(INPUT_POST, 'organisation', FILTER_SANITIZE_STRING);
	}
	else 
	{
		echo "<h2>Error: No organisation entered</h2><img id='checkmark' src='images/cancelmark.png' />";
		return;
	}
	
	if ((isset($_POST['address1'])) && (strlen(trim($_POST['address1'])) > 0)) 
	{
		$address1 = filter_input(INPUT_POST, 'address1', FILTER_SANITIZE_STRING);
	}
	else 
	{
		$address1 = "";
	}
	
	if ((isset($_POST['address2'])) && (strlen(trim($_POST['address2'])) > 0)) 
	{
		$address2 = filter_input(INPUT_POST, 'address2', FILTER_SANITIZE_STRING);
	}
	else 
	{
		$address2 = "";
	}
	
	$aiqif = new AIQInterface();
	if ($aiqif->Login())
	{
		$orgcode = $aiqif->CreateOrFetchCustomer($organisation, $address1, $address2, $email, $phone);
		
		if ($aiqif->lastOpError || empty($orgcode))
		{
			echo "<h2>Error: Cannot find customer</h2><p>" . $aiqif->errorString . "</p><img id='checkmark' src='images/cancelmark.png' />";
		}
		else
		{
			if ($_POST['membershiptype']=='individual')
			{
				$amount = 50;
				$vatrate = 0.0;
				$vatcode = "NT";
				$glcode = 1200;
				$deptcode = "GEN";
				$bankaccountcode = 6020; // pretend paid by Paypal
				$description = "Annual membership " . $name;
			}
			else if ($_POST['membershiptype']=='corporate')
			{
				$amount = 500;
				$vatrate = 0.21;
				$vatcode = "V01";
				$glcode = 1210;
				$deptcode = "GEN";
				$bankaccountcode = 6010; // pretend paid by cheque
				$description = "Annual membership " . $organisation;
			}
			else if ($_POST['membershiptype']=='corporateplusdirectory')
			{
				$amount = 750;
				$vatrate = 0.21;
				$vatcode = "V01";
				$glcode = 1220;
				$deptcode = "GEN";
				$bankaccountcode = 6010; // pretend paid by cheque
				$description = "Corporate Membership & Directory Listing " . $organisation;
			}
			else if ($_POST['membershiptype']=='conference')
			{
				$amount = 100;
				$vatrate = 0.0;
				$vatcode = "NT";
				$glcode = 1300;
				$deptcode = "CONF";
				$bankaccountcode = 6010; // pretend paid by cheque
				$description = "Conference Attendance " . $name;
			}
			else if ($_POST['membershiptype']=='training')
			{
				$amount = 600;
				$vatrate = 0.0;
				$vatcode = "NT";
				$glcode = 1400;
				$deptcode = "ED1";
				$bankaccountcode = 6010; // pretend paid by cheque
				$description = "Training Events " . $name;
			}
			else 
			{
				$amount = 400;
				$vatrate = 0.21;
				$vatcode = "V01";
				$glcode = 1700;
				$deptcode = "GEN";
				$bankaccountcode = 6010; // pretend paid by cheque
				$description = "Job Advert " . $organisation;
			}
			$transactionID = $aiqif->CreateNewSalesInvoice ($orgcode, $amount, $vatcode, $vatrate, $glcode, $deptcode, $description);
			if (!$aiqif->lastOpError)
			{
				echo "<h2>Membership invoice created and paid</h2><p>Transaction ID: " . $transactionID . "</p><img id='checkmark' src='images/check.png' />"; 
				// ."<input type='submit' id='pay' class='button' id='submit_btn' value='Pay now' />";
				
				$aiqif->MarkInvoiceAsPaid ($transactionID, $orgcode, "test payment", $amount * ($vatrate+1), $bankaccountcode); // quick test just to see the invoice marked as paid
				if ($aiqif->lastOpError)
				{
					echo "<h2>Error marking invoice as paid " . $aiqif->errorString . "</h2>"; 
				}
			}
			else
			{
				echo "<h2>Error creating salesinvoice</h2><p>" . $aiqif->errorString . "</p><img id='checkmark' src='images/cancelmark.png' />";
			}
		}
		
	}
	else
	{
		echo "<h2>Error: Failed to login to AccountsIQ</h2><img id='checkmark' src='images/cancelmark.png' />";
	}

?>
	