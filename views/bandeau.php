	<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KeepCoin</title>
  <!-- Bootstrap core CSS-->
  <link href="./App_web/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="./App_web/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="./App_web/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="./App_web/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <?php if ($_SESSION['session'] == 3) {
                ?>
                <a class="nav-link" href="?uc=accueil">
                   <img src="images/KeepCoins.jpg" alt="logo" width="220" style="margin-left: -10px; margin-top: -45px; border-radius: 10px">
                </a>
                <?php 
                } elseif ($_SESSION['session'] == 1 || $_SESSION['session'] == 2) {
                ?>
                  <a class="nav-link" href="?uc=projet&action=getAll">
                   <img src="images/KeepCoins.jpg" alt="logo" width="220" style="margin-left: -10px; margin-top: -45px; border-radius: 10px">
                  </a>
                <?php
                }
                ?>
                
                
            </li>
            <?php if ($_SESSION['session'] == 3) {
            ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link" href="index.php?uc=intervenant&action=getAll">
                    <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">-->
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Intervenants</span>
                </a>
            </li>
            <?php
            }  
            if ($_SESSION['session'] == 1 || $_SESSION['session'] == 2 || $_SESSION['session'] == 3) {
            ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="index.php?uc=equipe&action=getAll">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Groupes</span>
                </a>
            </li>
            <?php
            }
            if ($_SESSION['session'] == 1 || $_SESSION['session'] == 2 || $_SESSION['session'] == 3) {
            ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="index.php?uc=apprenant&action=getAll">
                    <i class="fa fa-fw fa-list"></i>
                    <span class="nav-link-text">Apprenants</span>
                </a>
            </li>
            
            <?php
            }
            if ($_SESSION['session'] == 1 || $_SESSION['session'] == 2) {
            ?>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link" href="App_web/messagerie.php">
                    <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">-->
                    <i class="fa fa-fw fa-comment"></i>
                    <span class="nav-link-text">Messagerie</span>
                </a>
            </li>
            <?php
            }
            ?>
            
        </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="index.php?uc=connexion&action=connexion">
            <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Déconnexion ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Etes-vous sûr de vouloir vous déconnecter ?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="index.php?uc=connexion&action=connexion">Déconnexion</a>
          </div>
        </div>
      </div>
    </div>


</body>

</html>
