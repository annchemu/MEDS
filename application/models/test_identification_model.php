<?php
class Test_Identification_Model extends CI_Model{

	function Test_Identification_Model(){
		parent::__construct();
	}

	function save_identification_assay(){
		$results_assay=$this->input->post('results_assay');
		$comment_assay=$this->input->post('comment_assay');
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Identification as per Assay';
		$analyst= $this->input->post('analyst');

		
		$data =array(
			'results_assay'=>$results_assay,
			'comment_assay'=>$comment_assay,
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			);
		$this->db->insert('identification', $data);

		$coa_data = array('coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'test_request_id'=>$test_request,
			'assignment_id'=>$assignment,
			'test_type'=>$test_type,
			'analyst'=>$analyst,
			);
		$this->db->insert('coa', $coa_data);

		redirect('test/index/'.$assignment.'/'.$test_request);


	}
	function save_identification_uv(){
		$status =1;
		
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Identification by UV';
		$analyst= $this->input->post('analyst');
				
		
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
			'uv_acceptance_criteria'=>$this->input->post('acceptance_criteria'),
			'uv_results'=>$this->input->post('uv_results'),
			'uv_comment'=>$this->input->post('uv_comment'),

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

			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,				

			);
		$this->db->insert('identification_uv', $data);

		$coa_data = array(
			//'coa_method_used'=>$coa_method_used,
			// 'coa_results'=>$coa_results,
			// 'coa_specification'=>$coa_specification,
			'test_request_id'=>$test_request,
			'assignment_id'=>$assignment,
			'test_type'=>$test_type,
			'analyst'=>$analyst,
			);
		$this->db->insert('coa', $coa_data);

