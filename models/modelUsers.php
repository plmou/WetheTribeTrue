<?php

class users extends database {

  public $id = '';
  public $id_ped8_title = '';
  public $lastname = '';
  public $firstname = '';
  public $pseudo = '';
  public $birthdate = '1970-01-01';
  public $phone = '';
  public $mail = '';
  public $password = '';
  public $id_ped8_country = '';
  public $id_ped8_region = '';
  public $id_ped8_city = '';
  public $id_ped8_UserCategory = '';
  public $id_ped8_level = '';

  public function __construct() {
    parent::__construct();
  }

  /**
   * Méthode me permettant d'ajouter un utilisateur
   * @return bool
   */
  public function addUser() {
    $query = 'INSERT INTO `ped8_users` (`id_ped8_title`, `lastname`, `firstname`,`pseudo`, `birthdate`, `phone`, `mail`, `password`, `id_ped8_country`,`id_ped8_region`,`id_ped8_city`,`id_ped8_UserCategory`, `id_ped8_level`) '
            . 'VALUES (:id_ped8_title, :lastname, :firstname,:pseudo,:birthdate, :phone, :mail, :password, :id_ped8_country, :id_ped8_region, :id_ped8_city, :id_ped8_UserCategory, :id_ped8_level)';
    $queryExecute = $this->db->prepare($query);

    $queryExecute->bindValue(':id_ped8_title', $this->id_ped8_title, PDO::PARAM_INT);
    $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
    $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
    $queryExecute->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
    $queryExecute->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
    $queryExecute->bindValue(':phone', $this->phone, PDO::PARAM_STR);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_ped8_country', $this->id_ped8_country, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_region', $this->id_ped8_region, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_city', $this->id_ped8_city, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_UserCategory', $this->id_ped8_UserCategory, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_level', $this->id_ped8_level, PDO::PARAM_INT);


    return $queryExecute->execute();
  }

  public function getuserProfil() {

    $query = 'SELECT `ped8_title`.`title` , `ped8_users`.`id_ped8_title`, `ped8_users`.`lastname` , `ped8_users`.`firstname` , `ped8_users`.`birthdate` ,`ped8_users`.`pseudo` ,`ped8_users`.`phone` , `ped8_users`.`mail` , `ped8_users`.`id_ped8_country` , `ped8_users`.`id_ped8_region` , `ped8_users`.`id_ped8_city` , `ped8_users`.`id_ped8_level` ,`ped8_users`.`id_ped8_UserCategory`, `ped8_region`.`region`, `ped8_city`.`city`, `ped8_level`.`level`, `ped8_UserCategory`.`userRole` '
            . 'FROM `ped8_users` '
            . 'INNER JOIN `ped8_title` ON `ped8_users`.`id_ped8_title` = `ped8_title`.`id` '
            . 'INNER JOIN `ped8_city` ON `ped8_users`.`id_ped8_city` = `ped8_city`.`id` '
            . 'INNER JOIN `ped8_region` ON `ped8_users`.`id_ped8_region` = `ped8_region`.`id` '
            . 'INNER JOIN `ped8_level` ON `ped8_users`.`id_ped8_level` = `ped8_level`.`id` '
            . 'INNER JOIN `ped8_UserCategory` ON `ped8_users`.`id_ped8_UserCategory` = `ped8_UserCategory`.`id` '
            . 'WHERE `ped8_users`.`id` = :id;';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

//méthode pour modifier un utilisateur
  public function updateuser() {
    $query = 'UPDATE `ped8_users` SET `id_ped8_title`= :id_ped8_title, `lastname` = :lastname, `firstname`= :firstname,`pseudo` = :pseudo, `birthdate` = :birthdate, `phone` = :phone, `mail` = :mail, `id_ped8_country` = :id_ped8_country,`id_ped8_region` = :id_ped8_region,`id_ped8_city` = :id_ped8_city, `id_ped8_level` = :id_ped8_level, `id_ped8_UserCategory`= :id_ped8_UserCategory '
            . 'WHERE `id` = :id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id_ped8_title', $this->id_ped8_title, PDO::PARAM_INT);
    $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
    $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
    $queryExecute->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
    $queryExecute->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
    $queryExecute->bindValue(':phone', $this->phone, PDO::PARAM_STR);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_ped8_country', $this->id_ped8_country, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_region', $this->id_ped8_region, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_city', $this->id_ped8_city, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_level', $this->id_ped8_level, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_UserCategory', $this->id_ped8_UserCategory, PDO::PARAM_INT);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
  }
  
