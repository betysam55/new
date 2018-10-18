<?php 
include '../services/connection.php';
session_start();
if(isset($_SESSION['login_user'])){
header("location: ../dashboard/index.php");
} ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Infocell - Login</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->

        <!--  Header Resources -->
          <?php include('../modules/header_resources.php'); ?>
        <!-- End Header Resources -->

    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
         <?php include ('../modules/preloader.php');?>
        <!-- End Preloader -->
        <div class="page">
          <div class="row flex-row h-100 bg-white">
              <!-- Begin Left Content -->
              <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                  <div class="elisyam-bg background-01">
                      <div class="elisyam-overlay overlay-01"></div>
                      <div class="authentication-col-content mx-auto text-center">
                          <h1 class="gradient-text-01">
                              Welcome To infocell Technologies!
                          </h1>
                          <span class="description">
                              Serving Inforamtion Simply 
                          </span>
                      </div>
                  </div>
              </div>
              <!-- End Left Content -->
              <!-- Begin Right Content -->
              <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                  <!-- Begin Form -->
                  <div class="authentication-form mx-auto">
                      <div class="logo-centered">
                          <a href="../home">
                              <img src="../assets/img/logo.png" alt="logo">
                          </a>
                      </div>
                      <h3>Sign In To Infocell</h3>
                      <form action="../services/login/login.php" method="POST">
                            <div class="group material-input">
                                <input type="email" name="email" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Email</label>
                            </div>
                            <div class="group material-input">
                                <input type="password" name="password" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Password</label>
                            </div>
                           
                      <div class="row">
                          <div class="col text-left">
                              <!-- <div class="styled-checkbox">
                                  <input type="checkbox" name="remeberme" id="remeber">
                                  <label for="remeber">Remember me</label>
                              </div> -->
                          </div>
                          <!-- <div class="col text-right">
                              <a href="pages-forgot-password.html">Forgot Password ?</a>
                          </div> -->
                      </div>
                      <div class="sign-btn text-center">
                          <button class="btn btn-lg btn-gradient-01" type="submit">Sign in</button> 
                      </div>
                      <!-- <div class="register">
                          Don't have an account?
                          <br>
                          <a href="pages-register.html">Create an account</a>
                      </div> -->
                       </form>
                  </div>
                  <!-- End Form -->
              </div>
              <!-- End Right Content -->
          </div>
        </div>


        <!-- Begin Vendor Js -->
      <?php include('../modules/footer_resources.php'); ?>
        <!-- End Page Snippets -->
    </body>
</html>
