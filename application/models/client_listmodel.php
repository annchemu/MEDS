<?php
class Client_Listmodel extends CI_Model{
    
    function Client_Listmodel()
    {
      parent::__construct();
    }
    function client_list_getall(){
        $query=$this->db->get('client');
        return $query->result();
    }
    function client_list_get(){
        $this->db->where('status',1);
        $query=$this->db->get('client');
        return $query->result();
    }
    function client_requests_get($client_id){
            $c_id=$client_id;
            // echo $c_id;
            // die;
        // $this->db->where('client_id',$client_id);
        // $query=$this->db->get('test_request');
        // return $query->result();
            $sql="SELECT *  FROM test_request where test_request.client_id=$c_id";
            $query=$this->db->query($sql);
            return $query->result();

    }
    function client_invoices_get($client_id){
        $c_id=$client_id;
        // echo $c_id;
        // die;

        // $this->db->where('client_id',$client_id);
        // $query=$this->db->get('invoice');
        // return $query->result();

         $sql="SELECT *  FROM invoice where invoice.client_id=$c_id";
            $query=$this->db->query($sql);
            return $query->result();

    }
}
?>