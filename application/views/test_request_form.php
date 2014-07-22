<script>
       
    $(document).ready(function(){
            $( "#applicant_name" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ url: "http://localhost/MEDS/test_request/suggestions",
                    data: { term: $("#applicant_name").val()},
                    dataType: "json",
                    type: "POST",
                    success: function(data){
                    $.each(data,function(i,jsondata){
                        $("#id").val(jsondata.id)
                        $("#applicant_name").val(jsondata.applicant_name)
                        $("#applicant_address").val(jsondata.applicant_address)
                        $("#applicant_reference_number").val(jsondata.applicant_ref_number)
                  			$("#authorizing_name").val(jsondata.authorizing_name)
                        
                    });
                    response(data);
                    }
                });
            },
            minLength: 2,
		
                Delay : 200
            });
	    
   
	
        $('#applicant_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#applicant_name_1').show();
             $('#applicant_name_r').hide();
          }else{
             $('#applicant_name_r').show();
            $('#applicant_name_1').hide();
          }
        })
        $( '#applicant_address' ).autocomplete()
             $('#applicant_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#applicant_address_1').show();
             $('#applicant_address_r').hide();
          }else{
             $('#applicant_address_r').show();
            $('#applicant_address_1').hide();
          }
        })
        $('#active_ingredients').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#active_ingredients_1').show();
            $('#active_ingredients_r').hide();
          }else{
            $('#active_ingredients_1').hide();
            $('#active_ingredients_r').show();
          }
        })
        $('#manufacturer_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#manufacturer_name_1').show();
            $('#manufacturer_name_r').hide();
          }else{
            $('#manufacturer_name_1').hide();
            $('#manufacturer_name_r').show();
          }
        })
        $('#manufacturer_address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#manufacturer_address_1').show();
            $('#manufacturer_address_r').hide();
          }else{
            $('#manufacturer_address_1').hide();
            $('#manufacturer_address_r').show();
          }
        })
        $('#brand_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#brand_name_1').show();
            $('#brand_name_r').hide();
          }else{
            $('#brand_name_1').hide();
            $('#brand_name_r').show();
          }
        })
       
        $('#batch_lot_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#batch_lot_number_1').show();
            $('#batch_lot_number_r').hide();
          }else{
            $('#batch_lot_number_1').hide();
            $('#batch_lot_number_r').show();
          }
        })
        
        $('#expiry_retest_date').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#expiry_retest_date_1').show();
            $('#expiry_retest_date_r').hide();
          }else{
            $('#expiry_retest_date_1').hide();
            $('#expiry_retest_date_r').show();
          }
        })
        
        $('#quantity_submitted').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#quantity_submitted_1').show();
            $('#quantity_submitted_r').hide();
          }else{
            $('#quantity_submitted_1').hide();
            $('#quantity_submitted_r').show();
          }
        })
        $('#sample_source').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#sample_source_1').show();
            $('#sample_source_r').hide();
          }else{
            $('#sample_source_1').hide();
            $('#sample_source_r').show();
          }
        })
        $('#authorizing_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#authorizing_name_1').show();
            $('#authorizing_name_r').hide();
          }else{
            $('#authorizing_name_1').hide();
            $('#authorizing_name_r').show();
          }
        })
        $('#designation').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#designation_1').show();
            $('#designation_r').hide();
          }else{
            $('#designation_1').hide();
            $('#designation_r').show();
          }
        })
	$('#lab_reg_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#lab_reg_number_1').show();
            $('#lab_reg_number_r').hide();
          }else{
            $('#lab_reg_number_1').hide();
            $('#lab_reg_number_r').show();
          }
        })
  $('#reference_number').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#reference_number_1').show();
            $('#reference_number_r').hide();
          }else{
            $('#reference_number_1').hide();
            $('#reference_number_r').show();
          }
        })
	$('#findings_comment').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#findings_comment_1').show();
            $('#findings_comment_r').hide();
          }else{
            $('#findings_comment_1').hide();
            $('#findings_comment_r').show();
          }
        });
        
        $('#refresh').click(function(){
         $('.field').each(function(){
             $(this).val("");               
            });   
        });
  
        $('#submit_m').click(function(){         
            count =0;
            $('.field').each(function(){
             if ($.trim(this.value)=="")
               count ++;
            });
            if(count>0){
              alert(count+' fields not filled')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>test_request/save",
                data:$('#test_request_form').serialize(),
                success:function(data){
                    data='Success';
                    alert(data);
                },
                //error:function(){
                   //alert('an error occured'); 
                //}
                
            })
           
            }
           
        })
    });
    

