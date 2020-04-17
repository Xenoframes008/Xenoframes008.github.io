<?php $user = $this->login_model->get_user_details(); ?>
<head>
    <title>view appointment details</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/style.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css"/>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#datepicker").datepicker({
                minDate: 0,
                dateFormat: 'yy-mm-dd'
            });

        });
    </script>
</head>
<body class="register-page">
    <div class="register-box">


        <div class="register-box-body">
            <p class="login-box-msg text-blue" ><b>Submit your visit time Schedule</b></p>
              
            <?php $id=$this->uri->segment(3);
                    $user_id=$this->uri->segment(4);
            ?>
            <form action="<?php echo base_url('home/time_shedul'); ?>" method="post">
                <div class="form-group has-feedback">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="username" value="<?php echo set_value('username'); ?>"/>
                    <div><?php echo form_error('username', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1"> Mobile Number</label>
                    <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="<?php echo set_value('mobile'); ?>"/>
                    <div><?php echo form_error('mobile', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1"> Email</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>"/>
                    <div><?php echo form_error('email', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Visit Date</label>
                    <input type="text" class="form-control" id="datepicker" placeholder="Pickup Date" name="datepicker" />
                    <div><?php echo form_error('datepicker', "<p class='text-danger'>", "</p>"); ?></div>
  <!--            <input type="text" id="datepicker" placeholder="Pickup Date" name="datepicker"/>-->
                </div>
                <div class="form-group has-feedback">
                    <label for="exampleInputPassword1">Select Time</label>
                    <select class="form-control" name='visittime'>
                        <option>select time must</option>
                        <option>9:00AM </option>
                        <option>9:30AM </option>
                        <option>10:00AM</option>
                        <option>10:30AM</option>
                        <option>11:00AM</option>
                        <option>11:30AM</option>
                        <option>12:00PM</option>
                        <option>12:30PM</option>
                        <option>01:00PM</option>
                        <option>02:30PM</option>
                        <option>03:00PM</option>
                        <option>03:30PM</option>
                        <option>04:00PM</option>
                        <option>04:30PM</option>
                        <option>05:00PM</option>
                        <option>05:30PM</option>
                        <option>06:00PM</option>
                        <option>06:30PM</option>
                        <option>07:00PM</option>
                        <option>07:30PM</option>
                        <option>08:00PM</option>
                    </select>
                    <div><?php echo form_error('visittime', "<p class='text-danger'>", "</p>"); ?></div>
                </div>
                <div><input type="hidden" name="property_id" id="id" value="<?php echo $id ?>" /></div>
                <div><input type="hidden" name="propert_woner_id" id="id" value="<?php echo $user_id ?>" /></div>
                <div class="row"> 
                    <div class="col-xs-8">    
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Please Check Details 
                            </label>
                        </div>                        
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div><!-- /.col -->
                </div>
            </form>        
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</body>