<?php
  class ped8_country extends database {
    public $id = 0;
    public $country = '';


    public function __construct() {
      parent::__construct();
    }

    /**
     * Méthode me permettant d'afficher les villes dans le select
     * @return bool
     */

  public function getCountry(){
    $return = array();
    $query = 'SELECT `id`, `country` FROM `ped8_country`';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()){
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }
}