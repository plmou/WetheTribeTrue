<?php
$title = 'Taxi';
session_start();
require_once 'controller/taxiCtrl.php';
require_once 'includes/header.php';
if (!isset($_SESSION['id'])) {
  ?>
  <p>Veuillez vous connecter</p>
<?php } else { ?>
  <div class="bantubanner">
  </div>
  <section class="section section-dark">
  </section>
  <section class="section section-dark">
    <h2>L'équipe enseignante the Tribe</h2>
    <div class="card-deck">
      <?php foreach ($listUserTaxi as $userTaxi) { ?> 
        <div class="card col-4 m-1">
          <div class="card-body">
            <h5 class="card-title"><?= $userTaxi->pseudo ?></h5>
            <p class="card-text"><?= $userTaxi->city ?> - <?= $userTaxi->region ?></p>
            <p class="card-text"><small class="text-muted"><?= $userTaxi->country ?></small></p>
          </div>
        </div>
        <?php if ($countCard % 3 == 0) { ?>  
        </div>
        <div class="card-deck">
          <?php
        }
        $countCard++;
      }
      ?>
    </div>
    
  </section>
  <?php
}
require_once 'includes/footer.php';
?>
  



