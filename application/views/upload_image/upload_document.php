<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<?php //print_r($result) ?>
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
        <h4 class="modal-title">Upload Your Document(Like Adhar card,Pan Card)</h4>
      </div>
      <div class="modal-body">
         <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('imageupload/document'); ?>">        
<!--                        <div class="box-body">-->




                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1" style="margin-bottom: 15px;">
                                    <label for="inputEmail" class=" control-label">Upload Documents </label>


                                    <input type="file" name="userfile[]" size="20" multiple="multiple" >
                                    <div class="text-danger"><?php if (isset($upload_error)) echo $upload_error ?></div>


                                </div>
                            </div>


                            <div class="checkbox">
                                <div class="col-md-10 col-md-offset-1">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>  
                            </div>
<!--                        </div>-->
                        <!-- /.box-body -->

                       

                    
   
      <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
        </form>
    </div>
   </div>
  </div>
</div>