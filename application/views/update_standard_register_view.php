<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>MEDS Admin Account</title>
   <link rel="icon" href="" />
   <link href="<?php echo base_url().'style/forms.css';?>" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url().'style/core.css';?>" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url().'style/sidenav.css';?>" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url().'style/demo_table.css';?>" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url().'style/jquery.tooltip.css';?>" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url().'style/style.css';?>" rel="stylesheet" type="text/css"/>
   
   <script type="text/javascript" src="<?php echo base_url().'js/tabs.js';?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.js';?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'js/Jquery-datatables/jquery.dataTables.js';?>"></script>
 </head>
 <body>
 <?php
   $user=$this->session->userdata;
   $test_request_id=$user['logged_in']['test_request_id'];
   $user_type_id=$user['logged_in']['user_type'];
   $user_id=$user['logged_in']['id'];
   $department_id=$user['logged_in']['department_id'];
   $acc_status=$user['logged_in']['acc_status'];
   
   //var_dump($user);
  ?>
  <div id="header"> 
   <div id="logo" style="color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="70px" width="90px"/></br><p><b>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</b></p></div>
  </div>
   
  <div id="log_bar">
    <table bgcolor="f2f2f2" border="0" cellpadding="8px" align="center" width="100%">
      <tr>
        
        <td colspan="4" style="text-align: right;background-color: #ffffff;" >
         <a href="<?php echo base_url().'home/logout'?>"><b>Logout</b><img src="<?php echo base_url().'images/icons/exit.png';?>" height="25px" width="25px"><img src="<?php echo base_url().'images/icons/door.png';?>" height="25px" width="25px"></a>
        </td>
      </tr>
      <tr>
         <td style="background-color: #ffffff;" width="125px"><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id;?>"><img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"> Account Settings</a></td>
         <td style="text-align: center;background-color: #ffffff;" width="20px">
           <img src="<?php echo base_url().'images/user.png';?>" height="24px" width="24px">
         </td>
         <td style="text-align: left;background-color: #80ffff;" width="130px"><b>
            <?php 
             echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);
            ?>
           
         </td>
         <td  style="background-color: #ffffff;"><?php 
             echo("Logged in as <b>".$user['logged_in']['role']);
            ?>
        </td>
      </tr>
    </table> 
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
        &nbsp;&nbsp;<a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link"><b>Equipment & Maintenance</b></a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link"><b>Reagents & Inventory</b></a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="current sub_menu sub_menu_link first_link"><b>Standard Register</b></a>
        <a href="<?php echo base_url().'temperature_humidity_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Temperature & Humidity</b></a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Out of Tolerance</b></a>
	<a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Complaints</b></a>
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
        &nbsp;&nbsp;<a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
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
        &nbsp;&nbsp;<a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link"><b>Equipment & Maintenance</b></a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link"><b>Reagents & Inventory</b></a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="current sub_menu sub_menu_link first_link"><b>Reference Standard Register</b></a>
        <a href="<?php echo base_url().'temperature_humidity_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Temperature & Humidity</b></a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Out of Tolerance</b></a>
	<a href="<?php echo base_url().'complaints_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Complaints</b></a>
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
        &nbsp;&nbsp;<a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link"><b>Reagents & Inventory</b></a>
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
        &nbsp;&nbsp;<a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link"><b>Equipment & Maintenance</b></a>
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
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link"><b>Analysis Test Request</b></a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link"><b>Standard Register</b></a>
        <a href="<?php echo base_url().'standard_vial_card_records/Get';?>"class="sub_menu sub_menu_link first_link"><b>Standard Vial Cards</b></a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link"><b>Out of Tolerance</b></a>
    </div>
  <div id="form_wrapper_lists">
<div id="analysis_request" class="analysis_request">
    <?php echo validation_errors(); ?>
    <?php echo form_open('update_standard_register_record/Submit',array('name'=>'update_standard_register_view'));?>
	<table class="table_form" width="80%" bgcolor="#f0f0ff" border="0" cellpadding="4" align="center">
	    <input type="hidden" name="my_id" value="<?php echo $query['id']; ?>"/>
             <tr>
	        <td colspan="4" style="text-align:right;background-color:#ffffff;text-color:#00ff00;"><a href="<?php echo base_url().'standard_register_records/Get';?>"><img src="<?php echo base_url().'images/icons/back.png'?>" height="20px" wieght="20px"><b>Back</b></a></td>
	    </tr>
            <tr>
		<td colspan="4" style="text-align:center;padding:8px;border-bottom: solid 1px #bfbfbf;color:#0000fb;border-bottom: solid 10px #f0f0ff;background-color:#e8e8ff;  "><h3><b>Updating Reference Standard Register Record</b></h3></td>
	    </tr>
	     <tr>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Reference Number</b></td>
		<td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><input type="text" name="reference_number" value="<?php echo $query['reference_number'];?>"></td>
		<td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Certificate Number</b></td>
    <td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="certificate_number" value="<?php echo $query['certificate_number'];?>"></td>
    
	    </tr>
	    <tr>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>MSDS Material Saftey Data Sheet</b></td>
		<td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><textarea type="text" cols="30" rows="2" name="msds"><?php echo $query['msds'];?></textarea></td>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Item Description</b></td>
    <td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="item_description" value="<?php echo $query['item_description'];?>"></td>
    
	    </tr>
	    <tr>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Batch No./Lot No</b></td>
		<td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="batch_lot_number" value="<?php echo $query['batch_number'];?>"></td>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Physical Appearance</b></td>
		<td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="physical_appearance" value="<?php echo $query['physical_appearance'];?>"></td>
	    </tr>
	    <tr>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Location/Store</b></td>
		<td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="location_store" value="<?php echo $query['location_store'];?>"></td>
		<td height="5px" width="450px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Expiry Date</b></td>
      <td style="background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
      <input type="date" name="expiry_date" id ="expiry_date" class ="fieldsr" value="<?php echo $query['expiry_date'];?>"/>
      <span id="expiry_date_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
      <span id="expiry_date_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>      
      
    </tr>
    <tr>
    <td height="5px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Intended Use</b></td>
		<td colspan="4" style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="intended_use" value="<?php echo $query['intended_use'];?>"></td>
	 </tr>

    <tr>
    <td height="5px" align="left"  style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Quantity</b></td>
    <td  style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="text" name="quantity" value="<?php echo $query['quantity'];?>"></td>
    <td height="5px" width="450px" align="left" style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Status</b></td>
    <td style="background-color:#e8ffe8;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
        <select type="text" name="status" >
          <option><?php if($query['status']==0){echo"In Use";}elseif($query['status']==1){echo"Expired";}elseif($query['status']==2){echo"Damaged";}elseif($query['status']==3){echo"Exhausted";}?></option>
          <option value = 0> In Use</option>
          <option value = 1> Expired</option>
          <option value = 2> Damaged</option>
          <option value = 3> Exhausted</option>
      </td>
     
            </tr>
	    <tr>
		<td style="background-color:#ffffff;text-align: center;" colspan="4"><input type="submit" name="submit" value="Submit"/></td>
	    </tr> 
	</table>
    </form>
</div>
  </div>
 </body>
</html>
