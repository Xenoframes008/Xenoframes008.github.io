
    <head>
<link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/stylezoom.css"> 
 <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/jquery-3.1.1.min.js"></script>
 <script type = 'text/javascript' src = "<?php echo base_url('js');
?>/jqzoom.js"></script>
  </head>
  <?php   
   $id = $this->uri->segment(3);
   
  $document=$this->property_model->document($id);?>
<?php  
 $id = $this->uri->segment(3);
 $result=$this->property_model->Reference_Person_profile($id);// echo '<pre>';print_r($records);?>
<section class="content">
    <!--<div class="container">-->
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Reference Person Details </h3
                        </p>
                        <div>
                            <?php if (!is_null($result->image_path)) { ?>
                                <img  class="img-circle" src= " <?= $result->image_path ?>" alt="" style="width:30%" >
                                <h4> <?= $result->username ?></h4>
                                <h4> <?= $result->mobile ?></h4>
                                <h4> <?= $result->email ?></h4>
                            <?php } ?>

                        </div>
                          <!--<a href="#" class="btn btn-success">Primary</a>-->
                    </div>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Documents</button>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal" onclick="get_userid(<?= $result->id ?>)">Assign</button>

                </div>
                <div class="footer">
                    
                  
                </div>
                
            </div>
        </div>
    <!--</div>-->
</section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reference Documents </h4>
      </div>
      <!--<div class="modal-body">-->
      
        
        <div class="bzoom_wrap">
        <ul id="bzoom">
             <?php // if (!is_null($document->name)) { ?>
<!--            <li>
                <img class="bzoom_thumb_image" src="<?= $document->name ?>" title="first img" />
                <img class="bzoom_big_image" src="<?= $document->name ?>"/>
            </li>-->
        <!--<img src= " <?= $document->name ?>" alt="">-->

    <?php // } ?>
         <?php if (count($document)) { ?>
                                        <?php foreach ($document as $doc) { ?>    
 <li>
                <img class="bzoom_thumb_image" src="<?= $doc['name'] ?>" title="first img" />
                <img class="bzoom_big_image" src="<?= $doc['name'] ?>" />
                </li>


                                <?php }
                            } ?>
<!--            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=201" title="first img" />
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=201"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=203"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=203"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=212"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=212"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=220"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=220"/>
            </li>
            <li>
                <img class="bzoom_thumb_image" src="https://unsplash.it/375/500?image=223"/>
                <img class="bzoom_big_image" src="https://unsplash.it/750/1000?image=223"/>
            </li>-->
        </ul>
    </div>
        
      <!--</div>-->
<!--      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
  <div id="Modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('user/notification_admin'); ?>">
                    <div class="form-group">
                        
                        <input type="hidden" name="referens_id" id="referid" value="">
                       
                        <label>Feedback About </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="feedback"></textarea>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>>
            </form>
        </div>

    </div>
</div>
<script>
    function get_userid( id1 ) {
        //  alert(id,id1);
       
        $('#referid').val(id1);
        

    }
</script>
<script type="text/javascript">
$("#bzoom").zoom({
	zoom_area_width: 300,
    autoplay_interval :3000,
    small_thumbs : 4,
    autoplay : false
});
</script>

<!-- /.box -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Post Refers Table </h3>
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


  