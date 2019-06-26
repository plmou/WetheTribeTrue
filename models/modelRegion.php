<?php
  class ped8_region extends database {
    public $id = 0;
    public $region = '';
    public $id_ped8_country = '';


    public function __construct() {
      parent::__construct();
    }

    /**
     * Méthode me permettant d'afficher les régions dans le select
     * @return bool
     */

  public function getRegion(){
    $return = array();
    $query = 'SELECT `id`, `region` FROM `ped8_region`';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()){
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }
}