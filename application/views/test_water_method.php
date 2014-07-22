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
    $("#burette_id").change(function(){
         var id_number=$(this).val();
         //append to textbox
         $("#burette_volume").val(id_number);
    });

    $("#balance_make").change(function(){
         var id_number=$(this).val();
         //append to textbox
         $("#balance_number").val(id_number);
    });
   });
       function standard_weight_calc(){
        var total = document.getElementById('standard_container_1').value - document.getElementById('container_1').value;
        document.getElementById('standard_weight_1').value = total;
       }
       function standard_weight_calc_2(){
        var total = document.getElementById('standard_container_2').value - document.getElementById('container_2').value;
        document.getElementById('standard_weight_2').value = total;
       }

       function standard_weight_calc_3(){
        var total = document.getElementById('standard_container_3').value - document.getElementById('container_3').value;
        document.getElementById('standard_weight_3').value = total;
       }

       function standard_weight_calc_4(){
        var total = document.getElementById('standard_container_4').value - document.getElementById('container_4').value;
        document.getElementById('standard_weight_4').value = total;
       }
       function standard_weight_calc_5(){
        var total = document.getElementById('standard_container_5').value - document.getElementById('container_5').value;
        document.getElementById('standard_weight_5').value = total;
       }
       function standard_weight_calc_6(){
        var total = document.getElementById('standard_container_6').value - document.getElementById('container_6').value;
        document.getElementById('standard_weight_6').value = total;
       }

       function sample_weight_calc(){
        var total = document.getElementById('sample_tier_standard_container_1').value - document.getElementById('sample_tier_container_1').value;
        document.getElementById('sample_tier_standard_weight_1').value = total;
       }
       function sample_weight_calc_2(){
        var total = document.getElementById('sample_tier_standard_container_2').value - document.getElementById('sample_tier_container_2').value;
        document.getElementById('sample_tier_standard_weight_2').value = total;
       }
       function sample_weight_calc_3(){
        var total = document.getElementById('sample_tier_standard_container_3').value - document.getElementById('sample_tier_container_3').value;
        document.getElementById('sample_tier_standard_weight_3').value = total;
       }
       function sample_weight_calc_4(){
        var total = document.getElementById('sample_tier_standard_container_4').value - document.getElementById('sample_tier_container_4').value;
        document.getElementById('sample_tier_standard_weight_4').value = total;
       }
       function sample_weight_calc_5(){
        var total = document.getElementById('sample_tier_standard_container_5').value - document.getElementById('sample_tier_container_5').value;
        document.getElementById('sample_tier_standard_weight_5').value = total;
       }
       function sample_weight_calc_6(){
        var total = document.getElementById('sample_tier_standard_container_6').value - document.getElementById('sample_tier_container_6').value;
        document.getElementById('sample_tier_standard_weight_6').value = total;
       }
       function determination_calc_1(){
        var upper = parseInt(document.getElementById('det_1_kfv').value) * parseInt(document.getElementById('det_1_f').value)* 100;  

        var lower = parseInt(document.getElementById('det_1_wt').value) * 1000;
        var total = (upper/lower);
        
                    document.getElementById('determination_1').value = total;
       }
       function determination_calc_2(){
        var upper = parseInt(document.getElementById('det_2_kfv').value) * parseInt(document.getElementById('det_2_f').value)* 100;  

        var lower = parseInt(document.getElementById('det_2_wt').value) * 1000;
        var total = (upper/lower);
        
                    document.getElementById('determination_2').value = total;
       }
       function determination_calc_3(){
        var upper = parseInt(document.getElementById('det_3_kfv').value) * parseInt(document.getElementById('det_3_f').value)* 100;  

        var lower = parseInt(document.getElementById('det_3_wt').value) * 1000;
        var total = (upper/lower);
        
                    document.getElementById('determination_3').value = total;
       }
       function average_determination(){
        var average = (parseInt(document.getElementById('determination_1')) + parseInt(document.getElementById('determination_1')) +parseInt(document.getElementById('determination_1')))/3;
        document.getElementById('average_det') = average *100;
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
    <?php echo form_open('test_water/worksheet', array('id'=>'test_view'));?>

    <table width="750px" class ="table_form" border="0" cellpadding="4px" align="center">
    <input type="hidden" name ="assignment" value ="<?php echo $assignment;?>"><input type="hidden" name ="test_request" value ="<?php echo $test_request;?>">
      <input type="hidden" name ="analyst" value ="<?php echo $user['logged_in']['fname']." ".$user['logged_in']['lname'];?>">
      <tr>
       <td colspan="6"  style="padding: 8px;text-align:right;background-color:#fdfdfd;padding:8px;border-bottom:solid 1px #bfbfbf;"><a href="<?php echo base_url().'test/index/'.$assignment.'/'.$test_request?>"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="20px" width="20px">Back to Test Lists</a></td>
     </tr>
     <tr>
      <td colspan ="6" style="padding:8px;">
         <table width="100%" bgcolor="#c4c4ff" cellpadding="8px" border="0" align ="center">     
          <tr>
                <td rowspan="2" colspan ="" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
                <td colspan="8" style="padding:4px;color:#0000ff;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</td>
            </tr>
            <tr>    
                <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Document: Analytical Worksheet</td>
                <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Title: <?php echo $results['active_ingredients'];?> <?php echo $results['test_specification'] ;?></td>
                <td height="25px" colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;">REFERENCE NUMBER</td>
                <td colspan="4" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $results['reference_number'] ;?></td>
            </tr>
            <tr>
                  <td colspan="2" width ="80px"style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">EFFECTIVE DATE: <?php echo date("d/m/Y")?></td>
                  <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-left:solid 1px #bfbfbf;">ISSUE/REV 2/2</td>
                  <td height="25px"colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SUPERSEDES: 2/1</td>
                  <td height="25px" colspan="4" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">PAGE 1 of 1</td>
            </tr>
            <tr>
                  <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">SERIAL No.</td>
                  <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><input type="text" name="serial_number"></input></td>
                  <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;">Batch/Lot No.</td>
                  <td colspan="4" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo $results['batch_lot_number'] ;?></td>          
            </tr>
            <tr>
                  <td height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;">Form Authorized By:</td>
                  <td colspan="" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
                  <td colspan="" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">USER TYPE</td>
                  <td colspan="4" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo $user['logged_in']['role'];?></td>
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
              <td colspan="6" style="padding:8px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">Label Claim: <?php echo $results['active_ingredients'];?></td>
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
      <td colspan ="6" align="center" style="text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;background-color: #e8e8ff;"> MEDS Karl Fisher (Water Method) Test Form</td>
    </tr>    
      <tr>
        <td colspan = "6"style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Equipment to be used:</b></td>
    </tr>
    <tr>
        <td align="center" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Make:</td>
        <td colspan = "2" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select  id = "equipment_make" name="equipment_make">
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
      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Equipment Number:</td>
        <td colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type = "text" size= "10" name = "equipment_number" id ="equipment_number">     </td>
      </tr>
      <tr>
        <td align="center" width ="10px" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Burette ID:</td>
        <td colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
          <select id ="burette_id" name="burette_id">
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
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Burette Volume:</td>
        <td colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" size= "10"id ="burette_volume" name="burette_volume"> </td>
      </tr>
      <tr>
        <td align="left" colspan ="6" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;" ><b>Precision</b></td>
      </tr>
       <tr>
        <td align="center" colspan = "6"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Use certified water standard with a guaranteed water content of 10mg/g or disoium titrate dehydrate and Karl Fisher reagents for volumetric water determination. </td>
      </tr>
      <tr>
        <td align="center" colspan = "6" style="padding: 18px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Weight of Standard taken</b></br>(Weigh standards which should result in a consumption of approximately 20% to 90% of the burette volume) </td>
      </tr>
      <tr>
      <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Balance Make:</td>
        <td colspan = "2" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
            <select  id = "balance_make" name="balance_make">
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
      
        <td align="left" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">ID Number:</td>
        <td colspan = "2" style="background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type ="text" name ="balance_number" id="balance_number"></td>
      </tr>
      <tr>
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Standard Description:</td>
        <td colspan = "5" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> 
          <select id="standard_description" name="standard_description" >
              <option selected></option>
               <?php
               foreach($sql_standards as $s_name):
              ?>
               
               <option value="<?php  echo $s_name['item_description'];?>"><?php  echo $s_name['item_description'];?></option>
                <?php
                endforeach
                ?>
            </select> </td>
      </tr>
      <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">   
              <tr>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">1.</td>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">2.</td>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">3.</td>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">4.</td>
                <td align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">5.</td>
                <td colspan = "2"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">6.</td>        
              </tr>
              <tr>
                <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_1" id ="standard_container_1"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_2" id ="standard_container_2"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_3" id ="standard_container_3"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_4" id ="standard_container_4"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_5" id ="standard_container_5"> </td>
                <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_container_6" id ="standard_container_6"> </td>
              </tr>
              <tr> 
                <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_1" id ="container_1" onchange="standard_weight_calc()"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_2" id ="container_2" onchange="standard_weight_calc_2()"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_3" id ="container_3" onchange="standard_weight_calc_3()"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_4" id ="container_4" onchange="standard_weight_calc_4()"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_5" id ="container_5"onchange="standard_weight_calc_5()"> </td>
                <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="container_6" id ="container_6" onchange="standard_weight_calc_6()"> </td>
              </tr>
              <tr> 
                <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_1" id ="standard_weight_1"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_2" id ="standard_weight_2"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_3" id ="standard_weight_3"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_4" id ="standard_weight_4"> </td>
                <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_5" id ="standard_weight_5"> </td>
                <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="standard_weight_6" id ="standard_weight_6"> </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan = "6"align="left" style="padding: 10px;"></td>
      </tr>
      <tr>
        <td colspan = "6"align="center" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Initial temperature of titrant <input type ="text" name="initial_temperature"> final temprature titrant <input type ="text" name="final_temperature"> </td>
      </tr>
      <tr>
        <td colspan = "6"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>KF volume against above weights</b> </td>
      </tr>
      <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">   
            <tr>
              <td align="center" style="padding: 8px;">1.</td>
              <td align="center" style="padding: 8px;">2.</td>
              <td align="center" style="padding: 8px;">3.</td>
              <td align="center" style="padding: 8px;">4.</td>
              <td align="center" style="padding: 8px;">5.</td>
              <td align="center" style="padding: 8px;">6</td>
            <tr>        
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="kf_volume_6"></td>
            </tr>
          </table>
         </div>
        </td>
      </tr>
      <tr>
        <td colspan = "6"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color: #0000fb;"><b>Calculate titers using:</b><br/>Titer = [sample size (g) * 156.6]/KF volume</td>
      </tr>
      <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">   
            <tr>
              <td align="center" style="padding: 8px;">1.</td>
              <td align="center" style="padding: 8px;">2.</td>
              <td align="center" style="padding: 8px;">3.</td>
              <td align="center" style="padding: 8px;">4.</td>
              <td align="center" style="padding: 8px;">5.</td>
              <td align="center" style="padding: 8px;">6.</td>
            <tr>        
              <td style="padding: 8px;"><input type = "text" name ="titer_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="titer_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="titer_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="titer_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="titer_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="titer_6"></td>
            </tr>
           </table>
         </div>
        </td>
      </tr>
        <tr>
        <td colspan = "6"align="left" style="padding: 10px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;color: #0000fb;"><b>Calculate the relative standard deviation (RSD)</td>
      </tr>
      <tr>
        <td colspan = "2"style="padding: 8px;">Acceptance Criteria</td>
        <td style="padding: 8px;">Results</td>
        <td style="padding: 8px;">Comment</td>
      <tr>        
        <td style="padding: 8px;">RSD < 1.0%</td>
        <td style="padding: 8px;"><input type = "text" name ="rsd_acceptance_criteria"></td>
        <td style="padding: 8px;"><input type = "text" name ="rsd_result"></td>
        <td style="padding: 8px;"><input type = "text" name ="rsd_comment"></td>
      </tr>
      <tr>
        <td colspan = "6" align="left" style="padding: 12px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>Sample Titers: </b></td>
      </tr>
       <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">   
            <tr>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"></td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">1.</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">2.</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">3.</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">4.</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">5.</td>
              <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">6.</td>        
            </tr>
            <tr>
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard + container (g)</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_1" id ="sample_tier_standard_container_1"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_2" id ="sample_tier_standard_container_2"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_3" id ="sample_tier_standard_container_3"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_4" id ="sample_tier_standard_container_4"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_5" id ="sample_tier_standard_container_5"> </td>
              <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_container_6" id ="sample_tier_standard_container_6"> </td>
            </tr>
            <tr>
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of container (g) </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_1" id ="sample_tier_container_1" onchange ="sample_weight_calc()"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_2" id ="sample_tier_container_2" onchange ="sample_weight_calc_2()"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_3" id ="sample_tier_container_3" onchange ="sample_weight_calc_3()"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_4" id ="sample_tier_container_4" onchange ="sample_weight_calc_4()"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_5" id ="sample_tier_container_5" onchange ="sample_weight_calc_5()"> </td>
              <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_container_6" id ="sample_tier_container_6" onchange ="sample_weight_calc_6()"> </td>
            </tr>
            <tr>
              <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Weight of standard (g)</td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_1" id ="sample_tier_standard_weight_1"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_2" id ="sample_tier_standard_weight_2"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_3" id ="sample_tier_standard_weight_3"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_4" id ="sample_tier_standard_weight_4"> </td>
              <td style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_5" id ="sample_tier_standard_weight_5"> </td>
              <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sample_tier_standard_weight_6" id ="sample_tier_standard_weight_6"> </td>
            </tr>
        </table>
         </div>
        </td>
      </tr>
      <tr>
        <td colspan = "6"align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;color: #0000fb;"><b>KF volume against above weights</b></td>
      </tr> 
      <tr>
        <td colspan ="6">
          <div class="scroll">
           <table border="0" align="center" class ="inner_table" cellpadding="8px" width="80%">
            <tr>
              <td align="center"style="padding: 8px;">1.</td>
              <td align="center"style="padding: 8px;">2.</td>
              <td align="center"style="padding: 8px;">3.</td>
              <td align="center"style="padding: 8px;">4.</td>
              <td align="center"style="padding: 8px;">5.</td>
              <td align="center"style="padding: 8px;">6.</td>
            <tr>        
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_1"></td>
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_2"></td>
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_3"></td>
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_4"></td>
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_5"></td>
              <td style="padding: 8px;"><input type = "text" name ="sample_tier_kf_volume_6"></td>
            </tr>  
           </table>
         </div>
        </td>
      </tr>
      <tr>
        <td colspan = "6" align="center" style="padding: 8px;border-top: solid 1px #bfbfbf;border-bottom: solid 1px #bfbfbf;color: #0000fb;"> <b>Calculation of water content:</b><br/><br/> <u>KF VOLUME * FACTOR * 100LC</u><br/> 100 * WEIGHT OF SAMPLE</td>
      </tr>
      <tr>
        <td align="left" colspan = "6" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 1</td>
      </tr>
      <tr>
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_1_kfv" id ="det_1_kfv"size ="20" placeholder="KF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_1_f" id ="det_1_f"size ="20" placeholder="FACTOR"> X 100 <br/><br/>
          <input type ="text" name="det_1_wt" id ="det_1_wt" size ="20" placeholder="SAMPLE WEIGHT" onchange="determination_calc_1()">   X 1000
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_1" id ="determination_1">% water </td>
      </tr>
      <tr>   
        <td align="left" colspan = "6" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 2</td>
      </tr>
      <tr>
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_2_kfv" id ="det_2_kfv"size ="20" placeholder="KF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_2_f" id ="det_2_f"size ="20" placeholder="FACTOR"> X 100 <br/><br/>
          <input type ="text" name="det_2_wt" id ="det_2_wt" size ="20" placeholder="SAMPLE WEIGHT"onchange="determination_calc_2()">   X 1000
        <td style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_2" id ="determination_2">% water </td>
      </tr>
      <tr> 
        <td align="left" colspan = "6" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> Determination 3</td>
      </tr>
      <tr>
        <td colspan ="4" align ="center" style="padding: 12px;">
          <input type ="text" name="det_3_kfv" id ="det_3_kfv"size ="20" placeholder="KF">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type ="text" name="det_3_f" id ="det_3_f"size ="20" placeholder="FACTOR"> X 100 <br/><br/>
          <input type ="text" name="det_3_wt" id ="det_3_wt" size ="20" placeholder="SAMPLE WEIGHT"onchange="determination_calc_3()">   X 1000
          <td colspan = "3"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="determination_3" id ="determination_3" onchange ="average_determination()">% water </td>
      </tr>
      <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> Average % </td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="average" id ="average_det"></td>
    
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> Equivalent to</td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: solid 1px #bfbfbf;"> <input type ="text" name="equivalent"></td>
      </tr>
      <tr> 
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> SD </td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="range"></td>
      
        <td align="left" style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> RSD</td>
        <td colspan = "2"style="padding: 8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd"></td>
      </tr> 
      <tr>
        <td colspan = "3"align="center" style="padding: 10px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Acceptance Criteria</b></td>
        <td colspan = ""align="center" style="padding: 10px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Results</b> </td>
        <td colspan = ""align="center" style="padding: 10px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Comments</b></td>
      </tr>
      <tr>   
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">Content:</td>        
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="content_ac"> </td> 
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="content_result"></td>
        <td colspan = "2"align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="content_comment"></td>
      </tr>
      <tr>   
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">SD:</td>        
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sd_ac"> </td> 
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sd_result"></td>
        <td colspan = "2"align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="sd_comment"></td>
      </tr>
      <tr>   
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;">RSD:</td>        
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd_ac"> </td> 
        <td colspan = ""align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd_result_2"></td>
        <td colspan = "2"align="center"style="padding: 8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"> <input type ="text" name="rsd_comment_2"></td>
      </tr><tr>
        <td colspan="8" style="padding:8px;color:#0000ff;border-bottom:solid 1px #c4c4ff;"><b>Chromatography Check List</b></td>
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
            <td colspan="2" style="padding:4px;text-align:center;"><textarea cols="140" rows="5" name ="further_comments"></textarea></td>
          </tr>
        </table>
      </td>
    </tr>
      <tr>
        <td style ="padding: 8px;"colspan = "6" align ="center"> <input type ="submit" name ="save_water_method" value ="Save Karl Fisher Data"></td>
      </tr>
    </table>
   </form> 
 </div>
</div>
  </body>
  </html>