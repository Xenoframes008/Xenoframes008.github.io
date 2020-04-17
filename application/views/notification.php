
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
                        <?php if (count($result) > 0) { ?>
                            <?php foreach ($result as $show) { ?>
                                <div>
                                    <ul>
                                        <li> <?= $show['feedback']; ?></li>
                                    </ul>
                                </div>
                            <?php } ?>
                        <?php } ?>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.box -->