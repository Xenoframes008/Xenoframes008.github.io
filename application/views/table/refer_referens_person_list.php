<!-- /.box -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Post Refers Table  </h3>
        </div><!-- /.box-header -->

        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>UserName </th>
                        <th> Mobile</th>
                        <th>Email</th>
                        <th> Occupation</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if (count($records) > 0) {
                        $i = 1;
                        ?>
    <?php foreach ($records as $show) { ?> 
                            <tr>

                                <td><?= $i++ ?> </td>
                                <td><?= $show['username'] ?></td>
                                <td><?= $show['mobile'] ?></td>
                                <td><?= $show['email'] ?></td>
                                <td><?= $show['Occupation'] ?></td>

                                <td>
        <?= anchor("user/refer_person_table", 'Status', array('class' => 'btn btn-primary')) ?>

                                </td>
                            </tr>

                        <?php }
                    } else {
                        ?>
                        <tr><td>No record found </td></tr>
<?php } ?>

                </tbody>


            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section>


  