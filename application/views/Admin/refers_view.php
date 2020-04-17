<?php  $records=$this->property_model->Reference_Person_profile();// echo '<pre>';print_r($records);?>
<section class="content">
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Reference Person Details</h3
                        </p>
                        <div>
                            <?php if (!is_null($records->image_path)) { ?>
                                <img  class="img-circle" src= " <?= $records->image_path ?>" alt="" style="width:30%" >
                                <h4> <?= $records->username ?></h4>
                                <h4> <?= $records->mobile ?></h4>
                                <h4> <?= $records->email ?></h4>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.box -->