<?php
	require_once('./aiqclasses/Integration_1_1.php');
	require ('./aiqclasses/aiqinterface.php');
?>

<?php
	$aiqif = new AIQInterface();
	if ($aiqif->Login())
	{
		echo "Logged in\n";
		$result = $aiqif->FindCustomerByName("Eamon");
		if (!$aiqif->lastOpError)
		{
			echo "Customer found " . $result . "\n";
		}
		else
		{
			echo "Cannot find customer " . $aiqif->errorString . "\n";
		}
		
		$invoiceid = $aiqif->CreateNewSalesInvoice ("EAM01", 456.78);
		if (!$aiqif->lastOpError)
		{
			echo "Sales invoice created " . $invoiceid . "\n";
		}
		else
		{
			echo "Error creating salesinvoice " . $aiqif->errorString . "\n";
		}
	}
	else
	{
		echo 'Failed to Login\n';
	}
?>