  public function deleteusers() {
    $query = 'DELETE FROM `ped8_users` WHERE `id` = :id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
  }

  public function getuserProfilTaxi() {

    $query = 'SELECT `ped8_title`.`title` , `ped8_users`.`id_ped8_title`, `ped8_users`.`lastname` , `ped8_users`.`firstname` , `ped8_users`.`birthdate` ,`ped8_users`.`pseudo` ,`ped8_users`.`phone` , `ped8_users`.`mail` , `ped8_users`.`id_ped8_country` , `ped8_users`.`id_ped8_region` , `ped8_users`.`id_ped8_city` , `ped8_users`.`id_ped8_level` ,`ped8_users`.`id_ped8_UserCategory`, `ped8_region`.`region`, `ped8_city`.`city`, `ped8_level`.`level` '
            . 'FROM `ped8_users` '
            . 'INNER JOIN `ped8_title` ON `ped8_users`.`id_ped8_title` = `ped8_title`.`id` '
            . 'INNER JOIN `ped8_city` ON `ped8_users`.`id_ped8_city` = `ped8_city`.`id` '
            . 'INNER JOIN `ped8_region` ON `ped8_users`.`id_ped8_region` = `ped8_region`.`id` '
            . 'INNER JOIN `ped8_level` ON `ped8_users`.`id_ped8_level` = `ped8_level`.`id` '
            . 'INNER JOIN `ped8_UserCategory` ON `ped8_users`.`id_ped8_UserCategory` = `ped8_UserCategory`.`id` '
            . 'WHERE `ped8_users`.`id` = :id;';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }
  
  public function getUserTaxi() {

    $query = 'SELECT `pseudo`, `city`, `ped8_region`.`region`, `country` '
            . 'FROM `ped8_users` '
            . 'INNER JOIN `ped8_city` ON `ped8_city`.`id` = `id_ped8_city` '
            . 'INNER JOIN `ped8_region` ON `ped8_region`.`id` = `id_ped8_region` '
            . 'INNER JOIN `ped8_country` ON `ped8_country`.`id` = `ped8_users`.`id_ped8_country` '
            . 'WHERE `ped8_users`.`id_ped8_UserCategory` = 1';
    $queryExecute = $this->db->query($query);
    return $queryExecute->fetchAll(PDO::FETCH_OBJ);
  }
  
  public function getUserMember() {

    $query = 'SELECT `pseudo`, `city`, `ped8_region`.`region`, `country`, `userRole` '
            . 'FROM `ped8_users` '
            . 'INNER JOIN `ped8_city` ON `ped8_city`.`id` = `id_ped8_city` '
            . 'INNER JOIN `ped8_region` ON `ped8_region`.`id` = `id_ped8_region` '
            . 'INNER JOIN `ped8_country` ON `ped8_country`.`id` = `ped8_users`.`id_ped8_country` '
            . 'INNER JOIN `ped8_UserCategory` ON `ped8_UserCategory`.`id` = `id_ped8_UserCategory` '
            . 'WHERE `id_ped8_UserCategory` > 1 AND `id_ped8_UserCategory` < 6';
    $queryExecute = $this->db->query($query);
    return $queryExecute->fetchAll(PDO::FETCH_OBJ);
  }

