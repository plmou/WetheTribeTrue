<?php
$title = 'Artistes';
session_start();
require_once 'controller/artistCtrl.php';
require_once 'includes/header.php';

if (!isset($_SESSION['id'])) {
  ?><p>Veuillez vous connecter</p><?php
} else {
  //la page aura sa propre nav bar artiste, vidéaste, graphiste
  ?>
  <section class="section section-dark">
    <h2>L'équipe enseignante the Tribe</h2>
    <div class="card-deck">
      <?php foreach ($listUserMember as $userMember) { ?>  
        <div class="card col-4 m-1">
          <div class="card-body">
            <h5 class="card-title"><?= $userMember->pseudo ?></h5>
            <p class="card-text"><?= $userMember->city ?> - <?= $userMember->region ?></p>
            <p class="card-text"><small class="text-muted"><?= $userMember->country ?></small></p>
            <p class="card-title"><?= $userMember->userRole ?></p>
          </div>
        </div>
        <?php if ($countCard % 3 == 0) { ?>  
        </div>
        <div class="card-deck"><?php
        }
        $countCard++;
      }
      ?>
    </div>
  </section>
  <?php
}
?>

<?php require_once 'includes/footer.php'; ?>