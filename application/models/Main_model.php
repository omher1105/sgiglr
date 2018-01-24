<?php 

class Main_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }
     
    function dimensiones($id = false)
    {
    	if($id == false){
    		$sql = 'select * from tb_dimensiones';
    	}else{
    		$sql = 'select * from tb_dimensiones where id = '.$id;
    	}
        
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