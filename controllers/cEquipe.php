<?php
$action = $_REQUEST['action'];

switch($action){
	case 'create' :{
		$idProjet = $_REQUEST['idProjet'];
		$libelle = $_REQUEST['libelle'];
		$nbJetons = $_REQUEST['nbJetons'];

		$equipe = $pdo->createEquipe($idProjet, $libelle, $nbJetons);
		$equipes = $pdo->getEquipes();

		include("views/groupes.php");break;
		
	}
	case 'update' :{
		$nbJetons = $_REQUEST['nbJetons'];
		$id = $_REQUEST['id'];

		$equipe = $pdo->updateEquipe($nbJetons, $id);
		// include("views/equipes.php");break;	
	}
	case 'get' :{
		$id = $_REQUEST['id'];
		$equipe = $pdo->getEquipe($id);
		// include("views/equipes.php");break;	
	}
	case 'getAll' :{
		$equipes = $pdo->getEquipes();
		// var_dump($equipes);
		// die;
		include("views/groupes.php");break;
		
	}
}

?>