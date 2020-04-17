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
                        <th>Company Name</th>
                        <th>Ongoing Project</th>
                        <th>Completed Project</th>
                        <th>Director Name</th>
                        <th>Director Mobile</th>
                        <th>Director Email</th>
                        <th>Contact Person </th>
                        <th>Contact Person Mobile</th>
                        <th>Contact Person Email</th>
                        <th>Admin Use</th

                    </tr>
                </thead>
                <tbody>
                    <?php if (count($records)) {
                        $i = 1; ?>
    <?php foreach ($records as $show) { ?> 
                            <tr>
                                <td><?= $i++ ?> </td>
                                <td><?= $show->Company_name ?></td>
             	                <td><?= $show->Ongoing_Project ?></td>
                                <td><?= $show->Completed_Project ?></td>
                                <td><?= $show->director_name ?></td>
                                <td><?= $show->director_mobile ?></td>
                                <td><?= $show->director_email ?></td>
                                <td><?= $show->Contact_Person ?></td>
                                <td><?= $show->	Contact_Person_mobile ?></td>
                                <td><?= $show->Contact_Person_Email ?></td>

                                <td>
                                    <!--                                 <a href="#" class="btn btn-danger">Delete</a>-->
        <?= anchor("admin/builder_delete_user/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this record')")) ?>
                                </td>


                            </tr>

    <?php }
} ?>


                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>