
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php $user = $this->login_model->get_user_details(); ?>   


<div class="container" >

    <h1>

    </h1>
    <hr>
    <p>

    </p>

    <?php if (!is_null($result->name)) { ?>

        <img src= " <?= $result->name ?>" alt="">

    <?php } ?>
</div>
<!--<script>
$(document).ready(function() {
   $("#myModal").modal();
   //alert('hello');
});
</script>-->
<?php
if( $user['login_count']==0){ ?>
<script>
$(document).ready(function() {
   $("#myModal").modal();
   //alert('hello');
});
</script>
<?php } ?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">References Details</h4>
      </div>
      <div class="modal-body">
       
          <!--<form  method="post"  action="<?php // echo base_url('home/user_register'); ?>" onsubmit="return model()">-->        
          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('home/referens_details'); ?>" onsubmit="return model()">

                               <!--<div class="box-body">-->

                                    <div class="form-group" >
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label for="exampleInputEmail1">User Name :</label>

                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Name" value="<?php echo $this->session->userdata('username'); ?>">
                                            <div id="Username_error"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label for="exampleInputEmail1">Email :</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $this->session->userdata('email'); ?>">
                                            <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label for="exampleInputEmail1">Mobile :</label>
                                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="<?php echo $this->session->userdata('mobile'); ?>">
                                            <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">  
                                            <label for="exampleInputEmail1"> Occupation :</label>

                                            <input type="text" class="form-control" name="Occupation" placeholder="Occupation" id="Occupation" value="<?php echo set_value('Occupation'); ?>">
                                            <div id="occupation_error"> </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label>Select Religion</label>
                                            <select class="form-control" name="Religion" id="Religion">
                                                <option  value="">Select Religion</option>

                                                <option>Hindu </option>
                                                <option>Sikh </option>
                                                <option>Christon </option>
                                                <option>Buddha </option>
                                                <option>Muslim </option>
                                            </select>
                                            <div id="religion_error"></div>
                                        </div></div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label for="exampleInputPassword1">Cast :</label>
                                            <input type="text" class="form-control" name="Cast" id="Cast" placeholder="Enter Cast" value="<?php echo set_value('Cast'); ?>">
                                            <div id="cast_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label>Select City</label>
                                            <select class="form-control"name="City" id="City">
                                                <option  value="" >Select City</option>

                                                <option >Pune</option>
                                                <option >Solapur</option>
                                                <option >Kolhapur</option>
                                                <option >Nagpur</option>
                                                <option >Sangali</option>
                                                <option >Latur</option>
                                                <option >Mumbai</option>

                                            </select>
                                            <div id="city_error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label>Select State</label>
                                            <select class="form-control" name="State" id="State">
                                                <option value="" >Select State</option>

                                                <option >Maharashtra</option>
                                                <option >Goa</option>
                                                <option >UP</option>
                                                <option >MP</option>
                                                <option >Karnataka</option>
                                                <option >Punjab</option>       
                                            </select>
                                            <div id="state_error"></div>
                                        </div></div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label>Address</label>

                                            <textarea class="form-control" rows="3" placeholder="Enter Your Address " id="Address" name="address"></textarea>

                                            <div id="address_error"></div>

                                        </div></div>
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <div class="col-md-10 col-md-offset-1">

                                            <label class=" control-label" for="IsSmallBusiness">Gender :</label>
                                            <div class="">
                                                <label class="radio-inline">
                                                    <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="Gender" type="radio" value="Male">
                                                    Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Gender" type="radio" value="Female">
                                                    Female
                                                </label>
                                                <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 15px;">
                                        <div class="col-md-10 col-md-offset-1">

                                            <label class=" control-label" for="IsSmallBusiness">Marital Status : </label>
                                            <div class="">
                                                <label class="radio-inline">
                                                    <input checked="checked" data-val="true" data-val-required="The IsSmallBusiness field is required." id="IsSmallBusiness" name="Marital_Status" type="radio" value="Married">
                                                    Married
                                                </label>
                                                <label class="radio-inline">
                                                    <input id="IsSmallBusiness" name="Marital_Status" type="radio" value="Unmarried">
                                                    Unmarried
                                                </label>
                                                <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                            <label for="exampleInputPassword1">Age :</label>
                                            <input type="text" class="form-control" name="age" id="Age" placeholder="Enter Age" value="<?php echo set_value('age'); ?>">
                                            <div id="age_error"> </div>

                                        </div>
                                    </div>

                                   


                                    <div class="checkbox">
                                        <div class="col-md-10 col-md-offset-1">
                                            <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                                        </div>  
                                    </div>
                                <!--</div>-->
                                <!-- /.box-body -->

                             
                          

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
      </div>
          </form>
    </div>
      </div>
  </div>
</div>
<script>
function model(){
//    alert("hello");
    var Username=$("#username").val();
    if(Username==""){
        $("#Username_error").show();
        $("#Username_error").html("Plse Enter Name");
        $("#Username_error").css("color","red");
        $("#username").focus();
        return false;
    }else{
        $("#Username_error").hide();
    }
    var occupation=$("#Occupation").val();
    if(occupation==""){
        $("#occupation_error").show();
        $("#occupation_error").html("Plse Enter Occupation");
        $("#occupation_error").css("color","red");
        $("#Occupation").focus();
        return false;
    }else{
        $("#occupation_error").hide();
    }
     var religion=$("#Religion").val();
    if(religion==""){
        $("#religion_error").show();
        $("#religion_error").html("Plse Enter Religion");
        $("#religion_error").css("color","red");
        $("#Religion").focus();
        return false;
    }else{
        $("#religion_error").hide();
    }
       var cast=$("#Cast").val();
    if(cast==""){
        $("#cast_error").show();
        $("#cast_error").html("Plse Enter Cast");
        $("#cast_error").css("color","red");
        $("#Cast").focus();
        return false;
    }else{
        $("#cast_error").hide();
    }
      var city=$("#City").val();
    if(city==""){
        $("#city_error").show();
        $("#city_error").html("Plse Enter City");
        $("#city_error").css("color","red");
        $("#Cast").focus();
        return false;
    }else{
        $("#city_error").hide();
    }
      var state=$("#State").val();
    if(state==""){
        $("#state_error").show();
        $("#state_error").html("Plse Enter Religion");
        $("#state_error").css("color","red");
        $("#State").focus();
        return false;
    }else{
        $("#state_error").hide();
    }
     var address=$("#Address").val();
    if(address==""){
        
        $("#address_error").show();
        $("#address_error").html(" Plese select City");
        $("#address_error").css("color","red");
        $("#Address").focus();
        return false;
    }else{
        $("#address_error").hide();
    }
    var age=$("#Age").val();
    if(age==""){
        
        $("#age_error").show();
        $("#age_error").html(" Plese select City");
        $("#age_error").css("color","red");
        $("#Age").focus();
        return false;
    }else{
        $("#age_error").hide();
    }
    
    
}
</script>