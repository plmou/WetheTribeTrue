<?php

//On inclut le fichier qui contient les regex avec un require car on en a besoin pour faire les vérification
require_once 'includes/regex.php';
//On initialise un tableau d'erreurs vide
$formErrors = array();
//
$city = new ped8_city();
$listCity = $city->getCity();

$region = new ped8_region();
$listRegion = $region->getRegion();

$country = new ped8_country();
$listCountry = $country->getCountry();

$UserCategory = new ped8_UserCategory();
$listCategory = $UserCategory->getUserCategory();

$users = new users();
$users->id = intval($_SESSION['id']);
$usersInfo = $users->getuserProfil();


/*
 * On vérifie si le tableau $_POST est vide
 * S'il est vide => le formulaire n'a pas été envoyé
 * S'il a au moins une ligne => le formulaire a été envoyé, on peut commencer les vérifications
 */
if (count($_POST) > 0) {

  if (!empty($_POST['title'])) {
    if ($_POST['title'] === '1' || $_POST['title'] === '2') {
      $users->id_ped8_title = $_POST['title'];
    } else {
      $formErrors['title'] = 'Votre état civil est incorrect';
    }
  } else {
    $formErrors['title'] = 'Veuillez renseigner votre état civil';
  }

  if (!empty($_POST['login'])) {
    if (preg_match($regexLogin, $_POST['login'])) {
      $users->pseudo = htmlspecialchars($_POST['login']);
    } else {
      $formErrors['pseudo'] = 'Merci de renseigner un pseudo';
    }
  } else {
    $formErrors['pseudo'] = 'Merci de renseigner votre pseudo';
  }

// on vérifie que la saisie existe
  if (!empty($_POST['lastname'])) {
    /*
     * On vérifie si la saisie utilisateur correspond à la regex
     * Si tout va bien => on stocke dans la variable qui nous servira à afficher
     * Sinon => on stocke l'erreur dans le tableau $formErrors
     */
    if (preg_match($regexName, $_POST['lastname'])) {
      //On utilise la fonction htmlspecialchars pour supprimer les éventuelles balises html => on a aucun intérêt à garder une balise html dans ce champs
      $users->lastname = htmlspecialchars($_POST['lastname']);
    } else {
      $formErrors['lastname'] = 'Merci de renseigner un nom de famille valide';
    }
  } else {
    $formErrors['lastname'] = 'Merci de renseigner votre nom de famille';
  }

  if (!empty($_POST['firstname'])) {
    if (preg_match($regexName, $_POST['firstname'])) {
      $users->firstname = htmlspecialchars($_POST['firstname']);
    } else {
      $formErrors['firstname'] = 'Merci de renseigner un prénom valide';
    }
  } else {
    $formErrors['firstname'] = 'Merci de renseigner votre prénom';
  }

  if (!empty($_POST['birthdate'])) {
    if (preg_match($regexBirthDate, $_POST['birthdate'])) {
      $users->birthdate = htmlspecialchars($_POST['birthdate']);
    } else {
      $formErrors['birthdate'] = 'Merci de renseigner une date de naissance valide';
    }
  } else {
    $formErrors['birthdate'] = 'Merci de renseigner votre date de naissance';
  }


  if (!empty($_POST['phone'])) {
    if (preg_match($regexPhoneNumber, $_POST['phone'])) {
      $users->phone = htmlspecialchars($_POST['phone']);
    } else {
      $formErrors['phone'] = 'Merci de renseigner un téléphone valide';
    }
  } else {
    $formErrors['phone'] = 'Merci de renseigner votre téléphone';
  }

//vérification pays region ville
//  je vérifie que le pays choisi correspond bien à un id

  if (!empty($_POST['country'])) {
    $users->id_ped8_country = htmlspecialchars($_POST['country']);
  } else {
    $formErrors['country'] = 'Veuillez renseigner votre pays';
  }

  if (!empty($_POST['region'])) {
    $users->id_ped8_region = htmlspecialchars($_POST['region']);
  } else {
    $formErrors['region'] = 'Veuillez renseigner votre région';
  }

  if (!empty($_POST['city'])) {
    $users->id_ped8_city = htmlspecialchars($_POST['city']);
  } else {
    $formErrors['city'] = 'Veuillez renseigner votre ville';
  }


  /*   * if (!empty($_POST['country'])) {
    if (preg_match($regexId, $_POST['country'])) {
    $users->country = $_POST['country'];
    } else {
    $formErrors['country'] = 'Votre pays est incorrect';
    }
    } else {
    $formErrors['country'] = 'Veuillez renseigner votre état pays';
    }


    if (!empty($_POST['region'])) {
    if (preg_match($regexId, $_POST['region'])) {
    $users->country = $_POST['region'];
    } else {
    $formErrors['region'] = 'Votre région est incorrect';
    }
    } else {
    $formErrors['region'] = 'Veuillez renseigner votre état région';
    }

    if (!empty($_POST['city'])) {
    if (preg_match($regexId, $_POST['city'])) {
    $users->country = $_POST['city'];
    } else {
    $formErrors['city'] = 'Votre ville est incorrect';
    }
    } else {
    $formErrors['city'] = 'Veuillez renseigner votre état ville';
    }

   * Je vérifie si le Pseudo existe dans la base de données
   */





//section vérification mail
  if (!empty($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
      if (!empty($_POST['mailConfirm'])) {

        if (filter_var($_POST['mailConfirm'], FILTER_VALIDATE_EMAIL) && $_POST['mail'] == $_POST['mailConfirm']) {
          $users->mail = htmlspecialchars($_POST['mail']);
          if ($usersInfo->mail != $users->mail) {
            $checkMail = $users->checkUserMail();
            if ($checkMail->number > 0 && $checkMail->id != $_SESSION['id']) {
              $formErrors['mail'] = 'Un compte avec ce mail existe déjà';
            }
          }
        } else {
          //Si la saisie de l'utilisateur est mauvaise
          $formErrors['mailConfirm'] = 'Votre adresse mail de confirmation est incorrecte.';
        }
      } else {
        $formErrors['mailConfirm'] = 'Veuillez renseigner votre adresse mail de confirmation';
      }
    } else {
      $formErrors['mail'] = 'Merci de renseigner un mail valide';
    }
  } else {
    $formErrors['mail'] = 'Merci de renseigner votre mail';
  }
// fin section verification mail
// section verification password

  if (!empty($_POST['userRole'])) {
    if ($_POST['userRole'] === '1' || $_POST['userRole'] === '2' || $_POST['userRole'] === '3' || $_POST['userRole'] === '4' || $_POST['userRole'] === '5') {
      $users->id_ped8_UserCategory = intval(htmlspecialchars($_POST['userRole']));
    } else {
      $formErrors['userRole'] = 'Votre choix est incorrect';
    }
  } else {
    $formErrors['userRole'] = 'Veuillez faire un choix';
  }

// fin verification password
  if (count($formErrors) == 0) {
    $users->id_ped8_level = 4;
    if ($users->updateuser()) {
      $formSuccess = 'Enregistrement effectué';
      header('location: profil.php');
    } else {
      $formSuccess['add'] = 'Une erreur est survenue';
    }
  }
}
?>
