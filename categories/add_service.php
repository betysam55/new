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
        <title>Infocell - Contacts</title>
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
                <!-- Begin Content -->
                    <div class="content-inner">
                      <div class="container-fluid">
                          <!-- Begin Page Header-->
                          <div class="row">
                              <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title">Services</h2>
                                    <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-danger" href="service.php?id=<?php echo $_GET['id']; ?>">Cancel</a>
                                    </div>
                                    
                                    </div>
                                </div>
                              </div>
                          </div>
                          <!-- End Page Header -->
                          <!-- Begin Row -->
                            <div class="row flex-row">
                                <div class="col-xl-12">
                                        <!-- Sorting -->
                                        <div class="widget has-shadow">
                                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                                <h4>Add Service</h4>
                                            </div>
                                            <div class="widget-body">
                                                <form action="../services/categories/add_service.php?id=<?php $id=$_GET['id'];echo$id; ?>" method="POST">
                                                      <?php include '../services/connection.php';
                                                       echo $_session['session'];
                                                       ?>
                                                       <?php $id=$_GET['id']; ?>
                                                        <div class="form-group col-md-6">
                                                          <label for="inputEmail4">Name</label>
                                                          <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
                                                        </div>
                                                      
                                                      <div class="form-group col-md-6">

                                                        <label for="inputAddress">Amharic Name</label>
                                                        <input type="text" name="amharic_name" class="form-control" id="inputAddress" placeholder="Amharic Name">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Description</label>
                                                        <textarea type="text" name="description" class="form-control" id="inputAddress2" placeholder="Description"></textarea>
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                          <label for="inputEmail4">Menu Key</label>
                                                          <input type="text" name="menu_key" class="form-control" id="inputEmail4" placeholder="Menu Key">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                          <label for="inputEmail4">Stop key</label>
                                                          <input type="text" name="stop_key" class="form-control" id="inputEmail4" placeholder="Stop Key">
                                                        </div>
                                                     <div class="form-group col-md-6">
                                                      <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                      <br><br>
                                                       </div>
                                                    </form>
                                            </div>

                                        </div>
                                </div>
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
