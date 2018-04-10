<?php

if(!isset($_REQUEST['action']))
     $action = 'connexion';
else
  $action = $_REQUEST['action'];
// include("views/bandeau.php") ;

switch($action){
case 'connexion' :{
      $table = null;
      $login = null;
      $password = null;

      if (!empty($_POST['txtRole'])) {
        $table = $_POST['txtRole'];
      }

      if (!empty($_POST['txtLogin'])) {
        $login = $_POST['txtLogin'];
      }
      
      if (!empty($_POST['txtMdp'])) {
        $password = $_POST['txtMdp'];
      }

      
$loginok = false;
      // var_dump($login,$password) ;
      if ($table && $login && $password) {
            $loginok = $pdo->checkLogin($table, $login, $password) ;
      }      
      if ($loginok == true) { 
          include("views/accueil.php");break;}
      
      else {
        include("views/connexion.php");break;}
    }
}



  ?>