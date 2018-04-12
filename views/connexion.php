<?php
    require_once("models/dao.php");
    $pdo = PdoWorkshop2::getPdoWorkshop2();
?>
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

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <img src="images/KeepCoins.jpg" alt="logo" width="300">
      <div class="card-header">Connexion</div>
      <div class="card-body">
        <form id="frmConnexion" action="" method="post">
        <div class="form-group">
          <p>
            <label for="txtLogin" accesskey="n">Login : *</label>
            <input class="form-control" type="text" id="txtLogin" name="txtLogin" maxlength="20" size="15" value="" title="Entrez votre login" required/>
          </p>
          <p>
            <label for="txtMdp" accesskey="m">Mot de passe : *</label>
            <input class="form-control" type="password" id="txtMdp" name="txtMdp" maxlength="8" size="15" value=""  title="Entrez votre mot de passe" required/>
          </p>
          <p>
            <label for="txtRole" accesskey="m">Rôle : </label>
            <select class="form-control" name="txtRole" id="txtRole" />
                <option value="apprenant">Apprenant</option>
                <option value="intervenant">Intervenant</option>
                <option value="responsable">Responsable</option>
            </select>
          </p>
        </div>
        <div class="piedForm">
          <p>
            <input class="btn btn-primary btn-block" type="submit" id="ok" value="Valider" />
            <input class="btn btn-primary btn-block" type="reset" id="annuler" value="Effacer" />
          </p> 

          <?php
          if($error){
          ?>
          <label class="error" type="error" id="error" value="error"><font size="3" color="red">Erreur : Informations de connexion incorrectes</font></label>
          <?php
          }
          ?>

        </div>
      </form>
<!--         <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Entrer une adresse mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Mot de passe">
          </div>
          <a class="btn btn-primary btn-block" href="index.html">Connexion</a>
        </form> -->
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Créer un compte</a> -->
          <!-- <a class="d-block small" href="forgot-password.html">Mot de passe oublié ?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="./App_web/vendor/jquery/jquery.min.js"></script>
  <script src="./App_web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="./App_web/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

<!-- Division pour le contenu principal -->
<!--     <div id="contenu">
<form id="frmConnexion" action="" method="post">
        <div class="corpsForm">
          <p>
            <label for="txtLogin" accesskey="n">* Login : </label>
            <input type="text" id="txtLogin" name="txtLogin" maxlength="20" size="15" value="" title="Entrez votre login" />
          </p>
          <p>
            <label for="txtMdp" accesskey="m">* Mot de passe : </label>
            <input type="password" id="txtMdp" name="txtMdp" maxlength="8" size="15" value=""  title="Entrez votre mot de passe"/>
          </p>
          <p>
            <label for="txtRole" accesskey="m">Rôle : </label>
            <select name="txtRole" id="txtRole" />
                <option value="apprenant">Apprenant</option>
                <option value="intervenant">Intervenant</option>
                <option value="responsable">Responsable</option>
            </select>
          </p>
        </div>
        <div class="piedForm">
          <p>
            <input type="submit" id="ok" value="Valider" />
            <input type="reset" id="annuler" value="Effacer" />
          </p> 
        </div>
      </form>
    </div> -->
    
