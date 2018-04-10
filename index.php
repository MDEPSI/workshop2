<?php
    require_once("models/dao.php");
    $pdo = PdoWorkshop2::getPdoWorkshop2();

if(!isset($_REQUEST['uc']))
     $uc = 'connexion';
else
	$uc = $_REQUEST['uc'];


switch($uc)
{
	case 'connexion':
		{include("controllers/cSeConnecter.php");break;}

	case 'accueil':
		{include("views/accueil.php");break;}

	case 'affecterJuges':
		{include("controllers/c_affecterJuges.php");break;}

	case 'gererHebergementJuges':
		{include("controllers/c_gererHebergementJuges.php");break;}

	case 'gererPartieComptable':
		{include("controllers/c_gererPartieComptable.php");break;}

	case 'choisirPrestations' :
		{include("controllers/c_choisirPrestations.php");break;}

}
?>