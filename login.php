<!DOCTYPE html>
<style>
   .row{
   padding-left: 300px;
   padding-right: 300px;
   padding-top: 30px;
   }
   .bggradient{
   background: radial-gradient(ellipse at center, rgba(50,157,207,1) 0%, rgba(0, 0, 0, 0.51) 100%);
   } 
</style>
<html lang="en">
   <?php $root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
      include($root."/config/config.php"); ?>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Lato:350,700" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/sweetalert.css" rel="stylesheet"/>
      <link  rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
      <script src="<?php echo base_url(); ?>/assets/js/angular.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/angular-route.min.js"></script>
      <script src="<?php echo base_url(); ?>/config/app.js"></script>
      <script src="<?php echo base_url(); ?>/controllers/LoginController.js"></script>
      <script src="<?php echo base_url(); ?>/controllers/globalcontrollers.js"></script>
      <script src="assets/js/angular-route.min.js" type="text/javascript"></script>
      <script src="assets/js/jquery-2.1.1.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>/assets/js/ngStorage.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/js/sweetalert.min.js"></script>  
      <meta charset="utf-8">
     <!--  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>Login</title>
      <!-- Bootstrap core CSS -->
      <link  rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/front-style.css">
   </head>
   <body>
      <div class="bggradient">
         <div class="container login-page">
            <div class="row">
               <div class="panel panel-default">
                  <div><a href="http://localhost/nes/index.php"><img src="images/am_logo.png" alt="logo"></a></div>
                  <div class = "panel-body">
                     <div ng-app='nesLogin' ng-controller='loginCtrl'>
                        <form class="form-signin" >
                           <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
                        <form class="form-horizontal col-md-offset-3 col-md-5">
                           <div class="form-group">
                              <h2 class="">Login</h2>
                              <label for="inputusername" class="sr-only">Email address</label>
                              <input type="text" id="inputusername" ng-model="loginteacher.username" class="form-control" placeholder="Username" required autofocus>
                              <label for="inputPassword" class="sr-only">Password</label>
                              <input type="password" id="inputPassword" class="form-control" ng-model="loginteacher.password"  placeholder="Password" required>
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox" value="remember-me"> Remember me
                                 </label>
                              </div>
                              <button class="btn btn-lg btn-primary " ng-click="login(loginteacher)" type="submit">Sign in</button><br>
                              <span>{{responseMessage}}</span>
                              <span>{{stname}}</span><br>
                              <div style="text-align:center">
                                 <a>forgot your password?</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>