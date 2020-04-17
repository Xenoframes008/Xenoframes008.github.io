
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Post Refers Table </h3>
        </div><!-- /.box-header -->
        <?php if ($register = $this->session->flashdata('notification')) {
; ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success" style="margin-bottom: 15px;">


    <?= $register ?>

                    </div>
                </div>
            </div>
<?php } ?>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr No</th>
    <!--                    <th>Post_person</th>-->
                        <th>UserName </th>
                        <th> Mobile</th>
                        <th>Email</th>
                        <th> Occupation</th>
                        <th>Update</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (count($records) > 0) {
                        $i = 1; ?>
    <?php foreach ($records as $show) { ?> 
                            <tr>
                                <td><?= $i++ ?> </td>
        <!--                            <td><?= $show['post_referns_id']; ?></td>-->
                                <td><?= $show['username'] ?></td>
                                <td><?= $show['mobile'] ?></td>
                                <td><?= $show['email'] ?></td>
                                <td><?= $show['Occupation'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="get_userid(<?= $show['assign_id'] ?>,<?= $show['referens_id'] ?>,<?= $show['post_referns_id'] ?>)">Assign</button>
                                </td>

                            </tr>

                        <?php }
                    } else { ?>
                        <tr><td>No record found </td></tr>
<?php } ?>

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
    function get_userid(id, id1, id3) {
        //  alert(id,id1);
        $('#userid').val(id);
        $('#referid').val(id1);
        $('#ppid').val(id3);

    }
</script>