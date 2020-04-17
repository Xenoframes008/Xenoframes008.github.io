<?php $shows=$this->user_model->admin_post_refer_tbl();  
//echo '<pre>';
//print_r($result); exit;?>
<section class="content">
    <div class="box">
         <div class="box-header">
                <h3 class="box-title">Admin Assign</h3>
            </div><!-- /.box-header -->
    <?php if ($register = $this->session->flashdata('success')) {
; ?>

                        <div claas="row">
                            <div class="col-lg-12">
                                <div class="alert alert-dismissible alert-danger" style="margin-bottom: 15px;">


    <?= $register ?>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
        <div class="box-body">
         <table id="example2" class="table table-bordered table-hover" border="2">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>User Mobile</th>
                            <th>User Email</th>
                            <th>Date</th>
                            <th>Visit Time</th>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($result)) {
                            $i = 1; ?>
    <?php foreach ($result as $show) { 
        
       // foreach ($shows as $sho) {
        ?> 
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $show['username'] ?></td>
                                    <td><?= $show['mobile'] ?></td>
                                    <td><?= $show['email'] ?></td>
                                    <td><?= $show['datepicker'] ?></td>
                                    <td><?= $show['visittime'] ?></td>
                                
                                    <td>      
                                         <?php   foreach ($shows as $sho) { ?> 
                              <!--<button type="button" class="btn btn-info btn-small" data-toggle="modal" data-target="#myModal">Update</button>-->
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="get_userid(<?= $sho['assign_id'] ?>,<?= $sho['referens_id'] ?>,<?= $sho['post_referns_id'] ?>,<?= $show['propert_woner_id'] ?>)">Assign</button>
                           <?php break; }  ?>    
   <a href="<?php echo base_url("user/property_details/");?><?= $show['property_id'] ?>" class="btn btn-success ">Property </a>
                                    </td> 
    
                                </tr>

    <?php } }  ?>
                    </tbody>

                </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('user/notification_admin_user'); ?>">
                    <div class="form-group">
                        <input type="hidden" name="assign_id" id="userid" value="">
                        <input type="hidden" name="referens_id" id="referid" value="">
                        <input type="hidden" name="post_person_id" id="ppid" value="">
                        <label>Feedback About </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="feedback"></textarea>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>>
            </form>
        </div>

    </div>
</div>
<script>
<script>
    function get_userid(id, id1, id3, id4) {
        //  alert(id,id1);
        $('#userid').val(id);
        $('#referid').val(id1);
        $('#ppid').val(id3);
          $('#pwid').val(id4);

    }
</script>