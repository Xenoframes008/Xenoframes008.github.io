<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Today's  Registration User  </h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>User Email</th>
                        <th>User Type</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (count($records)) $i=1;{ ?>
                    <?php foreach ($records as $show) {  ?> 
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $show->username ?></td>
                            <td><?= $show->mobile ?></td>
                            <td><?= $show->email ?></td>
                            <td><?= $show->user_type ?>

                            </td>


                        </tr>

                    <?php } } ?>


                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>