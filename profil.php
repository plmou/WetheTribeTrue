<?php
$title = 'Profil';
require_once 'models/database.php';
require_once 'models/database.php';
require_once 'controller/profilCtrl.php';
require_once 'includes/header.php';
//include 'assets/css/style.css';
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <div class="card border-secondary mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-6">
              <p> Bonjour, Bienvenue in The Tribe <?= $usersInfo->pseudo; ?>  </p>
            </div>
            <div class="col-lg-6 col-md-6 col-6 text-right">
              <?php if ($usersInfo->id_ped8_UserCategory <= 5) { ?>  
                <a href="modifyuserartist.php" class="linkupdatedelete">modifier son profil</a> 
              <?php } else { ?>  
                <a href="modifyuser.php" class="linkupdatedelete">modifier son profil</a> 
              <?php } ?>
              <div class="deleteaccount">
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body"></div>
                      <div class="modal-footer"> 
                        <form action="#" method="POST">
                          <input type="submit" name="deleteId" value="supprimer">
                        </form></div>
                    </div>
                  </div>
                </div>
                <a data-toggle="modal" data-target="#deleteModal" href="#" class=""> effacer son compte</a>
              </div>  
            </div>
          </div>
        </div> 
        <div class="card-body">
          <p class="card-text">
            <span class="font-weight-bold">Nom :</span> <?= $usersInfo->lastname; ?><br />

            <span class="font-weight-bold">Prénom :</span> <?= $usersInfo->firstname; ?><br />
            <span class="font-weight-bold">Numéro de téléphone :</span> <?= $usersInfo->phone; ?><br />
            <span class="font-weight-bold">Date de naissance :</span> <?= $usersInfo->birthdate; ?><br />
            <span class="font-weight-bold"> habitant à :</span> <?= $usersInfo->city; ?><br />
            <span class="font-weight-bold"> dans la région du :</span> <?= $usersInfo->region; ?><br />
            <span class="font-weight-bold"> niveau :</span> <?= $usersInfo->level; ?><br />
            <?php if (!empty($usersInfo->userRole)) { ?> 
              <span class="font-weight-bold"> catégorie :</span> <?= $usersInfo->userRole; ?><br />
            <?php } ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'includes/footer.php'; ?>