  /**
   * Méthode me permettant d'update users, 
   * @return bool 
   *   public function updateuser(){
    $query = 'UPDATE `ped8_users` SET (`gender` = :gender, `lastname`= :lastname, `firstname = :firstname`,`pseudo = :pseudo`, `birthdate = :birthdate`, `phone = :phone`, `mail = :mail`, `password = :password`, `id_ped8_country = :id_ped8_country`,`id_ped8_region = :id_ped8_region`,`id_ped8_city = :id_ped8_city`,`id_ped8_UserCategory = :id_ped8_UserCategory`, `id_ped8_level = :id_ped8_level`) '
    . 'VALUES (:gender, :lastname, :firstname,:pseudo,:birthdate, :phone, :mail, :password, :id_ped8_country, :id_ped8_region, :id_ped8_city,:id_ped8_UserCategory, 1)';
    $queryExecute = $this->db->prepare($query);

    $queryExecute->bindValue(':gender', $this->gender, PDO::PARAM_INT);
    $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
    $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
    $queryExecute->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
    $queryExecute->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
    $queryExecute->bindValue(':phone', $this->phone, PDO::PARAM_STR);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
    $queryExecute->bindValue(':id_ped8_country', $this->id_ped8_country, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_region', $this->id_ped8_region , PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_city', $this->id_ped8_city, PDO::PARAM_INT);
    $queryExecute->bindValue(':id_ped8_UserCategory', $this->id_ped8_UserCategory, PDO::PARAM_INT);


    return $queryExecute->execute();
    }
   */
//  public function deleteusers(){
//    $query = 'DELETE FROM `ped8_users` WHERE `id` = :id';
//    $queryExecute = $this->db->prepare($query);
//    $queryExecute->bindValue(':id',$this->id, PDO::PARAM_INT);
//    return $queryExecute->execute();
//  }
//
//  public function getuserList(){
//
// $query = 'SELECT  `id`, UPPER(`lastname`) AS `lastname`, `firstname`, DATE_FORMAT(`birthdate`, \'%d/%m/%Y\') AS `birthdate`, `phone`, `mail`, FLOOR(DATEDIFF(NOW(), `birthdate`)/365) AS `age` '
//        . 'FROM `ped8_users` '
//        . 'WHERE `id_userRoles` = 3';
//  //$this->db->query($query) me permet d'executer ma requête (query($query)) dans ma base de données ($this->db)
//  $queryExecute = $this->db->query($query);
//  /*
// * fetchAll me permet de récupérer tous les résultats en objet (PDO::FETCH_OBJ)
// * Attention : fetchAll récupère un tableau de résultats
// */
//  return $queryExecute->fetchAll(PDO::FETCH_OBJ);
//}

  /**
   * la méthode sert à afficher le profil une fois connecté.
   *
   */

  /**
   * la méthode sert à connecté l'utilisateur.
   *
   */
  public function userConnect() {
    $query = 'SELECT `id`, `password`, `id_ped8_UserCategory`
 FROM `ped8_users` WHERE  `mail`= :mail ';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

  public function checkUserMail() {
    $query = 'SELECT COUNT(`id`) as `number` '
            . 'FROM `ped8_users` '
            . 'WHERE `mail` = :mail';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

//public function modifyusers(){
//
// $query = 'UPDATE `ped8_users` SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phone, `mail` = :mail '
// . 'WHERE `id` = :id';
//
//  $queryExecute = $this->db->prepare($query);
//  $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
//  $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
//  $queryExecute->bindValue(':birthdate', $this->birthdate, PDO::PARAM_STR);
//  $queryExecute->bindValue(':phone', $this->phone, PDO::PARAM_STR);
//  $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
//  $queryExecute->bindValue(':id',$this->id, PDO::PARAM_INT);
//  return $queryExecute->execute();
//}
//
//

  /**
   * Fonction qui retourne le nombre de personnes ayant le pseudo donné.
   * @return int
   */
  public function checkuserLogin() {
    $query = 'SELECT COUNT(`id`) as `number` '
            . 'FROM `ped8_users` '
            . 'WHERE `pseudo` = :pseudo';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
    $queryExecute->execute();
    return $queryExecute->fetch(PDO::FETCH_OBJ);
  }

//
//  /**
//   * Méthode permettant de récupérer le hash du mot de passe, on pourra le
//   * comparer à celui tapé lors de la connexion
//   * @return object
//   */
//  public function getHashByMail(){
//        $query = 'SELECT `password` '
//                . 'FROM `ped8_users` '
//                . 'WHERE `mail` = :mail';
//        $queryExecute = $this->db->prepare($query);
//        $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
//        $queryExecute->execute();
//        return $queryExecute->fetch(PDO::FETCH_OBJ);
//    }
//
//  public function getuserByMail(){
//    $query = 'SELECT `id`, `id_userRoles` '
//            . 'FROM `ped8_users` '
//            . 'WHERE `mail` = :mail';
//    $queryExecute = $this->db->prepare($query);
//    $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
//    $queryExecute->execute();
//    return $queryExecute->fetch(PDO::FETCH_OBJ);
//  }




  public function __destruct() {
    $this->db = NULL;
  }

}

?>
