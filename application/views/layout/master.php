 
<?php $cou = $this->user_model->count_ntf();
//echo '<pre>';
//print_r($cou);
//echo sizeof($cou); 
//exit; ?>
<?php $notifiy = $this->user_model->register_no_of(); ?>
<?php $user = $this->login_model->get_user_details(); ?>
<?php
$result = $this->user_model->notification_all();
//echo '<pre>';
//print_r($result);
//exit;           
$q = array_reverse($result); ?>
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

    </head>
    <body class="skin-blue">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo"><b>IntellectsLinkup </b></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">

                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <li class="dropdown messages-menu" onclick="change_ntf()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <?php if (count($cou) > 0) { ?>
                                        <span id="refresh" class="label label-success" ><?php echo count($cou); ?></span>
<?php }else{
    
} ?> 
                                </a>

                                <ul class="dropdown-menu">

                                    <li class="header">You have <?php echo count($result); ?> messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
<?php if (count($q)) { ?>
    <?php foreach ($q as $show) { ?>

                                                    <li><!-- start message -->
                                                        <a href="<?php echo base_url('admin_dashbord/see_notification'); ?>">
                                                            <div class="pull-left">
                                                                <img src="<?= $show['image_path']; ?>" class="img-circle" alt="User Image"/>
                                                            </div>
                                                            <h4>

        <?= $show['username']; ?>(<?= $show['user_type']; ?>)
                                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                            </h4>
                                                            <p><?= $show['feedback']; ?></p>
                                                        </a>
                                                    </li><!-- end message -->
                                                <?php
                                                }
                                            }
                                            ?>

                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url('adminLTE'); ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url('adminLTE'); ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url('adminLTE'); ?>/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url('adminLTE'); ?>/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="<?php echo base_url('admin_dashbord/see_notification'); ?>">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class="dropdown notifications-menu" onclick="chang_ntf()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
