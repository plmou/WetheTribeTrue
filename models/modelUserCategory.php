<?php
  class ped8_UserCategory extends database {
    public $id = 0;
    public $userRole = '';



    public function __construct() {
      parent::__construct();
    }

    /**
     * Méthode me permettant d'afficher les villes dans le select
     * @return bool
     */

  public function getUserCategory(){
    $return = array();
    $query = 'SELECT `id` , `userRole` FROM `ped8_UserCategory` WHERE `id` <= 5 ';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()){
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }


 }
