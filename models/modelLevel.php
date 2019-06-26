<?php
  class ped8_level extends database {
    public $id = 0;
    public $level = '';



    public function __construct() {
      parent::__construct();
    }

    /**
     * Méthode me permettant d'afficher les villes dans le select
     * @return bool
     */

  public function getlevel(){
    $return = array();
    $query = 'SELECT `id` , `level` FROM `ped8_level`';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()){
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }


 }
