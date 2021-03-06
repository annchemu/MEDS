<?php
class Test_Identification_Model extends CI_Model{

	function Test_Identification_Model(){
		parent::__construct();
	}

	function save_identification_assay(){
		$results=$this->input->post('results_assay');
		$comment_assay=$this->input->post('comment_assay');
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_name='Identification as per Assay';
		$analyst= $this->input->post('analyst');
		$test_type = '1a';

		$data=$this->db->select_max('id')->get('identification')->result();
        $test_id=$data[0]->id;
        $test_id++;

		
		$data =array(
			'results_assay'=>$results,
			'comment_assay'=>$comment_assay,
			'choice'=>$this->input->post('choice'),
			'date'=>$this->input->post('date_done'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			'analyst'=>$analyst,
			);
		$this->db->insert('identification', $data);		

		$result_data = array(
			'test_id'=>$test_id,
			'test_name'=>$test_name,
			'remarks'=>$this->input->post('choice'),
			'method'=>$this->input->post('method'),
			'results'=>$results,
			);
		$this->db->update('test_results', $result_data, array('test_request_id'=>$test_request,'test_type'=>$test_type));

		redirect('test/index/'.$assignment.'/'.$test_request);


	}
	function save_identification_uv(){
		$status =1;
		
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_specification=$this->input->post('test_specification');
		$test_name='Identification by UV';
		$test_type = '1b';

		$analyst= $this->input->post('analyst');
		$results = $this->input->post('uv_results');


		$data=$this->db->select_max('id')->get('identification_uv')->result();
        $test_id=$data[0]->id;
        $test_id++;
				
		
		$data =array(
			'uv_sample_weight'=>$this->input->post('uv_sample_weight'),
			'uv_calculation'=>$this->input->post('uv_calculation'),
			'uv_sample_container'=>$this->input->post('uv_sample_container'),
			'uv_container'=>$this->input->post('uv_container'),
			'uv_sample_weight_1'=>$this->input->post('uv_sample_weight_1'),
			'uv_sample_dilution'=>$this->input->post('uv_sample_dilution'),
			'uv_standard_description'=>$this->input->post('uv_standard_description'),
			'uv_potency'=>$this->input->post('uv_potency'),
			'uv_lot_no'=>$this->input->post('uv_lot_no'),
			'uv_id_no'=>$this->input->post('uv_id_no'),

			'uv_potency_standard_container'=>$this->input->post('uv_potency_standard_container'),
			'uv_potency_standard_container_2'=>$this->input->post('uv_potency_standard_container_2'),
			'uv_potency_container'=>$this->input->post('uv_potency_container'),
			'uv_potency_container_2'=>$this->input->post('uv_potency_container_2'),
			'uv_standard_weight'=>$this->input->post('uv_standard_weight'),
			'uv_standard_weight_2'=>$this->input->post('uv_standard_weight_2'),
			'uv_standard_dilution'=>$this->input->post('uv_standard_dilution'),

			'uv_potency_reagent_container'=>$this->input->post('uv_potency_reagent_container'),
			'uv_potency_reagent_container_2'=>$this->input->post('uv_potency_reagent_container_2'),
			'uv_potency_reagent_container_3'=>$this->input->post('uv_potency_reagent_container_3'),
			'uv_potency_reagent_container_4'=>$this->input->post('uv_potency_reagent_container_4'),
			'uv_reagent_container'=>$this->input->post('uv_reagent_container'),
			'uv_reagent_container_2'=>$this->input->post('uv_reagent_container_2'),
			'uv_reagent_container_3'=>$this->input->post('uv_reagent_container_3'),
			'uv_reagent_container_4'=>$this->input->post('uv_reagent_container_4'),
			'uv_reagent_weight'=>$this->input->post('uv_reagent_weight'),
			'uv_reagent_weight_2'=>$this->input->post('uv_reagent_weight_2'),
			'uv_reagent_weight_3'=>$this->input->post('uv_reagent_weight_3'),
			'uv_reagent_weight_4'=>$this->input->post('uv_reagent_weight_4'),
			
			'uv_acceptance_criteria'=>$this->input->post('uv_acceptance_criteria'),
			'uv_results'=>$this->input->post('uv_results'),
			'uv_comment'=>$this->input->post('uv_comment'),

			'choice'=>$this->input->post('choice'),
			'done_by'=>$this->input->post('done_by'),
			'date_done'=>$this->input->post('date_done'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,				

			);
		$this->db->insert('identification_uv', $data);

		$result_data = array(
			'test_id'=>$test_id,
			'test_name'=>$test_name,
			'remarks'=>$this->input->post('choice'),
			'method'=>$this->input->post('method'),
			'results'=>$results,
			);
		$this->db->update('test_results', $result_data, array('test_request_id'=>$test_request,'test_type'=>$test_type));

		redirect('test/index/'.$assignment.'/'.$test_request);

	}
	
	function save_identification_infrared(){
		$status =1;		
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_specification=$this->input->post('test_specification');
		$test_name='Identification by Infrared';
		$test_type = '1c';

		$analyst= $this->input->post('analyst');
		$results = $this->input->post('infrared_results');


		$data=$this->db->select_max('id')->get('identification_infrared')->result();
        $test_id=$data[0]->id;
        $test_id++;

		$data =array(
			
			'equipment_make'=>$this->input->post('equipment_make'),
			'balance_number'=>$this->input->post('balance_number'),
			'infrared_sample_weight'=>$this->input->post('infrared_sample_weight'),
			'infrared_calculation'=>$this->input->post('infrared_calculation'),
			'infrared_sample_container'=>$this->input->post('infrared_sample_container'),
			'infrared_container'=>$this->input->post('infrared_container'),
			'infrared_sample_weight_1'=>$this->input->post('infrared_sample_weight_1'),
			'infrared_sample_dilution'=>$this->input->post('infrared_sample_dilution'),
			'standard_description'=>$this->input->post('standard_description'),
			'potency'=>$this->input->post('potency'),
			'lot_no'=>$this->input->post('lot_no'),
			'id_no'=>$this->input->post('id_no'),
			'infrared_standard_container'=>$this->input->post('infrared_standard_container'),
			'infrared_container_2'=>$this->input->post('infrared_container_2'),
			'infrared_standard_weight'=>$this->input->post('infrared_standard_weight'),
			'infrared_standard_dilution'=>$this->input->post('infrared_standard_dilution'),
			'infrared_acceptance_criteria'=>$this->input->post('infrared_acceptance_criteria'),
			'infrared_results'=>$this->input->post('infrared_results'),
			'infrared_comment'=>$this->input->post('infrared_comment'),
			'choice'=>$this->input->post('choice'),
			'analyst'=>$this->input->post('done_by'),
			'date_done'=>$this->input->post('date_done'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$this->input->post('test_request'),
			'assignment'=>$this->input->post('assignment')
			);
		$this->db->insert('identification_infrared', $data);	

		$result_data = array(
			'test_id'=>$test_id,
			'test_name'=>$test_name,
			'remarks'=>$this->input->post('choice'),
			'method'=>$this->input->post('method'),
			'results'=>$results,
			);
		$this->db->update('test_results', $result_data, array('test_request_id'=>$test_request,'test_type'=>$test_type));

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	
	function save_assay_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: Assay';
		$analyst= $this->input->post('analyst');
		$test_type= '1a';

		$data=$this->db->select_max('id')->get('identification')->result();
        $test_id=$data[0]->id;
        $test_id++;

		$data = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_id' => $test_id,
			'test_type' => $test_type,
			'test_name' => $test_name,
			'monograph_specifications' => $this->input->post('specification'),

			);
		$this->db->insert('monograph_specifications', $data);
		$data2 = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_type' => $test_type,
			'specifications' => $this->input->post('specification'),

			);
		$this->db->insert('test_results', $data2);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
	function save_infrared_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: Infrared';
		$analyst= $this->input->post('analyst');
		$test_type ='1c';

		$data=$this->db->select_max('id')->get('identification')->result();
        $test_id=$data[0]->id;
        $test_id++;

		$data = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_id' => $test_id,
			'test_type' => $test_type,
			'test_name' => $test_name,
			'monograph_specifications' => $this->input->post('specification'),

			);
		$this->db->insert('monograph_specifications', $data);
		$data2 = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_type' => $test_type,
			'specifications' => $this->input->post('specification'),

			);
		$this->db->insert('test_results', $data2);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
	
	function save_uv_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: UV';
		$analyst= $this->input->post('analyst');
		$test_type = '1b';

		$data=$this->db->select_max('id')->get('identification_uv')->result();
        $test_id=$data[0]->id;
        $test_id++;


		$data = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_id' => $test_id,
			'test_type' => $test_type,
			'test_name' => $test_name,
			'monograph_specifications' => $this->input->post('specification'),

			);
		$this->db->insert('monograph_specifications', $data);

		$data2 = array(
			'test_request_id' => $this->input->post('test_request'),
			'test_type' => $test_type,
			'specifications' => $this->input->post('specification'),

			);
		$this->db->insert('test_results', $data2);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}

}

?> 