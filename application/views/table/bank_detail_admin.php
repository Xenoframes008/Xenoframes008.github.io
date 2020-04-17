<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bank Details Table</h3>
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
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover" border="2">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Bank User Name</th>
                            <th>Bank Name</th>
                            <th>Email</th>
                            <th> Account Number</th>
                            <th>Branch Name</th>
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
                                    <td><?= $show->bank_name ?></td>
                                    <td><?= $show->Account_Number ?></td>
                                    <td><?= $show->Branch_Name ?></td>
                                    <td><?= $show->ifsc_code ?></td>
                                    <td>       
        <?= anchor("admin_dashbord/view_refers_details/$show->user_id", 'Refer', array('class' => 'btn btn-primary')) ?>
        <?= anchor("admin/delete_bank_details/$show->id", 'Delete', array('class' => 'btn btn-danger', 'onclick' => "return confirm('Do you want delete this article')")) ?>

                                    </td>   
                                </tr>

    <?php }
} ?>
                    </tbody>
                    <tfoot>
                        <tr>

<?php //$this->load->view($content); ?>
                        </tr>
                    </tfoot>
                </table>

            </div><!-- /.box-body -->
        </div><!-- /.box -->

