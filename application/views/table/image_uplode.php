<?php //print_r($records); ?> 


<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Post Reference Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover" border="2">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>image_path</th>
                    <tbody>
                        <?php if (count($records))  ?>
                        <?php foreach ($records as $show) { ?> 
                            <tr>


                                <td><?= $show->id ?></td>
                                <td><?= $show->name ?></td>




                            </tr>

                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>

                            <?php //$this->load->view($content);?>
                        </tr>
                    </tfoot>


                    </tr>
                    </thead>
                </table>

            </div><!-- /.box-body -->
        </div><!-- /.box -->

