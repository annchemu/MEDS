
      function calculate_difference(){

      var sample_weight_one = (Math.abs(document.getElementById('weight_sample_container_one').value) - Math.abs(document.getElementById('weight_container_one').value));
      var sample_weight_two = (Math.abs(document.getElementById('weight_sample_container_two').value) - Math.abs(document.getElementById('weight_container_two').value));
      var sample_weight_three = (Math.abs(document.getElementById('weight_sample_container_three').value) - Math.abs(document.getElementById('weight_container_three').value));
      var sample_weight_four = (Math.abs(document.getElementById('weight_sample_container_four').value) - Math.abs(document.getElementById('weight_container_four').value));
      var sample_weight_five = (Math.abs(document.getElementById('weight_sample_container_five').value) - Math.abs(document.getElementById('weight_container_five').value));
      var sample_weight_six = (Math.abs(document.getElementById('weight_sample_container_six').value) - Math.abs(document.getElementById('weight_container_six').value));
      
      document.getElementById('weight_sample_one').value = sample_weight_one;
      document.getElementById('weight_sample_two').value = sample_weight_two;
      document.getElementById('weight_sample_three').value = sample_weight_three;
      document.getElementById('weight_sample_four').value = sample_weight_four;
      document.getElementById('weight_sample_five').value = sample_weight_five;
      document.getElementById('weight_sample_six').value = sample_weight_six;
      
      var s_weight_one = (Math.abs(document.getElementById('weight_sample_container_one_one').value) - Math.abs(document.getElementById('weight_container_one_two').value));
      var s_weight_two = (Math.abs(document.getElementById('weight_sample_container_two_one').value) - Math.abs(document.getElementById('weight_container_two_two').value));
      var s_weight_three = (Math.abs(document.getElementById('weight_sample_container_three_one').value) - Math.abs(document.getElementById('weight_container_three_two').value));
      var s_weight_four = (Math.abs(document.getElementById('weight_sample_container_four_one').value) - Math.abs(document.getElementById('weight_container_four_two').value));
      var s_weight_five = (Math.abs(document.getElementById('weight_sample_container_five_one').value) - Math.abs(document.getElementById('weight_container_five_two').value));

      document.getElementById('weight_sample_one_three').value = s_weight_one;
      document.getElementById('weight_sample_two_three').value = s_weight_two;
      document.getElementById('weight_sample_three_three').value = s_weight_three;
      document.getElementById('weight_sample_four_three').value = s_weight_four;
      document.getElementById('weight_sample_five_three').value = s_weight_five;
     

      }

      function calculate_reagent_difference(){
      
      var reagent_weight_one = (Math.abs(document.getElementById('weight_reagent_container_one').value) - Math.abs(document.getElementById('container_aone').value));
      var reagent_weight_two = (Math.abs(document.getElementById('weight_reagent_container_two').value) - Math.abs(document.getElementById('container_btwo').value));
      var reagent_weight_three = (Math.abs(document.getElementById('weight_reagent_container_three').value) - Math.abs(document.getElementById('container_three').value));
      var reagent_weight_four = (Math.abs(document.getElementById('weight_reagent_container_four').value) - Math.abs(document.getElementById('container_four').value));
      var reagent_weight_five = (Math.abs(document.getElementById('weight_reagent_container_five').value) - Math.abs(document.getElementById('container_five').value));
      var reagent_weight_six = (Math.abs(document.getElementById('weight_reagent_container_six').value) - Math.abs(document.getElementById('container_six').value));
      

      document.getElementById('weight_reagent_one').value = reagent_weight_one;
      document.getElementById('weight_reagent_two').value = reagent_weight_two;
      document.getElementById('weight_reagent_three').value = reagent_weight_three;
      document.getElementById('weight_reagent_four').value = reagent_weight_four;
      document.getElementById('weight_reagent_five').value = reagent_weight_five;
      document.getElementById('weight_reagent_six').value = reagent_weight_six; 
      }

      function calculate_sample_difference(){
      
      var weight_one = (Math.abs(document.getElementById('weight_standard_container_one').value) - Math.abs(document.getElementById('container_one').value));
      var weight_two = (Math.abs(document.getElementById('weight_standard_container_two').value) - Math.abs(document.getElementById('container_two').value));
      
      document.getElementById('weight_standard_one').value = weight_one; 
      document.getElementById('weight_standard_two').value = weight_two; 
      }
      
  
      function calculator_average(){
      
      var average_retention_time = (Math.abs(document.getElementById('retention_time_one').value) + Math.abs(document.getElementById('retention_time_two').value) + Math.abs(document.getElementById('retention_time_three').value) + Math.abs(document.getElementById('retention_time_four').value) + Math.abs(document.getElementById('retention_time_five').value) + Math.abs(document.getElementById('retention_time_six').value))/6;
      var average_peak_area= (Math.abs(document.getElementById('peak_area_one').value) + Math.abs(document.getElementById('peak_area_two').value) + Math.abs(document.getElementById('peak_area_three').value) + Math.abs(document.getElementById('peak_area_four').value) + Math.abs(document.getElementById('peak_area_five').value) + Math.abs(document.getElementById('peak_area_six').value))/6;
      var average_asymmetry = (Math.abs(document.getElementById('asymmetry_one').value) + Math.abs(document.getElementById('asymmetry_two').value) + Math.abs(document.getElementById('asymmetry_three').value) + Math.abs(document.getElementById('asymmetry_four').value) + Math.abs(document.getElementById('asymmetry_five').value) + Math.abs(document.getElementById('asymmetry_six').value))/6;
      var average_resolution = (Math.abs(document.getElementById('resolution_one').value) + Math.abs(document.getElementById('resolution_two').value) + Math.abs(document.getElementById('resolution_three').value) + Math.abs(document.getElementById('resolution_four').value) + Math.abs(document.getElementById('resolution_five').value) + Math.abs(document.getElementById('resolution_six').value))/6;
      var average_relative_retention_time = (Math.abs(document.getElementById('relative_retention_time_one').value) + Math.abs(document.getElementById('relative_retention_time_two').value) + Math.abs(document.getElementById('relative_retention_time_three').value) + Math.abs(document.getElementById('relative_retention_time_four').value) + Math.abs(document.getElementById('relative_retention_time_five').value) + Math.abs(document.getElementById('relative_retention_time_six').value))/6;
      var average_determination = (Math.abs(document.getElementById('d_one_p_lc').value) + Math.abs(document.getElementById('d_two_p_lc').value) + Math.abs(document.getElementById('d_three_p_lc').value) + Math.abs(document.getElementById('d_four_p_lc').value) + Math.abs(document.getElementById('d_five_p_lc').value) + Math.abs(document.getElementById('d_six_p_lc').value))/6;
      

      document.getElementById('average_retention_time').value = average_retention_time;
      document.getElementById('average_peak_area').value = average_peak_area;
      document.getElementById('average_asymmetry').value = average_asymmetry;
      document.getElementById('average_resolution').value = average_resolution;
      document.getElementById('average_relative_retention_time').value = average_relative_retention_time;  
      document.getElementById('determination_average').value = average_determination;   

      }
      function calculator(){

      var average_retention_time = (Math.abs(document.getElementById('retention_time_one').value) + Math.abs(document.getElementById('retention_time_two').value) + Math.abs(document.getElementById('retention_time_three').value) + Math.abs(document.getElementById('retention_time_four').value) + Math.abs(document.getElementById('retention_time_five').value) + Math.abs(document.getElementById('retention_time_six').value))/6;
      var average_peak_area= (Math.abs(document.getElementById('peak_area_one').value) + Math.abs(document.getElementById('peak_area_two').value) + Math.abs(document.getElementById('peak_area_three').value) + Math.abs(document.getElementById('peak_area_four').value) + Math.abs(document.getElementById('peak_area_five').value) + Math.abs(document.getElementById('peak_area_six').value))/6;
      var average_asymmetry = (Math.abs(document.getElementById('asymmetry_one').value) + Math.abs(document.getElementById('asymmetry_two').value) + Math.abs(document.getElementById('asymmetry_three').value) + Math.abs(document.getElementById('asymmetry_four').value) + Math.abs(document.getElementById('asymmetry_five').value) + Math.abs(document.getElementById('asymmetry_six').value))/6;
      var average_resolution = (Math.abs(document.getElementById('resolution_one').value) + Math.abs(document.getElementById('resolution_two').value) + Math.abs(document.getElementById('resolution_three').value) + Math.abs(document.getElementById('resolution_four').value) + Math.abs(document.getElementById('resolution_five').value) + Math.abs(document.getElementById('resolution_six').value))/6;
      var average_relative_retention_time = (Math.abs(document.getElementById('relative_retention_time_one').value) + Math.abs(document.getElementById('relative_retention_time_two').value) + Math.abs(document.getElementById('relative_retention_time_three').value) + Math.abs(document.getElementById('relative_retention_time_four').value) + Math.abs(document.getElementById('relative_retention_time_five').value) + Math.abs(document.getElementById('relative_retention_time_six').value))/6;
      var average_determination = (Math.abs(document.getElementById('d_one_p_lc').value) + Math.abs(document.getElementById('d_two_p_lc').value) + Math.abs(document.getElementById('d_three_p_lc').value) + Math.abs(document.getElementById('d_four_p_lc').value) + Math.abs(document.getElementById('d_five_p_lc').value) + Math.abs(document.getElementById('d_six_p_lc').value))/6;
      
      var samples_retention_time= [Math.abs(document.getElementById('retention_time_one').value), Math.abs(document.getElementById('retention_time_two').value) , Math.abs(document.getElementById('retention_time_three').value) , Math.abs(document.getElementById('retention_time_four').value) , Math.abs(document.getElementById('retention_time_five').value) , Math.abs(document.getElementById('retention_time_six').value)];
      var samples_peak_area= [Math.abs(document.getElementById('peak_area_one').value) , Math.abs(document.getElementById('peak_area_two').value) , Math.abs(document.getElementById('peak_area_three').value) , Math.abs(document.getElementById('peak_area_four').value) , Math.abs(document.getElementById('peak_area_five').value) , Math.abs(document.getElementById('peak_area_six').value)];
      var samples_asymmetry= [Math.abs(document.getElementById('asymmetry_one').value) , Math.abs(document.getElementById('asymmetry_two').value) , Math.abs(document.getElementById('asymmetry_three').value) , Math.abs(document.getElementById('asymmetry_four').value) , Math.abs(document.getElementById('asymmetry_five').value) , Math.abs(document.getElementById('asymmetry_six').value)];
      var samples_resolution= [Math.abs(document.getElementById('resolution_one').value) , Math.abs(document.getElementById('resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('resolution_four').value) , Math.abs(document.getElementById('resolution_five').value) , Math.abs(document.getElementById('resolution_six').value)];
      var samples_relative_retention_time= [Math.abs(document.getElementById('relative_retention_time_one').value) , Math.abs(document.getElementById('relative_retention_time_two').value) , Math.abs(document.getElementById('relative_retention_time_three').value) , Math.abs(document.getElementById('relative_retention_time_four').value) , Math.abs(document.getElementById('relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
      var samples_determination= [Math.abs(document.getElementById('d_one_p_lc').value) , Math.abs(document.getElementById('d_two_p_lc').value) , Math.abs(document.getElementById('d_three_p_lc').value) , Math.abs(document.getElementById('d_four_p_lc').value) , Math.abs(document.getElementById('d_five_p_lc').value) , Math.abs(document.getElementById('d_six_p_lc').value)];
      
      var variance_retention_time=0;
      var variance_peak_area=0;
      var variance_asymmetry=0;
      var variance_resolution=0;
      var variance_relative_retention_time=0;
      var variance_determination=0;  

      // var c2_average_retention_time = (Math.abs(document.getElementById('c2_retention_time_one').value) + Math.abs(document.getElementById('c2_retention_time_two').value) + Math.abs(document.getElementById('c2_retention_time_three').value) + Math.abs(document.getElementById('c2_retention_time_four').value) + Math.abs(document.getElementById('c2_retention_time_five').value) + Math.abs(document.getElementById('c2_retention_time_six').value))/6;
      // var c2_average_peak_area = (Math.abs(document.getElementById('c2_peak_area_one').value) + Math.abs(document.getElementById('c2_peak_area_two').value) + Math.abs(document.getElementById('c2_peak_area_three').value) + Math.abs(document.getElementById('c2_peak_area_four').value) + Math.abs(document.getElementById('c2_peak_area_five').value) + Math.abs(document.getElementById('c2_peak_area_six').value))/6;
      // var c2_average_asymmetry = (Math.abs(document.getElementById('c2_asymmetry_one').value) + Math.abs(document.getElementById('c2_asymmetry_two').value) + Math.abs(document.getElementById('c2_asymmetry_three').value) + Math.abs(document.getElementById('c2_asymmetry_four').value) + Math.abs(document.getElementById('c2_asymmetry_five').value) + Math.abs(document.getElementById('c2_asymmetry_six').value))/6;
      // var c2_average_resolution = (Math.abs(document.getElementById('c2_resolution_one').value) + Math.abs(document.getElementById('c2_resolution_two').value) + Math.abs(document.getElementById('c2_resolution_three').value) + Math.abs(document.getElementById('c2_resolution_four').value) + Math.abs(document.getElementById('c2_resolution_five').value) + Math.abs(document.getElementById('c2_resolution_six').value))/6;
      // var c2_average_relative_retention_time = (Math.abs(document.getElementById('c2_relative_retention_time_one').value) + Math.abs(document.getElementById('c2_relative_retention_time_two').value) + Math.abs(document.getElementById('c2_relative_retention_time_three').value) + Math.abs(document.getElementById('c2_relative_retention_time_four').value) + Math.abs(document.getElementById('c2_relative_retention_time_five').value) + Math.abs(document.getElementById('c2_relative_retention_time_six').value))/6;
      
      // var c2_samples_retention_time= [Math.abs(document.getElementById('c2_retention_time_one').value) , Math.abs(document.getElementById('c2_retention_time_two').value) , Math.abs(document.getElementById('c2_retention_time_three').value) , Math.abs(document.getElementById('c2_retention_time_four').value) , Math.abs(document.getElementById('c2_retention_time_five').value) , Math.abs(document.getElementById('c2_retention_time_six').value)];
      // var c2_samples_peak_area= [Math.abs(document.getElementById('c2_peak_area_one').value) , Math.abs(document.getElementById('c2_peak_area_two').value) , Math.abs(document.getElementById('c2_peak_area_three').value) , Math.abs(document.getElementById('c2_peak_area_four').value) , Math.abs(document.getElementById('c2_peak_area_five').value) , Math.abs(document.getElementById('c2_peak_area_six').value)];
      // var c2_samples_asymmetry= [Math.abs(document.getElementById('c2_asymmetry_one').value) , Math.abs(document.getElementById('c2_asymmetry_two').value) , Math.abs(document.getElementById('c2_asymmetry_three').value) , Math.abs(document.getElementById('c2_asymmetry_four').value) , Math.abs(document.getElementById('c2_asymmetry_five').value) , Math.abs(document.getElementById('c2_asymmetry_six').value)];
      // var c2_samples_resolution= [Math.abs(document.getElementById('c2_resolution_one').value) , Math.abs(document.getElementById('c2_resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('c2_resolution_four').value) , Math.abs(document.getElementById('c2_resolution_five').value) , Math.abs(document.getElementById('c2_resolution_six').value)];
      // var c2_samples_relative_retention_time= [Math.abs(document.getElementById('c2_relative_retention_time_one').value) , Math.abs(document.getElementById('c2_relative_retention_time_two').value) , Math.abs(document.getElementById('c2_relative_retention_time_three').value) , Math.abs(document.getElementById('c2_relative_retention_time_four').value) , Math.abs(document.getElementById('c2_relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
         
      // var c2_variance_retention_time=0;
      // var c2_variance_peak_area=0;
      // var c2_variance_asymmetry=0;
      // var c2_variance_resolution=0;
      // var c2_variance_relative_retention_time=0;      

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
          for(var i=0;i<samples_relative_retention_time.length; i++){
           variance_relative_retention_time += Math.pow((samples_relative_retention_time [i]-average_relative_retention_time),2);
         
         }

         for(var i=0;i<samples_determination.length; i++){
           variance_determination += Math.pow((samples_determination [i]-average_determination),2);
         
         }

         // for(var i=0;i<c2_samples_retention_time.length; i++){
         //   c2_variance_retention_time += Math.pow((c2_samples_retention_time [i]-c2_average_retention_time),2);
         
         // }
         // for(var i=0;i<c2_samples_peak_area.length; i++){
         //   c2_variance_peak_area += Math.pow((c2_samples_peak_area [i]-c2_average_peak_area),2);
         
         // }
         //  for(var i=0;i<c2_samples_asymmetry.length; i++){
         //   c2_variance_asymmetry += Math.pow((c2_samples_asymmetry [i]-c2_average_asymmetry),2);
         
         // }
         //  for(var i=0;i<c2_samples_resolution.length; i++){
         //   c2_variance_resolution += Math.pow((c2_samples_resolution [i]-c2_average_resolution),2);
         
         // }
         //  for(var i=0;i<c2_samples_relative_retention_time.length; i++){
         //   c2_variance_relative_retention_time += Math.pow((c2_samples_relative_retention_time [i]-c2_average_relative_retention_time),2);
         
         // }

          var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/i);
          var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/i);
          var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/i);
          var standard_deviation_resolution= Math.sqrt((variance_resolution)/i);
          var standard_deviation_relative_retention_time= Math.sqrt((variance_relative_retention_time)/i);
          var standard_deviation_determination= Math.sqrt((variance_determination)/i);

          // var c2_standard_deviation_retention_time= Math.sqrt((c2_variance_retention_time)/i);
          // var c2_standard_deviation_peak_area= Math.sqrt((c2_variance_peak_area)/i);
          // var c2_standard_deviation_asymmetry= Math.sqrt((c2_variance_asymmetry)/i);
          // var c2_standard_deviation_resolution= Math.sqrt((c2_variance_resolution)/i);
          // var c2_standard_deviation_relative_retention_time= Math.sqrt((c2_variance_relative_retention_time)/i);

          var rsd_retention_time=Math.abs((standard_deviation_retention_time/average_retention_time)*100);
          var rsd_peak_area=Math.abs((standard_deviation_peak_area/average_peak_area)*100);
          var rsd_asymmetry=Math.abs((standard_deviation_asymmetry/average_asymmetry)*100);
          var rsd_resolution=Math.abs((standard_deviation_resolution/average_resolution)*100);
          var rsd_relative_retention_time=Math.abs((standard_deviation_relative_retention_time/average_relative_retention_time)*100);
          var rsd_determination=Math.abs((standard_deviation_determination/average_determination)*100);

          document.getElementById('average_retention_time').value = average_retention_time;
          document.getElementById('average_peak_area').value = average_peak_area;
          document.getElementById('average_asymmetry').value = average_asymmetry;
          document.getElementById('average_resolution').value = average_resolution;
          document.getElementById('average_relative_retention_time').value = average_relative_retention_time;  
          document.getElementById('determination_average').value = average_determination;

          document.getElementById('standard_dev_retention_time').value = standard_deviation_retention_time;
          document.getElementById('standard_dev_peak_area').value = standard_deviation_peak_area;
          document.getElementById('standard_dev_asymmetry').value = standard_deviation_asymmetry;
          document.getElementById('standard_dev_resolution').value = standard_deviation_resolution;
          document.getElementById('standard_dev_relative_retention_time').value = standard_deviation_relative_retention_time;          
          document.getElementById('determination_sd').value = standard_deviation_determination;

          document.getElementById('rsd_retention_time').value = rsd_retention_time;
          document.getElementById('rsd_peak_area').value = rsd_peak_area;
          document.getElementById('rsd_asymmetry').value = rsd_asymmetry;
          document.getElementById('rsd_resolution').value = rsd_resolution;
          document.getElementById('rsd_relative_retention_time').value = rsd_relative_retention_time;
          document.getElementById('determination_rsd').value = rsd_determination;

          // document.getElementById('c2_average_retention_time').value = c2_average_retention_time;
          // document.getElementById('c2_average_peak_area').value = c2_average_peak_area;
          // document.getElementById('c2_average_asymmetry').value = c2_average_asymmetry;
          // document.getElementById('c2_average_resolution').value = c2_average_resolution;
          // document.getElementById('c2_average_relative_retention_time').value = c2_average_relative_retention_time;

          // document.getElementById('c2_standard_dev_retention_time').value = c2_standard_deviation_retention_time;
          // document.getElementById('c2_standard_dev_peak_area').value = c2_standard_deviation_peak_area;
          // document.getElementById('c2_standard_dev_asymmetry').value = c2_standard_deviation_asymmetry;
          // document.getElementById('c2_standard_dev_resolution').value = c2_standard_deviation_resolution;
          // document.getElementById('c2_standard_dev_relative_retention_time').value = c2_standard_deviation_relative_retention_time;

          // document.getElementById('c2_rsd_retention_time').value = c2_rsd_retention_time;
          // document.getElementById('c2_rsd_peak_area').value = c2_rsd_peak_area;
          // document.getElementById('c2_rsd_asymmetry').value = c2_rsd_asymmetry;
          // document.getElementById('c2_rsd_resolution').value = c2_rsd_resolution;
          // document.getElementById('c2_rsd_relative_retention_time').value = c2_rsd_relative_retention_time;
          // document.getElementById('c2_determination_rsd').value = rsd_determination;

          
      }
     $(document).ready(function(){
        $('.retention_time').keyup(function() {
         
          var sum = 0;
          k = 0;
          i=0;
          var sum_rounded = 0;
          var sum1=0;
          var average = 0;
          var average_rounded = 0;
          var standard_deviation= 0;
          var variance= 0;
          var rsd= 0;
            data_carrier = [$('retention_time')];
          boxes = $(".retention_time").filter(function() {
              return (this.value.length);
          }).length;
           $('.retention_time').each(function(i,j) {
              sum += Number($(this).val());
              sum_rounded = sum.toFixed(5);
              average = sum_rounded / boxes;
              average_rounded = average.toFixed(5);
              //k += Math.pow((data_carrier[i]-average_rounded),2);
              k = data_carrier[i];
              
            
          });
           
         //  for(var i=0;i<data_carrier.length; i++){
           
         //   standard_deviation=Math.sqrt((variance)/boxes); 
         //   rsd=(standard_deviation/average_rounded)*100;
         //    //alert(variance)
         // }
         
          
          
          
          //$('input#utotals').val(sum1);
          $('.average_retention_time').val(average_rounded);
          $('.rsd_retention_time').val(k);
          $('.standard_dev_retention_time').val(standard_deviation);

      });

         
      });
      <!-- -->
      function calculator_two(){

      // var average_retention_time = (Math.abs(document.getElementById('retention_time_one').value) + Math.abs(document.getElementById('retention_time_two').value) + Math.abs(document.getElementById('retention_time_three').value) + Math.abs(document.getElementById('retention_time_four').value) + Math.abs(document.getElementById('retention_time_five').value) + Math.abs(document.getElementById('retention_time_six').value))/6;
      var average_peak_area= (Math.abs(document.getElementById('peak_area_one').value) + Math.abs(document.getElementById('peak_area_two').value) + Math.abs(document.getElementById('peak_area_three').value) + Math.abs(document.getElementById('peak_area_four').value) + Math.abs(document.getElementById('peak_area_five').value) + Math.abs(document.getElementById('peak_area_six').value))/6;
      var average_asymmetry = (Math.abs(document.getElementById('asymmetry_one').value) + Math.abs(document.getElementById('asymmetry_two').value) + Math.abs(document.getElementById('asymmetry_three').value) + Math.abs(document.getElementById('asymmetry_four').value) + Math.abs(document.getElementById('asymmetry_five').value) + Math.abs(document.getElementById('asymmetry_six').value))/6;
      var average_resolution = (Math.abs(document.getElementById('resolution_one').value) + Math.abs(document.getElementById('resolution_two').value) + Math.abs(document.getElementById('resolution_three').value) + Math.abs(document.getElementById('resolution_four').value) + Math.abs(document.getElementById('resolution_five').value) + Math.abs(document.getElementById('resolution_six').value))/6;
      var average_relative_retention_time = (Math.abs(document.getElementById('relative_retention_time_one').value) + Math.abs(document.getElementById('relative_retention_time_two').value) + Math.abs(document.getElementById('relative_retention_time_three').value) + Math.abs(document.getElementById('relative_retention_time_four').value) + Math.abs(document.getElementById('relative_retention_time_five').value) + Math.abs(document.getElementById('relative_retention_time_six').value))/6;
      var average_determination = (Math.abs(document.getElementById('d_one_p_lc').value) + Math.abs(document.getElementById('d_two_p_lc').value) + Math.abs(document.getElementById('d_three_p_lc').value) + Math.abs(document.getElementById('d_four_p_lc').value) + Math.abs(document.getElementById('d_five_p_lc').value) + Math.abs(document.getElementById('d_six_p_lc').value))/6;
      
      var samples_retention_time= [Math.abs(document.getElementById('retention_time_one').value), Math.abs(document.getElementById('retention_time_two').value) , Math.abs(document.getElementById('retention_time_three').value) , Math.abs(document.getElementById('retention_time_four').value) , Math.abs(document.getElementById('retention_time_five').value) , Math.abs(document.getElementById('retention_time_six').value)];
      var samples_peak_area= [Math.abs(document.getElementById('peak_area_one').value) , Math.abs(document.getElementById('peak_area_two').value) , Math.abs(document.getElementById('peak_area_three').value) , Math.abs(document.getElementById('peak_area_four').value) , Math.abs(document.getElementById('peak_area_five').value) , Math.abs(document.getElementById('peak_area_six').value)];
      var samples_asymmetry= [Math.abs(document.getElementById('asymmetry_one').value) , Math.abs(document.getElementById('asymmetry_two').value) , Math.abs(document.getElementById('asymmetry_three').value) , Math.abs(document.getElementById('asymmetry_four').value) , Math.abs(document.getElementById('asymmetry_five').value) , Math.abs(document.getElementById('asymmetry_six').value)];
      var samples_resolution= [Math.abs(document.getElementById('resolution_one').value) , Math.abs(document.getElementById('resolution_two').value) , Math.abs(document.getElementById('resolution_three').value) , Math.abs(document.getElementById('resolution_four').value) , Math.abs(document.getElementById('resolution_five').value) , Math.abs(document.getElementById('resolution_six').value)];
      var samples_relative_retention_time= [Math.abs(document.getElementById('relative_retention_time_one').value) , Math.abs(document.getElementById('relative_retention_time_two').value) , Math.abs(document.getElementById('relative_retention_time_three').value) , Math.abs(document.getElementById('relative_retention_time_four').value) , Math.abs(document.getElementById('relative_retention_time_five').value) , Math.abs(document.getElementById('relative_retention_time_six').value)];
      var samples_determination= [Math.abs(document.getElementById('d_one_p_lc').value) , Math.abs(document.getElementById('d_two_p_lc').value) , Math.abs(document.getElementById('d_three_p_lc').value) , Math.abs(document.getElementById('d_four_p_lc').value) , Math.abs(document.getElementById('d_five_p_lc').value) , Math.abs(document.getElementById('d_six_p_lc').value)];
      
      var variance_retention_time=0;
      var variance_peak_area=0;
      var variance_asymmetry=0;
      var variance_resolution=0;
      var variance_relative_retention_time=0;
      var variance_determination=0;  

      var sum = 0;
      var sum1 = 0;
      var average = 0;
      var average_rounded = 0;

      boxes = $(".retention_time").filter(function() {
                return (this.value.length);
            }).length;

      $('.retention_time').each(function() {
                num = Number($(this).val());
                sum1 = sum.toFixed(5);
                average = sum1 / boxes;
                average_rounded = average.toFixed(5);
            });

            $('.average_retention_time').val(num);

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
          for(var i=0;i<samples_relative_retention_time.length; i++){
           variance_relative_retention_time += Math.pow((samples_relative_retention_time [i]-average_relative_retention_time),2);
         
         }

         for(var i=0;i<samples_determination.length; i++){
           variance_determination += Math.pow((samples_determination [i]-average_determination),2);
         
         }

          var standard_deviation_retention_time= Math.sqrt((variance_retention_time)/i);
          var standard_deviation_peak_area= Math.sqrt((variance_peak_area)/i);
          var standard_deviation_asymmetry= Math.sqrt((variance_asymmetry)/i);
          var standard_deviation_resolution= Math.sqrt((variance_resolution)/i);
          var standard_deviation_relative_retention_time= Math.sqrt((variance_relative_retention_time)/i);
          var standard_deviation_determination= Math.sqrt((variance_determination)/i);

          // var rsd_retention_time=Math.abs((standard_deviation_retention_time/average_retention_time)*100);
          var rsd_peak_area=Math.abs((standard_deviation_peak_area/average_peak_area)*100);
          var rsd_asymmetry=Math.abs((standard_deviation_asymmetry/average_asymmetry)*100);
          var rsd_resolution=Math.abs((standard_deviation_resolution/average_resolution)*100);
          var rsd_relative_retention_time=Math.abs((standard_deviation_relative_retention_time/average_relative_retention_time)*100);
          var rsd_determination=Math.abs((standard_deviation_determination/average_determination)*100);

          //document.getElementById('average_retention_time').value = average_retention_time;
          document.getElementById('average_peak_area').value = average_peak_area;
          document.getElementById('average_asymmetry').value = average_asymmetry;
          document.getElementById('average_resolution').value = average_resolution;
          document.getElementById('average_relative_retention_time').value = average_relative_retention_time;  
          document.getElementById('determination_average').value = average_determination;

          // document.getElementById('standard_dev_retention_time').value = standard_deviation_retention_time;
          document.getElementById('standard_dev_peak_area').value = standard_deviation_peak_area;
          document.getElementById('standard_dev_asymmetry').value = standard_deviation_asymmetry;
          document.getElementById('standard_dev_resolution').value = standard_deviation_resolution;
          document.getElementById('standard_dev_relative_retention_time').value = standard_deviation_relative_retention_time;          
          document.getElementById('determination_sd').value = standard_deviation_determination;

          //document.getElementById('rsd_retention_time').value = rsd_retention_time;
          document.getElementById('rsd_peak_area').value = rsd_peak_area;
          document.getElementById('rsd_asymmetry').value = rsd_asymmetry;
          document.getElementById('rsd_resolution').value = rsd_resolution;
          document.getElementById('rsd_relative_retention_time').value = rsd_relative_retention_time;
          document.getElementById('determination_rsd').value = rsd_determination;

      }
      
      function calc_avg_std(){

      var average = (Math.abs(document.getElementById('std_one').value) + Math.abs(document.getElementById('std_two').value) + Math.abs(document.getElementById('std_three').value) + Math.abs(document.getElementById('std_four').value) + Math.abs(document.getElementById('std_five').value))/5;
      document.getElementById('std_average').value = average;

      }
  
      function calc_internal_std(){

      var average = (Math.abs(document.getElementById('internal_std_a_one').value) + Math.abs(document.getElementById('internal_std_a_two').value) + Math.abs(document.getElementById('internal_std_a_three').value) + Math.abs(document.getElementById('internal_std_a_four').value) + Math.abs(document.getElementById('internal_std_a_five').value))/5;
      document.getElementById('internal_std_a_average').value = average;

      }
      function calc_internal_std_two(){

      var average = (Math.abs(document.getElementById('internal_std_b_one').value) + Math.abs(document.getElementById('internal_std_b_two').value) + Math.abs(document.getElementById('internal_std_b_three').value) + Math.abs(document.getElementById('internal_std_b_four').value) + Math.abs(document.getElementById('internal_std_b_five').value))/5;
      document.getElementById('internal_std_b_average').value = average;

      }
      function calc_internal_std_three(){

      var average = (Math.abs(document.getElementById('internal_std_c_one').value) + Math.abs(document.getElementById('internal_std_c_two').value) + Math.abs(document.getElementById('internal_std_c_three').value) + Math.abs(document.getElementById('internal_std_c_four').value) + Math.abs(document.getElementById('internal_std_c_five').value))/5;
      document.getElementById('internal_std_c_average').value = average;

      }
      function calc_internal_std_four(){

      var average = (Math.abs(document.getElementById('internal_std_d_one').value) + Math.abs(document.getElementById('internal_std_d_two').value) + Math.abs(document.getElementById('internal_std_d_three').value) + Math.abs(document.getElementById('internal_std_d_four').value) + Math.abs(document.getElementById('internal_std_d_five').value))/5;
      document.getElementById('internal_std_d_average').value = average;

      }
      function calc_internal_std_five(){

      var average = (Math.abs(document.getElementById('internal_std_e_one').value) + Math.abs(document.getElementById('internal_std_e_two').value) + Math.abs(document.getElementById('internal_std_e_three').value) + Math.abs(document.getElementById('internal_std_e_four').value) + Math.abs(document.getElementById('internal_std_e_five').value))/5;
      document.getElementById('internal_std_e_average').value = average;

      }
      function calc_internal_std_six(){

      var average = (Math.abs(document.getElementById('internal_std_f_one').value) + Math.abs(document.getElementById('internal_std_f_two').value) + Math.abs(document.getElementById('internal_std_f_three').value) + Math.abs(document.getElementById('internal_std_f_four').value) + Math.abs(document.getElementById('internal_std_f_five').value))/5;
      document.getElementById('internal_std_f_average').value = average;

      }
      function calc_internal_std_seven(){

      var average = (Math.abs(document.getElementById('internal_std_g_one').value) + Math.abs(document.getElementById('internal_std_g_two').value) + Math.abs(document.getElementById('internal_std_g_three').value) + Math.abs(document.getElementById('internal_std_g_four').value) + Math.abs(document.getElementById('internal_std_g_five').value))/5;
      document.getElementById('internal_std_g_average').value = average;

      }

      function calc_ratio_std(){

      var average = (Math.abs(document.getElementById('ratio_std_a_one').value) + Math.abs(document.getElementById('ratio_std_a_one').value) + Math.abs(document.getElementById('ratio_std_a_three').value) + Math.abs(document.getElementById('ratio_std_a_four').value) + Math.abs(document.getElementById('ratio_std_a_five').value))/5;
      document.getElementById('ratio_std_a_average').value = average;

      }
      function calc_ratio_std_two(){

      var average = (Math.abs(document.getElementById('ratio_std_b_one').value) + Math.abs(document.getElementById('ratio_std_b_two').value) + Math.abs(document.getElementById('ratio_std_b_three').value) + Math.abs(document.getElementById('ratio_std_b_four').value) + Math.abs(document.getElementById('ratio_std_b_five').value))/5;
      document.getElementById('ratio_std_b_average').value = average;

      }
      function calc_ratio_std_three(){

      var average = (Math.abs(document.getElementById('ratio_std_c_one').value) + Math.abs(document.getElementById('ratio_std_c_two').value) + Math.abs(document.getElementById('ratio_std_c_three').value) + Math.abs(document.getElementById('ratio_std_c_four').value) + Math.abs(document.getElementById('ratio_std_c_five').value))/5;
      document.getElementById('ratio_std_c_average').value = average;

      }
      function calc_ratio_std_four(){

      var average = (Math.abs(document.getElementById('ratio_std_d_one').value) + Math.abs(document.getElementById('ratio_std_d_two').value) + Math.abs(document.getElementById('ratio_std_d_three').value) + Math.abs(document.getElementById('ratio_std_d_four').value) + Math.abs(document.getElementById('ratio_std_d_five').value))/5;
      document.getElementById('ratio_std_d_average').value = average;

      }
      function calc_ratio_std_five(){

      var average = (Math.abs(document.getElementById('ratio_std_e_one').value) + Math.abs(document.getElementById('ratio_std_e_two').value) + Math.abs(document.getElementById('ratio_std_e_three').value) + Math.abs(document.getElementById('ratio_std_e_four').value) + Math.abs(document.getElementById('ratio_std_e_five').value))/5;
      document.getElementById('ratio_std_e_average').value = average;

      }
      function calc_ratio_std_six(){

      var average = (Math.abs(document.getElementById('ratio_std_f_one').value) + Math.abs(document.getElementById('ratio_std_f_two').value) + Math.abs(document.getElementById('ratio_std_f_three').value) + Math.abs(document.getElementById('ratio_std_f_four').value) + Math.abs(document.getElementById('ratio_std_f_five').value))/5;
      document.getElementById('ratio_std_f_average').value = average;

      }
      function calc_ratio_std_seven(){

      var average = (Math.abs(document.getElementById('ratio_std_g_one').value) + Math.abs(document.getElementById('ratio_std_g_two').value) + Math.abs(document.getElementById('ratio_std_g_three').value) + Math.abs(document.getElementById('ratio_std_g_four').value) + Math.abs(document.getElementById('ratio_std_g_five').value))/5;
      document.getElementById('ratio_std_g_average').value = average;

      }
      function calc_avg_sample_one(){

      var average = (Math.abs(document.getElementById('sample_one_one').value) + Math.abs(document.getElementById('sample_two_one').value) + Math.abs(document.getElementById('sample_three_one').value) + Math.abs(document.getElementById('sample_four_one').value) + Math.abs(document.getElementById('sample_five_one').value))/5;
      document.getElementById('sample_one_average').value = average;

      }
      function calc_avg_sample_two(){

      var average = (Math.abs(document.getElementById('sample_one_two').value) + Math.abs(document.getElementById('sample_two_two').value) + Math.abs(document.getElementById('sample_three_two').value) + Math.abs(document.getElementById('sample_four_two').value) + Math.abs(document.getElementById('sample_five_two').value))/5;
      document.getElementById('sample_two_average').value = average;

      }
      function calc_avg_sample_three(){

      var average = (Math.abs(document.getElementById('sample_one_three').value) + Math.abs(document.getElementById('sample_two_three').value) + Math.abs(document.getElementById('sample_three_three').value) + Math.abs(document.getElementById('sample_four_three').value) + Math.abs(document.getElementById('sample_five_three').value))/5;
      document.getElementById('sample_three_average').value = average;

      }
      function calc_avg_sample_four(){

      var average = (Math.abs(document.getElementById('sample_one_four').value) + Math.abs(document.getElementById('sample_two_four').value) + Math.abs(document.getElementById('sample_three_four').value) + Math.abs(document.getElementById('sample_four_four').value) + Math.abs(document.getElementById('sample_five_four').value))/5;
      document.getElementById('sample_four_average').value = average;

      }
      function calc_avg_sample_five(){

      var average = (Math.abs(document.getElementById('sample_one_five').value) + Math.abs(document.getElementById('sample_two_five').value) + Math.abs(document.getElementById('sample_three_five').value) + Math.abs(document.getElementById('sample_four_five').value) + Math.abs(document.getElementById('sample_five_five').value))/5;
      document.getElementById('sample_five_average').value = average;

      }
      function calc_avg_sample_six(){

      var average = (Math.abs(document.getElementById('sample_one_six').value) + Math.abs(document.getElementById('sample_two_six').value) + Math.abs(document.getElementById('sample_three_six').value) + Math.abs(document.getElementById('sample_four_six').value) + Math.abs(document.getElementById('sample_five_six').value))/5;
      document.getElementById('sample_six_average').value = average;

      }
      function calc_avg_relative(){

      var average = (Math.abs(document.getElementById('relative_one').value) + Math.abs(document.getElementById('relative_two').value) + Math.abs(document.getElementById('relative_three').value) + Math.abs(document.getElementById('relative_four').value) + Math.abs(document.getElementById('relative_five').value))/5;
      document.getElementById('relative_average').value = average;

      }
  
      <!---->
      // function c2_calc_avg_std(){

      // var average = (Math.abs(document.getElementById('c2_std_one').value) + Math.abs(document.getElementById('c2_std_two').value) + Math.abs(document.getElementById('c2_std_three').value) + Math.abs(document.getElementById('c2_std_four').value) + Math.abs(document.getElementById('c2_std_five').value))/5;
      // document.getElementById('c2_std_average').value = average;

      // }
      // function c2_calc_avg_sample_one(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_one').value) + Math.abs(document.getElementById('c2_sample_two_one').value) + Math.abs(document.getElementById('c2_sample_three_one').value) + Math.abs(document.getElementById('c2_sample_four_one').value) + Math.abs(document.getElementById('c2_sample_five_one').value))/5;
      // document.getElementById('c2_sample_one_average').value = average;

      // }
      // function c2_calc_avg_sample_two(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_two').value) + Math.abs(document.getElementById('c2_sample_two_two').value) + Math.abs(document.getElementById('c2_sample_three_two').value) + Math.abs(document.getElementById('c2_sample_four_two').value) + Math.abs(document.getElementById('c2_sample_five_two').value))/5;
      // document.getElementById('c2_sample_two_average').value = average;

      // }
      // function c2_calc_avg_sample_three(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_three').value) + Math.abs(document.getElementById('c2_sample_two_three').value) + Math.abs(document.getElementById('c2_sample_three_three').value) + Math.abs(document.getElementById('c2_sample_four_three').value) + Math.abs(document.getElementById('c2_sample_five_three').value))/5;
      // document.getElementById('c2_sample_three_average').value = average;

      // }
      // function c2_calc_avg_sample_four(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_four').value) + Math.abs(document.getElementById('c2_sample_two_four').value) + Math.abs(document.getElementById('c2_sample_three_four').value) + Math.abs(document.getElementById('c2_sample_four_four').value) + Math.abs(document.getElementById('c2_sample_five_four').value))/5;
      // document.getElementById('c2_sample_four_average').value = average;

      // }
      // function c2_calc_avg_sample_five(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_five').value) + Math.abs(document.getElementById('c2_sample_two_five').value) + Math.abs(document.getElementById('c2_sample_three_five').value) + Math.abs(document.getElementById('c2_sample_four_five').value) + Math.abs(document.getElementById('c2_sample_five_five').value))/5;
      // document.getElementById('c2_sample_five_average').value = average;

      // }
      // function c2_calc_avg_sample_six(){

      // var average = (Math.abs(document.getElementById('c2_sample_one_six').value) + Math.abs(document.getElementById('c2_sample_two_six').value) + Math.abs(document.getElementById('c2_sample_three_six').value) + Math.abs(document.getElementById('c2_sample_four_six').value) + Math.abs(document.getElementById('c2_sample_five_six').value))/5;
      // document.getElementById('c2_sample_six_average').value = average;

      // }
      //  function c2_calc_avg_relative(){

      // var average = (Math.abs(document.getElementById('c2_relative_one').value) + Math.abs(document.getElementById('c2_relative_two').value) + Math.abs(document.getElementById('c2_relative_three').value) + Math.abs(document.getElementById('c2_relative_four').value) + Math.abs(document.getElementById('c2_relative_five').value))/5;
      // document.getElementById('c2_relative_average').value = average;

      // }
      
      <!---->
      function calc_determination(){

      var determination_one = (Math.abs(document.getElementById('d_one_pkt').value) * Math.abs(document.getElementById('d_one_wstd').value) * Math.abs(document.getElementById('d_one_awt').value) * 100 * Math.abs(document.getElementById('d_one_df').value) * Math.abs(document.getElementById('d_one_potency').value))/(Math.abs(document.getElementById('d_one_pkstd').value) * Math.abs(document.getElementById('d_one_wt').value) * Math.abs(document.getElementById('d_one_lc').value));
      var determination_two = (Math.abs(document.getElementById('d_two_pkt').value) * Math.abs(document.getElementById('d_two_wstd').value) * Math.abs(document.getElementById('d_two_awt').value) * 100 * Math.abs(document.getElementById('d_two_df').value) * Math.abs(document.getElementById('d_two_potency').value))/(Math.abs(document.getElementById('d_two_pkstd').value) * Math.abs(document.getElementById('d_two_wt').value) * Math.abs(document.getElementById('d_two_lc').value));
      var determination_three = (Math.abs(document.getElementById('d_three_pkt').value) * Math.abs(document.getElementById('d_three_wstd').value) * Math.abs(document.getElementById('d_three_awt').value) * 100 * Math.abs(document.getElementById('d_three_df').value) * Math.abs(document.getElementById('d_three_potency').value))/(Math.abs(document.getElementById('d_three_pkstd').value) * Math.abs(document.getElementById('d_three_wt').value) * Math.abs(document.getElementById('d_three_lc').value));
      var determination_four = (Math.abs(document.getElementById('d_four_pkt').value) * Math.abs(document.getElementById('d_four_wstd').value) * Math.abs(document.getElementById('d_four_awt').value) * 100 * Math.abs(document.getElementById('d_four_df').value) * Math.abs(document.getElementById('d_four_potency').value))/(Math.abs(document.getElementById('d_four_pkstd').value) * Math.abs(document.getElementById('d_four_wt').value) * Math.abs(document.getElementById('d_four_lc').value));
      var determination_five = (Math.abs(document.getElementById('d_five_pkt').value) * Math.abs(document.getElementById('d_five_wstd').value) * Math.abs(document.getElementById('d_five_awt').value) * 100 * Math.abs(document.getElementById('d_five_df').value) * Math.abs(document.getElementById('d_five_potency').value))/(Math.abs(document.getElementById('d_five_pkstd').value) * Math.abs(document.getElementById('d_five_wt').value) * Math.abs(document.getElementById('d_five_lc').value));
      var determination_six = (Math.abs(document.getElementById('d_six_pkt').value) * Math.abs(document.getElementById('d_six_wstd').value) * Math.abs(document.getElementById('d_six_awt').value) * 100 * Math.abs(document.getElementById('d_six_df').value) * Math.abs(document.getElementById('d_six_potency').value))/(Math.abs(document.getElementById('d_six_pkstd').value) * Math.abs(document.getElementById('d_six_wt').value) * Math.abs(document.getElementById('d_six_lc').value));
      
      document.getElementById('d_one_p_lc').value = determination_one;
      document.getElementById('d_two_p_lc').value = determination_two;
      document.getElementById('d_three_p_lc').value = determination_three;
      document.getElementById('d_four_p_lc').value = determination_four;
      document.getElementById('d_five_p_lc').value = determination_five;
      document.getElementById('d_six_p_lc').value = determination_six;

      var average_det= (Math.abs(document.getElementById('d_one_p_lc').value)+ Math.abs(document.getElementById('d_two_p_lc').value)+ Math.abs(document.getElementById('d_three_p_lc').value)+ Math.abs(document.getElementById('d_four_p_lc').value)+ Math.abs(document.getElementById('d_five_p_lc').value)+ Math.abs(document.getElementById('d_six_p_lc').value))/6;
      
      var determinations= [Math.abs(document.getElementById('d_one_p_lc').value), Math.abs(document.getElementById('d_two_p_lc').value), Math.abs(document.getElementById('d_three_p_lc').value), Math.abs(document.getElementById('d_four_p_lc').value), Math.abs(document.getElementById('d_five_p_lc').value), Math.abs(document.getElementById('d_six_p_lc').value)];
      
      var variance_determinations=0; 
      
      for(var i=0;i<determinations.length; i++){
           variance_determinations += Math.pow((determinations [i]-average_det),2);       
      }

      var determination_sd= Math.sqrt((variance_determinations)/i);
      var determination_rsd=Math.abs((determination_sd/average_det)*100);
      
      
      document.getElementById('determination_average').value = average_det;
      document.getElementById('determination_sd').value = determination_sd;
      document.getElementById('determination_rsd').value = determination_rsd;

      }
      function calc_c2_determination(){

      var c2_determination_one = (Math.abs(document.getElementById('c2_d_one_pkt').value) * Math.abs(document.getElementById('c2_d_one_wstd').value) * Math.abs(document.getElementById('c2_d_one_awt').value) * 100 * Math.abs(document.getElementById('c2_d_one_df').value) * Math.abs(document.getElementById('c2_d_one_potency').value))/(Math.abs(document.getElementById('c2_d_one_pkstd').value) * Math.abs(document.getElementById('c2_d_one_wt').value) * Math.abs(document.getElementById('c2_d_one_lc').value));
      var c2_determination_two = (Math.abs(document.getElementById('c2_d_two_pkt').value) * Math.abs(document.getElementById('c2_d_two_wstd').value) * Math.abs(document.getElementById('c2_d_two_awt').value) * 100 * Math.abs(document.getElementById('c2_d_two_df').value) * Math.abs(document.getElementById('c2_d_two_potency').value))/(Math.abs(document.getElementById('c2_d_two_pkstd').value) * Math.abs(document.getElementById('c2_d_two_wt').value) * Math.abs(document.getElementById('c2_d_two_lc').value));
      var c2_determination_three = (Math.abs(document.getElementById('c2_d_three_pkt').value) * Math.abs(document.getElementById('c2_d_three_wstd').value) * Math.abs(document.getElementById('c2_d_three_awt').value) * 100 * Math.abs(document.getElementById('c2_d_three_df').value) * Math.abs(document.getElementById('c2_d_three_potency').value))/(Math.abs(document.getElementById('c2_d_three_pkstd').value) * Math.abs(document.getElementById('c2_d_three_wt').value) * Math.abs(document.getElementById('c2_d_three_lc').value));
      var c2_determination_four = (Math.abs(document.getElementById('c2_d_four_pkt').value) * Math.abs(document.getElementById('c2_d_four_wstd').value) * Math.abs(document.getElementById('c2_d_four_awt').value) * 100 * Math.abs(document.getElementById('c2_d_four_df').value) * Math.abs(document.getElementById('c2_d_four_potency').value))/(Math.abs(document.getElementById('c2_d_four_pkstd').value) * Math.abs(document.getElementById('c2_d_four_wt').value) * Math.abs(document.getElementById('c2_d_four_lc').value));
      var c2_determination_five = (Math.abs(document.getElementById('c2_d_five_pkt').value) * Math.abs(document.getElementById('c2_d_five_wstd').value) * Math.abs(document.getElementById('c2_d_five_awt').value) * 100 * Math.abs(document.getElementById('c2_d_five_df').value) * Math.abs(document.getElementById('c2_d_five_potency').value))/(Math.abs(document.getElementById('c2_d_five_pkstd').value) * Math.abs(document.getElementById('c2_d_five_wt').value) * Math.abs(document.getElementById('c2_d_five_lc').value));
      var c2_determination_six = (Math.abs(document.getElementById('c2_d_six_pkt').value) * Math.abs(document.getElementById('c2_d_six_wstd').value) * Math.abs(document.getElementById('c2_d_six_awt').value) * 100 * Math.abs(document.getElementById('c2_d_six_df').value) * Math.abs(document.getElementById('c2_d_six_potency').value))/(Math.abs(document.getElementById('c2_d_six_pkstd').value) * Math.abs(document.getElementById('c2_d_six_wt').value) * Math.abs(document.getElementById('c2_d_six_lc').value));
      
      document.getElementById('c2_d_one_p_lc').value = c2_determination_one;
      document.getElementById('c2_d_two_p_lc').value = c2_determination_two;
      document.getElementById('c2_d_three_p_lc').value = c2_determination_three;
      document.getElementById('c2_d_four_p_lc').value = c2_determination_four;
      document.getElementById('c2_d_five_p_lc').value = c2_determination_five;
      document.getElementById('c2_d_six_p_lc').value = c2_determination_six;

      }
      