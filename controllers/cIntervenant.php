<?php
$action = $_REQUEST['action'];

switch($action){
	case 'getAll' :{
		$intervenants = $pdo->getIntervenants();
		include("views/intervenants.php");break;
		
	}
	case 'create' :{
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$login = $_REQUEST['login'];
		$password = $_REQUEST['password'];
		$status = $_REQUEST['status'];

		$intervenant = $pdo->createIntervenant($nom, $prenom, $login, $password, $status);
		// include("views/intervenants.php");break;
		
	}
	case 'update' :{
		$status = $_REQUEST['status'];
		$id = $_REQUEST['id'];

		$intervenant = $pdo->updateIntervenant($status, $id);
		// include("views/intervenants.php");break;	
	}
	case 'get' :{
		$id = $_REQUEST['id'];
		$intervenant = $pdo->getIntervenant($id);
		// include("views/intervenants.php");break;	
	}
}

?>