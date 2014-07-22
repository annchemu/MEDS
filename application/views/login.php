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
   <script>
    $(document).ready(function(){        
        $('#username').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#username_1').show();
      $('#username_r').hide();
          }else{
      $('#username_1').hide();
      $('#username_r').show();
          }
        })
        $('#password').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#password_1').show();
      $('#password_r').hide();
          }else{
      $('#password_1').hide();
      $('#password_r').show();
          }
        })
        $('#level').change('live',function(){
          if ($.trim(this.value)!=""){
      $('#level_1').show();
      $('#level_r').hide();
          }else{
      $('#level_1').hide();
      $('#level_r').show();
          }
        });
        $('#register').click(function(){         
      count =0;
      $('.field').each(function(){
         if ($.trim(this.value)=="")
         count ++;
      });
      if(count>0){
        alert(count+'  Fields Have Not yet been filled, All fields on this form are MANDATORY ')
         return false;
      }else{
        
      $.ajax({
          type:"post",
          url:"<?php echo base_url();?>verification",
          data:$('#login').serialize(),
          success:function(data){
        redirect_url = "<?php echo base_url();?>home",
        data='Success';
        window.location.href = redirect_url;
          },
          error:function(){
             //alert('an error occured'); 
          }
          
      })
      }
      })
    })
  </script>
 </head>
 <div id="header"> 
   <div id="logo" style="padding:8px;color: #0000ff;" align="center"><img src="<?php echo base_url().'images/meds_logo.png';?>" height="35px" width="40px"/>MISSION FOR ESSENTIAL DRUGS AND SUPPLIES</div>
  </div>
<div style="padding-top:140px;" id="wrap" class="text-center">
  <!-- Button trigger modal -->
  <br>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
 Sign into MEDS LABS
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        
        <div id="login_form">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" style="color:#0000f0;" id="meds">MEDS Login Form</h4>
            </div>
            <?php echo validation_errors(); ?>
            <?php echo form_open('verification',array('id'=>'login'));?>
           
              <table class="table_form" bgcolor="transparent" align="center" border="0" width="100%" cellpadding="8px">
                
                <tr>
                  <td style="padding:8px;border-bottom:dotted 1px #bfbfbf;"><b>Username</b></td>
                  <td style="padding:8px;text-align:left;border-bottom:dotted 1px #bfbfbf;">
                  <input type="text" name="username" id="username" class="field"><span id="username_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="username_r" style="color:white;background-color:red;padding:4px;display:none">field required</span>
                  </td>
                </tr>
                <tr>
                  <td style="padding:8px;border-bottom:dotted 1px #bfbfbf;"><b>Password</b></td>
                  <td style="padding:8px;text-align:left;border-bottom:dotted 1px #bfbfbf;"><input type="password" name="password" id="password"class="field"><span id="password_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="password_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
                </tr>
                <tr>
                  <td style="padding:8px;border-bottom:dotted 1px #bfbfbf;"><b>Level</b></td>
                  <td style="padding:8px;text-align:left;border-bottom:dotted 1px #bfbfbf;">
                    <select  name="level" class="field" id="level">
                        <option selected></option>
                        <option value="7">Laboratory Assistant</option>
                        <option value="5">Laboratory Analyst</option>
                        <option value="6">Laboratory Supervisor</option>
                        <option value="6">Quality Assurance Manager</option>
                    </select><span id="level_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span><span id="level_r" style="color:white;background-color:red;padding:4px;display:none">field required</span></td>
                </tr>
                    <tr>
                      <td colspan="0" style="padding:8px;"><a href="<?php echo base_url().'reset_password';?>"><h6>Forgotten Password?</h6></a></td>
                      <td style="padding:8px;text-align:right;">
                        <input type="submit" class="button " name="register" id="register" value="Sign in">
                      </td>
                    </tr>
              </table>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>