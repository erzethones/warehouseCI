<?php
class m_rptsupplier extends CI_Model {
 
    var $cTable = 'supplier';
 
    function __construct() {
        parent::__construct();
    }
    function getAllItem() {
        $this->db->from($this->cTable);
        $query = $this->db->get();
        return $query->result_array();
    }
 
}
?>