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

	case 'responsable':
		{include("controllers/cResponsable.php");break;}

	case 'apprenant':
		{include("controllers/cApprenant.php");break;}

	case 'intervenant':
		{include("controllers/cIntervenant.php");break;}

	case 'equipe':
		{include("controllers/cEquipe.php");break;}

	case 'projet':
		{include("controllers/cProjet.php");break;}
}
?>