<?php
$action = $_REQUEST['action'];

switch($action){
	case 'create' :{
		$idProjet = $_REQUEST['idProjet'];
		$libelle = $_REQUEST['libelle'];
		$nbJetons = $_REQUEST['nbJetons'];

		$apprenant = $pdo->createApprenant($idProjet, $libelle, $nbJetons);
		// include("views/apprenants.php");break;
		
	}
	case 'update' :{
		$idEquipe = $_REQUEST['idEquipe'];
		$id = $_REQUEST['id'];

		$apprenant = $pdo->updateApprenant($idEquipe, $id);
		$projets = $pdo->getProjets();
		include("views/apprenants.php");break;	
	}
	case 'get' :{
		$id = $_REQUEST['id'];
		$apprenant = $pdo->getApprenant($id);
		// include("views/apprenants.php");break;	
	}
	case 'getAll' :{
		$apprenants = $pdo->getApprenants();
		$projets = $pdo->getProjets();
		
		// var_dump($apprenants);
		// die;
		include("views/apprenants.php");break;
		
	}
}

?>