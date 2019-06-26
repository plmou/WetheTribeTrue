<?php 
require_once 'models/database.php';
require_once 'models/modelUsers.php';
$users = new users();

$listUserTaxi = $users->getUserTaxi();
$countCard = 1;