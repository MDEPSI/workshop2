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

      $i=0;
      $loginok = false;
      $error=false;
      // var_dump($login,$password) ;
      if ($table && $login && $password) {
            $loginok = $pdo->checkLogin($table, $login, $password);
            
      // } 
      // if ($table || $login || $password) {
            $i++ ;     
      } 
      // var_dump($table, $_SESSION['session']);
      // die;
      if ($loginok == true) {
            if (isset($_SESSION['session']) || ($_SESSION['session'] = 1 || $_SESSION['session'] = 2 || $_SESSION['session'] = 3)) {
              if ($table == "responsable"){
                  $_SESSION['session'] = 3;
                  include("views/bandeau.php");
                  include("views/accueil.php");

              }elseif ($table == "intervenant") {
                  $_SESSION['session'] = 2;
                  $projets = $pdo->getProjets();
                  include("views/bandeau.php");
                  include("views/projets.php");
              }elseif ($table == "apprenant"){
                $_SESSION['session']= 1;
                  $projets = $pdo->getProjets();
                  include("views/bandeau.php");
                  include("views/projets.php");
              }

            } else {
                 include("views/connexion.php"); 
            }

          }
      else {
        if ($i!=0){
          $error=true;
          $i=0;
        }
        include("views/connexion.php");
        break;
      }
       
    }
}



  ?>