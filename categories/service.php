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
        <title>Infocell - Categories</title>
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
                                <h2 class="page-header-title">Services</h2>
                                <div>
                                <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_service_number_to_category.php?id=<?php echo$_GET['id']; ?>">Add Service Number</a>
                                    <a class="btn btn-gradient-01" href="add_service.php?id=<?php echo$_GET['id']; ?>">Add Services</a>
                                </div>
                                </div>
                            </div>
                          </div>
                      </div>
                      <!-- Begin Row -->
                      <div class="row flex-row">
                        <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>List of Short Code Numbers</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Access Code</th>
                                                        <th>Payment Status</th>
                                                        <th>Price</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                              <tbody>
                                                      
                                                        <?php 
                                                    include '../services/connection.php';
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', '1');
                                                    $id=$_GET['id'];
                                                    $sql="SELECT * FROM `category_config` WHERE category_id=$id";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $access_code_id=$row['access_code_id'];
                                                            $sql1="SELECT * FROM `short_code` WHERE id=$access_code_id";
                                                            $result1=mysql_query($sql1);
                                                            $row1 =mysql_fetch_assoc($result1);  
                                                     ?>
                                                    <tr>
                                                        <td><?php print($i+1); ?></td>
                                                        <td><?php print($row1['access_code']); ?></td>
                                                        <td><?php print($row1['payment_method']); ?></td>
                                                        <td><?php print($row1['price']); ?></td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>List of Services</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Amharic Name</th>
                                                        <th>Description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                              <tbody>
                                                    <tr>
                                                  <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', '1');
                                                    $id=$_GET['id'];
                                                    $sql="SELECT * FROM `services` WHERE category_id=$id";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                          
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);  
                                                    ?><tr>
                                                        <td><?php echo $i+1; ?></td>
                                                        <td><?php echo$row['name']; ?></td>
                                                        <td><?php print($row['amharic_name']); ?></td>
                                                        <td><?php print($row['description']); ?></td>
                                                        <td class="td-actions">
                                                            <a href="#"><i class="la la-edit edit"></i></a>
                                                            <a href="#"><i class="la la-close delete"></i></a>
                                                        </td>
                                                      </tr>
                                                        <?php }?>
                                                    

                                                </tbody>
                                            </table>
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
