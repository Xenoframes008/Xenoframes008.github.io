<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">User Registration Table   </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>User Email</th>
                        <th>User Type</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (count($records))  ?>
                    <?php foreach ($records as $show) { ?> 
                        <tr>

                            <td><?= $show->id ?></td>
                            <td><?= $show->username ?></td>
                            <td><?= $show->mobile ?></td>
                            <td><?= $show->email ?></td>
                            <td><?= $show->user_type ?>

                            </td>


                        </tr>

                    <?php } ?>


                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>