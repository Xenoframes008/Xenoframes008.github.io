
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">User Time Schedule Table </h3>
        </div><!-- /.box-header -->
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
<?php if ($assign = $this->session->flashdata('refer')) {
; ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success" style="margin-bottom: 15px;">

    <?= $assign ?>

                    </div>
                </div>
            </div>
<?php } ?>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>UserName</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Visit Date</th>
                        <th>Visit Time</th>
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
                                <td><?= $show->datepicker ?></td>
                                <td><?= $show->visittime ?></td>
                                <td>  
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="get_userid(<?= $show->id ?>)">Assign</button>
        <?= anchor("admin/delete_user_time_shedul/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this article')")) ?>
                                </td>

                            </tr>

    <?php }
} ?>

                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Assign To Admin User</h4>
            </div>
            <form method="post" action="<?php echo base_url('user/admin_user_refer'); ?>">

                <input type="hidden" name="time_shedul_id" id="userid" value="">

                <div class="modal-body" style="padding-bottom: 40px;">
                    <div class="col-md-3">
                        <p class="I_am_txt" style="font-size: 17px;text-align: right;">Select User</p>
                    </div>
                    <div class="col-md-9">
                        <select class="submit_pro_expected_price_checkbox" style="font-size: 17px;" name="admin_user_id">
<?php foreach ($result as $shows) { ?>
                                <option value="<?= $shows->id ?>"><?= $shows->username ?></option>
<?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer" class="btn btn-primary">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function get_userid(id) {
        //alert(id);
        $('#userid').val(id);
    }
</script>