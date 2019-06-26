<?php
$title = 'Connection';
require_once 'models/database.php';
require_once 'models/modelUsers.php';
require_once 'controller/userConnectCTRL.php';
require_once 'includes/header.php'
;
?>
<div class="container">
  <div class="backgroundcolorconnection">
    <h1 class="form-heading">login Form</h1>
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>Tribe Member</h2>
          <p>Entrez vos identifiants et votre mot de passe</p>
        </div>
        <form id="Login" action="connection.php" method="POST">
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" placeholder="Mail" name="mail">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="password">
          </div>
          <div class="forgot">
            <a href="choiceartistordancer.php">Vous n'êtes pas encore membre? Inscrivez-vous.</a>
          </div>
          <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
      </div>
      <p class="botto-text"> Designed by the Tribe</p>
    </div>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>
