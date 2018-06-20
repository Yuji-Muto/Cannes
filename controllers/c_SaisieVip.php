

 <?php
require_once(PATH_MODELS.'VIPDAO.php');

if(isset($_POST["NOMVIP"]) && $_POST['NOMVIP'] )
{
	$oui = new VIPDAO;
	$VIP = $oui->insertVIP(htmlspecialchars($_POST['NOMVIP']),htmlspecialchars($_POST['PRENOMVIP']),htmlspecialchars($_POST['METIER']),
							htmlspecialchars($_POST['DATEN']),htmlspecialchars($_POST['NATIONALITE']),htmlspecialchars($_POST['COEFIMPORT']),htmlspecialchars($_POST['NOMVIP']));
}
?>

<?php require_once(PATH_VIEWS.'SaisieVip.php'); ?>