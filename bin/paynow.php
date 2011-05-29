<?php
	require_once('../aiqclasses/Integration_1_1.php');
	require ('../aiqclasses/aiqinterface.php');
?>

<?php 
	$aiqif = new AIQInterface();
	if ($aiqif->Login())
	{
		echo $aiqif->MarkInvoiceAsPaid (121, "test payment", 50);
	}

?>