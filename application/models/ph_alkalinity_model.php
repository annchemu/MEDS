<?php
class Ph_Alkalinity_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }
   function process_monograph(){
    $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     
     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'reference_number'=>$this->input->post('reference_number'),
     'monograph'=>$this->input->post('assay_monograph')

    );
    
     $this->db->insert('ph_alkalinity',$data);
      redirect('test/index/'.$assignment_id.'/'.$test_request_id);
   }
   function process(){
     $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     $status=1;
  //Sample Insertion
    $data= array(
    
    'serial_number'=>$this->input->post('serial_number'),
    'batch_lot_number'=>$this->input->post('batch_lot_number'), 
    'method'=>$this->input->post('method'),
    'observation'=>$this->input->post('observation'),
    'test_status'=>$status
     
    );
    $data_two = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'method'=>$this->input->post('method'),
     'specification'=>$this->input->post('specification'),
     'results'=>$this->input->post('results')

    );
     $this->db->insert('coa',$data_two);
     $this->db->update('ph_alkalinity', $data,array('test_request_id' => $test_request_id));
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
  }
}
?>
