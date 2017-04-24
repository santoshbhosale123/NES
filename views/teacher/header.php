<!DOCTYPE html>
<html lang="en">
<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NESB </title>
   <link  rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
   <link type="text/css" href="<?php echo base_url(); ?>/assets/css/custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>/assets/css/sweetalert.css" rel="stylesheet"/>
    <!-- <link href="<?php// echo base_url(); ?>/assets/css/daterangepicker.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>/assets/css/jquery.dataTables.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/build/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/autocomplete.css" rel="stylesheet">
     <!--   <link href="<?php //echo base_url(); ?>/assets/css/custom.min.css" rel="stylesheet"> -->
     <link href="<?php echo base_url(); ?>/assets/css/tablescss/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/angular-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/angular-datatables.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
   
  </head>
  <body class="nav-md" ng-app="app">
    <div class="container body" ng-controller="teacherbarctrl">
      <div class="main_container">
      <?php include('sidebar.php'); ?>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="" >
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                    <img src="<?php echo base_url(); ?>/assets/images/img.jpg" alt="">{{tname}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="#/myaccount"> My Account</a></li>
                   <!-- <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="javascript:;" ng-click="logout();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>