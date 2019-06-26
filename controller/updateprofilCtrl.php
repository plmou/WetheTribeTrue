<?php 
session_start();
require_once 'includes/regex.php';
require_once 'models/modelUsers.php';
/**
 * On instancie l'objet $user
 */
$users = new users();
$usersInfo = $users->getuserProfil(); 

