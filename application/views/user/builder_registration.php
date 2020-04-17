<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php $user = $this->login_model->get_user_details(); ?>   
<?php $resultt=$this->property_model->update_builder_info(); ?>

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

<script>
//    <?php //if($resultt->login_count==0){?>
//$(document).ready(function() {
//   $("#myModal").modal();
//   alert('1');
//});

        
  <?php //}?>
    $(document).ready(function() {
    $("#myModal").modal();
   //alert('2');
});
  
</script>
<div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
<!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title">Builder Details</h4>
      </div>
      <div class="modal-body">
<!--        <p>Some text in the modal.</p>-->
          <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('home/builder_registr_start'); ?>" onsubmit="return model()">
                        <?php //echo form_open_multipart('home/builder_register',['class'=>'form-horizontal']);?>
<!--                        <div class="box-body">-->

                            <div class="form-group" >
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Company Name :</label>

                                    <input type="text" class="form-control"  placeholder="Enter Company Name" name="Company_name" value="<?php echo set_value('Company_name'); ?>" id="company_name">
                                    <div id="Company_name_error"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1">Company Ongoing Project :</label>
                                    <input type="text" class="form-control" id="Ongoing_Project" placeholder="Enter Company Ongoing Project Name" name="Ongoing_Project" value="<?php echo set_value('Ongoing_Project'); ?>">
                                    <div id="ongoing_Project_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputEmail1"> Company Completed Project :</label>

                                    <input type="text" class="form-control" id="Completed_Project" placeholder="Company Completed Project Name" name="Completed_Project" value="<?php echo set_value('Completed_Project'); ?>">
                                    <div id="completed_Project_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Name Of Director :</label>
                                    <input type="text" class="form-control" id="director_name" placeholder="Enter Name Of Director" name="director_name" value="<?php echo set_value('director_name'); ?>">
                                    <div id="Director_name_error"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1"> Director Contact No :</label>
                                    <input type="text" class="form-control" id="director_mobile" placeholder="Enter  Contact No" name="director_mobile" value="<?php echo set_value('director_mobile'); ?>"> 
                                    <div id="Director_mobile_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">   Director Email ID :</label>
                                    <input type="text" class="form-control" id="director_email" placeholder="Enter Email" name="director_email" value="<?php echo set_value('director_email'); ?>">
                                    <div id="Director_email_error"></div>
                                    <h3 class="help-block">Company Contact Person</h3>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1"> Contact Person Name :</label>
                                    <input type="text" class="form-control" id="Contact_Person" placeholder="Enter  Contact Person Name " name="Contact_Person" value="<?php echo set_value('Contact_Person'); ?>">
                                    <div id="contact_Person_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Contact Person Email :</label>
                                    <input type="text" class="form-control" id="Contact_Person_email" placeholder="Enter Contact Person email" name="Contact_Person_email" value="<?php echo set_value('Contact_Person_email'); ?>">
                                    <div id="contact_Person_email_error"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="exampleInputPassword1">Contact Person Mobile No :</label>
                                    <input type="text" class="form-control" id="Contact_Person_mobile" placeholder="Enter Contact Person Mobile No" name="Contact_Person_mobile" value="<?php echo set_value('Contact_Person_mobile'); ?>">
                                    <div id="contact_Person_mobile_error"></div>
                                </div>
                            </div>

                         


                           
<!--                        </div>-->
                        <!-- /.box-body -->

<!--                        <div class="">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>-->

                    
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
    //alert('hell');
     var Company_name=$("#company_name").val();
    if(Company_name==""){
        
        $("#Company_name_error").show();
        $("#Company_name_error").html(" Plese Enter  Company name");
        $("#Company_name_error").css("color","red");
        $("#company_name").focus();
        return false;
    }else{
        $("#Company_name_error").hide();
    }
    var ongoing_Project=$("#Ongoing_Project").val();
    if(ongoing_Project==""){
        $("#ongoing_Project_error").show();
        $("#ongoing_Project_error").html("Plse Enter ongoing Project name");
        $("#ongoing_Project_error").css("color","red");
        $("#Ongoing_Project").focus();
        return false;
    }else{
        $("#ongoing_Project_error").hide();
    }
    var completed_Project=$("#Completed_Project").val();
    if(completed_Project==""){
        $("#completed_Project_error").show();
        $("#completed_Project_error").html("Plse Enter ongoing Project name");
        $("#completed_Project_error").css("color","red");
        $("#Completed_Project").focus();
        return false;
    }else{
        $("#completed_Project_error").hide();
    }
     var Director_name=$("#director_name").val();
    if(Director_name==""){
        $("#Director_name_error").show();
        $("#Director_name_error").html("Plse Enter ongoing Project name");
        $("#Director_name_error").css("color","red");
        $("#director_name").focus();
        return false;
    }else{
        $("#Director_name_error").hide();
    }
     var Director_mobile=$("#director_mobile").val();
    if(Director_mobile==""){
        $("#Director_mobile_error").show();
        $("#Director_mobile_error").html("Plse Enter ongoing Project name");
        $("#Director_mobile_error").css("color","red");
        $("#director_mobile").focus();
        return false;
    }else{
        $("#Director_mobile_error").hide();
    }
     var Director_email=$("#director_email").val();
    if(Director_email==""){
        $("#Director_email_error").show();
        $("#Director_email_error").html("Plse Enter ongoing Project name");
        $("#Director_email_error").css("color","red");
        $("#director_email").focus();
        return false;
    }else{
        $("#Director_email_error").hide();
    }
     var contact_Person=$("#Contact_Person").val();
    if(contact_Person==""){
        $("#contact_Person_error").show();
        $("#contact_Person_error").html("Plse Enter ongoing Project name");
        $("#contact_Person_error").css("color","red");
        $("#director_name").focus();
        return false;
    }else{
        $("#contact_Person_error").hide();
    }
     var contact_Person_email=$("#Contact_Person_email").val();
    if(contact_Person_email==""){
        $("#contact_Person_email_error").show();
        $("#contact_Person_email_error").html("Plse Enter ongoing Project name");
        $("#contact_Person_email_error").css("color","red");
        $("#Contact_Person_email").focus();
        return false;
    }else{
        $("#contact_Person_email_error").hide();
    }
     var contact_Person_mobile=$("#Contact_Person_mobile").val();
    if(contact_Person_mobile==""){
        $("#contact_Person_mobile_error").show();
        $("#contact_Person_mobile_error").html("Plse Enter ongoing Project name");
        $("#contact_Person_mobile_error").css("color","red");
        $("#Contact_Person_mobile").focus();
        return false;
    }else{
        $("#contact_Person_mobile_error").hide();
    }
    
    } 

</script>
