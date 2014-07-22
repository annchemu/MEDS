<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>MEDS</title>
  <link rel="icon" href="" />
  <link href="<?php echo base_url().'style/core.css';?>" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url().'style/forms.css';?>" rel="stylesheet" type="text/css" />
   
  <link href="<?php echo base_url().'style/jquery.tooltip.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'style/jquery-ui.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'style/demo_table.css';?>" rel="stylesheet" type="text/css"/>
  
  <!-- bootstrap reference links  
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.css.map';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.min.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css.map'; ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap-theme.css';?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" type="text/css"/>  
   -->
  <!-- bootstrap reference library -->
  <link href="<?php echo base_url().'bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" type="text/css"/>

  <script src="<?php echo base_url().'js/jquery.js';?>"></script>
  <script src="<?php echo base_url().'js/jquery-ui.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/tabs.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/jquery.validate.js';?>"></script>
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
  <script>
   $(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
    $("#equipment_make").change(function(){
         var id_number=$(this).val();
         //append to textbox
         $("#equipment_number").val(id_number);
    });

    $("#balance_make").change(function(){
         var id_number=$(this).val();
         //append to textbox
         $("#balance_number").val(id_number);
    });
        $("#name").on('change',function(){
      var dimensions=$(this).find(":selected").data("dimensions");
      var serial_number=$(this).find(":selected").data("serialnumber");
      var manufacturer=$(this).find(":selected").data("manufacturer");
      $("#length").val(dimensions);
      $("#serial_no").val(serial_number);
      $("#manufacturer").val(manufacturer);
    });
   });
  </script>
  <script>
       function standard_weight_calc(){
        var total = document.getElementById('standard_container').value - document.getElementById('container').value;
        document.getElementById('standard_weight_1').value = total;
       }

       function standard_weight_calc_2(){
        var total = document.getElementById('standard_container_1').value - document.getElementById('container_1').value;
        document.getElementById('standard_weight_2').value = total;
       }

       function average_retention_time(){
        var total = parseInt(document.getElementById('rt_1').value) + parseInt(document.getElementById('rt_2').value)+
                    parseInt(document.getElementById('rt_3').value) + parseInt(document.getElementById('rt_4').value)+
                    parseInt(document.getElementById('rt_5').value) + parseInt(document.getElementById('rt_6').value);
        document.getElementById('rt_avg').value = (total)/6;
       }

       function average_peak_area(){
        var total = parseInt(document.getElementById('peak_area_1').value) + parseInt(document.getElementById('peak_area_2').value)+
                    parseInt(document.getElementById('peak_area_3').value) + parseInt(document.getElementById('peak_area_4').value)+
                    parseInt(document.getElementById('peak_area_5').value) + parseInt(document.getElementById('peak_area_6').value);
                    document.getElementById('peak_area_avg').value = (total)/6;
       }

       function average_asymmetry(){
        var total = parseInt(document.getElementById('asymmetry_1').value) + parseInt(document.getElementById('asymmetry_2').value)+
                    parseInt(document.getElementById('asymmetry_3').value) + parseInt(document.getElementById('asymmetry_4').value)+
                    parseInt(document.getElementById('asymmetry_5').value) + parseInt(document.getElementById('asymmetry_6').value);
                    document.getElementById('asymmetry_avg').value = (total)/6;
       }
    
       function average_resolution(){
        var total = parseInt(document.getElementById('resolution_1').value) + parseInt(document.getElementById('resolution_2').value)+
                    parseInt(document.getElementById('resolution_3').value) + parseInt(document.getElementById('resolution_4').value)+
                    parseInt(document.getElementById('resolution_5').value) + parseInt(document.getElementById('resolution_6').value);
                    document.getElementById('resolution_avg').value = (total)/6;
       }
       function avg_standard(){
        var total = parseInt(document.getElementById('sample_1').value) + parseInt(document.getElementById('sample_2').value)+
                    parseInt(document.getElementById('sample_3').value) + parseInt(document.getElementById('sample_4').value)+
                    parseInt(document.getElementById('sample_5').value); 
                    document.getElementById('avg').value = (total)/5;
       }
       function avg_sample1(){
        var total = parseInt(document.getElementById('sample_1_s1').value) + parseInt(document.getElementById('sample_2_s1').value)+
                    parseInt(document.getElementById('sample_3_s1').value) + parseInt(document.getElementById('sample_4_s1').value)+
                    parseInt(document.getElementById('sample_5_s1').value); 
                    document.getElementById('avg_s1').value = (total)/5;
       }
       function avg_sample2(){
        var total = parseInt(document.getElementById('sample_1_s2').value) + parseInt(document.getElementById('sample_2_s2').value)+
                    parseInt(document.getElementById('sample_3_s2').value) + parseInt(document.getElementById('sample_4_s2').value)+
                    parseInt(document.getElementById('sample_5_s2').value); 
                    document.getElementById('avg_s2').value = (total)/5;
       }
       function avg_sample3(){
        var total = parseInt(document.getElementById('sample_1_s3').value) + parseInt(document.getElementById('sample_2_s3').value)+
                    parseInt(document.getElementById('sample_3_s3').value) + parseInt(document.getElementById('sample_4_s3').value)+
                    parseInt(document.getElementById('sample_5_s3').value); 
                    document.getElementById('avg_s3').value = (total)/5;
       }
       function avg_sample4(){
        var total = parseInt(document.getElementById('sample_1_s4').value) + parseInt(document.getElementById('sample_2_s4').value)+
                    parseInt(document.getElementById('sample_3_s4').value) + parseInt(document.getElementById('sample_4_s4').value)+
                    parseInt(document.getElementById('sample_5_s4').value); 
                    document.getElementById('avg_s4').value = (total)/5;
       }
       function avg_sample5(){
        var total = parseInt(document.getElementById('sample_1_s5').value) + parseInt(document.getElementById('sample_2_s5').value)+
                    parseInt(document.getElementById('sample_3_s5').value) + parseInt(document.getElementById('sample_4_s5').value)+
                    parseInt(document.getElementById('sample_5_s5').value); 
                    document.getElementById('avg_s5').value = (total)/5;
       }
       function avg_sample6(){
        var total = parseInt(document.getElementById('sample_1_s6').value) + parseInt(document.getElementById('sample_2_s6').value)+
                    parseInt(document.getElementById('sample_3_s6').value) + parseInt(document.getElementById('sample_4_s6').value)+
                    parseInt(document.getElementById('sample_5_s6').value); 
                    document.getElementById('avg_s6').value = (total)/5;
       }
       function determination_calc_1(){
        var upper = parseInt(document.getElementById('det_1_pkt').value) * parseInt(document.getElementById('det_1_wstd').value)*
                    parseInt(document.getElementById('det_1_df').value) * parseInt(document.getElementById('det_1_potency').value);  

        var lower = parseInt(document.getElementById('det_1_pkstd').value) * parseInt(document.getElementById('det_1_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_1').value = total;
       }
       function determination_calc_2(){
        var upper = parseInt(document.getElementById('det_2_pkt').value) * parseInt(document.getElementById('det_2_wstd').value)*
                    parseInt(document.getElementById('det_2_df').value) * parseInt(document.getElementById('det_2_potency').value);  

        var lower = parseInt(document.getElementById('det_2_pkstd').value) * parseInt(document.getElementById('det_2_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_2').value = total;
       }
       function determination_calc_3(){
        var upper = parseInt(document.getElementById('det_3_pkt').value) * parseInt(document.getElementById('det_3_wstd').value)*
                    parseInt(document.getElementById('det_3_df').value) * parseInt(document.getElementById('det_3_potency').value);  

        var lower = parseInt(document.getElementById('det_3_pkstd').value) * parseInt(document.getElementById('det_3_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_3').value = total;
       }
       function determination_calc_4(){
        var upper = parseInt(document.getElementById('det_4_pkt').value) * parseInt(document.getElementById('det_4_wstd').value)*
                    parseInt(document.getElementById('det_4_df').value) * parseInt(document.getElementById('det_4_potency').value);  

        var lower = parseInt(document.getElementById('det_4_pkstd').value) * parseInt(document.getElementById('det_4_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_4').value = total;
       }
       function determination_calc_5(){
        var upper = parseInt(document.getElementById('det_5_pkt').value) * parseInt(document.getElementById('det_5_wstd').value)*
                    parseInt(document.getElementById('det_5_df').value) * parseInt(document.getElementById('det_5_potency').value);  

        var lower = parseInt(document.getElementById('det_5_pkstd').value) * parseInt(document.getElementById('det_5_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_5').value = total;
       }
       function determination_calc_6(){
        var upper = parseInt(document.getElementById('det_6_pkt').value) * parseInt(document.getElementById('det_6_wstd').value)*
                    parseInt(document.getElementById('det_6_df').value) * parseInt(document.getElementById('det_6_potency').value);  

        var lower = parseInt(document.getElementById('det_6_pkstd').value) * parseInt(document.getElementById('det_6_lc').value);
        var total = (upper/lower)*100;
        
                    document.getElementById('determination_6').value = total;
       }
       function sd_retention_time(){
        var average_retention_time = (parseInt(document.getElementById('rt_1').value) + parseInt(document.getElementById('rt_2').value)+parseInt(document.getElementById('rt_3').value) + parseInt(document.getElementById('rt_4').value)+parseInt(document.getElementById('rt_5').value) + parseInt(document.getElementById('rt_6').value))/6;
        var samples_retention_time = [parseInt(document.getElementById('rt_1').value), parseInt(document.getElementById('rt_2').value),parseInt(document.getElementById('rt_3').value), parseInt(document.getElementById('rt_4').value),parseInt(document.getElementById('rt_5').value), parseInt(document.getElementById('rt_6').value)];            
        var variance_retention_time=0;

        for(var i=0;i<samples_retention_time.length; i++){
           variance_retention_time += Math.pow((samples_retention_time [i]-average_retention_time),2);
         }
         var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/i);
         document.getElementById('rt_sd').value = standard_deviation_retention_time;
       }
       function sd_peak_area(){
        var average_peak_area = (parseInt(document.getElementById('peak_area_1').value) + parseInt(document.getElementById('peak_area_2').value)+parseInt(document.getElementById('peak_area_3').value) + parseInt(document.getElementById('peak_area_4').value)+parseInt(document.getElementById('peak_area_5').value)+parseInt(document.getElementById('peak_area_6').value))/6;
        var samples_peak_area = [parseInt(document.getElementById('peak_area_1').value), parseInt(document.getElementById('peak_area_2').value), parseInt(document.getElementById('peak_area_3').value) + parseInt(document.getElementById('peak_area_4').value), parseInt(document.getElementById('peak_area_5').value) + parseInt(document.getElementById('peak_area_6').value)];
        var variance_peak_area = 0;

        for(var i=0;i<samples_peak_area.length; i++){
           variance_peak_area += Math.pow((samples_peak_area [i]-average_peak_area),2);         
         }
          var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/i);
          document.getElementById('peak_area_sd').value = standard_deviation_peak_area;
       }
       function sd_asymmetry(){
        var average_asymmetry = (parseInt(document.getElementById('asymmetry_1').value) + parseInt(document.getElementById('asymmetry_2').value)+parseInt(document.getElementById('asymmetry_3').value) + parseInt(document.getElementById('asymmetry_4').value)+parseInt(document.getElementById('asymmetry_5').value) + parseInt(document.getElementById('asymmetry_6').value))/6;
        var samples_asymmetry =[parseInt(document.getElementById('asymmetry_1').value), parseInt(document.getElementById('asymmetry_2').value), parseInt(document.getElementById('asymmetry_3').value), parseInt(document.getElementById('asymmetry_4').value), parseInt(document.getElementById('asymmetry_5').value), parseInt(document.getElementById('asymmetry_6').value)];
        var variance_asymmetry =0;

        for(var i=0;i<samples_asymmetry.length; i++){
           variance_asymmetry += Math.pow((samples_asymmetry [i]-average_asymmetry),2);         
         }
         var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/i);
         document.getElementById('asymmetry_sd').value = standard_deviation_asymmetry;
       }
       function sd_resolution(){
        var average_resolution = (parseInt(document.getElementById('resolution_1').value) + parseInt(document.getElementById('resolution_2').value)+ parseInt(document.getElementById('resolution_3').value) + parseInt(document.getElementById('resolution_4').value)+ parseInt(document.getElementById('resolution_5').value) + parseInt(document.getElementById('resolution_6').value))/6;
        var samples_resolution = [parseInt(document.getElementById('resolution_1').value), parseInt(document.getElementById('resolution_2').value),parseInt(document.getElementById('resolution_3').value), parseInt(document.getElementById('resolution_4').value),parseInt(document.getElementById('resolution_5').value), parseInt(document.getElementById('resolution_6').value)];
        var variance_resolution=0;
      
       for(var i=0;i<samples_resolution.length; i++){
           variance_resolution += Math.pow((samples_resolution [i]-average_resolution),2);         
         }

        var standard_deviation_resolution= Math.sqrt((variance_resolution)/i);
        document.getElementById('resolution_sd').value = standard_deviation_resolution;
      }
   </script>
  </head
  <body>
      <?php
   $user=$this->session->userdata;
   $test_request_id=$user['logged_in']['test_request_id'];
   $user_type_id=$user['logged_in']['user_type'];
   $user_id=$user['logged_in']['id'];
   $department_id=$user['logged_in']['department_id'];
   $acc_status=$user['logged_in']['acc_status'];
   $id_temp=1;
   //var_dump($user);
  ?>
  <div id="header"> 
  <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/><b>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</b></div>
  <div id="log_bar">
  <table  border="0" cellpadding="2px" align="center" width="100%">
      <tr>
        
        <td style="border-bottom: solid 1px #c4c4ff;padding:4px;text-align: center;background-color: #ffffff;" width="20px">
           <img src="<?php echo base_url().'images/icons/user_blue.png';?>" height="25px" width="24px">
        </td>
       <td style="border-bottom: solid 1px #c4c4ff;padding:2px;text-align: left;background-color: #ffffff;" width="130px">
          <?php 
           echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);
         ?> 
       </td>
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;"></td>
        <td style="border-bottom: solid 1px #c4c4ff;padding:4px;background-color: #ffffff;" width="200px"></td>
         <td style="background-color:#ffffff;border-bottom: solid 1px #c4c4ff;padding:2px;" >
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> 
              <?php 
               echo($user['logged_in']['role']);
              ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id.'/'.$department_id;?>"><i class="icon-wrench"></i> Settings <img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"></a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url().'home/logout'?>"><i class="icon-share"></i>Logout</b> <img src="<?php echo base_url().'images/icons/door.png';?>" height="25px" width="25px"></a></li>
            </ul>
          </div>
        </td>
      </tr>
  </table> 
  </div>
</div>
<div id="form_wrapper">
<div id="forms">
<?php echo form_open('test_dissolution/worksheet_normal_hplc', array('id'=>'test_dissolution_view'));?>

<table width="950" class="table_form" border="0" cellpadding="4px" align="center">
     <input type="hidden" name ="assignment" value ="<?php echo $assignment;?>"><input type="hidden" name ="test_request" value ="<?php echo $test_request;?>">
      <input type="hidden" name ="analyst" value ="<?php echo $user['logged_in']['fname']." ".$user['logged_in']['lname'];?>"> 
      <tr>
        <td colspan="6"  style="padding: 8px;text-align:right;background-color:#fdfdfd;padding:8px;border-bottom:solid 1px #bfbfbf;"><a href="<?php echo base_url().'test/index/'.$assignment.'/'.$test_request?>"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="20px" width="20px">Back to Test Lists</a></td>
    </tr>
    <tr>
     <td colspan ="6">
      <table width="100%" bgcolor="#c4c4ff" cellpadding="8px" border="0" align ="center">
        <tr>
        <td rowspan="2" colspan ="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
        <td colspan="6" style="padding:4px;color:#0000ff;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</td>
        </tr>
        <tr>    
            <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Document: Analytical Worksheet</td>
            <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Title: <?php echo $results['active_ingredients'];?> <?php echo $results['test_specification'] ;?></td>
            <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;">REFERENCE NUMBER</td>
            <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><input type="text" id="reference_number" name="reference_number" class="field"/><span id="reference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="reference_number_r" style="color:red; display:none">Fill this field</span></td>
        </tr>
        <tr>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">EFFECTIVE DATE: <?php echo date("d/m/Y")?></td>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">ISSUE/REV 2/2</td>
              <td height="25px"colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SUPERSEDES: 2/1</td>
              <td height="25px" colspan="3" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">PAGE 1 of 1</td>
        </tr>
        <tr>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SERIAL No.</td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><input type="text" name="serial_number"></input></td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Batch/Lot No.</td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo $results['batch_lot_number'] ;?></td>          
        </tr>
        <tr>
              <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">Form Authorized By:</td>
              <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
              <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">USER TYPE</td>
              <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $user['logged_in']['role'];?></td>
        </tr> 
      </table>
    </td>
    </tr>
     <tr>
      <td colspan="6" align="center" style="padding:8px;">
        <table border="0" align="center" cellpadding="8px" width="100%">
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Registration Number: <?php echo $results['laboratory_number'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Request Date: <?php echo $results['date_time'];?></td>
            </tr>
            <tr>
              <td colspan="8" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Label Claim: <?php echo $results['active_ingredients'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Brand Name: <?php echo $results['brand_name'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Method/Specifications: <?php echo $results['test_specification'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Manufacturer Details:<br><br> <?php echo $results['manufacturer_name'];?><br><?php echo $results['manufacturer_address'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Clients Details:<br><br> <?php echo $results['applicant_name'];?><br><?php echo $results['applicant_address'];?> </td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Manufacturer Date: <?php echo $results['date_manufactured'];?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Expiry Date: <?php echo $results['expiry_date'];?></td>
            </tr>
            <tr>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Analysis Start Date: <?php echo date("d/m/Y")?></td>
              <td height="25px" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Analysis End Date: <input type="text" value="<?php echo date("d/m/Y");?>"></td>
            </tr>
        </table>
      </td>
    </tr>
    <tr> 
          <td colspan ="6" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"> MEDS Dissolution Test Form: By Normal HPLC Method</td>
    </tr> 
    <tr>
        <td colspan="6"  align="center" style="padding:8px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"></td>
    </tr>
         <tr>
        <td colspan=""align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Make:</td>
        <td colspan = "2" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select id ="equipment_make" name="equipment_make">
              <option selected></option>
               <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value="<?php echo $equipment['id_number'];?>"><?php echo $equipment['model'];?></option>
                <?php
                endforeach
                ?> 
              
            </select>
         </td>    
      
        <td colspan=""align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID Number:</td>
        <td colspan = "2" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type ="text" name ="equipment_number" id="equipment_number"></td>
      </tr>
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;" ><b>Preparation of Dissolution Medium</b></td>
      </tr>
       <tr>
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "dissolution_prepaparation"></textarea></td>
      </tr>
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;" ><b>Dissolution System Setup</b></td>
      </tr>
      <tr>
        <td align = "" colspan = "2"style="padding: 8px;" ><b>Requirements</b></td><td align = "center"style="padding: 8px;" ><b>Actual</b></td><td align = "left"style="padding: 8px;" colspan = "6"><b>Comment</b></td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;">Apparatus</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="apparatus"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="actual_apparatus"> </td>        
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="apparatus_comment"> </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Rotation</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rotation"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_rotation"> </td>        
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rotation_comment"> </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Time</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="time"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_time"> </td>        
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="time_comment"> </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Temperarture</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="temperature"> </td>        
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="actual_temperature"> </td>        
        <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="temperature_comment"> </td>
      </tr>
      <tr>
        <td colspan = "6"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;color: #0000fb;"><b>Sample Preparation</b></td>
      </tr>
       <tr>
        <td colspan = "6" align ="center"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "sample_preparation"></textarea></td>
      </tr>
       <tr>
        <td colspan = "6"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Weight of Standard</b></td>
      </tr>
       <tr>
        <td colspan = "6"align ="center"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name ="standard_weight"></textarea></td>
      </tr>
      <tr>
        <td align="left" colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Standard Description:</b></td>
        <td colspan = "4" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">
            <select id="standard_description" name="standard_description" >
              <option selected></option>
               <?php
               foreach($sql_standards as $s_name):
              ?>
               
               <option value="<?php  echo $s_name['item_description'];?>"><?php  echo $s_name['item_description'];?></option>
                <?php
                endforeach
                ?>
            </select>
          </td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency:</td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="potency"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Lot No.:</td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="lot_no"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID No.:</td>
        <td colspan = ""style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="id_no"> </td>
      </tr>
       <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container" id ="standard_container"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container" id ="container" onchange ="standard_weight_calc()"> </td>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
        <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_1" id ="standard_weight_1" > </td>
      </tr>  
      <tr>  
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Dilution</td>
        <td colspan ="5" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">  <textarea rows ="4" cols ="80" name ="standard_dilution"></textarea> </td>
      </tr>  
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;" ><b>Determination of content- HPLC</b></td>
      </tr> 
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;" >System suitability </td>
      </tr> 
      <tr>
        <td colspan=""align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Balance Make:</td>
        <td colspan = "2" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select id ="balance_make" name="balance_make">
              <option selected></option>
               <?php
               foreach($query_e as $equipment):
              ?>
               
               <option value="<?php echo $equipment['id_number'];?>"><?php echo $equipment['model'];?></option>
                <?php
                endforeach
                ?> 
              
            </select>
         </td>    
      
        <td colspan=""align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID Number:</td>
        <td colspan = "2" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type ="text" name ="balance_number" id="balance_number"></td>
      </tr>
      <tr>
        <td colspan="6"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;"><b>Standard Description:<b></td>        
      </tr>
      <tr>
        <td align="center" colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
          <select id="standard_description" name="standard_description_1" >
              <option selected></option>
               <?php
               foreach($sql_standards as $s_name):
              ?>
               
               <option value="<?php  echo $s_name['item_description'];?>"><?php  echo $s_name['item_description'];?></option>
                <?php
                endforeach
                ?>
            </select></td>
        <td colspan = "" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Potency: <input type ="text" name="potency_1"></br> </td><td>Lot No.:<input type ="text" name="lot_no_1"> </td><td>ID No.:<input type ="text" name="id_no_1"> </td>
       
      </tr>
       <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>         
        <td colspan="4"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_1" id ="standard_container_1"> </td>      
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
        <td colspan="4"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_1" id ="container_1" onchange ="standard_weight_calc_2()"> </td>
      </tr>
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
        <td colspan="4"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_2" id ="standard_weight_2"> </td>
      </tr> 
      <tr>
        <td colspan="2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Dilution</td>
        <td colspan ="4" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <textarea rows ="4" cols ="80" name ="standard_dilution_1"></textarea> </td>
      </tr> 
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Mobile Phase Preparation</b></td>
      </tr>
       <tr>
        <td colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><textarea cols="50" rows="4" name = "mobile_phase"></textarea></td>
      </tr>
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>The chromatographic conditions:</b></td>
      </tr>
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Chromatographic System</b></td>
      </tr>
      <tr>
        <td colspan ="6">
           <table border="0" align="center" cellpadding="8px" width="100%">
            <tr>
              <td rowspan = "2" colspan ="2"align="right" style="padding: 8px;background-color:#ffffff;border-right: solid 1px #bfbfbf;border-left: solid 1px #bfbfbf;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>A stainless steel column:</b></td>
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Name:</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
                <select id="name" name="name" >
                  <option selected></option>
                   <?php
                   foreach($sql_columns as $c_name):
                  ?>
                   <option value="<?php  echo $c_name['column_type'];?>" data-dimensions="<?php echo $c_name['column_dimensions']; ?>" data-serialnumber="<?php echo $c_name['serial_number']; ?>" data-manufacturer="<?php echo $c_name['manufacturer']; ?>" ><?php  echo $c_name['column_type'];?></option>
                    <?php
                    endforeach
                    ?>
                </select>
              </td>       
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Length:</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;border-right: solid 1px #bfbfbf;"> <input type ="text" name="length" id ="length"> </td>       
            </tr> 
            <tr>
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Lot/Serial No.:</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="serial_no" id ="serial_no"> </td>       
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Manufacturer:</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;border-right: solid 1px #bfbfbf;"> <input type ="text" name="manufacturer" id="manufacturer"> </td>       
            </tr>            
          </table>
        </td>
      </tr>
      
      <tr>
        <td colspan ="3"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Column Pressure:</td>
        <td colspan ="3"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="column_pressure"> </td>       
      </tr>
      <tr>  
        <td colspan ="3"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Column Oven Pressure:</td>
        <td colspan ="3"align="left"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="column_oven_pressure"> </td>       
      </tr>
      <tr>
        <td colspan ="3"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Mobile Phase Flow rate:</td>
        <td colspan ="3"align="left"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="flow_rate"> </td>       
      </tr>
      <tr>
        <td colspan ="3"align="right" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Detection of Wavelength:</td>
        <td colspan ="3"align="left"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="wavelength"> </td>       
      </tr>  
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Suitability summary</b><br/>From chromatograms on -  </td>
      </tr>
      <tr>
        <td colspan ="6">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">       
            <tr>
              <td align="center"><b></b></td>
              <td align="center"><b>Retention Time (minutes)</b></td>
              <td align="center"><b>Peak Area</b></td>
              <td align="center"><b>Asymmetry</b></td>
              <td align="center"><b>Resolution</b></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">1.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_1" id ="rt_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_1" id ="peak_area_1"></td >
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_1" id="asymmetry_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_1" id ="resolution_1"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">2.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_2" id ="rt_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_2" id ="peak_area_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_2" id="asymmetry_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_2" id ="resolution_2"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">3.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_3" id ="rt_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_3" id ="peak_area_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_3" id="asymmetry_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_3" id ="resolution_3"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">4.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_4" id ="rt_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_4" id ="peak_area_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_4" id="asymmetry_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_4" id ="resolution_4"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">5.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_5" id="rt_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_5" id ="peak_area_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_5" id="asymmetry_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_5" id ="resolution_5"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">6.</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_6" id="rt_6" onchange="average_retention_time(); sd_retention_time()"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_6" id ="peak_area_6" onchange ="average_peak_area(); sd_peak_area()"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_6" id ="asymmetry_6" onchange ="average_asymmetry(); sd_asymmetry()"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_6"id ="resolution_6"onchange ="average_resolution(); sd_resolution()"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">Average</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_avg" id ="rt_avg"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_avg" id ="peak_area_avg" ></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_avg" id="asymmetry_avg"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_avg" id ="resolution_avg"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">SD</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_sd" id ="rt_sd"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_sd" id ="peak_area_sd"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_sd" id ="asymmetry_sd"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_sd" id ="resolution_sd"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">RSD</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_rsd"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_rsd"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_rsd"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_rsd"></td>
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">Acceptance Criteria</td>
              <td style="padding: 8px;">NMT 2.0%</td>
              <td style="padding: 8px;">NMT 2.0%</td>
              <td style="padding: 8px;">NMT 2.0%</td>
              <td style="padding: 8px;">NLT 5.0%</td>
              
            </tr>
            <tr>
              <td align="center"style="padding: 8px;">Comment</td>
              <td style="padding: 8px;"><input type = "text" name ="rt_comment"></td>
              <td style="padding: 8px;"><input type = "text" name ="peak_area_comment"></td>
              <td style="padding: 8px;"><input type = "text" name ="asymmetry_comment"></td>
              <td style="padding: 8px;"><input type = "text" name ="resolution_comment"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;" ><b>After <input type ="text" name ="minutes"> minutes</td>
      </tr>
      <tr><td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color:#0000fb;" ><b>Peak Area from chromatograms - </b></td>
      </tr>
      <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">   
              <tr>
                <td><b></b></td>
                <td align="center" style="padding: 8px;"><b>Std 1</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 1</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 2</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 3</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 4</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 5</b></td>
                <td align="center" style="padding: 8px;"><b>Sample 6</b></td>
              </tr>
           
               <tr>
                <td align="center"style="padding: 8px;">1.</td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1" id ="sample_1"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s1" id ="sample_1_s1"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s2" id ="sample_1_s2"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s3" id ="sample_1_s3"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s4" id ="sample_1_s4"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s5" id ="sample_1_s5"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_1_s6" id ="sample_1_s6"></td>
              </tr>
              <tr>
                <td align="center"style="padding: 8px;">2.</td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2" id ="sample_2"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s1" id ="sample_2_s1"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s2" id ="sample_2_s2"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s3" id ="sample_2_s3"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s4" id ="sample_2_s4"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s5" id ="sample_2_s5"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_2_s6" id ="sample_2_s6"></td>
              </tr>
              <tr>
                <td align="center"style="padding: 8px;">3.</td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3" id ="sample_3"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s1" id ="sample_3_s1"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s2" id ="sample_3_s2"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s3" id ="sample_3_s3"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s4" id ="sample_3_s4"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s5" id ="sample_3_s5"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_3_s6" id ="sample_3_s6"></td>
              </tr>
              <tr>
                <td align="center"style="padding: 8px;">4.</td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4" id ="sample_4"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s1" id ="sample_4_s1"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s2" id ="sample_4_s2"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s3" id ="sample_4_s3"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s4" id ="sample_4_s4"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s5" id ="sample_4_s5"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_4_s6" id ="sample_4_s6"></td>
              </tr>
              <tr>
                <td align="center"style="padding: 8px;">5.</td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5" id ="sample_5" onchange ="avg_standard()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s1" id ="sample_5_s1" onchange ="avg_sample1()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s2" id ="sample_5_s2" onchange ="avg_sample2()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s3" id ="sample_5_s3" onchange ="avg_sample3()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s4" id ="sample_5_s4" onchange ="avg_sample4()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s5" id ="sample_5_s5" onchange ="avg_sample5()"></td>
                <td style="padding: 8px;"><input type = "text" name ="sample_5_s6" id ="sample_5_s6" onchange ="avg_sample6()"></td>
              </tr>
              <tr>
                <td align="center"style="padding: 8px;">Average</td>
                <td style="padding: 8px;"><input type = "text" name ="avg" id ="avg"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s1" id ="avg_s1"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s2" id ="avg_s2"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s3" id ="avg_s3"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s4" id ="avg_s4"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s5" id ="avg_s5"></td>
                <td style="padding: 8px;"><input type = "text" name ="avg_s6" id ="avg_s6"></td>
              </tr>
        </table>
      </div>
        </td>
      </tr>
      <tr>        
        <td colspan = "6" align = "center"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color:#0000fb;"> <u>PEAK OF SAMPLE (PKT) * WT OF STANDARD IN FINAL DILUTION * DILUTION FACTOR(DF) * 100 * POTENCY (P) </u> <br/> PEAK AREA OF STANDARD(PKSTD) * LABEL CLAIM (LC)</td>
      </tr>
      <tr>
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 1</u></b></td>
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr>
      <tr>
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_1_pkt" id ="det_1_pkt" size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_1_wstd" id ="det_1_wstd" size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_1_df" id ="det_1_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_1_potency" id ="det_1_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_1_pkstd" id ="det_1_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_1_lc" id ="det_1_lc" size ="10" placeholder="LC" onchange="determination_calc_1()"></td>
        <td> =&nbsp &nbsp<input type ="text" name="determination_1" id ="determination_1" size ="10"> % LC</td>
      </tr>
      <tr>
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 2</u></b></td>
        <td align="center" colspan = "2"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr>
      <tr>
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_2_pkt" id="det_2_pkt" size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_2_wstd" id ="det_2_wstd" size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_2_df"id="det_2_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_2_potency" id ="det_2_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_2_pkstd" id ="det_2_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_2_lc" id ="det_2_lc" size ="10" placeholder="LC"onchange="determination_calc_2()"></td>        
        <td>=&nbsp &nbsp <input type ="text" name="determination_2"id ="determination_2" size ="10">% LC </td>
      </tr>
      <tr>  
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 3</u></b></td>
        <td align="center" colspan = "2"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr> 
      <tr>  
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_3_pkt" id ="det_3_pkt"size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_3_wstd" id ="det_3_wstd"size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_3_df" id ="det_3_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_3_potency" id ="det_3_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_3_pkstd" id ="det_3_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_3_lc" id ="det_3_lc" size ="10" placeholder="LC" onchange="determination_calc_3()"></td>        
        <td>=&nbsp &nbsp <input type ="text" name="determination_3" id ="determination_3" size ="10">% LC </td>
      </tr>
      <tr>
        <td align="center" colspan = "4" style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 4</u></b></td>
        <td align="center" colspan = "2" style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr> 
      <tr>  
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_4_pkt" id ="det_4_pkt" size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_4_wstd" id ="det_4_wstd" size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_4_df" id ="det_4_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_4_potency" id ="det_4_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_4_pkstd" id ="det_4_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_4_lc" id ="det_4_lc" size ="10" placeholder="LC" onchange="determination_calc_4()"></td>        
        <td>=&nbsp &nbsp <input type ="text" name="determination_4" id ="determination_4" size ="10">% LC </td>
      </tr> 
      <tr>  
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 5</u></b></td>
        <td align="center" colspan = "2"style="padding: 12px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr> 
      <tr>  
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_5_pkt" id ="det_5_pkt" size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_5_wstd" id ="det_5_wstd" size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_5_df" id ="det_5_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_5_potency" id ="det_5_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_5_pkstd" id ="det_5_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_5_lc" id ="det_5_lc" size ="10" placeholder="LC" onchange="determination_calc_5()"></td>        
        <td>=&nbsp &nbsp <input type ="text" name="determination_5" id ="determination_5" size ="10">% LC </td>
      </tr> 
      <tr> 
        <td align="center" colspan = "4"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <b><u>Determination 6</u></b></td>
        <td align="center" colspan = "2"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
      </tr> 
      <tr>  
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_6_pkt" id ="det_6_pkt" size ="10" placeholder="PKT">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_6_wstd" id ="det_6_wstd" size ="10" placeholder="WSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_6_df" id ="det_6_df" size ="10" placeholder="DF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_6_potency" id ="det_6_potency" size ="10" placeholder="Potency">*100 <br/><br/>
          <input type ="text" name="det_6_pkstd" id ="det_6_pkstd" size ="10" placeholder="PKSTD">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_6_lc" id ="det_6_lc" size ="10" placeholder="LC" onchange="determination_calc_6()"></td>        
        <td>=&nbsp &nbsp <input type ="text" name="determination_6" id ="determination_6" size ="10">% LC </td>
      </tr> 
      <tr> 
        <td align="center"colspan ="6"style="padding: 8px;padding: 8px;background-color: #e8e8ff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> </td>
      </tr>
      <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Average % </td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="average"></td>
    
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Equivalent to</td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="equivalent"></td>
      </tr>
       <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Range </td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="range"></td>
      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> RSD</td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd"></td>
      </tr>        
      <tr>
        <td colspan="8" style="padding:8px;color:#0000ff;border-bottom:solid 1px #c4c4ff;"><b>Chromatography Check List</b></td>
      </tr>
      <tr>
        <td colspan="8" style="padding:8px;border-bottom:dotted 1px #c4c4ff;">
          <table border="0" cellpadding="8px" width="60%" align="center">
            <tr>
              <td style="color:#0000ff;border-bottom:solid 1px #c4c4ff;padding:8px;">Requirement</td>
              <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;">Tick</td>
              <td style="color:#0000ff;padding:8px;border-bottom:solid 1px #c4c4ff;">Comment</td>
            </tr>
            <tr>
              <td style="color:#000;padding:8px;">System Suitability Sequence</td>
              <td style="color:#000;padding:8px;"><input type="checkbox" name="sysytem_suitability_sequence" value="Sysytem Suitability Sequence"></input></td>
              <td style="color:#000;padding:8px;"><input type="text" name="sysytem_suitability_sequence_comment" size="50"></input></td>
            </tr>
            <tr>
              <td style="color:#000;padding:8px;">Sample Injection sequence</td>
              <td style="color:#000;padding:8px;"><input type="checkbox" name="sample_injection_sequence" value="Sample Injection Sequence"></input></td>
              <td style="color:#000;padding:8px;"><input type="text" name="Sample_injection_sequence_comment" size="50"></input></td>
            </tr>
            <tr>
              <td style="color:#000;padding:8px;">Chromatograms Attached</td>
              <td style="color:#000;padding:8px;"><input type="checkbox" name="chromatograms_attached" value="Chromatograms Attached"></input></td>
              <td style="color:#000;padding:8px;"><input type="text" name="chromatograms_attached_comment" size="50"></input></td>
            </tr>
          </table>
        </td>
       </tr>         
      <tr>
        <td colspan="8" align="left"  style="padding:8px;border-bottom: dotted 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><b>Conclusion</b></td>
      </tr>
      <tr>
        <td colspan="8" style="padding:8px;border-bottom:solid 1px #c4c4ff;">
          <table border="0" width="30%" cellpadding="8px" align="center">
            <tr>    
              <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:right;">PASS</input></td>
              <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:left;"><input type="radio" name="choice" value="pass"></input></td>
              <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:right;">FAIL</input></td>
              <td style="border-bottom:dottted 1px #c4c4ff;padding:8px;text-align:left;"><input type="radio" name="choice" value="fail"></input></td>
            </tr>
          </table>
         </tr>
         <tr>
       <td colspan="8" style="padding:8px;">
        <table border="0" width="90%" cellpadding="8px" align="center">
          <tr>
            <td style="border-bottom: dotted 1px #c4c4ff;padding:4px;text-align:right;">Supervisor <input type="text" id="supervisor" name="supervisor"></td>
            <td style="border-bottom: dotted 1px #c4c4ff;padding:4px;text-align:left;">Date <input type="date"  id="date" name="date"></td>
          </tr>
          
          <tr>
            <td colspan="2" style="padding:4px;">Further Comments:</td>
          </tr>
          <tr>
            <td colspan="2" style="padding:4px;text-align:center;"><textarea cols="140" rows="5"name ="further_comments"></textarea></td>
          </tr>
        </table>
      </td>
    </tr>
      <tr>
        <td style ="padding: 8px;"colspan = "6" align ="center"> <input type ="submit" name ="save_normal_hplc" value ="Save Dissolution Data"></td>
      </tr>
    </table>
   </form> 
 </div>
</div>
  </body>
  </html>