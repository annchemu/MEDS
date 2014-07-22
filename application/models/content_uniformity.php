<?php
class Content_uniformity_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }

   function process(){
    
  //Sample Insertion
     $data = array(
     
     'w_tablets_containers'=>$this->input->post('w_tablets_containers'),
     'w_tablets_containers_state'=>$this->input->post('w_tablets_containers_state'),
     'bf_rotation_one'=>$this->input->post('bf_rotation_one'),
     'af_rotation_one'=>$this->input->post('af_rotation_one'),
     'w_container'=>$this->input->post('w_container'),
     'bf_rotation_two'=>$this->input->post('bf_rotation_two'),
     'af_rotation_two'=>$this->input->post('af_rotation_two'),
     'w_tablets'=>$this->input->post('w_tablets'),
     'w_tablets_state'=>$this->input->post('w_tablets_state'),
     'bf_rotation_three'=>$this->input->post('bf_rotation_three'),
     'af_rotation_three'=>$this->input->post('af_rotation_three'),
     'first_try_lw'=>$this->input->post('first_try_lw'),
     'second_try_lw'=>$this->input->post('second_try_lw'),
     'third_try_lw'=>$this->input->post('third_try_lw'),
     'method'=>$this->input->post('method'),
     'specification'=>$this->input->post('specification'),
     'results'=>$this->input->post('results'),
     'remarks'=>$this->input->post('remarks')

    );
    $this->db->update('content_uniformity', $data,array('test_request_id' => $test_request_id));
    redirect('test/index/'.$assignment_id.'/'.$test_request_id);
     
  }
  function process_monograph(){
    $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     
     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'reference_number'=>$this->input->post('reference_number'),
     'monograph'=>$this->input->post('monograph')

    );
     $this->db->insert('content_uniformity',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
   }
}
?>
