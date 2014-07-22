<script>
    $(document).ready(function(){
    
        $('#fname').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#fname_1').show();
            $('#fname_r').hide();
          }else{
            $('#fname_1').hide();
            $('#fname_r').show();
          }
        })
    $('#lname').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#lname_1').show();
            $('#lname_r').hide();
          }else{
            $('#lname_1').hide();
            $('#lname_r').show();
          }
        })
        $('#uname').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#uname_1').show();
            $('#uname_r').hide();
          }else{
            $('#uname_1').hide();
            $('#uname_r').show();
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
    $('#telephone').change('live',function(){
          if ($.trim(this.value)!=""){
            $('#telephone_1').show();
            $('#telephone_r').hide();
          }else{
            $('#telephone_1').hide();
            $('#telephone_r').show();
          }
        });
    $('#submitc').click(function(){         
            count =0;
            $('.fielduser').each(function(){
               if ($.trim(this.value)=="")
               count ++;
            });
            if(count >0){
              alert( count+' All field as on this form are MANDATORY ')
               return false;
            }else{
              
            $.ajax({
                type:"post",
                url:"<?php echo base_url();?>add_user/Save",
                data:$('#new_user_form').serialize(),
                success:function(data){
            redirect_url = "<?php echo base_url();?>user_accounts/Get/"
                    data='Success';
                    window.location.href = redirect_url;
                },
                //error:function(){
                  // alert('an error occured'); 
               //}
            })
            }
            })
    })
</script>
<div id="analysis_request" class="analysis_request" >
        <?php echo validation_errors(); ?>
        <?php echo form_open('add_user/Save',array('id'=>'new_user_form'));?>   
        <table bgcolor="#c4c4ff" align="center" width="950px" border="0" cellpadding="4px">
            <tr>
                <td colspan="4" align="right" style="padding:8px;border-bottom: solid 1px #bfbfbf;color:#ffffff;background-color:#ffffff;"><a href="<?php echo base_url().'user_accounts/Get';?>"><img src="<?php echo base_url().'images/icons/back.png';?>" height="20px" width="20px"/>Back</a></td>
            </tr>
            <tr>
                <td colspan="4" align="center" style="padding:8px;border-bottom: solid 1px #bfbfbf;color:#0000ff;background-color:#e8e8ff;"><h5>New User Form</h5></td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>First Name</b></td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="fname" id  ="fname" class="fielduser"></input>
                    <span id="fname_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                    <span id="fname_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>   
            <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Last Name</b></td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="lname" id ="lname" class="fielduser"></input>
                    <span id="lname_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                    <span id="lname_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>
             <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Username</b></td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="lname" id ="uname"class="fielduser"></input>
                    <span id="uname_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                    <span id="uname_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
             </tr>
             <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Email</b></td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="email" id ="email" class="fielduser"></input>
                <span id="email_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="email_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-bottom: dotted 1px #bfbfbf;"><b>Telephone</b></td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;">
                    <input type="text" name="telephone" id ="telephone" class="fielduser"></input>
                <span id="telephone_1" style="color:Green; display:none"><img src="<?php echo base_url().'images/done.png';?>" height="10px" width="10px"></span>
                <span id="telephone_r" style="color:white;background-color:red;padding:4px;display:none">Field Required</span></td>
            </tr>
            <tr>
                <td colspan="4" height="25px" style="background-color:#ffffff;border-right: solid 1px #bfbfbf;"><b>Set Role</b></td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="radio" checked="checked" name="user_type" value="7"/>Laboratory Assistant</td>
                 <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="radio" name="user_type" value="6"/>Laboratory Supervisor</td>
            </tr>
            <tr>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="radio" name="user_type" value="5" checked="<?php if ('checked'=='checked'){?>"/>Laboratory Analyst</td>
                <td style="background-color:#ffffff;border-left: solid 1px #bfbfbf;border-bottom: dotted 1px #bfbfbf;"><input type="radio" name="user_type" value="8"/>Quality Assurance Manager</td>       
            </tr>
            <tr>
                <?php
                        echo"<td colspan='2' style='display:block'>";
                        }else{
                                echo"<td colspan='2' style='display:none'>";
                        }
                ?>
                        <table cellpadding="8px" bgcolor="#efefef" width="100%" border="0">
                                <tr>
                                        <td style="background-color: #ffffff;"><input type="radio" name="additional_role" value="1"/><b>Add Client Analysis Test Requests</b></td>
                                </tr>
                                <tr>
                                        <td style="background-color: #ffffff;"><input type="radio" name="additional_role" value="2"/><b>Equipment Maintenance & Calibration</b></td>
                                </tr>
                                <tr>
                                        <td style="background-color: #ffffff;"><input type="radio" name="additional_role" value="3"/><b>Reagents & Inventory</b></td>
                                </tr>
                                <tr>
                                        <td style="background-color: #ffffff;"><input type="radio" name="additional_role" value="4"/><b>Check Worksheets & Expiry of Reference Standard Registers</b></td>
                                </tr>
                        </table>
                </td>
            </tr>
            <tr>
                <td align="center" style="background-color:#ffffff;border-top: dotted 1px #bfbfbf;" colspan="4" ><input type="submit" id ="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</div>