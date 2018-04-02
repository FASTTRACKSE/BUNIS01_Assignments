<?php
class ServicesAdminModel extends CI_Model{

    function get_Data_by_ID($getID){
        $this->db->select('*');
        $this->db->where('ID',$getID);
        $query = $this->db->get("service");
        $data = $query->row_array();
        return $data;
    }

    function delete_Data_by_ID($deleteID){
        $this->db->where("ID",$deleteID);
        $this->db->delete("service");
    }

    function insert_Data($data){
        $this->db->insert("service",$data);
    }

    function update_Data_by_ID($updateID,$data){
        $this->db->where('ID',$updateID);
        $this->db->update("service",$data);
    }

     function getPagination($perPage,$uri){
        $uri = ($uri==null || $uri ==''?0:$uri);
        $query =$this->db->select('*')->from('service')->limit($perPage,$uri);
        $data = $this->db->get()->result_array();
        return(sizeof($data)>0?$data:null);
    }
}

?>