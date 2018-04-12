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
  <!-- Page level plugin CSS-->
  <link href="./App_web/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="./App_web/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="?uc=accueil">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Apprenants</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
          <div class="card-header">
              <i class="fa fa-table"></i> Liste des apprenants
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                          </tr>
                      </thead>
                        <?php
                      foreach( $apprenants as $apprenant) 
                      {

                          $nom = $apprenant['NOM'];
                          $prenom = $apprenant['PRENOM'];
                          $id=$apprenant['ID'];
                          ?>  
                          <tr>
                            <td>
                              <input type="checkbox"> <?php echo $nom ?>
                            </td>

                            <td>
                              <?php echo $prenom ?>
                            </td>
                          </tr>    
                        <?php     
                        }
                      ?>
                  </table>
                  <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="POST" action="index.php?uc=equipe&action=create">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" name="nom" id="exampleModalLabel">Groupe</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                              </div>
                              <input id="projet" name="idProjet" type="hidden" value=1>
                              <input id="groupeName" name="libelle" type="text" placeholder="Saisir nom du groupe">
                              <input id="nbJetons" name="nbJetons" type="number" placeholder="Saisir nombre de jetons">
                              <div class="modal-footer">
                                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                  <button class="btn btn-primary" type="submit">Enregistrer</button>
                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
          <div class="card-footer small text-muted">
              <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#test" style="height:40px;width:200px" href="#">Créer le groupe</a>
          </div>
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
    
    <!-- Bootstrap core JavaScript-->
    <script src="./App_web/vendor/jquery/jquery.min.js"></script>
    <script src="./App_web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="./App_web/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="./App_web/vendor/datatables/jquery.dataTables.js"></script>
    <script src="./App_web/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