</script>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="meds">MEDS Analysis Test Request Form</h4>
</div>
<?php echo validation_errors(); ?>
<?php echo form_open('test_request/save',array('id'=>'test_request_form'));?>
<table class="table_form" bgcolor="#c4c4ff" width="95%"  border="0" cellpadding="8px" align="center">
  <input type="hidden" id="id" value="<?php echo"$user_type_id";?>" class="id" name="id"/>
  <input type="hidden" id="id" value="<?php echo"$user_id";?>" class="id" name="user_id"/>
	<input type="hidden" id="test_req" value="<?php echo"$test_request_id";?>"name="test_req"/>
	<tr>
	    <td rowspan="2" style="border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
	    <td colspan="2" height="25px" style="border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document: Form</b></td>
	    <td width="150px" height="25px" colspan="2" style="border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
	    <td colspan="3" style="border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
        <input type="text" id="reference_number" name="reference_number" class="field"/>
        <span id="reference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
        <span id="reference_number_r" style="color:red; display:none">Fill this field</span>
      </td>
	</tr>
	<tr>
	    <td colspan="2" style="border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: <?php echo date("d/m/Y")?></b></td>
	    <td height="25px"colspan="2" style="border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>REVISION NUMBER</b></td>
	    <td height="25px" colspan="3" style="border-bottom:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
	</tr>
	<tr>
	    <td width="150px" height="25px" style="border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
	    <td colspan="2" height="25px" style="border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></b></td>
	    <td colspan="2" style="border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>USER TYPE</b></td>
	    <td colspan="3" style="border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo("<b>".$user['logged_in']['role']);?></td>
	</tr>
  <tr>
      <td colspan="8" height="25px" align="center" style="border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #c4c4ff;">
      </td>
  </tr>
	