		redirect('test/index/'.$assignment.'/'.$test_request);

	}
	
	function save_identification_infrared(){
		$infrared_sample_weight=$this->input->post('infrared_sample_weight');
		$infrared_calculation=$this->input->post('infrared_calculation');
		$infrared_sample_container=$this->input->post('infrared_sample_container');
		$infrared_container=$this->input->post('infrared_container');
		$infrared_sample_weight_1=$this->input->post('infrared_sample_weight_1');
		$infrared_sample_dilution=$this->input->post('infrared_sample_dilution');
		$infrared_acceptance_criteria=$this->input->post('infrared_acceptance_criteria');
		$infrared_results=$this->input->post('infrared_results');
		$infrared_comment=$this->input->post('infrared_comment');
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$status =1;
		$test_type='Identification by Infrared';
		$analyst= $this->input->post('analyst');
			
		$data =array(
			
			'infrared_sample_weight'=>$infrared_sample_weight,
			'infrared_calculation'=>$infrared_calculation,
			'infrared_sample_container'=>$infrared_sample_container,
			'infrared_container'=>$infrared_container,
			'infrared_sample_weight_1'=>$infrared_sample_weight_1,
			'infrared_sample_dilution'=>$infrared_sample_dilution,
			'infrared_acceptance_criteria'=>$infrared_acceptance_criteria,
			'infrared_results'=>$infrared_results,
			'infrared_comment'=>$infrared_comment,
			'coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			);
		$this->db->insert('identification', $data);	

		$coa_data = array('coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'test_request_id'=>$test_request,
			'assignment_id'=>$assignment,
			'test_type'=>$test_type,
			'analyst'=>$analyst,
			);
		$this->db->insert('coa', $coa_data);
		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	function save_identification_tlc(){
		$status =1;
		$tlc_sample_weight=$this->input->post('tlc_sample_weight');
		$calculation=$this->input->post('calculation');
		$tlc_sample_container=$this->input->post('tlc_sample_container');
		$tlc_container=$this->input->post('tlc_container');
		$tlc_sample_weight_1=$this->input->post('tlc_sample_weight_1');
		$tlc_sample_dilution=$this->input->post('tlc_sample_dilution');
		$tlc_standard_description=$this->input->post('tlc_standard_description');
		$tlc_potency=$this->input->post('tlc_potency');
		$tlc_lot_no=$this->input->post('tlc_lot_no');
		$tlc_id_no=$this->input->post('tlc_id_no');
		$tlc_potency_standard_container=$this->input->post('tlc_potency_standard_container');
		$tlc_potency_container=$this->input->post('tlc_potency_container');
		$tlc_standard_weight=$this->input->post('tlc_standard_weight');
		$tlc_standard_description_2=$this->input->post('tlc_standard_description_2');
		$tlc_potency_2=$this->input->post('tlc_potency_2');
		$tlc_lot_no_2=$this->input->post('tlc_lot_no_2');
		$tlc_id_no_2=$this->input->post('tlc_id_no_2');
		$tlc_potency_standard_container_2=$this->input->post('tlc_potency_standard_container_2');
		$tlc_potency_container_2=$this->input->post('tlc_potency_container_2');
		$tlc_standard_weight_2=$this->input->post('tlc_standard_weight_2');
		$tlc_standard_dilution=$this->input->post('tlc_standard_dilution');
		$tlc_potency_standard_container_3=$this->input->post('tlc_potency_standard_container_3');
		$tlc_potency_container_3=$this->input->post('tlc_potency_container_3');
		$tlc_standard_weight_3=$this->input->post('tlc_standard_weight_3');
		$tlc_standard_dilution_2=$this->input->post('tlc_standard_dilution_2');
		$calculation_mobile=$this->input->post('calculation_mobile');
		$acceptance_criteria=$this->input->post('acceptance_criteria');
		$tlc_results=$this->input->post('tlc_results');
		$tlc_comment=$this->input->post('tlc_comment');
		$coa_method_used=$this->input->post('coa_method_used');
		$coa_results=$this->input->post('coa_results');
		$coa_specification=$this->input->post('coa_specification');
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_type='Identification by TLC';
		$analyst= $this->input->post('analyst');
				
		
		$data =array(
			'tlc_sample_weight'=>$tlc_sample_weight,
			'tlc_id_no_2'=>$tlc_id_no_2,
			'tlc_sample_container'=>$tlc_sample_container,
			'tlc_container'=>$tlc_container,
			'tlc_sample_weight_1'=>$tlc_sample_weight_1,
			'tlc_sample_dilution'=>$tlc_sample_dilution,
			'tlc_standard_description'=>$tlc_standard_description,
			'tlc_potency'=>$tlc_potency,
			'tlc_lot_no'=>$tlc_lot_no,
			'tlc_id_no'=>$tlc_id_no,
			'tlc_potency_standard_container'=>$tlc_potency_standard_container,
			'tlc_potency_container'=>$tlc_potency_container,
			'tlc_standard_weight'=>$tlc_standard_weight,
			'tlc_standard_description_2'=>$tlc_standard_description_2,
			'tlc_potency_2'=>$tlc_potency_2,
			'tlc_lot_no_2'=>$tlc_lot_no_2,
			'tlc_id_no_2'=>$tlc_id_no_2,
			'tlc_potency_standard_container_2'=>$tlc_potency_standard_container_2,
			'tlc_potency_container_2'=>$tlc_potency_container_2,
			'tlc_standard_weight_2'=>$tlc_standard_weight_2,
			'tlc_standard_dilution'=>$tlc_standard_dilution,
			'tlc_potency_standard_container_3'=>$tlc_potency_standard_container_3,
			'tlc_potency_container_3'=>$tlc_potency_container_3,
			'tlc_standard_weight_3'=>$tlc_standard_weight_3,
			'tlc_standard_dilution_2'=>$tlc_standard_dilution_2,
			'calculation_mobile'=>$calculation_mobile,
			'acceptance_criteria'=>$acceptance_criteria,
			'tlc_results'=>$tlc_results,
			'tlc_comment'=>$tlc_comment,
			'coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'choice'=>$this->input->post('choice'),
			'supervisor'=>$this->input->post('supervisor'),
			'date'=>$this->input->post('date'),
			'further_comments'=>$this->input->post('further_comments'),
			'status' =>$status,
			'test_request'=>$test_request,
			'assignment'=>$assignment,
			);

		$this->db->insert('tlc', $data);

		$coa_data = array('coa_method_used'=>$coa_method_used,
			'coa_results'=>$coa_results,
			'coa_specification'=>$coa_specification,
			'test_request_id'=>$test_request,
			'assignment_id'=>$assignment,
			'test_type'=>$test_type,
			'analyst'=>$analyst,
			);
		$this->db->insert('coa', $coa_data);

		redirect('test/index/'.$assignment.'/'.$test_request);	
	}
	function save_assay_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: Assay';
		$analyst= $this->input->post('analyst');
		$identification_assay_id= 1;


		$data = array(
			'monograph' => $this->input->post('assay_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'identification_assay_id' => $identification_assay_id

			);
		$this->db->insert('identification_assay_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
	function save_infrared_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: Infrared';
		$analyst= $this->input->post('analyst');
		$identification_infrared_id= 1;


		$data = array(
			'monograph' => $this->input->post('infrared_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'identification_infrared_id' => $identification_infrared_id


			);
		$this->db->insert('identification_infrared_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
	function save_tlc_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: TLC';
		$analyst= $this->input->post('analyst');
		$identification_tlc_id= 1;


		$data = array(
			'monograph' => $this->input->post('tlc_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'identification_tlc_id' => $identification_tlc_id


			);
		$this->db->insert('identification_tlc_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}
	function save_uv_monograph(){
		$test_request=$this->input->post('test_request');
		$assignment=$this->input->post('assignment');
		$test_name='Identification: UV';
		$analyst= $this->input->post('analyst');
		$identification_uv_id= 1;


		$data = array(
			'monograph' => $this->input->post('uv_monograph'),
			'test_request_id' => $this->input->post('test_request'),
			'assignment_id' => $this->input->post('assignment'),
			'test_name' => $test_name,
			'analyst' => $this->input->post('analyst'),
			'identification_uv_id' => $identification_uv_id,


			);
		$this->db->insert('identification_uv_monograph', $data);
		redirect('test/index/'.$assignment.'/'.$test_request);	

	}

}

?> 