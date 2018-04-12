<?php
    require_once("models/dao.php");
    $pdo = PdoWorkshop2::getPdoWorkshop2();
session_start();

if(!isset($_REQUEST['uc']))
     $uc = 'connexion';
else
	$uc = $_REQUEST['uc'];


switch($uc)
{
	case 'connexion':
		{include("controllers/cSeConnecter.php");break;}

	case 'accueil':
		{include("views/bandeau.php");include("views/accueil.php");break;}

	case 'responsable':
		{
			include("views/bandeau.php");include("controllers/cResponsable.php");break;}

	case 'apprenant':
		{
			include("views/bandeau.php");include("controllers/cApprenant.php");break;}

	case 'intervenant':
		{
			include("views/bandeau.php");include("controllers/cIntervenant.php");break;}

	case 'equipe':
		{
			include("views/bandeau.php");include("controllers/cEquipe.php");break;}

	case 'projet':
		{
			include("views/bandeau.php");include("controllers/cProjet.php");break;}
}
?>