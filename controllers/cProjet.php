<?php
$action = $_REQUEST['action'];

switch($action){
	case 'create' :{
		$idResponsable = $_REQUEST['idResponsable'];
		$libelle = $_REQUEST['libelle'];
		$nbJetons = $_REQUEST['nbJetons'];

		$projet = $pdo->createProjet($idResponsable, $libelle, $nbJetons);
		// include("views/equipes.php");break;
		
	}
	case 'getAll' :{
		$projets = $pdo->getProjets();
		$responsables = $pdo->getResponsables();
		include("views/projets.php");break;
		
	}
}

?>