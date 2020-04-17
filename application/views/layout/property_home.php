
<?php $cou = $this->user_model->count_ntf();?>
<?php $notifiy = $this->user_model->register_no_of(); ?>
<?php $user = $this->login_model->get_user_details(); ?>
<?php
$result = $this->user_model->notification_all();
$q = array_reverse($result);?>
<?php
$referns = $this->property_model->referens();
$ref = array_reverse($referns);
?>
<!DOCTYPE html>       
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('adminLTE'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="<?php echo base_url('adminLTE'); ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
    <!--    <link href="<?php //echo base_url('css');     ?>/css.css " rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url('adminLTE'); ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
    <!--    <link href="<?php echo base_url('adminLTE'); ?>/plugins/morris/morris.css" rel="stylesheet" type="text/css" />-->
        <!-- jvectormap -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="<?php echo base_url('adminLTE'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
 <link rel = "stylesheet" type = "text/css" 
              href = "<?php echo base_url('css'); ?>/css.css"> 
    </head>
    <body class="skin-blue">
        <?php include 'include/header1.php' ?>
         <section class="content">

<?php $this->load->view($_view); ?>

                </section><!-- /.content -->
 <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
                                $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('adminLTE'); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!--    <script src="<?php //echo base_url('adminLTE');     ?>/plugins/morris/morris.min.js" type="text/javascript"></script>
         Sparkline -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='<?php echo base_url('adminLTE'); ?>/plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('adminLTE'); ?>/dist/js/app.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url('adminLTE'); ?>/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--    <script src="<?php echo base_url('adminLTE'); ?>/dist/js/pages/dashboard.js" type="text/javascript"></script>-->

        <!-- AdminLTE for demo purposes -->
    <!--    <script src="<?php echo base_url('adminLTE'); ?>/dist/js/demo.js" type="text/javascript"></script>-->
        <script type="text/javascript">
                                $(document).ready(function () {
                                    setTimeout(function () {

                                        $("#refresh").load();
//                    location.reload();
                                    }, 2000);

                                });
                                $(function () {
                                    $("#example1").dataTable();
                                    $('#example2').dataTable({
                                        "bPaginate": true,
                                        "bLengthChange": false,
                                        "bFilter": false,
                                        "bSort": true,
                                        "bInfo": true,
                                        "bAutoWidth": false
                                    });

                                    setTimeout(function () {
                                        // location.reload();
                                    }, 5000);

                                });

                                function change_ntf() {

                                    //alert();
                                    $.ajax({
                                        type: 'post',
                                        url: "<?php echo base_url('User/update_ntf') ?>",
                                        success: function (response) {
                                            // alert(response);   
                                        }
                                    });
                                }
                                $(document).ready(function () {

                                    $(".notifications-menu").click(function () {
                                        $("#notif").hide();
                                    });
                                });
                                function chang_ntf() {

                                    //alert("hello gavrav");
                                    $.ajax({

                                        type: 'post',
                                        url: "<?php echo base_url('User/chang_ntf') ?>",
                                        success: function (response) {
                                            // alert('heee');
                                        }
                                    });
                                }
                                $(document).ready(function () {

                                    $(".messages-menu").click(function () {
                                        $("#refresh").hide();
                                    });
                                });
        </script>

    </body>
</html>

