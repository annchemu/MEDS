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
  
  <!-- bootstrap reference library -->
  <script src="<?php echo base_url().'js/bootstrap.min.js';?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
  <script>
   $(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"200px",
     "sScrollX":"950px"
    });
   });
     function calc(){
      var total = document.getElementById('standard_reading').value - document.getElementById('instrument_reading').value;
      document.getElementById('deviation').value = total;
       }
  </script>
 </head>
 
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
   <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
 
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
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;">
          
        </td>
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
   <?php 
    echo "<div id='system_nav'";
      if($user['logged_in']['user_type'] !=6 && $user['logged_in']['user_type'] !=8){
       echo"style='display:none'";
      }
      else{
       echo "style='display:block;'>";
      }
     ?>
     <a href="<?php echo base_url().'user_accounts/Get';?>" class="system_nav system_nav_link ">User Accounts</a>
     <a href="<?php echo base_url().'client_list/Get';?>" class="system_nav system_nav_link">Client List</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==6 && $user['logged_in']['department_id'] ==0){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'complaints_list/records';?>" class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==7 && $user['logged_in']['department_id'] ==1){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==6 && $user['logged_in']['department_id'] ==8){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==3){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==2){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
    </div>    
    <?php
    echo"<div id='sub_menu'";
    if($user['logged_in']['user_type'] ==5 && $user['logged_in']['department_id'] ==4){
       echo"style='display:block;'>";
      }
      else{
          echo "style='display:none'>";
      }
     ?>
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
    </div>
    <div id="form_wrapper_lists">
    <div id="account_lists" style="display: block" name="menu">
    <?php echo validation_errors();?>
    <?php echo form_open('outoftolerance_details/Update/', array('id'=>'outoftolerance_detailsform'));?>
    <table width="80%"  bgcolor="#c4c4ff" border="0" cellpadding="8px" align="center">
        <tr>
            <td colspan="4"  style="text-align:right;background-color:#fdfdfd;border-left:0px solid gray;border-right:0px solid gray;border-right:0px solid gray;border-bottom:0px solid gray;border-left:0px solid gray;padding:8px;"><a href="<?php echo base_url().'outoftolerance_list/records'?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px"><b>Back</b></a></td>
        </tr>
        <tr>
	    <td rowspan="2" style="text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="70px" width="90px"/></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>DOCUMENT: Form</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;color:#0000fb;"><b>TITLE: OUT OF TOLERANCE FORM</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>REFERENCE:</b></td>
	</tr>
	<tr>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: <?php echo date("d/m/Y")?></b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>REVISION NUMBER</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
	</tr>
	<tr>
	    <td style="text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></td>
	    <input type="hidden" name="user" value="<?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?>" >
            <td colspan="0" style="text-align:left;background-color:#ffffff;"><b>USER TYPE</b></td>
	    <td colspan="0" style="text-align:left;background-color:#ffffff;"><?php echo("<b>".$user['logged_in']['role']);?></td>
	</tr>
        <tr>
            <input type="hidden" name="out_id" value="<?php echo $query['out_id']; ?>"/>
            <td colspan="4" align="center" style="text-align:center;border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #e8e8ff;"><h4>Equipment Details</h4></td>
        </tr>
        </table>
        <table  width="80%" bgcolor="#c4c4ff" align ="center" cellpadding="8px">
         <thead bgcolor="#efefef">
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">ID Number</th>
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Serial Number</th>
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Equipment</th>  
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Acquired Date</th>
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Last Calibration</th>
             <th style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Location</th>
             <th colspan="2" style="background-color:#80ffff;text-align:center;border-right: dotted 1px #ddddff;">Calibration Interval</th>
         </thead>
         <tbody>
           <?php
               $i = 1;
               //Query the db as an array
               if (is_array($sql))
               foreach ($sql as $row):                   
               ?>
               <tr>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php echo $row['id_number'];?></b></td>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php echo $row['serial_number'];?></b></td>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php echo $row['description'];?></b></td>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php echo substr($row['date'],0,-8);?></b></td>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php if($row['calibration_start']=="0000-00-00"){echo"Not Yet Set";}else{echo $row['calibration_interval_start'];}?></b></td>
                 <td style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php if($row['location']==""){echo"Not Yet Set";}else{echo $row['location'];}?></b></td>
                 <td colspan="2" style="background-color:#ffffff;text-align: center;border-bottom: solid 1px #c0c0c0; color:#00ff00;"><b><?php if($row['calibration_interval_start']==""){echo"Not Yet Set";}else{echo $row['calibration_interval_start'];}?></b></td>                
               <?php $i++; ?>
               </tr>
           <?php
               endforeach;
           ?>   
         </tbody>
            <tr>
               <td colspan="3" style="background-color:#ffffff;color:#ff0000;" height="25px" align="right"><b>This Out of Tolerance Report Was</b></td>
               <td colspan="5" style="background-color:#ffffff;color:#ff0000;" height="25px" align="left"><b><?php if($query['approved']=="Yes"){echo"Raised";}?> By <?php echo $query['conducted_by']; ?> on <?php echo $query['timestamp']; ?></b></td>
            </tr>
            <tr>
                <td align="left"  height="25px" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Reference Number:</b></td>
                <td colspan ="7" height="25px" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $query['ref_no']; ?></td>    
            </tr>
            <tr>
                <td colspan ="8" align="left" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><h4>Data Collected From The Calibration Worksheet</h4></td>
            </tr>
            <tr>
                <td align="left" height="25px" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Standard reading</b></td>
                <td height="25px" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['standard_reading'];?></b></td>
                <td height="25px" align="left" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Instrument reading</b></td>
                <td height="25px" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['instrument_reading'];?></b></td>
                <td height="25px" align="left" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Deviation</b></td>
                <td height="25px" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['deviation'];?></b></td>
                <td height="25px" align="left" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Specification limits</b></td>
                <td height="25px" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['specification_limits'];?></b></td>
            </tr>
            <tr>
                <td align="left" height="25px" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>State of the instruments:</b></td>
                <td colspan="7" align="left"  height="25px" style="background-color:#ffffff;"><b><?php echo $query['instrument_state']; ?></b></td>
            </tr>
            <tr>
                <td align="left" height="25px" colspan="2" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Name of Person Reporting</b></td>
                <td colspan="3"  height="25px" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['reporter'];?></b></td>
                <td align="left" height="25px" colspan="2" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>How was the Equipment Used?</b></td>
                <td colspan="2"  height="25px" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['equipment_used']; ?></b></td>
            </tr>
            <tr>
                <td align="left" height="25px" colspan ="8" style="color:#0000ff;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Comments</b></td>            
            </tr>
            <tr>
                <td colspan ="8" height="55px" style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b><?php echo $query['comments'];?></b></td>
            </tr>
        </table>
    </form>
</div>
</div>
</body>
</hmtl>

