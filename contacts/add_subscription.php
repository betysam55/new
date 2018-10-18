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
                                    <h2 class="page-header-title">Subscribe</h2>
                                    <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-danger" href="contact_history.php?id=<?php $id=$_GET['id'];echo $id; ?>">Cancel</a>
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
                                                <h4>Subscribe</h4>
                                            </div>
                                            <div class="widget-body">
                                                <form action="../contacts/add_subscription_category.php?caegory=<?php echo $_GET['category']; ?>" method="GET">
                                                        <div class="form-group row mb-5">
                                                              <label class="col-lg-3 form-control-label">Select Category</label>
                                                              <div class="col-lg-9 select mb-3">
                                                                <input type="hidden" name="contact_id" value="<?php echo $_GET['id']; ?>">
                                                                  <select name="category" class="custom-select form-control">

                                                                      <?php 
                                                                          include '../services/connection.php';
                                                                          error_reporting(E_ALL);
                                                                          ini_set('display_errors', '1');
                                                                          print($_GET['id']);
                                                                          $sql="select * from categories";
                                                                          $result=mysql_query($sql);
                                                                          $number_of_rows=mysql_num_rows($result);
                                                                                
                                                                                 for($i=0;$i<$number_of_rows;$i++){
                                                                                  $row =mysql_fetch_assoc($result);  
                                                                           ?>
                                                                         <option value="<?php echo $row['id']; ?>"><?php echo $row['service_type']; ?></option>
                                                                       <?php }
                                                                       ?>
                                                                  </select>
                                                              </div> 
                                                      <button type="submit" class="btn btn-primary">Next</button>
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
