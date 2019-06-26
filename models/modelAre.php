<?php

class users extends database {

  public $id = 0;
  public $id_ped8_UserCategory = '';

  public function __construct() {
    parent::__construct();
  }

  /**
   * Méthode me permettant d'afficher les villes dans le select
   * @return bool
   */
  public function getArtistCategory() {
    $return = array();
    $query = 'SELECT `id_ped8_UserCategory ` FROM `ped8_are`';
    $queryExecute = $this->db->query($query);
    if ($queryExecute->execute()) {
      $return = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
    return $return;
  }

}