<div class="modal-body">
 
  <tr>
	    <td colspan="8" style="text-align:right;padding:4px;border-bottom: solid 10px #c4c4ff;color:#0000fb;background-color:#ffffff;"><input class="btn" type="button" name="refresh" id="refresh" value="Refresh"/></td>
  </tr>
  <tr>    
    <td height="25px" colspan="2" style="padding:4px;background-color:#ffffff;"><h6><b>Name of Applicant</b></h6></td>
    <td height="25px" colspan="6" style="padding:2px;background-color:#ffffff;"><input type="text" class="field" size="50" id="applicant_name"  name="applicant_name"/><span id="applicant_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png'?>" height="10px" width="10px"></span><span id="applicant_name_r" style="color:red; display:none">Fill in this field</span></td>
  </tr>
  <tr>
    <td height="25px" colspan="2" style="padding:2px;background-color:#ffffff;"><h6><b>Address of Applicant</b></h6></td>
    <td height="25px" colspan="6" style="padding:2px;background-color:#ffffff;"><input type="text" class="field" size="50" class="field" id="applicant_address" name="applicant_address" /><span id="applicant_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="applicant_address_r" style="color:red; display:none">Fill in this field</span></td>
  </tr>
  <tr>
    <td colspan="8" style="border-bottom:solid 1px #c4c4ff;background-color:#ffffff;"><h6><b>Sample Description</b></h6></td>
  </tr>
  <tr>
    <td height="25px" style="border-bottom:solid 10px #c4c4ff;background-color:#ffffff;text-align: center;color:#00b000;" colspan="8"><b>(*Provide International Non-Proprietary Name of Active Ingredient'(s) if available)</b></td>
  </tr>
  <tr>
      <td height="25px" style="padding:4px;background-color:#ffffff;text-align: right;"></td>
      <td height="25px" width="200px" colspan="4" style="padding:8px;background-color:#ffffff;text-align: left;">Active ingredient(s)*, dosage from, strength or concentration and pack size</td>
      <td height="25px" colspan="4" style="padding:8px;background-color:#ffffff;"><textarea rows="1" class="field" cols="40" name="active_ingredients" id="active_ingredients"></textarea><span id="active_ingredients_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="active_ingredients_r" style="color:red; display:none">Fill this</span></td>
  </tr>
  <tr>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: right;"></td>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Name of Manufacturer</td>
      <td height="25px" style="background-color:#ffffff;text-align: left;" ><input type="text" class="field" name="manufacturer_name"  id="manufacturer_name"/><span id="manufacturer_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="manufacturer_name_r" style="color:red; display:none">Fill this</span></td>
      <td colspan="2" style="padding:2px;background-color:#ffffff;"></td>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Address of Manufacturer</td>
      <td height="25px" colspan="2" style="padding:2px;background-color:#ffffff;text-align: left;"><input type="text" class="field" id="manufacturer_address" name="manufacturer_address"/><span id="manufacturer_address_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="manufacturer_address_r" style="color:red; display:none">Fill this</span></td>
  </tr>
  <tr>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: right;"></td>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Brand Name</td>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;"><input class="field" type="text" name="brand_name" id="brand_name"><span id="brand_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="brand_name_r" style="color:red; display:none">Fill this</span></td>
      <td colspan="2" height="25px" style="padding:2px;background-color:#ffffff;"></td>
      <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Marketing Authorization Number</td>
      <td height="25px" colspan="2" style="padding:2px;background-color:#ffffff;text-align: left;"><input type="text" id="marketing_authorization_number" name="marketing_authorization_number"><td>
  </tr>
  <tr>
    <td height="25px" style="padding:2px;background-color:#ffffff;text-align: right;"></td>
    <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Batch/Lot Number</td>
    <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;"><input type="text" class="field" name="batch_lot_number" id="batch_lot_number"><span id="batch_lot_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="batch_lot_number_r" style="color:red; display:none">Fill this</span></td>
    <td colspan="2"  height="25px" style="padding:2px;background-color:#ffffff;"></td>
    <td height="25px" style="padding:2px;background-color:#ffffff;text-align: left;">Date of Manufacture</td>
    <td height="25px" colspan="2" style="padding:2px;background-color:#ffffff;text-align: left;"><input type="date"  name="date_of_manufacture" id="date_of_manufacture"></td>
  </tr>
  <tr>
    <td style="padding:2px;background-color:#ffffff;text-align: right;"></td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;">Expiry/Retest Date</td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;"><div id="exp_date"><input type="date" class="field" id="expiry_retest_date" name="expiry_retest_date"><span id="expiry_retest_date_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="expiry_retest_date_r" style="color:red; display:none">Fill this</span></td>
    <td colspan="2" style="padding:2px;background-color:#ffffff;"></td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;">Storage Conditions</td>
    <td colspan="2" style="padding:2px;background-color:#ffffff;text-align: left;"><input type="text"  id="storage_conditions" name="storage_conditions"></td>
  </tr>
  <tr>
    <td style="padding:2px;background-color:#ffffff;text-align: right;"></td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;">Quantity Submitted</td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;"><input type="text" class="field" id="quantity_submitted" name="quantity_submitted"><span id="quantity_submitted_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="quantity_submitted_r" style="color:red; display:none">Fill this</span></td>
    <td colspan="2" style="padding:2px;background-color:#ffffff;">
      <select name="quantity_type">
        <option>-------</option>
        <option value="Tablets">Tables</option>
        <option value="Bottles">Bottles</option>
      </select>
    </td>
    <td style="padding:2px;background-color:#ffffff;text-align: left;">Applicant's Reference Number</td>
    <td  colspan="2" style="background-color:#ffffff;text-align: left;"><input type="text" id="applicant_reference_number" name="applicant_reference_number"></td>
  </tr>
  <tr>
    <td height="25px" colspan="2" style="padding:2px;background-color:#ffffff;"><h6><b>Sample Source</b></h6></td>
    <td height="25px" colspan="6" style="padding:2px;background-color:#ffffff;"><textarea rows="1" cols="80" class="field" id="sample_source" name="sample_source"></textarea><span id="sample_source_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="sample_source_r" style="color:red; display:none">Fill this</span></td>
  </tr>
  <tr>
    <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><h6><b>Reason for Requesting Analysis</b> (Tick as appropriate)</h6></td>
  </tr>
  <tr>
    <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' checked="checked" name='reason' id='compliance_testing' value="Compliance Testing">Compliance Testing</td>
  </tr>
  <tr>
    <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' name='reason' id='investigative_testing' value="Investigative Testing">Investigative Testing</td>
  </tr>
	<tr>
    <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;"><h6>Other(Please Specify)</h6></td>
  </tr>
  <tr>
    <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;"><textarea rows="3" cols="90" name='other_reason' id='other_reason'></textarea></td>
  </tr>
  <tr>
    <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><h6><b>Test(s) Required:</b> (Tick as appropriate)</h6></td>
  </tr>
  <tr>
    <td colspan="8" style="padding:2px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;">
        <table class ="inner_table" width="80%"  cellpadding="8px" height="150px" align="center" border="0">
          <tr>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>No</b></td>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Test</b></td>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Requirement</b></td>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>No</b></td>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Test</b></td>
            <td style="padding:2px;border-bottom:solid 1px #f2f2f2;text-align:center;"><b>Requirement</b></td>
          </tr>
          <tr>
            <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">i.</td>
            <td>Identification</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='identifications' id='identification' value='1'></td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">v.</td>
            <td>Dissolution</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='dissolution' id='dissolution' value='5'></td>
          </tr>
          <tr>
            <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">ii.</td>
            <td>Friability</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='friability' id='friability' value='2'></td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">vi.</td>
            <td>Assay</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='assay' id='assay' value='6'></td>
          </tr>
          <tr>
            <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iii.</td>
            <td>Disintegration</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='disintergration' id='disintergration' value='3'></td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">vii.</td>
            <td>Content Uniformity</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='content_uniformity' id='content_uniformity' value='7'></td>
          </tr>
          <tr>
            <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">iv.</td>
            <td>pH(Acidity/Alkalinity)</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='ph_alkalinity_acidity' id='ph_alkalinity_acidity' value='4'></td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;">viii.</td>
            <td>Full Monograph</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='full_monograph' id='full_monograph' value='8'></td>
          </tr>
  	      <tr>
      		  <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;"></td>
            <td></td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"></td>
            <td style="padding:2px;border-left:solid 1px #f2f2f2;border-right:solid 1px #f2f2f2;text-align:center;">ix.</td>
            <td>Microbiology</td>
            <td style="padding:2px;border-right:solid 1px #f2f2f2;text-align:center;"><input type='checkbox' name='microbiology' id='microbiology' value='9'></td>
          </tr>
      </table>
    </td>
		<tr>
	    <td height="25px" colspan="8"  style="padding:2px;background-color:#ffffff;"><h6>Other(Please specify)</h6></td>
		</tr>
		<tr>
	    <td colspan="8" style="padding:2px;background-color:#ffffff;"><textarea rows="3" cols="90" name="other_test" id="other_test" ></textarea></td>
		</tr>
    <tr>
      <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><h6><b>Specifications to be used for testing:</b>(Tick as appropriate)</h6></td>
    </tr>
    <tr>
      <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' checked="checked" name='specification' id='usp' value=''>USP</td>
    </tr>
    <tr>
      <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' name='specification' id='bp' value=''>BP</td>
    </tr>
    <tr>
      <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' name='specification' id='european_pharmacopeia' value=''>European Pharmacopoeia</td>
    </tr>
    <tr>
      <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' name='specification' id='international_pharmacopeia' value=''>International Pharmacopoeia</td>
    </tr>
    <tr>
      <td colspan="8" style="padding:2px;background-color:#ffffff;"><input type='radio' name='specification' id='manufacturers_specs' value=''>Manufacturer's Specifications</td>
    </tr>
    <tr>
      <td height="25px" colspan="8" style="background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><h6>Other(Please specify)</h6></td>
    </tr>
  	<tr>
  	 <td colspan="8" style="padding:2px;background-color:#ffffff;"><textarea rows="3" cols="90" id="other_specification" name="other_specification"></textarea></td>
	  </tr>
  </div>  
    <tr>
      <td height="25px" colspan="8" style="padding:2px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><h6><b><p>Note:</b> If manufacturer's or 'other', please provide methods of analysis and specifications</p></h6></td>
    </tr>
    <tr>
      <td height="25px" colspan="8" style="background-color:#ffffff;border-bottom:solid 10px #c4c4ff;"><h6><b>Details of person authorizing request for analysis</b></h6></td>
    </tr>
    <tr>
      <td height="25px" style="padding:4px;background-color:#ffffff;">Name</td>
      <td height="25px" style="padding:4px;background-color:#ffffff;"><input type="text" class="field" id="authorizing_name" name="authorizing_name"/><span id="authorizing_name_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="authorizing_name_r" style="color:red; display:none">Fill this</span></td>
      <td height="25px" style="padding:4px;text-align:right;background-color:#ffffff;">Designation</td>
      <td height="25px" colspan="5" style="padding:4px;background-color:#ffffff;"><input type="text" class="field" id="designation" name="designation"/><span id="designation_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="designation_r" style="color:red; display:none">Fill this</span></td>
	  </tr>
    <tr>
      <td height="25px" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;">Lab Registration No</td>
      <td height="25px" colspan="7" style="padding:4px;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><input type="text" class="field" id="lab_reg_number" name="lab_reg_number"/><span id="lab_reg_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="lab_reg_number_r" style="color:red; display:none">Fill this</span></td>
      <input height="25px" type="hidden" id="received_by" name="received_by" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>"/>
    <tr>
	    <td height="25px" colspan="8" width="120px" style="padding:4px;text-align:left;background-color:#ffffff;border-bottom:solid 1px #c4c4ff;"><h6><b>Comments</b><span id="findings_comment_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="findings_comment_r" style="color:red; display:none">Fill this</span></h6></td>
    </tr>
    <tr>  
      <td height="25px" colspan="8" style="padding:4px;background-color:#ffffff;"><textarea rows="3" cols="90" type="text" class="field" id="findings_comment" name="findings_comment"></textarea></td>
	  </tr>
  <div class="modal-footer">
    <tr>
      <td  height="25px" style="padding:4px;background-color:#ffffff;border-top: solid 1px #bfbfbf;text-align: center;" colspan="8" ><input class="btn" type="submit" name="submit_m" id="submit_m" value="Submit"></td>
    </tr>
  </table>
  </div>
</form>
</div>
</div>  