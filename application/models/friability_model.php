<?php
class Friability_Model extends CI_Model{
   
   function __construct()
   {
    parent::__construct();
   }
   function process_monograph(){
    $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     
      $data=$this->db->select_max('id')->get('friability')->result();

      $friability_id=$data[0]->id;
      $friability_id++;

     //Sample Insertion
      $data = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'friability_id'=>$friability_id,
     'serial_number'=>$this->input->post('serial_number'),
     'monograph'=>$this->input->post('monograph')

    );
    $this->db->insert('friability_monograph',$data);
     redirect('test/index/'.$assignment_id.'/'.$test_request_id);
    
   }

   function process(){
    
     $assignment_id=$this->input->post('assignment_id');
     $test_request_id=$this->input->post('tr_id');
     $status=1;
     $test_type="Friability";
     $conclusion="";
     $comment=$this->input->post('comment');

     if($comment=='ok'){
        $conclusion="Test Complies(Passed)";
     }else{
        $conclusion="Test Does Not Complie(Failed)";
     }
     
  //Sample Insertion
    $data = array(
     
     'serial_number'=>$this->input->post('serial_number'),
     'test_request_id'=>$test_request_id,
     'assignment_id'=>$assignment_id,
     'time'=>$this->input->post('time'),
     'revolutions'=>$this->input->post('revolutions'),
     'w_tablets_containers_bf_rotation'=>$this->input->post('w_tablets_containers_bf_rotaion'),
     'w_tablets_containers_af_rotation'=>$this->input->post('w_tablets_containers_af_rotation'),
     'w_containers_bf_rotation'=>$this->input->post('w_containers_bf_rotation'),
     'w_containers_af_rotation'=>$this->input->post('w_containers_af_rotation'),
     'w_tablets_bf_rotation'=>$this->input->post('w_tablets_bf_rotation'),
     'w_tablets_af_rotation'=>$this->input->post('w_tablets_af_rotation'),
     'loss_in_weight'=>$this->input->post('loss_in_weight'),
     'actual'=>$this->input->post('actual'),
     'comment'=>$this->input->post('comment'),
     'specification'=>$this->input->post('specification'),
     'method'=>$this->input->post('method'),
     'results'=>$this->input->post('results'),
     'test_status'=>$status
    );

    $data_two = array(
     
     'assignment_id'=>$assignment_id,
     'test_request_id'=>$test_request_id,
     'test_type'=>$test_type,
     'conclusion'=>$conclusion,
     'further_comments'=>$this->input->post('comment'),
     'test_specification'=>$this->input->post('specification')

    );
    $this->db->insert('coa',$data_two);
    $this->db->insert('friability', $data);
    redirect('test/index/'.$assignment_id.'/'.$test_request_id);
  }
}
?>
