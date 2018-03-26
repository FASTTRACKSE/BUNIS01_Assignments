<?php 
	
	class newsModel extends CI_Model{

		function getListPromoProg($perPage, $uri){
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('news')->where('type', 'promoprog')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
		}

		function getListTechCons($perPage, $uri){
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('news')->where('type', 'techcons')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
		}

		function getListAutoNews($perPage, $uri){
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('news')->where('type', 'autonews')->limit($perPage, $uri*6-6);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
		}

		function getNewsById($id){
			
		}

	}
	

 ?>