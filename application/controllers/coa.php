<?php
class Coa extends CI_Controller{
	public function Coa(){
		parent::__construct();
	} 

	function index(){

    $data['coa']=
    $this->db->select('*')->get_where('test_results')->result_array();


    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));

    $results=$query->result_array();
    $data['query']=$results[0];

    $data['query']=$results[0];

		$this->load->view('coa_view');

	}

	function view(){
    $aid = $this->uri->segment(3);
	$test_request_id = $this->uri->segment(4);
    $user_id=6;
  
    $data['users']=
    $this->db->select('*')->get_where('user', array('user_type' => $user_id))->result_array();
 
    $data['coa']=
    $this->db->select('*')->get_where('test_results', array('test_request_id' => $test_request_id))->result_array();

    $data['monograph_specifications']=
    $this->db->select('*')->get_where('monograph_specifications', array('test_request_id' => $test_request_id))->result_array();

    $data['test_results']=
    $this->db->select('*')->get_where('test_results', array('test_request_id' => $test_request_id))->result_array();
    
    $data['monograph_weight_variation_hplc_two_components']=$this->db->select('*')->get_where('uniformity_monograph_weight_variation_two_components', array('uniformity_monograph_weight_variation_two_components.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_hplc_single_component']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_single_component', array('uniformity_monograp_content_uniformity_single_component.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_hplc_two_components']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_two_components', array('uniformity_monograp_content_uniformity_two_components.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_titration_single_component']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_titra_single_component', array('uniformity_monograp_content_uniformity_titra_single_component.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_titration_two_components']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_titra_two_components', array('uniformity_monograp_content_uniformity_titra_two_components.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_uv_single_component']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_uv_single_component', array('uniformity_monograp_content_uniformity_uv_single_component.test_request_id' => $test_request_id))->result_array();
    $data['monograph_content_uniformity_uv_two_components']=$this->db->select('*')->get_where('uniformity_monograp_content_uniformity_uv_two_components', array('uniformity_monograp_content_uniformity_uv_two_components.test_request_id' => $test_request_id))->result_array();
    $data['monograph_uniformity_of_dosage_unit_single_component']=$this->db->select('*')->get_where('uniformity_of_dosage_monograph_unit_single_component', array('uniformity_of_dosage_monograph_unit_single_component.test_request_id' => $test_request_id))->result_array();
    $data['monograph_uniformity_of_dosage_unit_two_components']=$this->db->select('*')->get_where('uniformity_of_dosage_monograph_unit_two_components', array('uniformity_of_dosage_monograph_unit_two_components.test_request_id' => $test_request_id))->result_array();
    $data['monograph_uniformity_of_dosage_unit_single_component_uv']=$this->db->select('*')->get_where('uniformity_monograp_uniformity_of_dosage_single_component_uv', array('uniformity_monograp_uniformity_of_dosage_single_component_uv.test_request_id' => $test_request_id))->result_array();
    $data['monograph_uniformity_of_dosage_unit_two_components_uv']=$this->db->select('*')->get_where('uniformity_monograp_uniformity_of_dosage_two_components_uv', array('uniformity_monograp_uniformity_of_dosage_two_components_uv.test_request_id' => $test_request_id))->result_array();
    
    $data['assay_monograph_hplc_internal_method']=$this->db->select('*')->get_where('assay_monograph_hplc_internal_method', array('assay_monograph_hplc_internal_method.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_internal_method_two_components']=$this->db->select('*')->get_where('assay_monograph_hplc_internal_method_two_components', array('assay_monograph_hplc_internal_method_two_components.test_request_id' => $test_request_id))->result_array(); 
    $data['assay_monograph_hplc_area_method_single_component']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_single_component', array('assay_monograph_hplc_area_method_single_component.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_two_components']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_two_components', array('assay_monograph_hplc_area_method_two_components.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_two_components_dif_methods']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_two_components_dif_methods', array('assay_monograph_hplc_area_method_two_components_dif_methods.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_injection_powder_single_comp']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_injection_powder_single_comp', array('assay_monograph_hplc_area_method_injection_powder_single_comp.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_injection_powder_two_components']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_injection_powder_two_components', array('assay_monograph_hplc_area_method_injection_powder_two_components.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_oral_liquids_single_component']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_oral_liquids_single_component', array('assay_monograph_hplc_area_method_oral_liquids_single_component.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_oral_liquids_two_components']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_oral_liquids_two_components', array('assay_monograph_hplc_area_method_oral_liquids_two_components.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_hplc_area_method_powder_for_oral_liquids']=$this->db->select('*')->get_where('assay_monograph_hplc_area_method_powder_for_oral_liquids', array('assay_monograph_hplc_area_method_powder_for_oral_liquids.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_titration']=$this->db->select('*')->get_where('assay_monograph_titration', array('assay_monograph_titration.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_indometric_titration']=$this->db->select('*')->get_where('assay_monograph_indometric_titration', array('assay_monograph_indometric_titration.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_ultraviolet_single_component']=$this->db->select('*')->get_where('assay_monograph_ultraviolet_single_component', array('assay_monograph_ultraviolet_single_component.test_request_id' => $test_request_id))->result_array();
    $data['assay_monograph_ultraviolet_two_components']=$this->db->select('*')->get_where('assay_monograph_ultraviolet_two_components', array('assay_monograph_ultraviolet_two_components.test_request_id' => $test_request_id))->result_array();
    $data['friability_monograph']=$this->db->select('*')->get_where('friability_monograph', array('friability_monograph.test_request_id' => $test_request_id))->result_array();
    $data['ph_alkalinity_monograph']=$this->db->select('*')->get_where('ph_alkalinity_monograph', array('ph_alkalinity_monograph.test_request_id' => $test_request_id))->result_array();
           
    $data['monograph_identification_assay']=$this->db->select('*')->get_where('identification_assay_monograph', array('identification_assay_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_uv']=$this->db->select('*')->get_where('identification_uv_monograph', array('identification_uv_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_infrared']=$this->db->select('*')->get_where('identification_infrared_monograph', array('identification_infrared_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_tlc']=$this->db->select('*')->get_where('identification_tlc_monograph', array('identification_tlc_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_hplc']=$this->db->select('*')->get_where('identification_hplc_monograph', array('identification_hplc_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_chemical_method']=$this->db->select('*')->get_where('identification_chemical_method_monograph', array('identification_chemical_method_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_identification_thin_layer']=$this->db->select('*')->get_where('identification_thin_layer_monograph', array('identification_thin_layer_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_diss_uv']=$this->db->select('*')->get_where('diss_uv_monograph', array('diss_uv_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_dissolution_normal_hplc']=$this->db->select('*')->get_where(' diss_normal_hplc_monograph', array('diss_normal_hplc_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_dissolution_enteric_coated']=$this->db->select('*')->get_where('diss_enteric_coated_monograph', array('diss_enteric_coated_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_dissolution_two_component']=$this->db->select('*')->get_where('diss_two_component_monograph', array('diss_two_component_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_dissolution_delayed']=$this->db->select('*')->get_where('diss_delayed_release_monograph', array('diss_delayed_release_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_disintegration']=$this->db->select('*')->get_where('disintegration_monograph', array('disintegration_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_water_method']=$this->db->select('*')->get_where('water_method_monograph', array('water_method_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_volumetric_solution']=$this->db->select('*')->get_where('volumetric_solution_monograph', array('volumetric_solution_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_loss_drying']=$this->db->select('*')->get_where('loss_drying_monograph', array('loss_drying_monograph.test_request_id' => $test_request_id))->result_array();
    $data['monograph_related_substances']=$this->db->select('*')->get_where('related_substances_monograph', array('related_substances_monograph.test_request_id' => $test_request_id))->result_array();
    
    $data['hplc_internal_method']=$this->db->select('*')->get_where('assay_hplc_internal_method', array('test_request_id' => $test_request_id))->result_array();
    $data['hplc_internal_method_two_components']=$this->db->select('*')->get_where('assay_hplc_internal_method_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_single_component']=$this->db->select('*')->get_where('assay_hplc_area_method_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_two_components']=$this->db->select('*')->get_where('assay_hplc_area_method_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_two_components_different_methods']=$this->db->select('*')->get_where('assay_hplc_area_method_two_components_different_methods', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_oral_liquids_single_component']=$this->db->select('*')->get_where('assay_hplc_area_method_oral_liquids_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_oral_liquids_two_components']=$this->db->select('*')->get_where('assay_hplc_area_method_oral_liquids_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_powder_for_oral_liquids']=$this->db->select('*')->get_where('assay_hplc_area_method_powder_for_oral_liquids', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_injection_powder_single_component']=$this->db->select('*')->get_where('assay_hplc_area_method_injection_powder_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_hplc_area_method_injection_powder_two_components']=$this->db->select('*')->get_where('assay_hplc_area_method_injection_powder_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_titration']=$this->db->select('*')->get_where('assay_titration', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_indometric_titration']=$this->db->select('*')->get_where('assay_indometric_titration', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_ultraviolet_single_component']=$this->db->select('*')->get_where('assay_ultraviolet_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_ultraviolet_two_components']=$this->db->select('*')->get_where('assay_ultraviolet_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['assay_karl_fisher_water_method']=$this->db->select('*')->get_where('assay_karl_fisher_water_method', array('test_request_id' => $test_request_id))->result_array();
    $data['friability']=$this->db->select('*')->get_where('friability', array('test_request_id' => $test_request_id))->result_array();

    $data['weight_variation_hplc_single_component']=$this->db->select('*')->get_where('weight_variation_hplc_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['weight_variation_hplc_two_components']=$this->db->select('*')->get_where('weight_variation_hplc_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_hplc_single_component']=$this->db->select('*')->get_where('content_uniformity_hplc_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_hplc_two_components']=$this->db->select('*')->get_where('content_uniformity_hplc_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_titration_single_component']=$this->db->select('*')->get_where('content_uniformity_titration_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_titration_two_components']=$this->db->select('*')->get_where('content_uniformity_titration_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_uv_single_component']=$this->db->select('*')->get_where('content_uniformity_uv_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['content_uniformity_uv_two_components']=$this->db->select('*')->get_where('content_uniformity_uv_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['uniformity_of_dosage_unit_single_component']=$this->db->select('*')->get_where('uniformity_of_dosage_unit_single_component', array('test_request_id' => $test_request_id))->result_array();
    $data['uniformity_of_dosage_unit_two_components']=$this->db->select('*')->get_where('uniformity_of_dosage_unit_two_components', array('test_request_id' => $test_request_id))->result_array();
    $data['uniformity_of_dosage_unit_single_component_uv_single_wavelength']=$this->db->select('*')->get_where('uniformity_of_dosage_unit_single_component_uv_single_wavelength', array('test_request_id' => $test_request_id))->result_array();
    $data['uniformity_of_dosage_unit_two_components_uv_single_wavelength']=$this->db->select('*')->get_where('uniformity_of_dosage_unit_two_components_uv_single_wavelength', array('test_request_id' => $test_request_id))->result_array();
   
    $data['identification_assay']=$this->db->select('*')->get_where('identification', array('identification.test_request' => $test_request_id))->result_array();
    $data['identification_uv']=$this->db->select('*')->get_where('identification_uv', array('identification_uv.test_request' => $test_request_id))->result_array();
    $data['identification_infrared']=$this->db->select('*')->get_where('identification', array('identification.test_request' => $test_request_id))->result_array();
    $data['identification_tlc']=$this->db->select('*')->get_where('tlc', array('tlc.test_request' => $test_request_id))->result_array();
    $data['identification_hplc']=$this->db->select('*')->get_where('identification_hplc', array('identification_hplc.test_request' => $test_request_id))->result_array();
    $data['identification_chemical_method']=$this->db->select('*')->get_where('identification_chemical_method', array('identification_chemical_method.test_request' => $test_request_id))->result_array();
    $data['identification_thin_layer']=$this->db->select('*')->get_where('identification_thin_layer', array('identification_thin_layer.test_request' => $test_request_id))->result_array();
    $data['diss_uv']=$this->db->select('*')->get_where('diss_data', array('diss_data.test_request' => $test_request_id))->result_array();
    $data['dissolution_normal_hplc']=$this->db->select('*')->get_where('diss_normal', array('diss_normal.test_request' => $test_request_id))->result_array();
    $data['dissolution_enteric_coated']=$this->db->select('*')->get_where('diss_enteric_coated', array('diss_enteric_coated.test_request' => $test_request_id))->result_array();
    $data['dissolution_two_component']=$this->db->select('*')->get_where('diss_two_components', array('diss_two_components.test_request' => $test_request_id))->result_array();
    $data['dissolution_delayed']=$this->db->select('*')->get_where('diss_delayed_release', array('diss_delayed_release.test_request' => $test_request_id))->result_array();
   
    $data['assignment']=
    $this->db->select('assignment.id AS a,assignment.test_request_id,assignment.assigner_user_id,assignment.client_id,assignment.reference_number,assignment.assigner_name,assignment.analyst_name,assignment.sample_issued')->get_where('assignment', array('id' => $aid))->result_array();
    
    $query=$this->db->select('test_request.id AS tr,test_request.client_id,test_request.active_ingredients,test_request.brand_name,test_request.applicant_address,test_request.date_time,test_request.manufacturer_name,test_request.manufacturer_address,test_request.batch_lot_number,
    test_request.sample_source,test_request.label_claim,test_request.expiry_date,test_request.date_manufactured,test_request.quantity_type,test_request.sample_source,test_request.laboratory_number,test_request.applicant_name,
    test_request.quantity_remaining,test_request.quantity_submitted,test_request.pack_size,test_request.reference_number,test_request.applicant_ref_number,test_request.identification,test_request.friability,test_request.dissolution,test_request.assay,test_request.test_specification,
    test_request.disintegration,test_request.ph_alkalinity,test_request.full_monograph,test_request.content_uniformity,test_request.microbiology,test_request.request_status')->get_where('test_request', array('id' => $test_request_id));
     
    $results=$query->result_array();
    $data['query']=$results[0];

    $data['method']=$results;

		$this->load->view('coa_view', $data);
	}
	function submit(){			

		$this->load->model('coa_model');

		if ($this->input->post('save_coa')) {
			$this->coa_model->process();
		}
	}
	function coa_pdf(){
    	$id = $this->uri->segment(3);
		$sql = "SELECT * FROM test_request WHERE id = '$id'";
		$query = $this->db->query($sql);
		$results = $query->result_array();
		$query_tr = $results[0];

		$sql_coa = "SELECT * FROM coa WHERE test_request_id = '$id'";
		$query_coa = $this->db->query($sql_coa)	;
		$query_coa = $query_coa->result_array();
		//$results_c = $query_coa->result_array();
		//$data['query_coa_c'] = $results_c[0];

   // print_r($results);
     //Information for letterhead
    $user=$this->session->userdata;
     $test_request_id=$user['logged_in']['test_request_id'];
     $user_type_id=$user['logged_in']['user_type'];
     $user_id=$user['logged_in']['id'];
     $department_id=$user['logged_in']['department_id'];
     $acc_status=$user['logged_in']['acc_status'];


  $this->load->library('mpdf/mpdf');
  $print = "";
  $i=1;

  $img=base_url().'images/meds_logo.png';// MEDS Logo 

  $print.='<table width="980" align="center" style ="font-family: Sans-Serif; color: #191970;">
  <tr>
            
            <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document:Official Form</b></td>
            <td width="150px" height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
            <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
              <input type="hidden" id="reference_number" name="reference_number" class="field"/>
              
            </td>
        </tr>
        <tr>
            <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: '.date("d/m/Y").'</b></td>
            <td height="25px"colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>REVISION NUMBER</b></td>
            <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
        </tr>
        <tr>
            <td width="150px" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
            <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>'.$user['logged_in']['fname']." ".$user['logged_in']['lname'].'</b></td>
            <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b>USER TYPE</b></td>
            <td colspan="" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">'.$user['logged_in']['role'].'</td>
        </tr>
        <tr>
          <td colspan="4" style="padding:8px;border-bottom: solid 1px #c4c4ff;border-right: solid 1px #c4c4ff;color: #0000fb;background-color: #c4c4ff;"></td>
        </tr>
        <tr>        
        <td colspan="6" align="center" 
        style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;">
        <h4><b>Certificate of Analysis Form</b></h4></td>
      </tr>';
      

  $print.='<td width = "250px"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>REGISTRATION NUMBER:</u></td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type="text" name="reg_no"></td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Request Date:</u></td>';
  $print.='<td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['date_time'].'</td>
          <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Test Date:</u></td>
           <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'.$query_coa_c['date_tested'].'</td></tr>';

  $print.='<tr><td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>NAME OF PRODUCT:</u></td>
       <td colspan="5" style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['active_ingredients'] .'</td></tr>';

  $print.='<tr>
        <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>CLIENT:</u></td>
        <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type="text" name="client"></td>       
        <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>MANUFACTURER:</u></td>
        <td colspan="4" style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'.$query_tr['manufacturer_name'].'</td>
    </tr>';
  $print.='<tr><td colspan="6"style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>LABEL CLAIM:<b></td></tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea cols ="70" rows ="3" name ="label_claim"></textarea></td></tr>';

  $print.='<tr><td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Batch Number:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?'.$query_tr['batch_lot_number'].'</td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Manufactured:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['date_manufactured'].'</td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Expires:</td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">'. $query_tr['expiry_date'].'</td></tr>';

  $print.='<tr>
      <td align= "center" colspan ="6" style="padding:8px;text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;">
        <h4><u>RESULTS OF ANALYSIS</u></h2></td>      
    </tr>
    <tr>
      <td colspan="6"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Appearance:</b></td>
    </tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea name ="appearance" cols ="70" rows ="3"></textarea></td></tr>';
  $print.='<tr>
      <td colspan="6">
      <table width="950px" bgcolor="#c4c4ff" border="0" cellpadding="4px" align="center">
        <thead>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></th>     
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">TEST</th>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">METHOD</th> 
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">SPECIFICATIONS</th>  
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">RESULTS</th>
          <th align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">REMARKS</th>     

        </thead>
        <tbody>';
  $print.='<tr>
      <td colspan="6"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>CONCLUSION:*<b></td> 
    </tr>
    <tr><td colspan="6" style ="padding:8px;"><textarea name ="conclusions" cols ="70" rows ="3"></textarea></td></tr>
    <tr>
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">PREPARED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>'.$query_coa_c['analyst'].'</b><br/>Laboratory Analyst</td>
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">REVIEWED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>'. $user['logged_in']['fname']." ".$user['logged_in']['lname'].'</b><br/>Laboratory Supervisor</td>         
         <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">APPROVED BY:</td>
         <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Quality Assurance Manager</td>         
      </tr>';
  
      

  $print .="</table>";
  echo $print;
  die;
  $this->load->library('mpdf/mpdf');// Load the library
  $this->mpdf->WriteHTML($print); // Output the results in the browser
  $this->mpdf->Output($filename,'D'); //bring up "Save as Dialog"

  }
}
?>