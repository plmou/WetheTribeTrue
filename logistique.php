<?php
$title = 'Logistique';
session_start();
require_once 'includes/header.php';

if (!isset($_SESSION['id'])) {
  ?>
  <p>Veuillez vous connecter</p>
<?php } else { ?>
  <div class='container-fluid'> 
    <div class='row'> 
      <div class="underconstruction"> 
        <div class='textundeconstruction'>
          <p>page en construction pour </p>
          <p>faciliter la logistique.</p>
          <p> En attendant allez sur: </p>
          <p> <a href="https://www.facebook.com/groups/244470356102864/">
              <p>Share your Kizomba Travel </p></a>
        </div>
        <div>
          <img src="assets/img/fire.jpg" class="imageLogistic">
        </div>
      </div>
      <?php
    }
    require_once 'includes/footer.php';
    ?>