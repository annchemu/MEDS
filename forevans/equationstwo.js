
//Calculations for averages in dissolution test
function calculation_average(){

	//retrieve data from view and calculate
    var average_retention_time = (Math.abs(document.getElementById('rt_1').value) + Math.abs(document.getElementById('rt_2').value) + Math.abs(document.getElementById('rt_3').value) + Math.abs(document.getElementById('rt_4').value) + Math.abs(document.getElementById('rt_5').value) + Math.abs(document.getElementById('rt_6').value))/6;
    var average_peak_area= (Math.abs(document.getElementById('peak_area_1').value) + Math.abs(document.getElementById('peak_area_2').value) + Math.abs(document.getElementById('peak_area_3').value) + Math.abs(document.getElementById('peak_area_4').value) + Math.abs(document.getElementById('peak_area_5').value) + Math.abs(document.getElementById('peak_area_6').value))/6;
    var average_asymmetry = (Math.abs(document.getElementById('asymmetry_1').value) + Math.abs(document.getElementById('asymmetry_2').value) + Math.abs(document.getElementById('asymmetry_3').value) + Math.abs(document.getElementById('asymmetry_4').value) + Math.abs(document.getElementById('asymmetry_5').value) + Math.abs(document.getElementById('asymmetry_6').value))/6;
    var average_resolution = (Math.abs(document.getElementById('resolution_1').value) + Math.abs(document.getElementById('resolution_2').value) + Math.abs(document.getElementById('resolution_3').value) + Math.abs(document.getElementById('resolution_4').value) + Math.abs(document.getElementById('resolution_5').value) + Math.abs(document.getElementById('resolution_6').value))/6;
    var average_other = (Math.abs(document.getElementById('other_1').value) + Math.abs(document.getElementById('other_2').value) + Math.abs(document.getElementById('other_3').value) + Math.abs(document.getElementById('other_4').value) + Math.abs(document.getElementById('other_5').value) + Math.abs(document.getElementById('other_6').value))/6;
	
    // push output to display
  	document.getElementById('rt_avg').value = average_retention_time.toFixed(5);
  	document.getElementById('peak_area_avg').value = average_peak_area.toFixed(5);     
  	document.getElementById('asymmetry_avg').value = average_asymmetry.toFixed(5);
    document.getElementById('resolution_avg').value = average_resolution.toFixed(5);
    document.getElementById('other_avg').value =average_other.toFixed(5);

}

