<?php
    require_once("models/dao.php");
    $pdo = PdoWorkshop2::getPdoWorkshop2();
    
    $rep = $pdo->checkLogin('apprenant', '', '');
    var_dump("rep ", $rep);
    
?>