<?php if (count($notifiy) > 0) { ?>
                                        <span id="notif" class="label label-danger"><?php echo count($notifiy); ?></span>
<?php } ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have <?php echo count($notifiy); ?> notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li>
                                                <a href="<?php echo base_url('admin_dashbord/tbl_todays_register_details'); ?>">
                                                    <i class="fa fa-users text-aqua"></i> <?php echo count($notifiy); ?> new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('admin_dashbord/tbl_todays_register_details'); ?>">
                                                    <i class="fa fa-users text-red"></i> <?php echo count($ref); ?>  new References members joined today
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('admin_dashbord/change_user_name'); ?>">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks: style can be found in dropdown.less -->
                            <!--                            <li class="dropdown tasks-menu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fa fa-flag-o"></i>
                                                                <span class="label label-danger">9</span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li class="header">You have 9 tasks</li>
                                                                <li>
                                                                     inner menu: contains the actual data 
                                                                    <ul class="menu">
                                                                        <li> Task item 
                                                                            <a href="#">
                                                                                <h3>
                                                                                    Design some buttons
                                                                                    <small class="pull-right">20%</small>
                                                                                </h3>
                                                                                <div class="progress xs">
                                                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                        <span class="sr-only">20% Complete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li> end task item 
                                                                        <li> Task item 
                                                                            <a href="#">
                                                                                <h3>
                                                                                    Create a nice theme
                                                                                    <small class="pull-right">40%</small>
                                                                                </h3>
                                                                                <div class="progress xs">
                                                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                        <span class="sr-only">40% Complete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li> end task item 
                                                                        <li> Task item 
                                                                            <a href="#">
                                                                                <h3>
                                                                                    Some task I need to do
                                                                                    <small class="pull-right">60%</small>
                                                                                </h3>
                                                                                <div class="progress xs">
                                                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                        <span class="sr-only">60% Complete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li> end task item 
                                                                        <li> Task item 
                                                                            <a href="#">
                                                                                <h3>
                                                                                    Make beautiful transitions
                                                                                    <small class="pull-right">80%</small>
                                                                                </h3>
                                                                                <div class="progress xs">
                                                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                                                        <span class="sr-only">80% Complete</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li> end task item 
                                                                    </ul>
                                                                </li>
                                                                <li class="footer">
                                                                    <a href="#">View all tasks</a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= $user['image_path']; ?>" class="user-image" alt="User Image"/>
                                    <span class="hidden-xs"><?= $user['username'] ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                     <a href="<?php echo base_url('admin_dashbord/upload_profile_image'); ?>"> 

                                         <img src="<?= $user['image_path']; ?>" class="img-circle" alt="User Image"  style="width:100px; height: 100px;"/></a>
                                        <p>
                                            <a href="<?php echo base_url('admin_dashbord/upload_profile_image'); ?>" class="btn btn-default btn-flat">Update Your profile</a>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="<?php echo base_url('admin_dashbord/change_password'); ?>">Change password</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="<?php echo base_url('home/post_refer'); ?>">Refer Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('home/user_register_update'); ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= $user['image_path']; ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> <?= $user['username']; ?> </p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>

                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>

                        <!--             <li class="treeview">
                                      <a href="#">
                                        <i class="fa fa-dashboard"></i> <span> User Delete Account  </span>
                                        <i class="fa fa-angle-left pull-right"></i>
                                      </a>
                                      <ul class="treeview-menu">
                                          <li class="active"><a href="<?php // echo base_url('Osumare_admin_dashbord/admin_mangement_table');    ?>"><i class="fa fa-circle-o"></i>Admin User</a></li>
                                          <li class="active"><a href="<?php // echo base_url('Osumare_admin_dashbord/delete_register_table');    ?>"><i class="fa fa-circle-o"></i>User Registration</a></li>
                                         
                                      </ul>
                                    </li> -->

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-edit"></i> <span>Forms  </span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="<?php echo base_url('admin_dashbord/imageupload'); ?>"><i class="fa fa-circle-o"></i> Upload image table</a></li>
                                    <li class="active"><a href="<?php echo base_url('user#step1'); ?>"><i class="fa fa-circle-o"></i>Submit Your property</a></li>
                                    <li class="active"><a href="<?php echo base_url('User/submit_requirment_user'); ?>"><i class="fa fa-circle-o"></i>Submit Your Requirment</a></li>
                                    <li class="active"><a href="<?php echo base_url('home/time_shedul'); ?>"><i class="fa fa-circle-o"></i>Time schedule</a></li>
                                    <li><a href="<?php echo base_url('user_dashbord/bank_details'); ?>"><i class="fa fa-circle-o"></i>Add your bank details</a></li>
                                    <li><a href="<?php echo base_url('home/post_refer'); ?>"><i class="fa fa-circle-o"></i>Post Reference Person</a></li>
                                    <li><a href="<?php echo base_url('home/user_register'); ?>"><i class="fa fa-circle-o"></i>User Registration</a></li>
                                    <li><a href="<?php echo base_url('home/builder_registr'); ?>"><i class="fa fa-circle-o"></i>Builder Registration</a></li>-->
                                </ul>
                            </li>  
