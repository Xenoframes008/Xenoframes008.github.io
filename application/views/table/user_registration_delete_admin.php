<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">User Registration Table   </h3>
        </div><!-- /.box-header -->
        <?php if ($register = $this->session->flashdata('Delete')) {  ?>

            <div claas="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-danger" style="margin-bottom: 15px;">


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
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>User Email</th>
                        <th>User Type</th>
                        <th>Admin Use</th

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
                                    <!--                                 <a href="#" class="btn btn-danger">Delete</a>-->
        <?= anchor("admin/delete_user/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this article')")) ?>
                                </td>


                            </tr>

    <?php }
} ?>


                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>