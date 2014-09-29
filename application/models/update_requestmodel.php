<?php
class Update_Requestmodel extends CI_Model {
// model constructor function
function __construct() {
    parent::__construct(); // call parent constructor
    $this->load->database();
}


function update_data($trid){
        //$test_request_id= $trid;
        // $user_type_id = $utid;

    $data = array(

       'reference_number'=>$this->input->post('reference_number'),
       'applicant_name'=>$this->input->post('applicant_name'),
       'applicant_address'=>$this->input->post('applicant_address'),
       'active_ingredients'=>$this->input->post('active_ingredients'),
       'dosage_form'=>$this->input->post('dosage_form'),
       'strength_concentration'=>$this->input->post('strength_concentration'),
       'pack_size'=>$this->input->post('pack_size'),
       'label_claim'=>$this->input->post('label_claim'),
       'manufacturer_name'=>$this->input->post('manufacturer_name'),
       'manufacturer_address'=>$this->input->post('manufacturer_address'),
       'brand_name'=>$this->input->post('brand_name'),
       'marketing_authorization_number'=>$this->input->post('marketing_authorization_number'),
       'batch_lot_number'=>$this->input->post('batch_lot_number'),
       'date_manufactured'=>$this->input->post('date_of_manufacture'),
       'expiry_date'=>$this->input->post('expiry_retest_date'),
       'storage_conditions'=>$this->input->post('storage_conditions'),
       'quantity_submitted'=>$this->input->post('quantity_submitted'),
       'quantity_remaining'=>$this->input->post('quantity_submitted'),
       'quantity_type'=>$this->input->post('quantity_type'),
       'sample_source'=>$this->input->post('sample_source'),
       'testing_reason'=>$this->input->post('reason'),
       'other_reason'=>$this->input->post('other_reason'),
       'other_test_required'=>$this->input->post('other_test'),
       'other_specification'=>$this->input->post('other_specification'),
       'identification'=>$this->input->post('identification'),
       'dissolution'=>$this->input->post('dissolution'),  
       'friability'=>$this->input->post('friability'),  
       'assay'=>$this->input->post('assay'),  
       'disintegration'=>$this->input->post('disintegration'),  
       'content_uniformity'=>$this->input->post('content_uniformity'), 
       'uniformity_of_dosage'=>$this->input->post('uniformity_of_dosage'),
       'weight_variation_mass_uniformity'=>$this->input->post('weight_variation_mass_uniformity'),
       'ph_alkalinity'=>$this->input->post('ph_alkalinity_acidity'), 
       'full_monograph'=>$this->input->post('full_monograph'), 
       'microbiology'=>$this->input->post('microbiology'),    
       'test_specification'=>$this->input->post('specification'),
       'authorizer_name'=>$this->input->post('authorizing_name'),
       'authorizer_designation'=>$this->input->post('designation'),
       'date_authorized'=>$this->input->post('date_authorized'),
       'findings_comments'=>$this->input->post('findings_comment'),
       'received_by'=>$this->input->post('received_by'),
       'date_received'=>$this->input->post('date_received'),
       'laboratory_number'=>$this->input->post('lab_reg_number')
        
    );

    $this->db->update('test_request', $data,array('id' => $trid));
    //var_dump($data);
    redirect('home');
}
}
?>