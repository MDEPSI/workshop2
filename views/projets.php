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
        <li class="breadcrumb-item active">Projets</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
          <div class="card-header">
              <i class="fa fa-table"></i> Liste des projets
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Nom projet</th>
                              <th>Responsable</th>
                              <th>Nombre jetons</th>
                          </tr>
                      </thead>
                        <?php
                      foreach( $projets as $projet) 
                      {

                          $nomproj = $projet['LIBELLE'];
                          $responsablenom = $projet['NOM'];
                          $responsableprenom = $projet['PRENOM'];
                          $jetons=$projet['NBJETONS'];
                          ?>  
                          <tr>
                            <td>
                              <?php echo $nomproj ?>
                            </td>

                            <td>
                              <?php echo $responsablenom." " ?>
                              <?php echo $responsableprenom ?>
                            </td>
                            <td>
                              <?php echo $jetons ?>
                            </td>
                          </tr>    
                        <?php     
                        }
                      ?>
                  </table>
              </div>
				<div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<form method="POST" action="index.php?uc=projet&action=create">
					  <div class="modal-dialog" role="document">
						  <div class="modal-content">
							  <div class="modal-header">
								  <h5 class="modal-title" name="nom" id="exampleModalLabel">Projet</h5>
								  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">×</span>
								  </button>
							  </div>
							  <select name = "idResponsable">
                              <?php
                                foreach ($responsables as $responsable)
                                {
                                ?>
                                  <option value="<?php echo $responsable['ID']?>"><?php echo $responsable['NOM'] ?></option>
                                <?php
                                }
                              ?>
                              </select>
							  <input id="projetName" name="libelle" type="text" placeholder="Saisir le nom du projet">
							  <input id="nbJetonsProjet" name="nbJetons" type="number" placeholder="Saisir le nombre de jetons">
							  <div class="modal-footer">
								  <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
								  <button class="btn btn-primary" type="submit">Enregistrer</button>
							  </div>
						  </div>
					  </div>
					</form>
				 </div>
          </div>
          <div class="card-footer small text-muted">
              <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#test" href="#" style="height:40px;width:200px">Créer un projet</a>
          </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © KeepCoin</small>
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
