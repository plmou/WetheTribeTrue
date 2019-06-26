<?php
session_start();
require_once 'models/database.php';
require_once 'models/modelUsers.php';
require_once 'models/modelCity.php';
require_once 'models/modelRegion.php';
require_once 'models/modelCountry.php';
require_once 'models/modelUserCategory.php';
require_once 'controller/modifyuserartistCtrl.php';
$title = 'Modification profil artiste';
require_once 'includes/header.php';
?>
<div class="bgimg-11" id="accueil">
  <div class="caption">

<!--View form artist  -->
  </div>
</div>
<div class="container-fluid mt-5 mb-5 allpage">
  <?php if (count($_POST) == 0 || count($formErrors) > 0) { ?>
  <form action="modifyuserartist.php" method="POST">
      <fieldset>
        <legend class="text-center text-muted"><p class="bienV">Artist <br> Get in the Tribe !<br>Inscrivez-vous</p></legend>
        <div class="form-group row">
          <div class="col-lg-6 col-md-6 col-12">
            <label class="text-muted" for="title">Etat civil</label>
            <select class="form-control text-muted" id="title" name="title">
              <option selected disabled>---Choix---</option>
             <option value="2"  <?= (isset($_POST['title']) && $_POST['title'] == '1') ||  $usersInfo->id_ped8_title == 1 ? 'selected' : '' ?>>Monsieur</option>
              <option value="1"  <?= (isset($_POST['title']) && $_POST['title'] == '2') ||  $usersInfo->id_ped8_title == 2 ? 'selected' : ''?>>Madame</option>
            </select>
            <?php if (isset($formErrors['title'])) {
              ?>
              <div class="invalid-feedback"><?= $formErrors['title'] ?></div>
            <?php }
            ?>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <label class="text-muted" for="login">Pseudo</label>
            <input  type="text" autocomplete="on" required name="login" value="<?= isset($_POST['login']) ? $_POST['login'] : $usersInfo->pseudo ?>" class="form-control <?= isset($formErrors['login']) ? 'is-invalid' : (isset($login) ? 'is-valid' : '') ?>" id="login" placeholder="superman" />
            <?php if (isset($formErrors['login'])) { ?>
              <div class="invalid-feedback"><?= $formErrors['login'] ?></div>
            <?php } ?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 col-md-6 col-12">
            <label class="text-muted" for="lastname">Nom de famille</label>
            <?php
            ?>
            <input  type="text" autocomplete="on" required name="lastname" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : $usersInfo->lastname  ?>" class="form-control <?= isset($formErrors['lastname']) ? 'is-invalid' : (isset($lastname) ? 'is-valid' : '') ?>" id="lastname" placeholder="Dupont" />
            <?php if (isset($formErrors['lastname'])) { ?>
              <div class="invalid-feedback"><?= $formErrors['lastname'] ?></div>
            <?php } ?>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <label  class="text-muted" for="firstname">Prénom</label>
            <input type="text" autocomplete="on" required name="firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : $usersInfo->firstname  ?>"  class="form-control <?= isset($formErrors['firstname']) ? 'is-invalid' : (isset($firstname) ? 'is-valid' : '') ?>" id="firstname" placeholder="Jean" />
            <?php if (isset($formErrors['firstname'])) { ?>
              <div class="invalid-feedback"><?= $formErrors['firstname'] ?></div>
            <?php } ?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 col-md-6 col-12">
            <label class="text-muted" for="birthdate">Date de naissance</label>
            <input type="date" autocomplete="on" required name="birthdate" value="<?= isset($_POST['birthdate']) ? $_POST['birthdate'] : $usersInfo->birthdate ?>" class="form-control <?= isset($formErrors['birthdate']) ? 'is-invalid' : (isset($birthdate) ? 'is-valid' : '') ?>" id="birthdate" />
            <?php if (isset($formErrors['birthdate'])) { ?>
              <div class="invalid-feedback"><?= $formErrors['birthdate'] ?></div>
            <?php } ?>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <label class="text-muted" for="phone">Numéro de téléphone</label>
            <input type="text" autocomplete="on" required name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : $usersInfo->phone ?>" class="form-control <?= isset($formErrors['phone']) ? 'is-invalid' : (isset($phone) ? 'is-valid' : '') ?>" id="phone" placeholder="01 02 03 04 05" />
            <?php if (isset($formErrors['phone'])) { ?>
              <div class="invalid-feedback"><?= $formErrors['phone'] ?></div>
            <?php } ?>
          </div>
        </div>
        <!--country region city -->
        <div class="form-group row">
          <div class="col-lg-4 col-md-4 col-12">
            <label class="text-muted" for="country">Pays</label>
            <select class="form-control text-muted" id="country" name="country">
              <option selected disabled>---Pays---</option>
              <?php foreach ($listCountry as $country){ ?>
              <option value="<?php echo $country->id ?>" <?= $country->id == $usersInfo->id_ped8_country ? 'selected' : '' ?>> <?php echo $country->country ?></option>
              <?php } ?>
            </select>
            <?php if (isset($formErrors['country'])) {
              ?>
              <div class="invalid-feedback"><?= $formErrors['country'] ?></div>
            <?php }
            ?>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <label class="text-muted" for="region">Région</label>
            <select class="form-control text-muted" id="region" name="region">
              <option selected disabled>---Région---</option>
              <?php foreach ($listRegion as $region){ ?>
              <option value="<?php echo $region->id ?>" <?= $region->id == $usersInfo->id_ped8_region ? 'selected' : '' ?>> <?php echo $region->region ?></option>
              <?php } ?>
            </select>
            <?php if (isset($formErrors['region'])) {
              ?>
              <div class="invalid-feedback"><?= $formErrors['region'] ?></div>
            <?php }
            ?>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <label class="text-muted" for="city">Ville</label>
            <select class="form-control text-muted" id="city" name="city">
              <option selected disabled>---Ville---</option>
              <?php foreach ($listCity as $city){ ?>
              <option value="<?php echo $city->id ?>" <?= $city->id == $usersInfo->id_ped8_city ? 'selected' : '' ?>> <?php echo $city->city ?></option>
              <?php } ?>

            </select>
              <?php if (isset($formErrors['city'])) {
                ?>
                <div class="invalid-feedback"><?= $formErrors['city'] ?></div>
              <?php }
              ?>
            </div>
          </div>
          <!--country region city -->
          <div class="form-group row">
            <div class="col-lg-6 col-md-6 col-12">
              <label class="text-muted" for="mail">Adresse mail</label>
              <input type="email" autocomplete="on" required name="mail" value="<?= isset($_POST['mail']) ? $_POST['mail'] : $usersInfo->mail  ?>" class="form-control <?= isset($formErrors['mail']) ? 'is-invalid' : (isset($mail) ? 'is-valid' : '') ?>" id="mail" placeholder="adresse@mail.com" />
              <?php if (isset($formErrors['mail'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['mail'] ?></div>
              <?php } ?>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <label class="text-muted" for="mailConfirm">Confirmez votre adresse mail</label>
              <input type="email" required name="mailConfirm" value="<?= isset($_POST['mailConfirm']) ? $_POST['mailConfirm'] : $usersInfo->mail  ?>" class="form-control <?= isset($formErrors['mailConfirm']) ? 'is-invalid' : (isset($mailConfirm) ? 'is-valid' : '') ?>" id="mailConfirm" placeholder="adresse@mail.com" />
              <?php if (isset($formErrors['mailConfirm'])) { ?>
                <div class="invalid-feedback"><?= $formErrors['mailConfirm'] ?></div>
              <?php } ?>
            </div>
          <hr class="separateartistoption">
           <div class="col-lg-4 col-md-4 col-12">
            <label class="text-muted" for="userRole">role d'utilisateur</label>
            <select class="form-control text-muted" id="userRole" name="userRole">
              <option selected disabled>---Veuillez choisir votre catégorie---</option>
              <?php foreach ($listCategory as $category){ ?>
              <option value="<?php echo $category->id  ?>"<?= $category->userRole == $usersInfo->id_ped8_UserCategory ? 'selected' : '' ?>> <?php echo $category->userRole ?></option>
              <?php } ?>
            </select>
              <?php if (isset($formErrors['userRole'])) {
                ?>
                <div class="invalid-feedback"><?= $formErrors['userRole'] ?></div>
              <?php }
              ?>
            </div>
          
        
          
         
           

          <!-- <div class="form-group row">
          <div class="g-recaptcha" data-sitekey="your_site_key"></div>
        </div> -->
      </fieldset>
      <div class="text-center"><input type="submit" name="send" class="btn btn-outline-secondary btContact" value="S'enregistrer"/></div>
    </form>
  <?php } else { ?>
    <div class="card border-secondary mb-3">
      <div class="card-header">Bonjour <?= strtoupper($users->lastname) . ' ' . $users->firstname ?>, vous êtes bien inscrit(e)</div>
      <div class="card-body">
        <p class="card-text">
          <span class="font-weight-bold">Date de naissance :</span> <?= $users->birthdate ?><br />
          <span class="font-weight-bold">Numéro de téléphone :</span> <?= $users->phone ?><br />
          <span class="font-weight-bold">Email :</span> <?= $users->mail ?><br />
        </p>
      </div>
    </div>

  <?php } ?>
</div>
<?php require_once 'includes/footer.php'; ?>
