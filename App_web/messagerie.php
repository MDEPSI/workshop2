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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  
  <div class="content-wrapper">
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="../?uc=accueil">Accueil</a>
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
                                  <td><b>Maxime</b> : Ceci est un très long message. Ceci est un très long message. Ceci est un très long message. Ceci est un très long message. Ceci est un très long message. Ceci est un très long message. Ceci est un très long message.</td>
                              </tr>
                              <tr>
                                  <td><b>Jeremy</b> : Quels sont les dates du workshop ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Les dates dont du 9 au 13 avril</td>
                              </tr>
                              <tr>
                                  <td><b>Henri</b> : Que doit-on rendre ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Vous devez rendre une vidéo présentant votre solution ainsi que les liens du code source.</td>
                              </tr>
                              <tr>
                                  <td><b>Lucas</b> : Pour quand ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Pour jeudi soir</td>
                              </tr>
                              <tr>
                                  <td><b>Jeremy</b> : Quels sont les dates du workshop ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Les dates dont du 9 au 13 avril</td>
                              </tr>
                              <tr>
                                  <td><b>Henri</b> : Que doit-on rendre ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Vous devez rendre une vidéo présentant votre solution ainsi que les liens du code source.</td>
                              </tr>
                              <tr>
                                  <td><b>Lucas</b> : Pour quand ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Pour jeudi soir</td>
                              </tr>
							                                <tr>
                                  <td><b>Jeremy</b> : Quels sont les dates du workshop ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Les dates dont du 9 au 13 avril</td>
                              </tr>
                              <tr>
                                  <td><b>Henri</b> : Que doit-on rendre ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Vous devez rendre une vidéo présentant votre solution ainsi que les liens du code source.</td>
                              </tr>
                              <tr>
                                  <td><b>Lucas</b> : Pour quand ?</td>
                              </tr>
                              <tr>
                                  <td><b><font color="red">Patrick</font></b> : Pour jeudi soir</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="card-footer small text-muted">
                  
                  <div class="row">
                      <div class="col-md-6">
                          <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#envoyerMessage" style="height:40px;width:200px" href="#">Envoyer un message</a>
                      </div>
                      <div class="col-md-6 text-right">
					  <?php
						$jeton = 5;
						if(isset($_POST['ok'])){
							
							$jeton -= 1;
							echo "nb jeton : " , $jeton;
						} else {
							$jeton = 5;
							echo "nb jeton : " , $jeton;
						}
					  ?>
                      </div>
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
                  <div class="modal fade" id="envoyerMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                  </button>
                              </div>
							  <textarea type="text" rows="4" cols="50" placeholder="Saisissez votre message"></textarea>
                              <div class="modal-body">Etes-vous sûr de vouloir envoyer votre message ?</div>
                              <div class="modal-footer">
							    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
							  <form method="post" action="">
									<input type="hidden" value=1 name = "ok"></input>
                                  <button type="submit" class="btn btn-primary" id="validerMessage" name="validerMessage">Envoyer</button>
							</form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Bootstrap core JavaScript-->
                  <script src="vendor/jquery/jquery.min.js"></script>
                  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                  <!-- Core plugin JavaScript-->
                  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                  <!-- Page level plugin JavaScript-->
                  <script src="vendor/datatables/jquery.dataTables.js"></script>
                  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                  <!-- Custom scripts for all pages-->
                  <script src="js/sb-admin.min.js"></script>
                  <!-- Custom scripts for this page-->
                  <script src="js/sb-admin-datatables.min.js"></script>
              </div>
</body>

</html>
