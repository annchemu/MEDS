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
   $(document).ready(function(){
  
        $('#ref_no').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#ref_no_1').show();
            $('#ref_no_r').hide();
          }else{
            $('#ref_no_1').hide();
            $('#ref_no_r').show();
          }
        })
  $('#client_name').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#client_name_1').show();
            $('#client_name_r').hide();
          }else{
            $('#client_name_1').hide();
            $('#client_name_r').show();
          }
        })
       $('#received_from').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#received_from_1').show();
            $('#received_from_r').hide();
          }else{
            $('#received_from_1').hide();
            $('#received_from_r').show();
          }
        })
  $('#address').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#address_1').show();
            $('#address_r').hide();
          }else{
            $('#address_1').hide();
            $('#address_r').show();
          }
        })
  $('#telephone_no').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#telephone_no_1').show();
            $('#telephone_no_r').hide();
          }else{
            $('#telephone_no_1').hide();
            $('#telephone_no_r').show();
          }
        })
  $('#email').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#email_1').show();
            $('#email_r').hide();
          }else{
            $('#email_1').hide();
            $('#email_r').show();
          }
        })
  $('#order_ref_no').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#order_ref_no_1').show();
            $('#order_ref_no_r').hide();
          }else{
            $('#order_ref_no_1').hide();
            $('#order_ref_no_r').show();
          }
        })
    $('#complaint_nature').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#complaint_nature_1').show();
            $('#complaint_nature_r').hide();
          }else{
            $('#complaint_nature_1').hide();
            $('#complaint_nature_r').show();
          }
        })
    $('#complaint_details').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#complaint_details_1').show();
            $('#complaint_details_r').hide();
          }else{
            $('#complaint_details_1').hide();
            $('#complaint_details_r').show();
          }
        });



  $('#save_complaint').click(function(){         
            count =0;
            $('.fieldcomp').each(function(){
               if ($.trim(this.value)=="")
               count ++;
            });
            if(count >0){
              alert( count+' All field as on this form are MANDATORY ')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>complaints/submit",
                data:$('#complaints').serialize(),
                success:function(data){
        redirect_url = "<?php echo base_url();?>complaints_list/index/"
                    data='Success';
                    window.location.href = redirect_url;
                },
                //error:function(){
                  // alert('an error occured'); 
               //}
            })
            }
            })
    })</script>
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
 <div id="form_wrapper">
 <div id="form">
  <?php echo validation_errors(); ?>
  <?php echo form_open('coa/submit',array('id'=>'coa_view'));?>
  <table bgcolor="#c4c4ff" class="table_form"  width="75%" border="0" cellpadding="8px" align="center">
    <tr>
      <td colspan="6" style="text-align:right;background-color:#fdfdfd;padding:8px;"><a href="<?php echo base_url().'test/index/'.$assignment[0]['a'].'/'.$query['tr'].'/';?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="20px" width="20px">Back To Test Lists</a></td>
    </tr>
    <tr>
        <td colspan="8" style="padding:8px;text-align:center;">
          <table class="" width="100%"  cellpadding="8px" align="center" border="0">
            <tr>
                <td rowspan="2" style="padding:4px;border-left:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="80px" width="90px"/></td>
                <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>Document: Form</b></td>
                <td width="150px" height="25px" colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;color:#000000;"><b>REFERENCE NUMBER</b></td>
                <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;border-top:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;">
                  <input type="text" id="reference_number" name="reference_number" class="field"/>
                  <span id="reference_number_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                  <span id="reference_number_r" style="color:red; display:none">Fill this field</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>EFFECTIVE DATE: <?php echo date("d/m/Y")?></b></td>
                <td height="25px"colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>REVISION NUMBER</b></td>
                <td height="25px" colspan="3" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>PAGE 1 of 1</b></td>
            </tr>
            <tr>
                <td width="150px" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;border-left:solid 1px #bfbfbf;border-right:solid 1px #bfbfbf;text-align:center;background-color:#ffffff;"><b>Form Authorized By:</b></td>
                <td colspan="2" height="25px" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;border-right:solid 1px #bfbfbf;"><b><?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?></b></td>
                <td colspan="2" style="padding:4px;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><b>USER TYPE</b></td>
                <td colspan="3" style="padding:4px;border-right:solid 1px #bfbfbf;border-bottom:solid 1px #bfbfbf;text-align:left;background-color:#ffffff;"><?php echo("<b>".$user['logged_in']['role']);?></td>
            </tr>
          </table>
        </td>
    </tr>
    <tr><td colspan="8" style="padding:8px;"></td></tr>
    <tr>
        <td colspan="8" align="center" style="padding:4px;border-bottom: solid 10px #c4c4ff;border-top: solid 1px #c4c4ff;color: #0000fb;background-color: #ffffff;"><h5><b>Certificate of Analysis Form</b></h5></td>
    </tr>
    <tr>
      <td width = "250px"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>REGISTRATION NUMBER:</u></td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $query['reference_number'] ?></td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Request Date:</u></td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $query['date_time']?></td>
      <td align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>Test Date:</u></td>
      <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php if (empty($coa)){echo "Test has not been DONE yet";}?></td>
    </tr>  
    <tr>
       <td colspan="6" align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>NAME OF PRODUCT:</u> <?php echo $query['active_ingredients'] ?></td>       
    </tr>
    <tr>
        <td colspan="3" align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;"><u>CLIENT:</u></br></br><?php echo $query['applicant_name']?></td>       
        <td colspan="3" align="center" style="padding:8px;background-color:#ffffff;border-bottom: solid 1px #bfbfbf;border-top: solid 1px #bfbfbf;"><u>MANUFACTURER:</u></br></br><?php echo $query['manufacturer_name']?></td>
    </tr>
    <tr>
      <td colspan="6"style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><u>LABEL CLAIM:</u></td>
    </tr>
    <tr><td colspan="6" style ="text-align:center;padding:8px;"><?php echo $query['label_claim']?></td></tr>
    <tr>
      <td align="right" style="padding:8px;background-color:#ffffff;">Batch Number:</td>
      <td align="left" style="padding:8px;background-color:#ffffff;"><?php echo $query['batch_lot_number']?></td>
      <td align="right" style="padding:8px;background-color:#ffffff;">Manufactured:</td>
      <td align="left" style="padding:8px;background-color:#ffffff;"><?php echo $query['date_manufactured']?></td>
      <td align="right" style="padding:8px;background-color:#ffffff;">Expires:</td>
      <td align="left" style="padding:8px;background-color:#ffffff;"><?php echo $query['expiry_date']?></td>
    </tr>
    <tr>
      <td align= "center" colspan ="6" style="padding:8px;text-align:center;background-color:#ffffff;padding-right:40px;border-bottom: solid 10px #f0f0ff;color: #0000fb;">
        <h5><u><b>RESULTS OF ANALYSIS</b></u></h5></td>      
    </tr>
    <tr>
      <td colspan="1"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Appearance:</b></td>
    <td colspan="5" style ="text-align:left;padding:8px;"><?php echo $query['active_ingredients']?></td></tr>
     <tr>
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
        <tbody>
          <?php
            $i = 1;

            if(empty($coa)){
                  echo "There's no data currently for display!";
            }else{

            }
            foreach ($coa as $row): 

              if ($i ==0) {
                 echo "<tr>";
              }
            ?>
          <td style="padding:8px;background-color:#ffffff;border-left: dotted 1px #bfbfbf;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $i?>.</td>      
          <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $row['test_type']?></td>      
          <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $row['test_specification']?></td>       
          <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $ph_alkalinity[0]['monograph']?></td>
          <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $ph_alkalinity[0]['further_comments']?></td>      
          <td style="padding:8px;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><?php echo $row['conclusion']?></td>

          <?php $i++; ?>

      </tr>

      <?php endforeach; ?>

        </tbody>
      </table>     
      </td>     
    </tr>
    <tr>
        <td colspan="6"align="left" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>CONCLUSION:*<b></td> 
    </tr>
    <tr><td colspan="6" style ="text-align:center;padding:8px;"><textarea name ="conclusions" cols ="160" rows ="3"></textarea></td></tr>
    <tr>
         <td colspan="3" align="center" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Prepared by:</b> <?php echo($user['logged_in']['fname']." ".$user['logged_in']['lname']);?> &nbsp;&nbsp;&nbsp;&nbsp;<b>Reviewed By 
            <select id="supervisor" name="supervisor" >
            <option selected></option>
             <?php
             foreach($users as $user_name):
            ?>
             <option value="<?php  echo $user_name['fname']." ".$user_name['lname'];?>"><?php  echo $user_name['fname']." ".$user_name['lname'];?></option>
              <?php
              endforeach
              ?>
            </select>
          </td>

         <td colspan="3" align="center" style="padding:8px;background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;border-top: dotted 1px #bfbfbf;"><b>Approved by:</b>
          <select id="approved_by" name="approved_by" >
            <option selected></option>
             <option value="Quality Assurance Manager">Quality Assurance Manager</option>
             <option value="Laboratory Supervisor">Laboratory Supervisor</option>
            </select>
          </td>         
      </tr>
      <tr>
        <td colspan="6" style="padding:8px;text-align:center;background-color:#ffffff;border-right: dotted 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="submit" class="btn" name="save_coa" value ="Submit"></td>
      </tr>
    </table>
  </form>
  </div>
  </div>
</body>
</html>