<?php $user_type=$this->session->userdata('user_type');
 //echo $user_type;
    if($user_type=="admin"){
?>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-users"></i> <span> User Management  </span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="<?php echo base_url('login/admin_sign_up'); ?>"><i class="fa fa-circle-o"></i> Create Account</a></li>
                  <!--                  <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Marketing Account</a></li>-->

                                </ul>
                            </li> 
                            <li class="treeview">
                                <a href="<?php echo base_url('user/property'); ?>">
                                    <i class="fa fa-home"></i> <span>Property Delete </span></a>
                            </li>

                            <li class="treeview">
                                <a href="<?php echo base_url('user/property1'); ?>">
                                    <i class="fa fa-table"></i> <span>Property</span></a>
                            </li>
                            <li class="treeview" >

                                <a href="<?php echo base_url('Osumare_admin_dashbord/admin_mangement_table'); ?>">
                                    <i class="fa fa-list"></i> <span> Admin User</span></a>
                            </li>
                            <li class="treeview" >
                                <a href="<?php echo base_url('Osumare_admin_dashbord/delete_register_table'); ?>">
                                    <i class="fa fa-list"></i> <span>User Registration</span></a>
                            </li>
                            <li class="treeview" >
                                <a href="<?php echo base_url('Osumare_admin_dashbord/Builder_register_table'); ?>">
                                    <i class="fa fa-list"></i> <span> Builder Details </span></a>
                            </li>
                            <li class="treeview" >
                                <a href="<?php echo base_url('Osumare_admin_dashbord/Reference_Person_Details'); ?>">
                                    <i class="fa fa-list"></i> <span>Reference Person Details</span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('Osumare_admin_dashbord/post_referenc_table'); ?>">
                                    <i class="fa fa-user    "></i> <span>Post Reference</span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('Osumare_admin_dashbord/time_shedule_table'); ?>">
                                    <i class="fa fa-calendar"></i> <span>User Time Schedule</span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('Osumare_admin_dashbord/bank_detail_table'); ?>">
                                    <i class="fa fa-bank"></i> <span> User Account Details</span></a>
                            </li>

                            <li class="treeview">
                                <a href="<?php echo base_url('Osumare_admin_dashbord/post_referenc_table'); ?>">
                                    <i class="fa fa-user    "></i> <span>Post Reference</span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('Osumare_admin_dashbord/time_shedule_table'); ?>">
                                    <i class="fa fa-calendar"></i> <span>User Time Schedule</span></a>
                            </li>
    <?php }elseif($user_type=="Reference"){?>
                            <li class="treeview">
                                <a href="<?php echo base_url('home/post_refer'); ?>">
                                    <i class="fa fa-users"></i> <span> Refer Person's </span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('user/refer_person_table'); ?>">
                                    <i class="fa fa-table "></i> <span>  Refer By Me </span></a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bank"></i> <span> Add Bank Detail </span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>

                                        <a href="<?php echo base_url('user_dashbord/bank_details'); ?>"><i class="fa fa-circle-o"></i>Add your bank details</a></li>
                                    <li>

                                        <a href="<?php echo base_url('user_dashbord/update_bank_details'); ?>"><i class="fa fa-circle-o"></i>Update your bank details</a></li>

                                </ul>
                            </li> 
                          
    <?php } elseif ($user_type=="Builder") { ?>

                            <li class="treeview"><a href="<?php echo base_url('user#step1'); ?>">

                                    <i class="fa fa-edit"></i>Submit Your property</a>
                            </li>
                            
                            <li class="treeview"><a href="<?php echo base_url('home/update_builder_register'); ?>">

                                    <i class="fa fa-edit"></i>Update Builder Info</a>
                            </li>
                            
                            <li class="treeview">
                                <a href="<?php echo base_url('user/property1'); ?>">
                                    <i class="fa fa-table"></i> <span>Property</span></a>
                            </li>

    <?php }elseif ($user_type=="Seller_Buyer") { ?>
                            <li class="active"><a href="<?php echo base_url('user#step1'); ?>">

                                    <i class="fa fa-edit"></i>Submit Your property</a>
                            </li>
                             <li class="treeview">
                                <a href="<?php echo base_url('user/submit_requirment_home'); ?>">
                                    <i class="fa fa-edit"></i> <span>submit requirement</span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('user/property1'); ?>">
                                    <i class="fa fa-table"></i> <span>Property</span></a>
                            </li>
                            
    <?php }elseif ($user_type=="Sales_Manager") {  ?>
                       
                            <li class="treeview">
                                <a href="<?php echo base_url('User/admin_refer_person'); ?>">
                                    <i class="fa fa-list"></i> <span>Assign Time Schedule </span></a>
                            </li>
                            <li class="treeview">
                                <a href="<?php echo base_url('User/admin_post_refer_tbl'); ?>">
                                    <i class="fa fa-list"></i> <span>Assign Post Reference </span></a>
   
                            </li>
    <?php } ?>                           
                          
                    </ul>
                </section>

            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <!-- Main content -->
                <section class="content">

<?php $this->load->view($_view); ?>

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright  <a href="http://osumare.com" target="_blank">Osumare</a>.</strong> All its best for you.
            </footer>
        </div><!-- ./wrapper -->

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

                                 //alert('darshsn');
                                    $.ajax({
                                        type: 'post',
                                        url: "<?php echo base_url('User/update_ntf') ?>",
                                        success: function (response) {
                                             //alert(response);   
                                        }
                                    });
                                }
                                $(document).ready(function () {

                                    $(".notifications-menu").click(function () {
                                        $("#notif").hide();
                                    });
                                });
                                function chang_ntf() {

                                    alert("hello gavrav");
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

