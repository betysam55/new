<?php 
include '../services/connection.php';
session_start();
if(!isset($_SESSION['login_user'])){
header("location: ../login/index.php");
} ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Infocell - Users</title>
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
                                <h2 class="page-header-title">Profile</h2>
                                <div>
                                <!-- <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_roles.php">Add Roles</a>
                                </div> -->
                                </div>
                            </div>
                          </div>
                      </div>
                      <!-- Begin Row -->
                      <div class="row flex-row">
                        <div class="col-xl-12">
                               
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Personal information</h4>
                                    </div>
                                    <div class="widget-body">
                                       
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-12">
                                
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Password</h4>
                                    </div>
                                    <div class="widget-body">
                                      <?php if (isset($_SESSION['notification'])) {
                                       ?>
                                       <div class="alert alert-info alert-dissmissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                             <?php print($_SESSION['notification']) ?>

                                        </div>
                                      <?php } ?>
                                        <div class="col-lg-9">
                                          <form action="../services/users/password.php" method="POST">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span style="width: 90px;" class="input-group-addon addon-orange">Old</span>
                                                            <input name="old" type="password" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <div class="input-group">
                                                            <span style="width: 90px;" class="input-group-addon addon-orange">New</span>
                                                            <input name="new" type="password" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <div class="input-group">
                                                             <span style="width: 90px;" class="input-group-addon addon-orange">Confirm</span>
                                                            <input name="confirm" type="password" class="form-control">
                                                           
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <div class="input-group">
                                                          <span style="width: 120px;" ></span>
                                                            <button type="submit" class="btn btn-gradient-01 mr-1 mb-2">Change</button>
                                                        </div>
                                                    </div>
                                                    
                                                  </form>
                                                </div>
                                    </div>
                                </div>
                        </div>
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
