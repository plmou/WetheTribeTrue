<?php 
session_start();
require_once 'includes/regex.php';
require_once 'models/modelUsers.php';
/**
 * On instancie l'objet $user
 */
$users = new users();
$users->id = $_SESSION['id'] ;
$usersInfo = $users->getuserProfil(); 
//var_dump($usersInfo);


//vérifie la supression du membre et on le dirige vers la page daccueil
if (!empty($_POST['deleteId'])) {
if($usersInfo = $users->deleteusers()){
  session_destroy();
  header('location: index.php');
}
}

