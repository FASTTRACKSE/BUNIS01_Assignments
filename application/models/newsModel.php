<?php 
	
	class newsModel extends CI_Model{


		function getList($perPage, $uri){
			if($uri == null || $uri==''){
				$uri = 1;
			}
			$query = $this->db->select('*')->from('news')->limit($perPage, $uri*5-5);
			$data = $this->db->get()->result_array();
    		return (sizeof($data) > 0?$data:null);
		}

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
			$this->db->where("id", $id);
			$query=$this->db->get('news');
			$data=$query->row_array(); //to print 1 row
			return $data;
		}

		function insertNews($data){
			$this->db->insert('news', $data);
		}

		function deleteNewsConfirm($id){
			$this->db->where("id", $id);
			$query=$this->db->get('news');
			$data=$query->row_array(); //to print 1 row
			return $data;
		}

		function deleteNews($id){
			$this->db->where("id", $id);
			$this->db->delete('news');
		}

	}
	

 ?>