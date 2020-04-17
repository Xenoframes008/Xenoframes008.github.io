function validate_step2() {
    var badroom = $('#Bedrooms').val();
    var balconies = $('#Balconies').val();
    var floor_No = $('#Floor_No').val();

    // var number = "/[0-9]/";
    if (badroom == "") {
        $('#bedroom_error').show();
        $('#bedroom_error').html("please select bedroom");
        $('#bedroom_error').css("color", "red");
        $('#Bedrooms').focus();
        return false;
    } else {
        $('#bedroom_error').hide();
    }

    if (balconies == "") {
        $('#balconies_error').show();
        $('#balconies_error').html("please select balconies");
        $('#balconies_error').css("color", "red");
        $('#Balconies').focus();
        return false;
    } else {
        $('#balconies_error').hide();
    }
    if (floor_No == "") {
        $('#floor_No_error').show();
        $('#floor_No_error').html("please select floor_No");
        $('#floor_No_error').css("color", "red");
        $('#Floor_No').focus();
        return false;
    } else {
        $('#floor_No_error').hide();
    }
    var total_Floor = $('#Total_Floor').val();
    if (total_Floor == "") {
        $('#total_Floor_error').show();
        $('#total_Floor_error').html("please select Floor");
        $('#total_Floor_error').css("color", "red");
        $('#Total_Floor').focus();
        return false;
    } else {
        $('#total_Floor_error').hide();
    }
    var furnished_Status = $('#Furnished_Status').val();
    if (furnished_Status == "") {
        $('#furnished_Status_error').show();
        $('#furnished_Status_error').html("please select Status");
        $('#furnished_Status_error').css("color", "red");
        $('#Furnished_Status').focus();
        return false;
    } else {
        $('#furnished_Status_error').hide();
    }
    var bathrooms = $('#Bathrooms').val();
    if (bathrooms == "") {
        $('#bathrooms_error').show();
        $('#bathrooms_error').html("please select bathrooms");
        $('#bathrooms_error').css("color", "red");
        $('#Bathrooms').focus();
        return false;
    } else {
        $('#bathrooms_error').hide();
    }
    var floors_Allowed = $('#Floors_Allowed').val();
    if (floors_Allowed == "") {
        $('#floors_Allowed_error').show();
        $('#floors_Allowed_error').html("please select bathrooms");
        $('#floors_Allowed_error').css("color", "red");
        $('#Floors_Allowed').focus();
        return false;
    } else {
        $('#floors_Allowed_error').hide();
    }
    var No_open_side = $('#no_open_side').val();
    if (No_open_side == "") {
        $('#No_open_side_error').show();
        $('#No_open_side_error').html("please select ");
        $('#No_open_side_error').css("color", "red");
        $('#no_open_side').focus();
        return false;
    } else {
        $('#No_open_side_error').hide();
    }
    var Road_width = $('#road_width').val();
    if (Road_width == "") {
        $('#Road_width_error').show();
        $('#Road_width_error').html("please Enter road width ");
        $('#Road_width_error').css("color", "red");
        $('#road_width').focus();
        return false;
    } else {
        $('#Road_width_error').hide();
    }
    var hospital_distance = $('#Hospital_distance').val();
    if (hospital_distance == "") {
        $('#hospital_distance_error').show();
        $('#hospital_distance_error').html("please Enter ");
        $('#hospital_distance_error').css("color", "red");
        $('#Hospital_distance').focus();
        return false;
    } else {
        $('#hospital_distance_error').hide();
    }
    var school_distance = $('#School_distance').val();
    if (school_distance == "") {
        $('#school_distance_error').show();
        $('#school_distance_error').html("please Enter ");
        $('#school_distance_error').css("color", "red");
        $('#School_distance').focus();
        return false;
    } else {
        $('#school_distance_error').hide();
    }
    var airport_distance = $('#Airport_distance').val();
    if (airport_distance == "") {
        $('#airport_distance_error').show();
        $('#airport_distance_error').html("please Enter ");
        $('#airport_distance_error').css("color", "red");
        $('#Airport_distance').focus();
        return false;
    } else {
        $('#airport_distance_error').hide();
    }
     var city_distance = $('#City_distance').val();
    if (city_distance == "") {
        $('#city_distance_error').show();
        $('#city_distance_error').html("please Enter ");
        $('#city_distance_error').css("color", "red");
        $('#City_distance').focus();
        return false;
    } else {
        $('#city_distance_error').hide();
    }
    var railway_Station_distance = $('#Railway_Station_distance').val();
    if (railway_Station_distance == "") {
        $('#railway_Station_distance_error').show();
        $('#railway_Station_distance_error').html("please Enter ");
        $('#railway_Station_distance_error').css("color", "red");
        $('#Railway_Station_distance').focus();
        return false;
    } else {
        $('#railway_Station_distance_error').hide();
    }
      var Area_per_sq = $('#area_per_sq').val();
    if (Area_per_sq == "") {
        $('#Area_per_sq_error').show();
        $('#Area_per_sq_error').html("please Select ");
        $('#Area_per_sq_error').css("color", "red");
        $('#area_per_sq').focus();
        return false;
    } else {
        $('#Area_per_sq_error').hide();
    }
     var covered_Area = $('#Covered_Area').val();
    if (covered_Area == "") {
        $('#covered_Area_error').show();
        $('#covered_Area_error').html("please Enter ");
        $('#covered_Area_error').css("color", "red");
        $('#Covered_Area').focus();
        return false;
    } else {
        $('#covered_Area_error').hide();
    }
    var Plot_area_sq = $('#plot_area_sq').val();
    if (Plot_area_sq == "") {
        $('#Plot_area_sq_error').show();
        $('#Plot_area_sq_error').html("please Enter ");
        $('#Plot_area_sq_error').css("color", "red");
        $('#plot_area_sq').focus();
        return false;
    } else {
        $('#Plot_area_sq_error').hide();
    }
     var Plot_area = $('#plot_area').val();
    if (Plot_area == "") {
        $('#Plot_area_error').show();
        $('#Plot_area_error').html("please Enter ");
        $('#Plot_area_error').css("color", "red");
        $('#plot_area').focus();
        return false;
    } else {
        $('#Plot_area_error').hide();
    }
     var Plot_Length = $('#plot_Length').val();
    if (Plot_Length == "") {
        $('#Plot_Length_error').show();
        $('#Plot_Length_error').html("please Enter ");
        $('#Plot_Length_error').css("color", "red");
        $('#plot_Length').focus();
        return false;
    } else {
        $('#Plot_Length_error').hide();
    }
     var plot_Breadth = $('#Plot_Breadth').val();
    if (plot_Breadth == "") {
        $('#plot_Breadth_error').show();
        $('#plot_Breadth_error').html("please Enter ");
        $('#plot_Breadth_error').css("color", "red");
        $('#Plot_Breadth').focus();
        return false;
    } else {
        $('#plot_Breadth_error').hide();
    }
     var carpet_Area_sq = $('#Carpet_Area_sq').val();
    if (carpet_Area_sq == "") {
        $('#carpet_Area_sq_error').show();
        $('#carpet_Area_sq_error').html("please Enter ");
        $('#carpet_Area_sq_error').css("color", "red");
        $('#Carpet_Area_sq').focus();
        return false;
    } else {
        $('#carpet_Area_sq_error').hide();
    }
    var carpet_Area = $('#Carpet_Area').val();
    if (carpet_Area == "") {
        $('#carpet_Area_error').show();
        $('#carpet_Area_error').html("please Enter ");
        $('#carpet_Area_error').css("color", "red");
        $('#Carpet_Area').focus();
        return false;
    } else {
        $('#carpet_Area_error').hide();
    }
    
}
function validate_step3(){
   // alert("hello 3");
    var available_month=$("#Available_month").val();
    if(available_month==""){
        
        $("#available_month_error").show();
        $("#available_month_error").html(" Plese select month");
        $("#available_month_error").css("color","red");
        $("#Available_month").focus();
        return false;
    }else{
        $("#available_month_error").hide();
    }
      var available_Year=$("#Available_Year").val();
    if(available_Year==""){
        
        $("#available_Year_error").show();
        $("#available_Year_error").html(" Plese select month");
        $("#available_Year_error").css("color","red");
        $("#Available_Year").focus();
        return false;
    }else{
        $("#available_Year_error").hide();
    }
       var Age_of_Construction=$("#age_of_Construction").val();
    if(Age_of_Construction==""){
        
        $("#Age_of_Construction_error").show();
        $("#Age_of_Construction_error").html(" Plese select month");
        $("#Age_of_Construction_error").css("color","red");
        $("#age_of_Construction").focus();
        return false;
    }else{
        $("#Age_of_Construction_error").hide();
    }
         var Price_per_sqr=$("#price_per_sqr").val();
    if(Price_per_sqr==""){
        
        $("#Price_per_sqr_error").show();
        $("#Price_per_sqr_error").html(" Plese select month");
        $("#Price_per_sqr_error").css("color","red");
        $("#price_per_sqr").focus();
        return false;
    }else{
        $("#Price_per_sqr_error").hide();
    }
          var other_Charges=$("#Other_Charges").val();
    if(other_Charges==""){
        
        $("#other_Charges_error").show();
        $("#other_Charges_error").html(" Plese select month");
        $("#other_Charges_error").css("color","red");
        $("#Other_Charges").focus();
        return false;
    }else{
        $("#other_Charges_error").hide();
    }
          var booking_Token=$("#Booking_Token").val();
    if(booking_Token==""){
        
        $("#booking_Token_error").show();
        $("#booking_Token_error").html(" Plese select month");
        $("#booking_Token_error").css("color","red");
        $("#Booking_Token").focus();
        return false;
    }else{
        $("#booking_Token_error").hide();
    }
     var In_rupes=$("#in_rupes").val();
    if(In_rupes==""){
        
        $("#In_rupes_error").show();
        $("#In_rupes_error").html(" Plese select ");
        $("#In_rupes_error").css("color","red");
        $("#in_rupes").focus();
        return false;
    }else{
        $("#In_rupes_error").hide();
    }
    
      var Pries=$("#pries").val();
    if(Pries==""){
        
        $("#Pries_error").show();
        $("#Pries_error").html(" Plese Enter Amount ");
        $("#Pries_error").css("color","red");
        $("#pries").focus();
        return false;
    }else{
        $("#Pries_error").hide();
    }
           var maintenance_Charges=$("#Maintenance_Charges").val();
    if(maintenance_Charges==""){
        
        $("#maintenance_Charges_error").show();
        $("#maintenance_Charges_error").html(" Plese select month");
        $("#maintenance_Charges_error").css("color","red");
        $("#Maintenance_Charges").focus();
        return false;
    }else{
        $("#maintenance_Charges_error").hide();
    }
           var charges_per_month=$("#Charges_per_month").val();
    if(charges_per_month==""){
        
        $("#charges_per_month_error").show();
        $("#charges_per_month_error").html(" Plese select month");
        $("#charges_per_month_error").css("color","red");
        $("#Charges_per_month").focus();
        return false;
    }else{
        $("#charges_per_month_error").hide();
    }
     
}