// Calculations for the standard deviation and relative standard deviation
function calculation_sd(){
    // push output to display
	var average_retention_time = (Math.abs(document.getElementById('rt_1').value) + Math.abs(document.getElementById('rt_2').value) + Math.abs(document.getElementById('rt_3').value) + Math.abs(document.getElementById('rt_4').value) + Math.abs(document.getElementById('rt_5').value) + Math.abs(document.getElementById('rt_6').value))/6;
    var average_peak_area= (Math.abs(document.getElementById('peak_area_1').value) + Math.abs(document.getElementById('peak_area_2').value) + Math.abs(document.getElementById('peak_area_3').value) + Math.abs(document.getElementById('peak_area_4').value) + Math.abs(document.getElementById('peak_area_5').value) + Math.abs(document.getElementById('peak_area_6').value))/6;
    var average_asymmetry = (Math.abs(document.getElementById('asymmetry_1').value) + Math.abs(document.getElementById('asymmetry_2').value) + Math.abs(document.getElementById('asymmetry_3').value) + Math.abs(document.getElementById('asymmetry_4').value) + Math.abs(document.getElementById('asymmetry_5').value) + Math.abs(document.getElementById('asymmetry_6').value))/6;
    var average_resolution = (Math.abs(document.getElementById('resolution_1').value) + Math.abs(document.getElementById('resolution_2').value) + Math.abs(document.getElementById('resolution_3').value) + Math.abs(document.getElementById('resolution_4').value) + Math.abs(document.getElementById('resolution_5').value) + Math.abs(document.getElementById('resolution_6').value))/6;
    var average_other = (Math.abs(document.getElementById('other_1').value) + Math.abs(document.getElementById('other_2').value) + Math.abs(document.getElementById('other_3').value) + Math.abs(document.getElementById('other_4').value) + Math.abs(document.getElementById('other_5').value) + Math.abs(document.getElementById('other_6').value))/6;
	
    // get values entered in array from, this will be used to get the no. of samples and in the loop
    var samples_retention_time = [Math.abs(document.getElementById('rt_1').value), Math.abs(document.getElementById('rt_2').value),Math.abs(document.getElementById('rt_3').value), Math.abs(document.getElementById('rt_4').value),Math.abs(document.getElementById('rt_5').value), Math.abs(document.getElementById('rt_6').value)];            
    var samples_peak_area = [Math.abs(document.getElementById('peak_area_1').value), parseInt(document.getElementById('peak_area_2').value), parseInt(document.getElementById('peak_area_3').value), parseInt(document.getElementById('peak_area_4').value), parseInt(document.getElementById('peak_area_5').value), parseInt(document.getElementById('peak_area_6').value)];
    var samples_asymmetry =[parseInt(document.getElementById('asymmetry_1').value), parseInt(document.getElementById('asymmetry_2').value), parseInt(document.getElementById('asymmetry_3').value), parseInt(document.getElementById('asymmetry_4').value), parseInt(document.getElementById('asymmetry_5').value), parseInt(document.getElementById('asymmetry_6').value)];
    var samples_resolution = [parseInt(document.getElementById('resolution_1').value), parseInt(document.getElementById('resolution_2').value),parseInt(document.getElementById('resolution_3').value), parseInt(document.getElementById('resolution_4').value),parseInt(document.getElementById('resolution_5').value), parseInt(document.getElementById('resolution_6').value)];
    var samples_other = [parseInt(document.getElementById('other_1').value), parseInt(document.getElementById('other_2').value),parseInt(document.getElementById('other_3').value), parseInt(document.getElementById('other_4').value),parseInt(document.getElementById('other_5').value), parseInt(document.getElementById('other_6').value)];

	var variance_retention_time=0;
    var variance_peak_area=0;
    var variance_asymmetry=0;
    var variance_resolution=0;
    var variance_other=0;
    // var variance_determination=0;  

     //v get the variance of each sample then add using '+='
     for(var i=0;i<samples_retention_time.length; i++){
       variance_retention_time += Math.pow((samples_retention_time [i]-average_retention_time),2);
         
     }
     for(var i=0;i<samples_peak_area.length; i++){
       variance_peak_area += Math.pow((samples_peak_area [i]-average_peak_area),2);
     
     }
      for(var i=0;i<samples_asymmetry.length; i++){
       variance_asymmetry += Math.pow((samples_asymmetry [i]-average_asymmetry),2);
     
     }
      for(var i=0;i<samples_resolution.length; i++){
       variance_resolution += Math.pow((samples_resolution [i]-average_resolution),2);
     
     }
      for(var i=0;i<samples_other.length; i++){
       variance_other += Math.pow((samples_other [i]-average_other),2);
     
     }

     // for(var i=0;i<samples_determination.length; i++){
     //   variance_determination += Math.pow((samples_determination [i]-average_determination),2);
     
     // }
    var n = i-1; 

    //get the sd
	var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/n);
	var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/n);
	var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/n);
	var standard_deviation_resolution= Math.sqrt((variance_resolution)/n);
	// //var standard_deviation_relative_retention_tim Math.sqrt((variance_relative_retention_time)/i-1);
	var standard_deviation_other= Math.sqrt((variance_other)/n);

    //get the rsd, sd divided by average multiplied by 100. it's in percentage form.
	var rsd_retention_time=Math.round((standard_deviation_retention_time/average_retention_time)*100);
    var rsd_peak_area=Math.round((standard_deviation_peak_area/average_peak_area)*100);
    var rsd_asymmetry=Math.round((standard_deviation_asymmetry/average_asymmetry)*100);
    var rsd_resolution=Math.round((standard_deviation_resolution/average_resolution)*100);
    var rsd_other=Math.round((standard_deviation_other/average_other)*100);

    // push data to the view
    document.getElementById('rt_sd').value = standard_deviation_retention_time.toFixed(5);
    document.getElementById('peak_area_sd').value = standard_deviation_peak_area.toFixed(5);
    document.getElementById('asymmetry_sd').value = standard_deviation_asymmetry.toFixed(5);
    document.getElementById('resolution_sd').value = standard_deviation_resolution.toFixed(5);
    document.getElementById('other_sd').value = standard_deviation_other.toFixed(5);

    document.getElementById('rt_rsd').value = rsd_retention_time.toFixed(5);
    document.getElementById('peak_area_rsd').value = rsd_peak_area.toFixed(5);
    document.getElementById('asymmetry_rsd').value = rsd_asymmetry.toFixed(5);
    document.getElementById('resolution_rsd').value = rsd_resolution.toFixed(5);
    document.getElementById('other_rsd').value = rsd_other.toFixed(5);

   var nmt_rt = Math.abs(document.getElementById('rt_ac').value);
   var nmt_peak_area = Math.abs(document.getElementById('peak_area_ac').value);
   var nmt_asymmetry = Math.abs(document.getElementById('asymmetry_ac').value);
   var nlt_resolution = Math.abs(document.getElementById('resolution_ac').value);

   //Compare acceptance criteria with the retention time and peak area averages.


   if(nmt_rt>average_retention_time){
    $("#rt_comment").val("Ok");

   }else{

    $("#rt_comment").val("Not Ok");
   }
   
   if(nmt_rt>average_retention_time){
    $("#peak_area_comment").val("Ok");

   }else{

    $("#peak_area_comment").val("Not Ok");
   }

   //Compare acceptance criteria with the asymmetry and resolution RSDs.
   if(nmt_asymmetry>rsd_asymmetry){
    $("#asymmetry_comment").val("Ok");

   }else{

    $("#asymmetry_comment").val("Not Ok");
   }
   if(nlt_resolution<rsd_resolution){
    $("#resolution_comment").val("Ok");

   }else{

    $("#resolution_comment").val("Not Ok");
   }
	}
	// Calculating the weights of standards
	$(function() {
          $('#container').keyup(function() {
            $('#standard_weight_1').val($('#standard_container').val() -$('#container').val());
                
            //$('#standard_weight_1').val((parseInt($('#standard_container').val())) - (parseInt($('#container').val())));
          });
   
          $('#container_2').keyup(function() {
                
            $('#standard_weight_2').val($('#standard_container_2').val() -$('#container_2').val());
            //$('#standard_weight_2').val((parseInt($('#standard_container_2').val())) - (parseInt($('#container_2').val())));
          });
   
          $('#container_3').keyup(function() {
                
            $('#standard_weight_3').val($('#standard_container_3').val() -$('#container_3').val());
            // $('#standard_weight_3').val((parseInt($('#standard_container_3').val())) - (parseInt($('#container_3').val())));
          });

          $('#container_4').keyup(function() {
                
            $('#standard_weight_4').val($('#standard_container_4').val() -$('#container_4').val());
            // $('#standard_weight_4').val((parseInt($('#standard_container_4').val())) - (parseInt($('#container_4').val())));
          });
  
          $('#container_5').keyup(function() {
                
            $('#standard_weight_5').val($('#standard_container_5').val() -$('#container_5').val());
            // $('#standard_weight_5').val((parseInt($('#standard_container_5').val())) - (parseInt($('#container_5').val())));
          });
 
          $('#container_6').keyup(function() {
                
            $('#standard_weight_6').val($('#standard_container_6').val() -$('#container_6').val());
            // $('#standard_weight_6').val((parseInt($('#standard_container_6').val())) - (parseInt($('#container_6').val())));
          });


    // Calculating the weights of samples

          $('#sample_container').keyup(function() {
            $('#sample_weight').val($('#sample_weight_container').val() -$('#sample_container').val());
           // $('#sample_weight').val((parseInt($('#sample_weight_container').val())) - (parseInt($('#sample_container').val())));
          });
  
          $('#sample_container_2').keyup(function() {
                
            $('#sample_weight_2').val($('#sample_weight_container_2').val() -$('#sample_container_2').val());
            // $('#sample_weight_2').val((parseInt($('#sample_weight_container_2').val())) - (parseInt($('#sample_container_2').val())));
          });
  
          $('#sample_container_3').keyup(function() {
                
            $('#sample_weight_3').val($('#sample_weight_container_3').val() -$('#sample_container_3').val());
            // $('#sample_weight_3').val((parseInt($('#sample_weight_container_3').val())) - (parseInt($('#sample_container_3').val())));
          });
 
          $('#sample_container_4').keyup(function() {
                
            $('#sample_weight_4').val($('#sample_weight_container_4').val() -$('#sample_container_4').val());
            // $('#sample_weight_4').val((parseInt($('#sample_weight_container_4').val())) - (parseInt($('#sample_container_4').val())));
          });
   
          $('#sample_container_5').keyup(function() {
                
            $('#sample_weight_5').val($('#sample_weight_container_5').val() -$('#sample_container_5').val());
            // $('#sample_weight_5').val((parseInt($('#sample_weight_container_5').val())) - (parseInt($('#sample_container_5').val())));
          });
  
          $('#sample_container_6').keyup(function() {
                
            $('#sample_weight_6').val($('#sample_weight_container_6').val() -$('#sample_container_6').val());
            // $('#sample_weight_6').val((parseInt($('#sample_weight_container_6').val())) - (parseInt($('#sample_container_6').val())));
          });
    
     // Calculating the weights of reagents

          $('#reagent_container_1').keyup(function() {
                
            $('#reagent_weight_1').val($('#reagent_weight_container_1').val() -$('#reagent_container_1').val());
            // $('#reagent_weight_1').val((parseInt($('#reagent_weight_container_1').val())) - (parseInt($('#reagent_container_1').val())));
          });
   
          $('#reagent_container_2').keyup(function() {
                
            $('#reagent_weight_2').val($('#reagent_weight_container_2').val() -$('#reagent_container_2').val());
            // $('#reagent_weight_2').val((parseInt($('#reagent_weight_container_2').val())) - (parseInt($('#reagent_container_2').val())));
          });
   
          $('#reagent_container_3').keyup(function() {
                
            $('#reagent_weight_3').val($('#reagent_weight_container_3').val() -$('#reagent_container_3').val());
            // $('#reagent_weight_3').val((parseInt($('#reagent_weight_container_3').val())) - (parseInt($('#reagent_container_3').val())));
          });
 
          $('#reagent_container_4').keyup(function() {
                
            $('#reagent_weight_4').val($('#reagent_weight_container_4').val() -$('#reagent_container_4').val());
            // $('#reagent_weight_4').val((parseInt($('#reagent_weight_container_4').val())) - (parseInt($('#reagent_container_4').val())));
          });
 
      //Calculating volumes of titers.              
          $('#initial_burette_volume_one').keyup(function() {
                
            $('#volume_used_one').val((parseInt($('#final_burette_volume_one').val())) - (parseInt($('#initial_burette_volume_one').val())));
          });

           $('#initial_burette_volume_two').keyup(function() {
                
            $('#volume_used_two').val((parseInt($('#final_burette_volume_two').val())) - (parseInt($('#initial_burette_volume_two').val())));
          });

           $('#initial_burette_volume_three').keyup(function() {
                
            $('#volume_used_three').val((parseInt($('#final_burette_volume_three').val())) - (parseInt($('#initial_burette_volume_three').val())));
          });

           $('#initial_burette_volume_four').keyup(function() {
                        
            $('#volume_used_four').val((parseInt($('#final_burette_volume_four').val())) - (parseInt($('#initial_burette_volume_four').val())));
          });

           $('#initial_burette_volume_five').keyup(function() {
                
            $('#volume_used_five').val((parseInt($('#final_burette_volume_five').val())) - (parseInt($('#initial_burette_volume_five').val())));
          });

           $('#initial_burette_volume_six').keyup(function() {
                
            $('#volume_used_six').val((parseInt($('#final_burette_volume_six').val())) - (parseInt($('#initial_burette_volume_six').val())));
          });
          
    //Calculating volumes of titration
            $('#titration_initial_volume_one').keyup(function(){
              var volume_one = parseInt($('#titration_final_burette_volume_one').val()) - parseInt($('#titration_initial_volume_one').val());
              var used_volume_one = parseInt($('#sample_one_volume_used_one').val()) - volume_one; 

              $('#titration_volume_one').val(volume_one);
              $('#sample_two_volume_used_one').val(volume_one);
              $('#sample_three_volume_used_one').val(used_volume_one);

            });

            $('#titration_initial_volume_two').keyup(function(){
              var volume_two = parseInt($('#titration_final_burette_volume_two').val()) - parseInt($('#titration_initial_volume_two').val());
              var used_volume_two = parseInt($('#sample_one_volume_used_two').val()) - volume_two; 
              $('#titration_volume_two').val(volume_two);
              $('#sample_two_volume_used_two').val(volume_two);
              $('#sample_three_volume_used_two').val(used_volume_two);
            });

            $('#titration_initial_volume_three').keyup(function(){
              var volume_three = parseInt($('#titration_final_burette_volume_three').val()) - parseInt($('#titration_initial_volume_three').val());
              var used_volume_three = parseInt($('#sample_one_volume_used_three').val()) - volume_three; 

              $('#titration_volume_three').val(volume_three);
              $('#sample_two_volume_used_three').val(volume_three);
              $('#sample_three_volume_used_three').val(used_volume_three);
            });

            $('#titration_initial_volume_four').keyup(function(){
              var volume_four = parseInt($('#titration_final_burette_volume_four').val()) - parseInt($('#titration_initial_volume_four').val());
              var used_volume_four = parseInt($('#sample_one_volume_used_four').val()) - volume_four; 

              $('#titration_volume_four').val(volume_four);
              $('#sample_two_volume_used_four').val(volume_four);
              $('#sample_three_volume_used_four').val(used_volume_four);
            });

            $('#titration_initial_volume_five').keyup(function(){
              var volume_five = parseInt($('#titration_final_burette_volume_five').val()) - parseInt($('#titration_initial_volume_five').val());
              var used_volume_five = parseInt($('#sample_one_volume_used_five').val()) - volume_five; 
              $('#titration_volume_five').val(volume_five);
              $('#sample_two_volume_used_five').val(volume_five);
              $('#sample_three_volume_used_five').val(used_volume_five);
            });

            $('#titration_initial_volume_six').keyup(function(){
              var volume_six = parseInt($('#titration_final_burette_volume_six').val()) - parseInt($('#titration_initial_volume_six').val());
              var used_volume_six = parseInt($('#sample_one_volume_used_six').val()) - volume_six; 
              $('#titration_volume_six').val(volume_six);
              $('#sample_two_volume_used_six').val(volume_six);
              $('#sample_three_volume_used_six').val(used_volume_six);
            });
    //Calculating determinations for Karl Fisher(water method)
  
          $('#det_1_wt').keyup(function() {

          	var determination_1 = ((parseInt($('#det_1_kfv').val())) * (parseInt($('#det_1_f').val()))*100)/((parseInt($('#det_1_wt').val()))*1000);               
            $('#water_determination_1').val(determination_1);
            
          });
   
          $('#det_2_wt').keyup(function() {

          	var determination_2 = ((parseInt($('#det_2_kfv').val())) * (parseInt($('#det_2_f').val()))*100)/((parseInt($('#det_2_wt').val()))*1000);               
            $('#water_determination_2').val(determination_2);
            
          });
   
          $('#det_3_wt').keyup(function() {

          	var determination_3 = ((parseInt($('#det_3_kfv').val())) * (parseInt($('#det_3_f').val()))*100)/((parseInt($('#det_3_wt').val()))*1000);               
            $('#water_determination_3').val(determination_3);
          
      		var average_water =   (Math.abs(document.getElementById('water_determination_1').value) + Math.abs(document.getElementById('water_determination_2').value) + Math.abs(document.getElementById('water_determination_3').value) )/3;
      		$('#determination_avg_water').val(average_water.toFixed(5));
            //alert(average);
            var samples_water = [Math.abs(document.getElementById('water_determination_1').value), Math.abs(document.getElementById('water_determination_2').value), Math.abs(document.getElementById('water_determination_3').value)];
            var variance_water = 0;

            for(var i=0;i<samples_water.length; i++){
		       variance_water += Math.pow((samples_water [i]-average_water),2);
		         
		     }
		     var n = i-1;
		     var std_dev_water = Math.sqrt((variance_water)/n)

            $('#determination_rsd_water').val(std_dev_water.toFixed(5));
          });

		//Calculating determinations for Loss on Drying
  
          $('#det_1_initial_weight').keyup(function() {

          	var loss_determination_1 = ((parseInt($('#det_1_initial').val())) * (parseInt($('#det_1_weight').val()))*100)/(parseInt($('#det_1_initial_weight').val()));               
            $('#loss_determination_1').val(loss_determination_1.toFixed(5));
            
          });
   
          $('#det_2_initial_weight').keyup(function() {

          	var loss_determination_2 = ((parseInt($('#det_2_initial').val())) * (parseInt($('#det_2_weight').val()))*100)/(parseInt($('#det_2_initial_weight').val()));               
            $('#loss_determination_2').val(loss_determination_2.toFixed(5));
            
          });
   		  $('#det_3_initial_weight').keyup(function() {

          	var loss_determination_3 = ((parseInt($('#det_3_initial').val())) * (parseInt($('#det_3_weight').val()))*100)/(parseInt($('#det_3_initial_weight').val()));               
            $('#loss_determination_3').val(loss_determination_3.toFixed(5));
            
          });
   
          $('#det_4_initial_weight').keyup(function() {

          	var loss_determination_4 = ((parseInt($('#det_4_initial').val())) * (parseInt($('#det_4_weight').val()))*100)/(parseInt($('#det_4_initial_weight').val()));               
            $('#loss_determination_4').val(loss_determination_4.toFixed(5));
            
          });
   		  $('#det_5_initial_weight').keyup(function() {

          	var loss_determination_5 = ((parseInt($('#det_5_initial').val())) * (parseInt($('#det_5_weight').val()))*100)/(parseInt($('#det_5_initial_weight').val()));               
            $('#loss_determination_5').val(loss_determination_5.toFixed(5));
            
          });
   
          $('#det_6_initial_weight').keyup(function() {

          	var loss_determination_6 = ((parseInt($('#det_6_initial').val())) * (parseInt($('#det_6_weight').val()))*100)/(parseInt($('#det_6_initial_weight').val()));               
            $('#loss_determination_6').val(loss_determination_6.toFixed(5));
          
      		var average_loss =   (Math.abs(document.getElementById('loss_determination_1').value) + Math.abs(document.getElementById('loss_determination_2').value) + Math.abs(document.getElementById('loss_determination_3').value) + Math.abs(document.getElementById('loss_determination_4').value) + Math.abs(document.getElementById('loss_determination_5').value) + Math.abs(document.getElementById('loss_determination_6').value) )/3;
      		$('#determination_avg_loss').val(average_loss.toFixed(5));
            //alert(average);
            var samples_loss = [Math.abs(document.getElementById('loss_determination_1').value), Math.abs(document.getElementById('loss_determination_2').value), Math.abs(document.getElementById('loss_determination_3').value),Math.abs(document.getElementById('loss_determination_4').value), Math.abs(document.getElementById('loss_determination_5').value), Math.abs(document.getElementById('loss_determination_6').value)];
            var variance_loss = 0;

            for(var i=0;i<samples_loss.length; i++){
		       variance_loss += Math.pow((samples_loss [i]-average_loss),2);
		         
		     }
		     var n = i-1;
		     var std_dev_loss = Math.sqrt((variance_loss)/n)

            $('#determination_rsd_loss').val(std_dev_loss.toFixed(5));
          });
//Calculations for identifcation by hplc samples	

        $('.rt').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".rt").filter(function() {
                return (this.value.length);
            }).length;
            $('.rt').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded_std = answer.toFixed(2);
                return answer_rounded;
            }); 
            var rt = [Math.abs(document.getElementById('rt_1').value), Math.abs(document.getElementById('rt_2').value), Math.abs(document.getElementById('rt_3').value), Math.abs(document.getElementById('rt_4').value), Math.abs(document.getElementById('rt_5').value), Math.abs(document.getElementById('rt_6').value)];
             var variance_rt = 0;

             for(var i=0;i<rt.length; i++){
		        variance_rt += Math.pow((rt [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sd_rt = Math.sqrt((variance_rt)/n);
		      var rt_rsd = (sd_rt/answer)*100;
       		//alert(sample_sd_rt);

          //Compare the acceptance criteria
          var nmt_rt = $('#rt_ac').val();
              if(nmt_rt>answer_rounded_std){
                $("#rt_comment").val("Ok");

               }else{

                $("#rt_comment").val("Not Ok");
               }
           
           
            $('#rt_avg').val(answer_rounded_std);
            $('#rt_sd').val(sd_rt.toFixed(5));
            $('#rt_rsd').val(rt_rsd.toFixed(5));
        });
    $('.sample_rt').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_rt").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_rt').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded_sample = answer.toFixed(2);
            }); 
            var samples_rt = [Math.abs(document.getElementById('sample_rt_1').value), Math.abs(document.getElementById('sample_rt_2').value), Math.abs(document.getElementById('sample_rt_3').value), Math.abs(document.getElementById('sample_rt_4').value), Math.abs(document.getElementById('sample_rt_5').value), Math.abs(document.getElementById('sample_rt_6').value)];
             var variance_rt = 0;

             for(var i=0;i<samples_rt.length; i++){
            variance_rt += Math.pow((samples_rt [i]-answer),2);
             
          }
          var n = i-1;
          var sample_sd_rt = Math.sqrt((variance_rt)/n);
          var sample_rt_rsd = (sample_sd_rt/answer)*100;
          //alert(sample_sd_rt);

            $('.sample_rt_avg').val(answer_rounded_sample);
            $('.sample_rt_sd').val(sample_sd_rt.toFixed(5));
            $('.sample_rt_rsd').val(sample_rt_rsd.toFixed(5));
            $('.sample_rt_rsd').val(sample_rt_rsd.toFixed(5));

            var standard = $('#rt_avg').val();
            var average_retention_time = 0;       

            if (standard == 0 || sample == 0) {
              average_retention_time =0;

            }else{
              average_retention_time = answer_rounded_sample/standard;
            }

            $('#sample_value').val(answer_rounded_sample);
            $('#std_value').val(standard);
            $('#sample_rrt_avg').val(average_retention_time.toFixed(5));

 });     
