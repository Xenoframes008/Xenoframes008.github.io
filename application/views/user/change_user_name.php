<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php $user = $this->login_model->get_user_details(); ?>


<script>
$(document).ready(function() {
   $("#myModal").modal();
   //alert('hello');
});
</script>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change User Name</h4>
      </div>
      <div class="modal-body">
          <form role="form" method="post"  action="<?php echo base_url('home/change_user'); ?>" onsubmit="return change()">        
        <div class="form-group has-feedback">
                    <label for="exampleInputEmail1">  Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name"  id="username" name="username" value="<?php echo set_value('username', $user['username']); ?>"/>
                    <div id="Username_error"> </div>
                </div>
        <div class="form-group has-feedback">
                    <label for="exampleInputEmail1">New Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" id="cusername" name="username" value="<?php echo set_value('username'); ?>"/>
                    <div id="Cusername_error"> </div>
                </div>
     
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
        </form>
           </div>
    </div>

  </div>
</div>
<script>
    function change(){
       // alert("hello");
        var Username=$("#username").val();
        if(Username==""){
            $("#Username_error").show();
            $("#Username_error").html("Plse Enter User Name");
            $("#Username_error").css("color","red");
            $("#username").focus();
            return false;
            
        }else{
            $("#Username_error").hide();
        }
         var Cusername=$("#cusername").val();
        if(Cusername==""){
            $("#Cusername_error").show();
            $("#Cusername_error").html("Plse Enter User Name");
            $("#Cusername_error").css("color","red");
            $("#cusername").focus();
            return false;
            
        }else{
            $("#Cusername_error").hide();
        }
    }
    


</script>