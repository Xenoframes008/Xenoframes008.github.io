<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Admin User Table   </h3>
        </div><!-- /.box-header -->success
        <?php if ($register = $this->session->flashdata('Delete')) {
; ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-danger" style="margin-bottom: 15px;">

    <?= $register ?>

                    </div>
                </div>
            </div>
        <?php } ?>
        
<?php if ($update = $this->session->flashdata('success')) {
; ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success" style="margin-bottom: 15px;">

    <?= $update ?>

                    </div>
                </div>
            </div>
<?php } ?>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>User Email</th>
                        <th>User Type</th>
                        <th>Passworld</th>
                        <th>Admin Use</th>
                    </tr>
                </thead>
                <tbody>
<?php if (count($records)) {
    $i = 1; ?>
    <?php foreach ($records as $show) { ?> 
                            <tr>
                                <td><?= $i++ ?> </td>
                                <td><?= $show->username ?></td>
                                <td><?= $show->mobile ?></td>
                                <td><?= $show->email ?></td>
                                <td><?= $show->user_type ?></td>
                                <td><?= $show->password ?></td>
                                <td>
        <?= anchor("admin_dashbord/admin_update/$show->id", 'Update', array('class' => 'btn btn-primary', 'onclick' => "return confirm('Do you want update this user')")) ?>
                                    <button type="button" class="btn btn-success btn-primary" data-toggle="modal" data-target="#myModal" onclick="getuseid(<?= $show->id ?>)">Open Modal</button>
        <?= anchor("admin/delete_admin_user/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this user')")) ?>

                                </td>    

                            </tr>

    <?php }
} ?>

                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
         <div class="modal-body">
                <form method="post" action="<?php echo base_url('user/admin_user_feedback'); ?>">
                    <div class="form-group">
                      
                        <label>Feedback About </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="feedback"></textarea>
                        <input type="hidden" name="admin_user_id" id="userid" value="">
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
    </div>

  </div>
    <script>
    function getuseid(id){
        //alert('hello');
        $('#userid').val(id);
    }
    </script>