<?php
$title = 'Galerie';
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
            <p>votre galerie The Tribe</p>
             <p>En attendant allez sur: </p>
               <a href="https://www.facebook.com/pg/imyourdjevents/photos/?ref=page_internal"><p>Am ur DJ </p></a>
               <p>ou sur les pages facebooks .</p>
        </div>
        <div>
          <img src="assets/img/fire.jpg" class="imageLogistic">
        </div>
      </div>








      <?php
    }
    require_once 'includes/footer.php';
    ?>