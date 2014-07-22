
<table id="list" class="list_view_header" width="100%" bgcolor="#ffffff" cellpadding="4px">
    <thead bgcolor="#efefef">
       <tr>
            <th style="text-align:center;border-right: dotted 1px #ddddff;"></th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Lab Reg.No</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Product Name</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Batch No</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Client</th>
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
              if($user['logged_in']['user_type']==5){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Quantity Issued</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==6){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Quantity Remaining</th>
            <th style="text-align:center;border-right: dotted 1px #ddddff;">Date Requested</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==6){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Qoute</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==5){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Print Label</th>
            <th 
            <?php
              if($user['logged_in']['user_type']==6){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Assign</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Edit</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==6){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Logs</th>
            <th
            <?php 
              if($user['logged_in']['user_type']==5){
                echo"style='dsiplay:block;text-align:center;border-right: dotted 1px #ddddff;'";
              }else{
                echo"style='display:none;'";
              }
            ?>
            >Test</th>  
       </tr>
    </thead>
    <tbody>
    <?php
      $i=1;
      foreach ($query as $row):     
    ?>
    <tr>
     <?php
     ?>
       <td style="border-right: dotted 1px #c0c0c0;text-align: center;border-bottom: solid 1px #c0c0c0;" width="20px"><?php echo $i;?>.</td>
       <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->laboratory_number;?></td>
       <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->active_ingredients;?></td>
       <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->batch_lot_number;?></td>
       <td style="text-align: left;border-bottom: solid 1px #c0c0c0;"><?php echo $row->applicant_name;?></td>
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
          if($user['logged_in']['user_type']==5){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><?php echo $row->sample_issued;?></td>
       
       <td
        <?php 
          if($user['logged_in']['user_type']==6){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><?php echo $row->quantity_remaining;?></td>
       <td style="text-align: center;border-bottom: solid 1px #c0c0c0;"><?php echo substr($row->date_time,0,-8);?></td>
       <td
        <?php 
          if($user['logged_in']['user_type']==6){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><a href="<?php echo base_url().'finance/index/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/quote.png';?>" height="30px" width="30px"/>Quote</a></td>
       <td
        <?php 
          if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==5){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><a href="<?php echo base_url().'print_lable/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/print.png';?>" height="25px" width="25px"/>Print</a></td>
       <td
       <?php
        if($user['logged_in']['user_type']==6){
          echo"style='display:block;'";
        }else{
          echo"style='display:none;'";
        }
       ?>>
          <div
              <?php
              if($row->quantity_remaining=="0"){
                  echo"style='display:block;text-align: center;'>";
              ?><a href="<?php echo base_url().'worksheet/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/worksheet.png';?>" height="30px" width="30px"/>Worksheet</a>
          </div>
              <?php
              }elseif($row->quantity_remaining!="0"){
              ?>
          <div
              <?php
                  echo"style='display:block;text-align: center;'>";
              ?><a href="<?php echo base_url().'assignment/index/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/assign.png';?>" height="30px" width="30px"/>Assign</a>
          </div>
            <?php
            }
            ?>
       </td>
       <td
        <?php 
          if($user['logged_in']['user_type']==6||$user['logged_in']['user_type']==7){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><a href="<?php echo base_url().'update_request_record/Update/'.$row->id.'/'.$user_type_id.'/'.$department_id;?>"><img src="<?php echo base_url().'images/icons/edit.png';?>" height="30px" width="30px"/>edit</a></td>
       <td
        <?php 
          if($user['logged_in']['user_type']==6){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><a href="<?php echo base_url().'view_logs/logs/'.$row->id;?>"><img src="<?php echo base_url().'images/icons/view.png';?>" height="30px" width="30px"/>Log</a></td>
       <td
        <?php 
          if($user['logged_in']['user_type']==5){
            echo"style='dsiplay:block;text-align:center;border-bottom: solid 1px #c0c0c0;'";
          }else{
            echo"style='display:none;'";
          }
        ?>
       ><a href="<?php echo base_url().'test/index/'.$row->id.'/'.$test_request_id.'/'.$row->test_type_id;?>"><img src="<?php echo base_url().'images/icons/lab.png';?>" height="20px" width="20px"/>Test</a></td>
       <?php
         $i++;
       ?>
       </tr>
           <?php endforeach; ?>
     </tbody>           
</table>
