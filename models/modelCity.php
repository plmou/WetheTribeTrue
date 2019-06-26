<?php
  class ped8_city extends database {
    public $id = 0;
    public $city = '';
    public $zipCode = '';
    public $id_ped8_departement = '';


    public function __construct() {
      parent::__construct();
    }

    /**
     * Méthode me permettant d'afficher les villes dans le select
     * @return bool
     */

  public function getCity(){
    $return = array();
    $query = 'SELECT `id`, `city` FROM `ped8_city`';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()){
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }
  
  
 }