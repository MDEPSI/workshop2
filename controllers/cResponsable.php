<?php
$action = $_REQUEST['action'];

switch($action){
	case 'getAll' :{
		$responsables = $pdo->getResponsables();
		include("views/responsables.php");break;
	}
}

?>