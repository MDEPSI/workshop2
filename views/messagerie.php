<!DOCTYPE html>
<html lang="fr">
<?php include("bandeau.php"); 
?>
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
  
  <div class="content-wrapper">
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="index.html">Accueil</a>
              </li>
              <li class="breadcrumb-item active">Messagerie</li>
          </ol>
          <!-- Example DataTables Card-->
          <div class="card mb-3">
              <div class="card-header">
                  <i class="fa fa-table"></i> Historique des messages
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <!--<tr>
                        <th>Messages</th>
                    </tr>-->
                          </thead>
                          <tfoot>
                              <!--<tr>
                        <th>Messages</th>
                    </tr>-->
                          </tfoot>
                          <tbody>
                              <tr>
                                  <td>Tiger : Nixonzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzzzzzzz zzzzzzzzzzzzzzz zzzzzzzzzzzzzzzzzzzzz zz zzzzzzzzzzzz zzzzz</td>
                              </tr>
                              <tr>
                                  <td>Garrett Winters</td>
                              </tr>
                              <tr>
                                  <td>Ashton Cox</td>
                              </tr>
                              <tr>
                                  <td>Cedric Kelly</td>
                              </tr>
                              <tr>
                                  <td>Airi Satou</td>
                              </tr>
                              <tr>
                                  <td>Brielle Williamson</td>
                              </tr>
                              <tr>
                                  <td>Herrod Chandler</td>
                              </tr>
                              <tr>
                                  <td>Rhona Davidson</td>
                              </tr>
                              <tr>
                                  <td>Colleen Hurst</td>
                              </tr>
                              <tr>
                                  <td>Sonya Frost</td>
                              </tr>
                              <tr>
                                  <td>Jena Gaines</td>
                              </tr>
                              <tr>
                                  <td>Quinn Flynn</td>
                              </tr>
                              <tr>
                                  <td>Charde Marshall</td>
                              </tr>
                              <tr>
                                  <td>Haley Kennedy</td>
                              </tr>
                              <tr>
                                  <td>Tatyana Fitzpatrick</td>
                              </tr>
                              <tr>
                                  <td>Michael Silva</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="card-footer small text-muted">
                  
                  <div class="row">
                      <div class="col-md-6">
                          <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal" style="height:40px;width:200px" href="#">Envoyer un message</a>
                      </div>
                      <div class="col-md-6 text-right">
                          Jetons restants : 5
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Group Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <textarea id="groupeName" name="groupeName" type="text" placeholder="Saisir votre message"></textarea>
                  <!--<div class="modal-body">Voulez-vous enregistrer ce nom de groupe ?</div>-->
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                      <a class="btn btn-primary" href="messagerie.html">Envoyer</a>
                  </div>
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
                                  <a class="btn btn-primary" href="login.html">Déconnecter</a>
                              </div>
                          </div>
                      </div>
                  </div>
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
