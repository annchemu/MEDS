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
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
   });
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
   <div id="logo" style="padding:8px;color: #0000ff;" align="left"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="32px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
  </div>
  <div id="log_bar" class="subdivider">
  <table bgcolor="f2f2f2" border="0" cellpadding="8px" align="center" width="100%">
      <tr>
        <td style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;" width="200px"><a href="<?php echo base_url().'account_settings/index/'.$test_request_id.'/'.$user_type_id.'/'.$user_id.'/'.$department_id;?>"><img src="<?php echo base_url().'images/icons/settings2.png';?>" height="20px" width="20px"></h6>Account Settings</h6></a></td>
        <td style="border-bottom: solid 1px #c4c4ff;padding:8px;text-align: center;background-color: #ffffff;" width="20px">
           <img src="<?php echo base_url().'images/user.png';?>" height="25px" width="24px">
        </td>
       <td style="border-bottom: solid 1px #c4c4ff;padding:8px;text-align: center;" height="10px" width="130px"><h6><b>
          <?php 
           echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);
         ?> 
       </b></h6>
       </td>
         <td height="10px"  style="border-bottom: solid 1px #c4c4ff;padding:8px;background-color: #ffffff;"><h6>
          <?php 
             echo("Logged in as <b>".$user['logged_in']['role']);
            ?></h6>
        </td>
         <td style="border-bottom: solid 1px #c4c4ff;text-align: right;background-color: #ffffff;" >
         <a href="<?php echo base_url().'home/logout'?>"><h6><b>Logout</b><img src="<?php echo base_url().'images/icons/exit.png';?>" height="25px" width="25px"><img src="<?php echo base_url().'images/icons/door.png';?>" height="25px" width="25px"></h6></a>
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
        <a href="<?php echo base_url().'home';?>"class="sub_menu sub_menu_link first_link active">Analysis Test Request</a>
        <a href="<?php echo base_url().'equipment_maintenance_records/Get';?>"class="sub_menu sub_menu_link first_link">Equipment & Maintenance</a>
        <a href="<?php echo base_url().'reagents_inventory_record/Get';?>"class="sub_menu sub_menu_link first_link">Reagents & Inventory</a>
        <a href="<?php echo base_url().'standard_register_records/Get';?>"class="sub_menu sub_menu_link first_link">Standard Register</a>
        <a href="<?php echo base_url().'temperature_humidity_list/records/'.$id_temp;?>"class="sub_menu sub_menu_link first_link">Temperature & Humidity</a>
        <a href="<?php echo base_url().'outoftolerance_list/records';?>"class="sub_menu sub_menu_link first_link">Out of Tolerance</a>
        <a href="<?php echo base_url().'complaints_list/records';?>" class="sub_menu sub_menu_link first_link">Complaints</a>
        <a href="<?php echo base_url().'coa_list/records';?>"class="sub_menu sub_menu_link first_link">Certificate of Analysis</a>
        <a href="<?php echo base_url().'finance/index';?>" class="sub_menu sub_menu_link first_link">Finance/Client Billing</a>
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
        <a href="<?php echo base_url().'finance/index';?>" class="sub_menu sub_menu_link first_link">Finance/Client Billing</a>
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
      <div id="account_lists">
         <table class="subdivider" border="0" bgcolor="#ffffff" width="100%" cellpadding="8px" align="center">
           <tr>
             <td align="right" style="padding:4px;border-bottom: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><a href="<?php echo base_url().'client_list/Get';?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px">Back</a></td>
           </tr>
           <tr>
             <td align="center" style="border-bottom: solid 10px #c4c4ff;color: #0000fb;background-color: #ffffff;"><h5>Client Account Details</h5>
             </td>
           </tr>
           <tr>
            <td height="25px" align="left"
             <?php
             if($user['logged_in']['user_type'] ==8 || $user['logged_in']['user_type'] ==6 ||$user['logged_in']['user_type'] ==7){
              echo "style='display:block;'";
              }else{
                  echo"style='display:none;'"; 
               }
             ?>>
             <a href="<?php echo base_url().'client_details/records/'.$query[0]->client_id;?>"class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/view.png';?>" height="20px" width="20px">Client Samples/Test Requests</a>
             <a href="<?php echo base_url().'client_details/invoices/'.$query[0]->client_id;?>"class="sub_menu sub_menu_link first_link"><img src="<?php echo base_url().'images/icons/invoice.png';?>" height="20px" width="20px">Client Invoices</a>
            </td>
          </tr>
        </table>
        <table id="list" class="list_view_header" width="100%" bgcolor="#ffffff" cellpadding="4px">
              <thead bgcolor="#efefef">
              <tr>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;"></th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Product Name</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Batch No</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Manufacturer</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Manufacture Date</th>
                  <th style="text-align:center;border-right: dotted 1px #ddddff;">Expiry Date</th>
                  <th
                  <?php 
                    if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?> 
                  >Quantity Submitted</th>
                  <th 
                  <?php
                      if($user['logged_in']['user_type']==5||$user['logged_in']['user_type']==7){
                        echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                      }else{
                        echo"style='display:none;'";    
                      }
                    ?>
                  >Quantity Remaining</th>
                  <th
                  <?php 
                    if($user['logged_in']['user_type']==6){
                      echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
                    }else{
                      echo"style='display:none;'";
                    }
                  ?> 
                  >Print</th>
              </tr>
              </thead>
              <tbody>
              <?php
                $i=1;
                foreach ($query as $row):
                 
              ?>
              <tr>

              <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;" width="20px"><?php echo $i;?>.</td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->active_ingredients;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->batch_lot_number;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->manufacturer_name;?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php if($row->date_manufactured==""){echo"No Previous Data";}elseif($row->date_manufactured=="NULL"){echo"No Previous Data";}elseif($row->date_manufactured=="0000-00-00"){echo"Not Yet Set";}else{echo $row->date_manufactured;}?></td>
              <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php if($row->expiry_date==""){echo"No Previous Data";}elseif($row->expiry_date=="NULL"){echo"No Previous Data";}elseif($row->expiry_date=="0000-00-00"){echo"Not Yet Set";}else{echo $row->expiry_date;}?></td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><?php echo $row->quantity_submitted;?></td>
              <td 
                <?php 
                if($user['logged_in']['user_type']==5||$user['logged_in']['user_type']==7){
                  echo"style='text-align: center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
                ?>>
                <?php echo $row->quantity_remaining;?>
              </td>
              <td
              <?php 
                if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==5){
                  echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
                }else{
                  echo"style='display:none;'";
                }
              ?>
              ><a href="<?php echo base_url().'print_lable/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/print.png';?>" height="25px" width="25px"/>Print</a>
            </td>
              <?php
                   $i++;
                 ?>
                 </tr>
                     <?php endforeach; ?>
            </tbody>           
      </table>
      </div>
    </div>
  </body>
</html>