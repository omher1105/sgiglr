<?php 

class Main_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }
     
    function dimensiones()
    {
        $sql = 'select * from tb_dimensiones';
        $query = $this->db->query($sql)->result_Array();
    	return $query;
    }

    function objetivo()
    {
        $sql = 'select * from tb_objetivo';
        $query = $this->db->query($sql)->result_Array();
    	return $query;
    }

}

?>