<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 8:36 AM
 */

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin </title>
    <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>" sizes="32x32">
    <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>" sizes="192x192">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/morris.js/morris.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/jvectormap/jquery-jvectormap.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(URL('master')); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>D</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><!-- NUMBER OF NOTI --></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have <!-- NUMBER OF NOTI --> new notifications</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i><!-- NOTIFICATION -->
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i><!-- NOTIFICATION -->
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i><!-- NOTIFICATION -->
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo e(asset('dist/img/anonymous.jpg')); ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo e(asset('dist/img//anonymous.jpg')); ?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?>

                                    <small>Maximum Authority</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a class="btn btn-info" style="text-align: center; margin: 0vh 8vh;" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
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
                    <img src="<?php echo e(asset('dist/img/anonymous.jpg')); ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></p>
                </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
              </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">LIST</li>
                <!-- USER -->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>USER</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(url('master/data-user')); ?>"><i class="fa fa-circle-o"></i>ALL USER</a></li>
                        <li><a href="<?php echo e(url('master/data-user-request')); ?>"><i class="fa fa-circle-o"></i>USER REQUEST</a></li>
                    </ul>
                </li>
                <!-- ALERT -->
                <li>
                    <a href="<?php echo e(url('master/data-alert')); ?>">
                        <i class="glyphicon glyphicon-heart-empty"></i><span>ALERT</span>
                    </a>
                </li>
                <!-- STORY -->
                <li>
                    <a href="<?php echo e(url('master/data-story')); ?>">
                        <i class="fa fa-envelope"></i><span>STORY</span>
                    </a>
                </li>
                <!-- EVENT  -->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>EVENT</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(url('master/data-create-event')); ?>"><i class="fa fa-circle-o"></i>CREATE EVENT</a></li>
                        <li><a href="<?php echo e(url('master/data-event')); ?>"><i class="fa fa-circle-o"></i>EVENT LIST</a></li>
                    </ul>
                </li>

                <!-- CAMPAIGN -->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>CAMPAIGN</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(url('master/data-create-campaign')); ?>"><i class="fa fa-circle-o"></i>CREATE CAMPAIGN</a></li>
                        <li><a href="<?php echo e(url('master/data-campaign')); ?>"><i class="fa fa-circle-o"></i>CAMPAIGN LIST</a></li>
                    </ul>
                </li>
                <!-- VOLUNTEER  -->
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>VOLUNTEER</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo e(url('master/data-volunteer-request')); ?>"><i class="fa fa-circle-o"></i>VOLUNTEER REQUEST</a></li>
                        <li><a href="<?php echo e(url('master/data-volunteer-list')); ?>"><i class="fa fa-circle-o"></i>VOLUNTEER LIST</a></li>
                    </ul>
                </li>
                <!-- DONATE -->
                <li>
                    <a href="<?php echo e(url('master/data-donate')); ?>">
                        <i class="fa fa-envelope"></i><span>DONATE</span>
                    </a>
                </li>
                <!-- REPORT -->
                <li>
                    <a href="<?php echo e(url('master/data-report')); ?>">
                        <i class="fa fa-envelope"></i><span>REPORT</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </section>
    </div>
    </section>
</div>

<!-- jQuery 3 -->
<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo e(asset('bower_components/raphael/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/morris.js/morris.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('bower_components/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
</body>
</html>