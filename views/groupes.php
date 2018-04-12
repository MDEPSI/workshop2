<!DOCTYPE html>
<html lang="fr">

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
  <!-- Custom styles for this template-->
  <link href="./App_web/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Groupes</li>
      </ol>
      <h1>Groupes</h1>
      <hr>
      <!-- Icon Cards-->
      <div class="row">
            
                
                    <!-- <div class="card-body-icon">
            <i class="fa fa-fw fa-comments"></i>
        </div>-->
              <?php
                foreach( $equipes as $equipe) 
                      {

                          $libelle = $equipe['LIBELLE'];
                          $nbJetons = $equipe['NBJETONS'];
                          $nom = $equipe['NOM'];
                          $prenom = $equipe['PRENOM'];
                          $id=$equipe['ID'];
                          ?>
                          <div class="col-xl-3 col-sm-6 mb-3">

                            <div class="card text-white bg-danger o-hidden h-100">
                              <div class="card-body">  
                                <div class="mr-5">
                                    <?php echo $libelle?> <br>
                                    Nombre de jetons : <?php echo $nbJetons?>
                                </div>
                              </div>
                                <a class="card-footer text-white clearfix small z-1">
                                    <span class="float-left"><?php echo $nom?> <?php echo $prenom?></span>
                                </a>
                                <a class="card-footer text-white clearfix small z-1">
                                    <span class="float-left">Apprenant 2</span>
                                </a>
                                <a class="card-footer text-white clearfix small z-1">
                                    <span class="float-left">Apprenant 3</span>
                                </a>
                              
                            </div>
                          </div>

                        <?php     
                        }
                      ?>
                </a>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © KeepCoin and carry on</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="./App_web/vendor/jquery/jquery.min.js"></script>
    <script src="./App_web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="./App_web/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