$('.sample_rt').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            
            $('.sample_rt_rsd').val(sample_rt_rsd.toFixed(5));
        });
 		$('.sample_peak_area').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_peak_area").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_peak_area').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
            var samples_peak_area = [Math.abs(document.getElementById('sample_peak_area_1').value), Math.abs(document.getElementById('sample_peak_area_2').value), Math.abs(document.getElementById('sample_peak_area_3').value), Math.abs(document.getElementById('sample_peak_area_4').value), Math.abs(document.getElementById('sample_peak_area_5').value), Math.abs(document.getElementById('sample_peak_area_6').value)];
             var variance_peak_area = 0;

             for(var i=0;i<samples_peak_area.length; i++){
		        variance_peak_area += Math.pow((samples_peak_area [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sample_sd_peak_area = Math.sqrt((variance_peak_area)/n);
		      var sample_peak_area_rsd = (sample_sd_peak_area/answer)*100;
       		//alert(sample_sd_peak_area);
           
            $('.sample_peak_area_avg').val(answer_rounded);
            $('.sample_peak_area_sd').val(sample_sd_peak_area.toFixed(5));
            $('.sample_peak_area_rsd').val(sample_peak_area_rsd.toFixed(5));
        });
 		$('.sample_asymmetry').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_asymmetry").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_asymmetry').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
            var samples_asymmetry = [Math.abs(document.getElementById('sample_asymmetry_1').value), Math.abs(document.getElementById('sample_asymmetry_2').value), Math.abs(document.getElementById('sample_asymmetry_3').value), Math.abs(document.getElementById('sample_asymmetry_4').value), Math.abs(document.getElementById('sample_asymmetry_5').value), Math.abs(document.getElementById('sample_asymmetry_6').value)];
             var variance_asymmetry = 0;

             for(var i=0;i<samples_asymmetry.length; i++){
		        variance_asymmetry += Math.pow((samples_asymmetry [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sample_sd_asymmetry = Math.sqrt((variance_asymmetry)/n);
		      var sample_asymmetry_rsd = (sample_sd_asymmetry/answer)*100;
       		//alert(sample_sd_asymmetry);
           
            $('.sample_asymmetry_avg').val(answer_rounded);
            $('.sample_asymmetry_sd').val(sample_sd_asymmetry.toFixed(5));
            $('.sample_asymmetry_rsd').val(sample_asymmetry_rsd.toFixed(5));
        });
 		$('.sample_theoretical').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_theoretical").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_theoretical').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
            var samples_theoretical = [Math.abs(document.getElementById('sample_theoretical_1').value), Math.abs(document.getElementById('sample_theoretical_2').value), Math.abs(document.getElementById('sample_theoretical_3').value), Math.abs(document.getElementById('sample_theoretical_4').value), Math.abs(document.getElementById('sample_theoretical_5').value), Math.abs(document.getElementById('sample_theoretical_6').value)];
             var variance_theoretical = 0;

             for(var i=0;i<samples_theoretical.length; i++){
		        variance_theoretical += Math.pow((samples_theoretical [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sample_sd_theoretical = Math.sqrt((variance_theoretical)/n);
		      var sample_theoretical_rsd = (sample_sd_theoretical/answer)*100;
       		//alert(sample_sd_theoretical);
           
            $('.sample_theoretical_avg').val(answer_rounded);
            $('.sample_theoretical_sd').val(sample_sd_theoretical.toFixed(5));
            $('.sample_theoretical_rsd').val(sample_theoretical_rsd.toFixed(5));
        });
 	$('.sample_resolution').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_resolution").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_resolution').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
            var samples_resolution = [Math.abs(document.getElementById('sample_resolution_1').value), Math.abs(document.getElementById('sample_resolution_2').value), Math.abs(document.getElementById('sample_resolution_3').value), Math.abs(document.getElementById('sample_resolution_4').value), Math.abs(document.getElementById('sample_resolution_5').value), Math.abs(document.getElementById('sample_resolution_6').value)];
             var variance_resolution = 0;

             for(var i=0;i<samples_resolution.length; i++){
		        variance_resolution += Math.pow((samples_resolution [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sample_sd_resolution = Math.sqrt((variance_resolution)/n);
		      var sample_resolution_rsd = (sample_sd_resolution/answer)*100;
       		//alert(sample_sd_resolution);
           
            $('.sample_resolution_avg').val(answer_rounded);
            $('.sample_resolution_sd').val(sample_sd_resolution.toFixed(5));
            $('.sample_resolution_rsd').val(sample_resolution_rsd.toFixed(5));
        });
 		$('.sample_rrt').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_rrt").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_rrt').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
            var samples_rrt = [Math.abs(document.getElementById('sample_rrt_1').value), Math.abs(document.getElementById('sample_rrt_2').value), Math.abs(document.getElementById('sample_rrt_3').value), Math.abs(document.getElementById('sample_rrt_4').value), Math.abs(document.getElementById('sample_rrt_5').value), Math.abs(document.getElementById('sample_rrt_6').value)];
             var variance_rrt = 0;

             for(var i=0;i<samples_rrt.length; i++){
		        variance_rrt += Math.pow((samples_rrt [i]-answer),2);
		         
		      }
		      var n = i-1;
		      var sample_sd_rrt = Math.sqrt((variance_rrt)/n);
		      var sample_rrt_rsd = (sample_sd_rrt/answer)*100;
       		//alert(sample_sd_rrt);
           
            $('.sample_rrt_avg').val(answer_rounded);
            $('.sample_rrt_sd').val(sample_sd_rrt.toFixed(5));
            $('.sample_rrt_rsd').val(sample_rrt_rsd.toFixed(5));
        });
    });	
    $(document).ready(function() {

	//calculating rf Value for identification by Thin Layer Chromatography
	$('#substance_std_1').keyup(function() {

          	var std_1 = (parseInt($('#substance_std_1').val())) / (parseInt($('#solvent_std_1').val()))
            $('#rf_std_1').val(std_1.toFixed(5));
          });
	$('#substance_std_2').keyup(function() {

          	var std_2 = (parseInt($('#substance_std_2').val())) / (parseInt($('#solvent_std_2').val()))
            $('#rf_std_2').val(std_2.toFixed(5));
          });
	$('#substance_sample').keyup(function() {

          	var solvent_sample = (parseInt($('#substance_sample').val())) / (parseInt($('#solvent_sample').val()))

            var rf_standard_1 =$('#rf_std_1').val(); 
            var rr_value = solvent_sample / rf_standard_1;
            // alert("bfd")
            $('#rf_sample').val(solvent_sample.toFixed(5));
            $('#rr_value').val(rr_value.toFixed(5));            
          });
	$('#substance_impurity_1').keyup(function() {

          	var impurity_1 = (parseInt($('#substance_impurity_1').val())) / (parseInt($('#solvent_impurity_1').val()))
            $('#rf_impurity_1').val(impurity_1.toFixed(5));
          });
	$('#substance_impurity_2').keyup(function() {

          	var impurity_2 = (parseInt($('#substance_impurity_2').val())) / (parseInt($('#solvent_impurity_2').val()))
            $('#rf_impurity_2').val(impurity_2.toFixed(5));
          });
	 });
	//Calculating averages for standard and each sample
    $(document).ready(function() {
        $('.standard').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".standard").filter(function() {
                return (this.value.length);
            }).length;
            $('.standard').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 

            $('.standard_avg').val(answer_rounded);
            $('#det_1_pkstd').val(answer_rounded); $('#det_2_pkstd').val(answer_rounded); $('#det_3_pkstd').val(answer_rounded); $('#det_4_pkstd').val(answer_rounded); $('#det_5_pkstd').val(answer_rounded); $('#det_6_pkstd').val(answer_rounded); 
        });
    });	
    $(document).ready(function() {
        $('.sample_1').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_1").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_1').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_1_avg').val(answer_rounded);
            $('#det_1_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_2').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_2").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_2').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_2_avg').val(answer_rounded);
            $('#det_2_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_3').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_3").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_3').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_3_avg').val(answer_rounded);
            $('#det_3_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_4').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_4").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_4').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_4_avg').val(answer_rounded);
            $('#det_4_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_5').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_5").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_5').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_5_avg').val(answer_rounded);
            $('#det_5_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_6').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_6").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_6').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_6_avg').val(answer_rounded);
            $('#det_6_pkt').val(answer_rounded);            
        });
    });	
    $(document).ready(function() {
        $('.sample_7').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_7").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_7').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_7_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.sample_8').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_8").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_8').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_8_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.sample_9').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_9").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_9').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_9_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.sample_10').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_10").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_10').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_10_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.sample_11').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_11").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_11').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_11_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.sample_12').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".sample_12").filter(function() {
                return (this.value.length);
            }).length;
            $('.sample_12').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.sample_12_avg').val(answer_rounded);
        });
    });
    $(document).ready(function() {
        $('.second_standard').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_standard").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_standard').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 

            $('.second_standard_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_1').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_1").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_1').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_1_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_2').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_2").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_2').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_2_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_3').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_3").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_3').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_3_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_4').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_4").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_4').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_4_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_5').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_5").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_5').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_5_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_6').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_6").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_6').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_6_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_7').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_7").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_7').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_7_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_8').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_8").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_8').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_8_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_9').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_9").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_9').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_9_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_10').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_10").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_10').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_10_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_11').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_11").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_11').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_11_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.second_sample_12').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".second_sample_12").filter(function() {
                return (this.value.length);
            }).length;
            $('.second_sample_12').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.second_sample_12_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_1').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_1").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_1').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_1_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_2').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_2").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_2').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_2_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_3').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_3").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_3').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_3_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_4').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_4").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_4').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_4_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_5').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_5").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_5').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_5_avg').val(answer_rounded);
        });
    });	
    $(document).ready(function() {
        $('.impurity_6').keyup(function() {          

            var sum = 0;
            var sum_rounded = 0;
            var answer = 0;
            var answer_rounded = 0;

            boxes = $(".impurity_6").filter(function() {
                return (this.value.length);
            }).length;
            $('.impurity_6').each(function() {
                sum += Number($(this).val());
                sum_rounded = sum.toFixed(2);
                answer = sum_rounded / boxes;
                answer_rounded = answer.toFixed(2);
            }); 
           
            $('.impurity_6_avg').val(answer_rounded);
        });
    });

    //Calulate dilution factor then echo the value in all DFs in determination
    $(document).ready(function() {
        $('#df_3').keyup(function() {          
        var df_1 = $("#df_1").val();
        var df_2 = $("#df_2").val();
        var df_3 = $("#df_3").val();
        dilution_factor = (df_1 *df_2)/df_3;

        $('#dilution_factor').val(dilution_factor.toFixed(4));
        $('#det_1_df').val(dilution_factor.toFixed(4)); $('#det_2_df').val(dilution_factor.toFixed(4)); $('#det_3_df').val(dilution_factor.toFixed(4)); $('#det_4_df').val(dilution_factor.toFixed(4)); $('#det_5_df').val(dilution_factor.toFixed(4)); $('#det_6_df').val(dilution_factor.toFixed(4)); 
        $('#second_det_1_df').val(dilution_factor.toFixed(4)); $('#second_det_2_df').val(dilution_factor.toFixed(4)); $('#second_det_3_df').val(dilution_factor.toFixed(4)); $('#second_det_4_df').val(dilution_factor.toFixed(4)); $('#second_det_5_df').val(dilution_factor.toFixed(4)); $('#second_det_6_df').val(dilution_factor.toFixed(4)); 
        });
  
      //Pull potency value from the potency text box
      $("#potency").change(function(){

        var text_potency = $("#potency").val();
        $("#det_1_potency").val(text_potency); $("#det_2_potency").val(text_potency); $("#det_3_potency").val(text_potency); $("#det_4_potency").val(text_potency); $("#det_5_potency").val(text_potency); $("#det_6_potency").val(text_potency);
      }); 

    // Echoing similar values from determination one to other determinations

        $("#det_1_wstd").change(function()       {
        var text_wstd = $("#det_1_wstd").val();     

        $("#det_2_wstd").val(text_wstd);
        $("#det_3_wstd").val(text_wstd); 
        $("#det_4_wstd").val(text_wstd); 
        $("#det_5_wstd").val(text_wstd); 
        $("#det_6_wstd").val(text_wstd); 
            }); 
    });
    //Calculating determinations
    function calculation_determinations(){
      var determination_one =   (Math.abs(document.getElementById('det_1_pkt').value) * Math.abs(document.getElementById('det_1_wstd').value) * Math.abs(document.getElementById('det_1_df').value) * 100 *  Math.abs(document.getElementById('det_1_potency').value))/(Math.abs(document.getElementById('det_1_pkstd').value) * Math.abs(document.getElementById('det_1_lc').value));
      var determination_two =   (Math.abs(document.getElementById('det_2_pkt').value) * Math.abs(document.getElementById('det_2_wstd').value) * Math.abs(document.getElementById('det_2_df').value) * 100 *  Math.abs(document.getElementById('det_2_potency').value))/(Math.abs(document.getElementById('det_2_pkstd').value) * Math.abs(document.getElementById('det_2_lc').value));
      var determination_three = (Math.abs(document.getElementById('det_3_pkt').value) * Math.abs(document.getElementById('det_3_wstd').value) * Math.abs(document.getElementById('det_3_df').value) * 100 *  Math.abs(document.getElementById('det_3_potency').value))/(Math.abs(document.getElementById('det_3_pkstd').value) * Math.abs(document.getElementById('det_3_lc').value));
      var determination_four =  (Math.abs(document.getElementById('det_4_pkt').value) * Math.abs(document.getElementById('det_4_wstd').value) * Math.abs(document.getElementById('det_4_df').value) * 100 *  Math.abs(document.getElementById('det_4_potency').value))/(Math.abs(document.getElementById('det_4_pkstd').value) * Math.abs(document.getElementById('det_4_lc').value));
      var determination_five =  (Math.abs(document.getElementById('det_5_pkt').value) * Math.abs(document.getElementById('det_5_wstd').value) * Math.abs(document.getElementById('det_5_df').value) * 100 *  Math.abs(document.getElementById('det_5_potency').value))/(Math.abs(document.getElementById('det_5_pkstd').value) * Math.abs(document.getElementById('det_5_lc').value));
      var determination_six =   (Math.abs(document.getElementById('det_6_pkt').value) * Math.abs(document.getElementById('det_6_wstd').value) * Math.abs(document.getElementById('det_6_df').value) * 100 *  Math.abs(document.getElementById('det_6_potency').value))/(Math.abs(document.getElementById('det_6_pkstd').value) * Math.abs(document.getElementById('det_6_lc').value));
     
      document.getElementById('determination_1').value = determination_one.toFixed(5);
      document.getElementById('determination_2').value = determination_two.toFixed(5);
      document.getElementById('determination_3').value = determination_three.toFixed(5);
      document.getElementById('determination_4').value = determination_four.toFixed(5);
      document.getElementById('determination_5').value = determination_five.toFixed(5);
      document.getElementById('determination_6').value = determination_six.toFixed(5);

     
      var average_determination = (Math.abs(document.getElementById('determination_1').value) + Math.abs(document.getElementById('determination_2').value) + Math.abs(document.getElementById('determination_3').value) + Math.abs(document.getElementById('determination_4').value) + Math.abs(document.getElementById('determination_5').value) + Math.abs(document.getElementById('determination_6').value))/6;    
      var determinations_values =  [Math.abs(document.getElementById('determination_1').value), Math.abs(document.getElementById('determination_2').value),Math.abs(document.getElementById('determination_3').value), Math.abs(document.getElementById('determination_4').value),Math.abs(document.getElementById('determination_5').value), Math.abs(document.getElementById('determination_6').value)];            
	    var determinations_variance = 0;
      var highest_value =Math.max.apply(Math,determinations_values);
      var lowest_value =Math.min.apply(Math,determinations_values);

	  for(var i=0;i<determinations_values.length; i++){
       determinations_variance += Math.pow((determinations_values[i]-average_determination),2);
         
     }
     
     var n = i-1;
  	 var standard_deviation_determinations= Math.sqrt((determinations_variance)/n);
  	 var rsd_determination = (standard_deviation_determinations/average_determination)*100;
     var equivalent_to = (Math.abs(document.getElementById('label_claim').value)*average_determination)/100; 


      document.getElementById('determination_avg').value = average_determination.toFixed(5);   
      document.getElementById('determination_rsd').value = rsd_determination.toFixed(5); 
      document.getElementById('determination_sd_2').value = standard_deviation_determinations.toFixed(5); 
      document.getElementById('determination_rsd_2').value = rsd_determination.toFixed(5); 
      document.getElementById('equivalent').value = equivalent_to.toFixed(5);   
      document.getElementById('range_min').value = lowest_value.toFixed(2);
      document.getElementById('range_max').value = highest_value.toFixed(2);      
      document.getElementById('nlt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('nlt_max_tolerance_det').value = highest_value.toFixed(2);     
      document.getElementById('ngt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('ngt_max_tolerance_det').value = highest_value.toFixed(2);      
      document.getElementById('range_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('range_max_tolerance_det').value = highest_value.toFixed(2);   

      var min_tolerance=0;
      var max_tolerance=0;
      var tolerance_range_from=0;
      var tolerance_range_to=0;

      var comment_a= new String();
      var comment_b= new String();
      var comment_c = new String();
      var comment_conclusion= new String();

      min_tolerance=Math.abs(document.getElementById('min_tolerance').value);   
      max_tolerance=Math.abs(document.getElementById('max_tolerance').value);
      tolerance_range_from = $("#tolerance_range_from").val();
      tolerance_range_to = $("#tolerance_range_to").val();
      

      if(min_tolerance==0 || min_tolerance==""){
            comment_a= "";
      }
      else if(min_tolerance < lowest_value){
            comment_a= "Not Ok";
            comment_conclusion = "The Test Failed";
      }else{
            comment_a="OK";
            comment_conclusion = "The Test Passed";
      }

      if(max_tolerance==0 || max_tolerance==""){
            comment_b= "";
      }
      else if (max_tolerance > highest_value){
            comment_b= "Not Ok";
            comment_conclusion = "The Test Failed";
      }else{
            comment_b="OK";
            comment_conclusion = "The Test Passed";
      }
     

      if(tolerance_range_from==0 || tolerance_range_from=="" || tolerance_range_to==0 || tolerance_range_to==""){
            comment_c= "";
      }else if (tolerance_range_from < lowest_value || tolerance_range_to < highest_value){
            comment_c= "Not Ok";
            comment_conclusion = "The Test Failed";

      }else{
            comment_c="OK";
            comment_conclusion = "The Test Passed";

      }
     
      document.getElementById('min_tolerance_comment').value =comment_a;
      document.getElementById('max_tolerance_comment').value =comment_b;
      document.getElementById('tolerance_range').value =comment_c;
      document.getElementById('choice').value =comment_conclusion;
     }
    
  function calculation_determinations_water_method(){
      var determination_one =   (Math.abs(document.getElementById('det_1_kfv').value) * Math.abs(document.getElementById('det_1_f').value) * 100)/(Math.abs(document.getElementById('det_1_wt').value));
      var determination_two =   (Math.abs(document.getElementById('det_2_kfv').value) * Math.abs(document.getElementById('det_2_f').value) * 100)/(Math.abs(document.getElementById('det_2_wt').value));
      var determination_three = (Math.abs(document.getElementById('det_3_kfv').value) * Math.abs(document.getElementById('det_3_f').value) * 100)/(Math.abs(document.getElementById('det_3_wt').value));
      
      document.getElementById('determination_1').value = determination_one.toFixed(5);
      document.getElementById('determination_2').value = determination_two.toFixed(5);
      document.getElementById('determination_3').value = determination_three.toFixed(5);
      
      var average_determination = (Math.abs(document.getElementById('determination_1').value) + Math.abs(document.getElementById('determination_2').value) + Math.abs(document.getElementById('determination_3').value) )/6;    
      var determinations_values =  [Math.abs(document.getElementById('determination_1').value), Math.abs(document.getElementById('determination_2').value),Math.abs(document.getElementById('determination_3').value),];            
	     var determinations_variance = 0;

	  for(var i=0;i<determinations_values.length; i++){
       determinations_variance += Math.pow((determinations_values[i]-average_determination),2);
         
     }    

     var n = i-1;
	 var standard_deviation_determinations= Math.sqrt((determinations_variance)/n);
	 var rsd_determination = (standard_deviation_determinations/average_determination)*100;

      document.getElementById('determination_avg').value = average_determination.toFixed(5);   
      document.getElementById('determination_rsd').value = rsd_determination; 
      
    }
function calculation_determinations_two_components(){
      var determination_one =   (Math.abs(document.getElementById('det_1_pkt').value) * Math.abs(document.getElementById('det_1_wstd').value) * Math.abs(document.getElementById('det_1_df').value) * 100 *  Math.abs(document.getElementById('det_1_potency').value))/(Math.abs(document.getElementById('det_1_pkstd').value) * Math.abs(document.getElementById('det_1_lc').value));
      var determination_two =   (Math.abs(document.getElementById('det_2_pkt').value) * Math.abs(document.getElementById('det_2_wstd').value) * Math.abs(document.getElementById('det_2_df').value) * 100 *  Math.abs(document.getElementById('det_2_potency').value))/(Math.abs(document.getElementById('det_2_pkstd').value) * Math.abs(document.getElementById('det_2_lc').value));
      var determination_three = (Math.abs(document.getElementById('det_3_pkt').value) * Math.abs(document.getElementById('det_3_wstd').value) * Math.abs(document.getElementById('det_3_df').value) * 100 *  Math.abs(document.getElementById('det_3_potency').value))/(Math.abs(document.getElementById('det_3_pkstd').value) * Math.abs(document.getElementById('det_3_lc').value));
      var determination_four =  (Math.abs(document.getElementById('det_4_pkt').value) * Math.abs(document.getElementById('det_4_wstd').value) * Math.abs(document.getElementById('det_4_df').value) * 100 *  Math.abs(document.getElementById('det_4_potency').value))/(Math.abs(document.getElementById('det_4_pkstd').value) * Math.abs(document.getElementById('det_4_lc').value));
      var determination_five =  (Math.abs(document.getElementById('det_5_pkt').value) * Math.abs(document.getElementById('det_5_wstd').value) * Math.abs(document.getElementById('det_5_df').value) * 100 *  Math.abs(document.getElementById('det_5_potency').value))/(Math.abs(document.getElementById('det_5_pkstd').value) * Math.abs(document.getElementById('det_5_lc').value));
      var determination_six =   (Math.abs(document.getElementById('det_6_pkt').value) * Math.abs(document.getElementById('det_6_wstd').value) * Math.abs(document.getElementById('det_6_df').value) * 100 *  Math.abs(document.getElementById('det_6_potency').value))/(Math.abs(document.getElementById('det_6_pkstd').value) * Math.abs(document.getElementById('det_6_lc').value));
      var second_determination_one =   (Math.abs(document.getElementById('second_det_1_pkt').value) * Math.abs(document.getElementById('second_det_1_wstd').value) * Math.abs(document.getElementById('second_det_1_df').value) * 100 *  Math.abs(document.getElementById('second_det_1_potency').value))/(Math.abs(document.getElementById('second_det_1_pkstd').value) * Math.abs(document.getElementById('second_det_1_lc').value));
      var second_determination_two =   (Math.abs(document.getElementById('second_det_2_pkt').value) * Math.abs(document.getElementById('second_det_2_wstd').value) * Math.abs(document.getElementById('second_det_2_df').value) * 100 *  Math.abs(document.getElementById('second_det_2_potency').value))/(Math.abs(document.getElementById('second_det_2_pkstd').value) * Math.abs(document.getElementById('second_det_2_lc').value));
      var second_determination_three = (Math.abs(document.getElementById('second_det_3_pkt').value) * Math.abs(document.getElementById('second_det_3_wstd').value) * Math.abs(document.getElementById('second_det_3_df').value) * 100 *  Math.abs(document.getElementById('second_det_3_potency').value))/(Math.abs(document.getElementById('second_det_3_pkstd').value) * Math.abs(document.getElementById('second_det_3_lc').value));
      var second_determination_four =  (Math.abs(document.getElementById('second_det_4_pkt').value) * Math.abs(document.getElementById('second_det_4_wstd').value) * Math.abs(document.getElementById('second_det_4_df').value) * 100 *  Math.abs(document.getElementById('second_det_4_potency').value))/(Math.abs(document.getElementById('second_det_4_pkstd').value) * Math.abs(document.getElementById('second_det_4_lc').value));
      var second_determination_five =  (Math.abs(document.getElementById('second_det_5_pkt').value) * Math.abs(document.getElementById('second_det_5_wstd').value) * Math.abs(document.getElementById('second_det_5_df').value) * 100 *  Math.abs(document.getElementById('second_det_5_potency').value))/(Math.abs(document.getElementById('second_det_5_pkstd').value) * Math.abs(document.getElementById('second_det_5_lc').value));
      var second_determination_six =   (Math.abs(document.getElementById('second_det_6_pkt').value) * Math.abs(document.getElementById('second_det_6_wstd').value) * Math.abs(document.getElementById('second_det_6_df').value) * 100 *  Math.abs(document.getElementById('second_det_6_potency').value))/(Math.abs(document.getElementById('second_det_6_pkstd').value) * Math.abs(document.getElementById('second_det_6_lc').value));
      
      document.getElementById('determination_1').value = determination_one.toFixed(5);
      document.getElementById('determination_2').value = determination_two.toFixed(5);
      document.getElementById('determination_3').value = determination_three.toFixed(5);
      document.getElementById('determination_4').value = determination_four.toFixed(5);
      document.getElementById('determination_5').value = determination_five.toFixed(5);
      document.getElementById('determination_6').value = determination_six.toFixed(5);
      document.getElementById('second_determination_1').value = second_determination_one.toFixed(5);
      document.getElementById('second_determination_2').value = second_determination_two.toFixed(5);
      document.getElementById('second_determination_3').value = second_determination_three.toFixed(5);
      document.getElementById('second_determination_4').value = second_determination_four.toFixed(5);
      document.getElementById('second_determination_5').value = second_determination_five.toFixed(5);
      document.getElementById('second_determination_6').value = second_determination_six.toFixed(5);

      var average_determination = (Math.abs(document.getElementById('determination_1').value) + Math.abs(document.getElementById('determination_2').value) + Math.abs(document.getElementById('determination_3').value) + Math.abs(document.getElementById('determination_4').value) + Math.abs(document.getElementById('determination_5').value) + Math.abs(document.getElementById('determination_6').value))/6;    
      var second_average_determination = (Math.abs(document.getElementById('second_determination_1').value) + Math.abs(document.getElementById('second_determination_2').value) + Math.abs(document.getElementById('second_determination_3').value) + Math.abs(document.getElementById('second_determination_4').value) + Math.abs(document.getElementById('second_determination_5').value) + Math.abs(document.getElementById('second_determination_6').value))/6;    
      var determinations_values =  [Math.abs(document.getElementById('determination_1').value), Math.abs(document.getElementById('determination_2').value),Math.abs(document.getElementById('determination_3').value), Math.abs(document.getElementById('determination_4').value),Math.abs(document.getElementById('determination_5').value), Math.abs(document.getElementById('determination_6').value)];            
	  var second_determinations_values =  [Math.abs(document.getElementById('determination_1').value), Math.abs(document.getElementById('determination_2').value),Math.abs(document.getElementById('determination_3').value), Math.abs(document.getElementById('determination_4').value),Math.abs(document.getElementById('determination_5').value), Math.abs(document.getElementById('determination_6').value)];            
	  var determinations_variance = 0;
	  var second_determinations_variance = 0;	

	  for(var i=0;i<determinations_values.length; i++){
       determinations_variance += Math.pow((determinations_values[i]-average_determination),2);
         
     }
     for(var i=0;i<second_determinations_values.length; i++){
       second_determinations_variance += Math.pow((second_determinations_values [i]-second_average_determination),2);
         
     }

     var n = i-1;
	 var standard_deviation_determinations= Math.sqrt((determinations_variance)/n);
	 var second_standard_deviation_determinations= Math.sqrt((second_determinations_variance)/n);
	 var rsd_determination = (standard_deviation_determinations/average_determination)*100;
	 var second_rsd_determination = (second_standard_deviation_determinations/second_average_determination)*100;

   var equivalent_to = (Math.abs(document.getElementById('label_claim').value)*average_determination)/100; 

      document.getElementById('determination_avg').value = average_determination.toFixed(5);   
      document.getElementById('determination_rsd').value = rsd_determination; 
      document.getElementById('second_determination_avg').value = second_average_determination.toFixed(5);   
      document.getElementById('second_determination_rsd').value = second_standard_deviation_determinations.toFixed(5);   
      document.getElementById('equivalent').value = equivalent_to.toFixed(5);   
    }

    function determination_titration(){
      var determination_one =   (Math.abs(document.getElementById('det_c_1').value) * Math.abs(document.getElementById('det_f_1').value) * Math.abs(document.getElementById('det_eq_1').value) * 100 *  Math.abs(document.getElementById('det_awt_1').value))/(Math.abs(document.getElementById('det_smpwt_1').value) * Math.abs(document.getElementById('det_lc_1').value));
      var determination_two =   (Math.abs(document.getElementById('det_c_2').value) * Math.abs(document.getElementById('det_f_2').value) * Math.abs(document.getElementById('det_eq_2').value) * 100 *  Math.abs(document.getElementById('det_awt_2').value))/(Math.abs(document.getElementById('det_smpwt_2').value) * Math.abs(document.getElementById('det_lc_2').value));
      var determination_three = (Math.abs(document.getElementById('det_c_3').value) * Math.abs(document.getElementById('det_f_3').value) * Math.abs(document.getElementById('det_eq_3').value) * 100 *  Math.abs(document.getElementById('det_awt_3').value))/(Math.abs(document.getElementById('det_smpwt_3').value) * Math.abs(document.getElementById('det_lc_3').value));
      var determination_four =  (Math.abs(document.getElementById('det_c_4').value) * Math.abs(document.getElementById('det_f_4').value) * Math.abs(document.getElementById('det_eq_4').value) * 100 *  Math.abs(document.getElementById('det_awt_4').value))/(Math.abs(document.getElementById('det_smpwt_4').value) * Math.abs(document.getElementById('det_lc_4').value));
      var determination_five =  (Math.abs(document.getElementById('det_c_5').value) * Math.abs(document.getElementById('det_f_5').value) * Math.abs(document.getElementById('det_eq_5').value) * 100 *  Math.abs(document.getElementById('det_awt_5').value))/(Math.abs(document.getElementById('det_smpwt_5').value) * Math.abs(document.getElementById('det_lc_5').value));
      var determination_six=    (Math.abs(document.getElementById('det_c_6').value) * Math.abs(document.getElementById('det_f_6').value) * Math.abs(document.getElementById('det_eq_6').value) * 100 *  Math.abs(document.getElementById('det_awt_6').value))/(Math.abs(document.getElementById('det_smpwt_6').value) * Math.abs(document.getElementById('det_lc_6').value));

      document.getElementById('determination_1').value = determination_one.toFixed(5);
      document.getElementById('determination_2').value = determination_two.toFixed(5);
      document.getElementById('determination_3').value = determination_three.toFixed(5);
      document.getElementById('determination_4').value = determination_four.toFixed(5);
      document.getElementById('determination_5').value = determination_five.toFixed(5);
      document.getElementById('determination_6').value = determination_six.toFixed(5);
      

      var average_determination = (Math.abs(document.getElementById('determination_1').value) + Math.abs(document.getElementById('determination_2').value) + Math.abs(document.getElementById('determination_3').value) + Math.abs(document.getElementById('determination_4').value) + Math.abs(document.getElementById('determination_5').value) + Math.abs(document.getElementById('determination_6').value))/6;    
      var determinations_values =  [Math.abs(document.getElementById('determination_1').value), Math.abs(document.getElementById('determination_2').value),Math.abs(document.getElementById('determination_3').value), Math.abs(document.getElementById('determination_4').value),Math.abs(document.getElementById('determination_5').value), Math.abs(document.getElementById('determination_6').value)];            
      var determinations_variance = 0;
      var highest_value =Math.max.apply(Math,determinations_values);
      var lowest_value =Math.min.apply(Math,determinations_values);

    for(var i=0;i<determinations_values.length; i++){
       determinations_variance += Math.pow((determinations_values[i]-average_determination),2);
         
     }
     
     var n = i-1;
     var standard_deviation_determinations= Math.sqrt((determinations_variance)/n);
     var rsd_determination = (standard_deviation_determinations/average_determination)*100;
     var equivalent_to = (Math.abs(document.getElementById('label_claim').value)*average_determination)/100; 


      document.getElementById('determination_avg').value = average_determination.toFixed(4);   
      document.getElementById('determination_sd').value = standard_deviation_determinations.toFixed(4); 
      document.getElementById('determination_rsd').value = rsd_determination.toFixed(4); 
      document.getElementById('equivalent').value = equivalent_to.toFixed(2);     
      document.getElementById('nlt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('nlt_max_tolerance_det').value = highest_value.toFixed(2);     
      document.getElementById('ngt_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('ngt_max_tolerance_det').value = highest_value.toFixed(2);      
      document.getElementById('range_min_tolerance_det').value = lowest_value.toFixed(2);
      document.getElementById('range_max_tolerance_det').value = highest_value.toFixed(2);   
    
    var min_tolerance=0;
      var max_tolerance=0;
      var tolerance_range_from=0;
      var tolerance_range_to=0;

      var comment_a= new String();
      var comment_b= new String();
      var comment_c = new String();
      var comment_conclusion= new String();

      min_tolerance=Math.abs(document.getElementById('min_tolerance').value);   
      max_tolerance=Math.abs(document.getElementById('max_tolerance').value);
      tolerance_range_from = $("#tolerance_range_from").val();
      tolerance_range_to = $("#tolerance_range_to").val();
      

      if(min_tolerance==0 || min_tolerance==""){
            comment_a= "";
      }
      else if(min_tolerance < lowest_value){
            comment_a= "Not Ok";
            comment_conclusion = "The Test Failed";
      }else{
            comment_a="OK";
            comment_conclusion = "The Test Passed";
      }

      if(max_tolerance==0 || max_tolerance==""){
            comment_b= "";
      }
      else if (max_tolerance > highest_value){
            comment_b= "Not Ok";
            comment_conclusion = "The Test Failed";
      }else{
            comment_b="OK";
            comment_conclusion = "The Test Passed";
      }
     

      if(tolerance_range_from==0 || tolerance_range_from=="" || tolerance_range_to==0 || tolerance_range_to==""){
            comment_c= "";
      }else if (tolerance_range_from < lowest_value || tolerance_range_to < highest_value){
            comment_c= "Not Ok";
            comment_conclusion = "The Test Failed";

      }else{
            comment_c="OK";
            comment_conclusion = "The Test Passed";

      }
     
      document.getElementById('min_tolerance_comment').value =comment_a;
      document.getElementById('max_tolerance_comment').value =comment_b;
      document.getElementById('tolerance_range').value =comment_c;
      document.getElementById('choice').value =comment_conclusion;
    }

    $(document).ready(function() {
        $('#det_i_1').change(function() {   

          var microgram = (parseInt($('#det_c_1').val()) * parseInt($('#det_p_1').val()) *2) /(parseInt($('#det_b_1').val()) - parseInt($('#det_i_1').val()));  
           
          $('#determination_1').val(microgram);
        });
        $('#det_i_2').change(function() {   

          var microgram = (parseInt($('#det_c_2').val()) * parseInt($('#det_p_2').val()) *2) /(parseInt($('#det_b_2').val()) - parseInt($('#det_i_2').val()));  
           
          $('#determination_2').val(microgram);
        });
        $('#det_i_3').change(function() {   

          var microgram = (parseInt($('#det_c_3').val()) * parseInt($('#det_p_3').val()) *2) /(parseInt($('#det_b_3').val()) - parseInt($('#det_i_3').val()));  
           
          $('#determination_3').val(microgram);
        });
        $('#det_i_4').change(function() {   

          var microgram = (parseInt($('#det_c_4').val()) * parseInt($('#det_p_4').val()) *2) /(parseInt($('#det_b_4').val()) - parseInt($('#det_i_4').val()));  
           
          $('#determination_4').val(microgram);
        });
        $('#det_i_5').change(function() {   

          var microgram = (parseInt($('#det_c_5').val()) * parseInt($('#det_p_5').val()) *2) /(parseInt($('#det_b_5').val()) - parseInt($('#det_i_5').val()));  
           
          $('#determination_5').val(microgram);
        });
        $('#det_i_6').change(function() {   

          var microgram = (parseInt($('#det_c_6').val()) * parseInt($('#det_p_6').val()) *2) /(parseInt($('#det_b_6').val()) - parseInt($('#det_i_6').val()));  
           
          $('#determination_6').val(microgram);
        });

        //Calculating determainations for dissolution uv
        $('.det_1_lc').change(function() {   
          var determination_1 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_1 = (parseInt($('#det_1_pkt').val()) * parseInt($('#det_1_df').val()) * parseInt($('#det_1_potency').val()) * 100) / (parseInt($('#det_1_pkstd').val()) * parseInt($('#det_1_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_1 = (parseInt($('#second_det_1_pkt').val()) * parseInt($('#second_det_1_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_1_lc').val()));  
           }
         $('.determination_1').val(determination_1);
           
          // $('#second_determination_1').val(determination_1);
        });
        $('.det_2_lc').change(function() {   
          var determination_2 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_2 = (parseInt($('#det_2_pkt').val()) * parseInt($('#det_2_df').val()) * parseInt($('#det_2_potency').val()) * 100) / (parseInt($('#det_2_pkstd').val()) * parseInt($('#det_2_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_2 = (parseInt($('#second_det_2_pkt').val()) * parseInt($('#second_det_2_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_2_lc').val()));  
           }
         $('.determination_2').val(determination_2);
           
          // $('#second_determination_1').val(determination_1);
        });
        $('.det_3_lc').change(function() {   
          var determination_3 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_3 = (parseInt($('#det_3_pkt').val()) * parseInt($('#det_3_df').val()) * parseInt($('#det_3_potency').val()) * 100) / (parseInt($('#det_3_pkstd').val()) * parseInt($('#det_3_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_3 = (parseInt($('#second_det_3_pkt').val()) * parseInt($('#second_det_3_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_3_lc').val()));  
           }
         $('.determination_3').val(determination_3);
           
          // $('#second_determination_1').val(determination_1);
        });
        $('.det_4_lc').change(function() {   
          var determination_4 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_4 = (parseInt($('#det_4_pkt').val()) * parseInt($('#det_4_df').val()) * parseInt($('#det_4_potency').val()) * 100) / (parseInt($('#det_4_pkstd').val()) * parseInt($('#det_4_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_4 = (parseInt($('#second_det_4_pkt').val()) * parseInt($('#second_det_4_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_4_lc').val()));  
           }
         $('.determination_4').val(determination_4);
           
          // $('#second_determination_1').val(determination_1);
        });
        $('.det_5_lc').change(function() {   
          var determination_5 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_5 = (parseInt($('#det_5_pkt').val()) * parseInt($('#det_5_df').val()) * parseInt($('#det_5_potency').val()) * 100) / (parseInt($('#det_5_pkstd').val()) * parseInt($('#det_5_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_5 = (parseInt($('#second_det_5_pkt').val()) * parseInt($('#second_det_5_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_5_lc').val()));  
           }
         $('.determination_5').val(determination_5);
           
          // $('#second_determination_1').val(determination_1);
        });        
        $('.det_6_lc').change(function() {   

          var determination_6 = 0;
          if ($('#samplepowder').is(':checked')) {
          determination_6 = (parseInt($('#det_6_pkt').val()) * parseInt($('#det_6_df').val()) * parseInt($('#det_6_potency').val()) * 100) / (parseInt($('#det_6_pkstd').val()) * parseInt($('#det_6_lc').val()));  
          
          }else 
          if($('#sampleliquid').is(':checked')){
            determination_6 = (parseInt($('#second_det_6_pkt').val()) * parseInt($('#second_det_6_df').val()) * 10 * 100) / (0.001* parseInt($('#second_det_6_lc').val()));  
           }
         // $('.determination_6').val(determination_6);
           
          // var determination_6 = (parseInt($('#det_6_pkt').val()) * parseInt($('#det_6_df').val()) * parseInt($('#det_6_potency').val()) * 100) / (parseInt($('#det_6_pkstd').val()) * parseInt($('#det_6_lc').val()));  
          // var det_1 = parseInt($('#determination_1').val());var det_2 = parseInt($('#determination_2').val()); var det_3 = parseInt($('#determination_3').val()); var det_4 = parseInt($('#determination_4').val()); var det_5 = parseInt($('#determination_5').val());
          var average_determination = (parseInt($('.determination_1').val()) + parseInt($('.determination_2').val()) + parseInt($('.determination_3').val()) + parseInt($('.determination_4').val()) + parseInt($('.determination_5').val())+ determination_6)/6;  

          var samples_det = [parseInt($('.determination_1').val()), parseInt($('.determination_2').val()), parseInt($('.determination_3').val()), parseInt($('.determination_4').val()), parseInt($('.determination_5').val()), determination_6];
          
          var variance_det = 0;

             for(var i=0;i<samples_det.length; i++){
            variance_det += Math.pow((samples_det [i]-average_determination),2);
             
          }
          //alert(samples_det);

          var n = i-1;
          var sample_sd_det = Math.sqrt((variance_det)/n);
          var sample_det_rsd = (sample_sd_det/average_determination)*100;

          var highest_value =Math.max.apply(Math,samples_det);
          var lowest_value =Math.min.apply(Math,samples_det);
          var equivalent_to = (Math.abs(document.getElementById('label_claim').value)*average_determination)/100; 


          $('.determination_6').val(determination_6);
          $('#determination_avg').val(average_determination.toFixed(3));
          $('#determination_rsd').val(sample_det_rsd.toFixed(3));
          $('#range_min').val(lowest_value.toFixed(3));
          $('#range_max').val(highest_value.toFixed(3));
          $('#equivalent').val(equivalent_to.toFixed(3));
          $('#determination_rsd_2').val(sample_det_rsd.toFixed(3));
          $('#determination_sd').val(sample_sd_det.toFixed(3));
          $('#nlt_min_tolerance_det').val(lowest_value.toFixed(3));
          $('#nlt_max_tolerance_det').val(highest_value.toFixed(3));
          $('#ngt_min_tolerance_det').val(lowest_value.toFixed(3));
          $('#ngt_max_tolerance_det').val(highest_value.toFixed(3));
          $('#range_min_tolerance_det').val(lowest_value.toFixed(3));
          $('#range_max_tolerance_det').val(highest_value.toFixed(3));
      });
      $('#min_tolerance').change(function() {   
          var min_tolerance =$('#min_tolerance').val();
          var lowest_value =$('#range_min').val();
          var comment_a = new String();
          var comment_conclusion =new String();
          if(min_tolerance==0 || min_tolerance==""){
              comment_a= "";
        }
        else if(min_tolerance < lowest_value){
              comment_a= "Not Ok";
              comment_conclusion = "The Test Failed";
        }else{
              comment_a="OK";
              comment_conclusion = "The Test Passed";
        }

        $('#min_tolerance_comment').val(comment_a);
        $('#choice').val(comment_conclusion);
          });
      $('#max_tolerance').change(function() {   
          var max_tolerance =$('#max_tolerance').val();
          var highest_value =$('#range_max').val();
          var comment_a = new String();
          var comment_conclusion =new String();
          if(max_tolerance==0 || max_tolerance==""){
              comment_a= "";
        }
        else if(max_tolerance < highest_value){
              comment_a= "Not Ok";
              comment_conclusion = "The Test Failed";
        }else{
              comment_a="OK";
              comment_conclusion = "The Test Passed";
        }

        $('#max_tolerance_comment').val(comment_a);
        $('#choice').val(comment_conclusion);
          });
      }); 