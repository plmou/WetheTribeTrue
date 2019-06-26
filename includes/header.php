<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/img/logotbt.jpg">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/acceuilds.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>


    <div class="container-fluid">
      <section>
        <div class="row">
          <div class="col-12 col-md-5 rectangularLeft">
            <div class="circleLeft">
            </div>
          </div>
          <div class="col-12 col-md-2 Whitespace"></div>
          <div class="col-12 col-md-5 rectangularRight">
            <div class=" circleRight">
            </div>
          </div>
        </div>
      </section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
        <a class="navbar-brand" href="index.php">Accueil</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <!--dans école de danse carte de France avec point et école de danse
      page virtuelle choisir le type de danse ou théorie  -->



        <!-- <a class="nav-link dropdown-toggle" href="artist.php" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
        <!-- Artistes -->
        <!-- </a> -->
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> -->
        <!-- <a class="dropdown-item" href="#">teacher</a> -->
        <!--mettre des catégories homme-femmes-couple  -->
        <!-- <a class="dropdown-item" href="#">Audiovisuelle</a> -->
        <!--filtrer photographe,vidéaste,graphiste, -->
        <!-- <a class="dropdown-item" href="#">Services</a> -->
        <!-- filtrer food, massage, location, personnalisation, location de salle-->
        <!-- </div> -->




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="danceschool.php">Tribe School</a>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION['id'])) { ?>
                <a class="nav-link" href="artist.php"> <span class="sr-only">(current)</span>Artistes</a>
              <?php } else { ?>  
                <a class="nav-link" href="" data-toggle="modal" data-target="#connectModal"> <span class="sr-only">(current)</span>Artistes</a>
              <?php } ?>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION['id'])) { ?>
                <a class="nav-link" href="taxi.php">Taxi <span class="sr-only">(current)</span></a>
              <?php } else { ?>  
                <a class="nav-link" href="" data-toggle="modal" data-target="#connectModal">Taxi <span class="sr-only">(current)</span></a>
              <?php } ?>
            </li>
            <li class="nav-item active">
              <?php if (isset($_SESSION['id'])) { ?>
                <a class="nav-link" href="event.php">Evènements <span class="sr-only">(current)</span></a>
              <?php } else { ?>  
                <a class="nav-link" href="" data-toggle="modal" data-target="#connectModal">Evènements <span class="sr-only">(current)</span></a>
              <?php } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logistique.php">Logistique </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Galerie </a>
            </li>
          </ul>
          <?php if (!empty($_SESSION['id'])) { ?>
            <a class="nav-link" href="profil.php">Profil</a>
            <a class="nav-link" href="logout.php">se déconnecter</a>
          <?php } else { ?>
            <a class="nav-link" href="choiceartistordancer.php">créer un compte </a>
            <!--ouvrir une fenêtre modale avec un formulaire pour ouvrir un compte  -->
            <a class="nav-link" href="connection.php">se connecter </a>
            <!--ouvrir une fenêtre modale avec pseudo/mail et password pour se connecter
          lien en dessous mot de passe oublié, ou identifiant oublié . si le mot de passe est forgotten l'envoyer sur le mail  -->
          <?php } ?>

        </div>
      </nav>
      <div class="modal fade" id="connectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Connection</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Veuillez vous <a href="connection.php">connectez</a> pour accéder à cette page</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
