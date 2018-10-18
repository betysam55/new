<?php 
include '../services/connection.php';
session_start();
if(!isset($_SESSION['login_user']) && !isset($_SESSION['myrole'])){
  session_destroy();
header("location: ../services/login/logout.php");
} ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Infocell - Dashboard</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
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
            <!-- Begin Header -->
              <?php include('../modules/head_bar.php'); ?>
            <!-- End Header -->

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                        <?php include('../modules/side_menu.php'); ?>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->

                <div class="content-inner">
                  <div class="container-fluid">
                      <!-- Begin Page Header-->
                      <div class="row">
                          <div class="page-header">
                            <div class="d-flex align-items-center">
                                <h2 class="page-header-title"></h2>
                                <div>
                                <div class="page-header-tools">
                                    
                                </div>
                                </div>
                            </div>
                          </div>
                      </div>

                              <div class="widget widget-09 has-shadow">
                                  <!-- Begin Widget Header -->
                                  <div class="widget-header d-flex align-items-center">
                                      <h2></h2>
                                      <div class="widget-options">
                                         
                                      </div>
                                  </div>
                                  <!-- End Widget Header -->
                                  <!-- Begin Widget Body -->
                                  <div class="widget-body">
                                      <div class="row">
                                          <div class="">
                                              <div>
                                                  <div class="">
                                                    <div class="text-center">
                                                    <img src="../assets/img/3.jpg" class="img-fluid" alt="Responsive image">
                                                    <h1 class="display-4" >Welcome to Infocell Technologies</h1>
                                                    <p class="lead">Serving Information Simply</p>
                                                    <hr class="my-4">
                                                    <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Widget 09 -->
                          </div>

                    <!-- End Container -->

                    <!-- Begin Page Footer-->
                      <?php include('../modules/footer.php'); ?>
                    <!-- End Page Footer -->

                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>


        <!-- Begin Vendor Js -->
      <?php include('../modules/footer_resources.php'); ?>
        <!-- End Page Snippets -->
    </body>
</html>
