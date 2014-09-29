$(document).ready(function() {
    /* Init DataTables */
    $('#list').dataTable({
     "sScrollY":"270px",
     "sScrollX":"100%"
    });
    $("#balance_id").on('change',function(){
      var equipmentbalance=$(this).find(":selected").data("equipmentbalance");
      $("#equipmentbalance").val(equipmentbalance);
      
    });
     $("#equipment_balance").on('change',function(){
      var idnumber=$(this).find(":selected").data("idnumber");
      $("#idnumber").val(idnumber);
      
    });
     $("#equipment_id").on('change',function(){
      var equipmentbalance=$(this).find(":selected").data("equipmentbalance");
      $("#equipmentbalance").val(equipmentbalance);
      
    });
     $("#standard_description_one").on('change',function(){
      var stdlotnumber=$(this).find(":selected").data("stdlotnumber");
      var stdrefnumber=$(this).find(":selected").data("stdrefnumber");
      $("#stdlotnumber").val(stdlotnumber);
      $("#stdrefnumber").val(stdrefnumber);
      
    });
     $("#standard_description_two").on('change',function(){
      var stdlotnumbertwo=$(this).find(":selected").data("stdlotnumbertwo");
      var stdrefnumbertwo=$(this).find(":selected").data("stdrefnumbertwo");
      $("#stdlotnumbertwo").val(stdlotnumbertwo);
      $("#stdrefnumbertwo").val(stdrefnumbertwo);
      
    });
     $("#make_id").on('change',function(){
      var equipmentmake=$(this).find(":selected").data("equipmentmake");
      $("#equipmentmake").val(equipmentmake);
      
    });
      $("#equipment_make").on('change',function(){
      var equipmentid=$(this).find(":selected").data("equipmentid");
      $("#equipmentid").val(equipmentid);
    });
    $("#equipment_make_1").on('change',function(){
      var equipmentid=$(this).find(":selected").data("equipmentid_1");
      $("#equipmentid_1").val(equipmentid);
    });
  $("#equipment_make_2").on('change',function(){
      var equipmentid=$(this).find(":selected").data("equipmentid_2");
      $("#equipmentid_2").val(equipmentid);
    });
    $("#column_name").on('change',function(){
      var dimensions=$(this).find(":selected").data("dimensions");
      var serial_number=$(this).find(":selected").data("serialnumber");
      var manufacturer=$(this).find(":selected").data("manufacturer");
      $("#column_dimensions").val(dimensions);
      $("#column_serial_number").val(serial_number);
      $("#column_manufacturer").val(manufacturer);
    });
    $("#standard_description").on('change',function(){
      var idno=$(this).find(":selected").data("idno");
      var lotno=$(this).find(":selected").data("lotno");
      var potency=$(this).find(":selected").data("potency");
      $("#id_no").val(idno);
      $("#lot_no").val(lotno);
      $("#potency").val(potency);
      $("#det_1_potency").val(potency); $("#det_2_potency").val(potency); $("#det_3_potency").val(potency); $("#det_4_potency").val(potency); $("#det_5_potency").val(potency); $("#det_6_potency").val(potency);

    });
    $("#name").on('change',function(){
      var dimensions=$(this).find(":selected").data("dimensions");
      var serial_number=$(this).find(":selected").data("serialnumber");
      var manufacturer=$(this).find(":selected").data("manufacturer");
      $("#length").val(dimensions);
      $("#serial_no").val(serial_number);
      $("#manufacturer").val(manufacturer);
    });
  });