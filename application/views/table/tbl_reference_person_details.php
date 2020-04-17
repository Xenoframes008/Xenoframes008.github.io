<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Reference Person Details  </h3>
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
                                <td>

        <?= anchor("admin/referens_document/$show->id", 'Details', array('class' => 'btn btn-primary')) ?>
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
