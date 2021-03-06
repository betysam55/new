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
                                    <h2 class="page-header-title">Edit Contacts</h2>
                                    <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-danger" href="contacts.php">Cancel</a>
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
                                                <h4> Contacts</h4>
                                            </div>
                                            <div class="widget-body">
                                                <form action="../services/contacts/edit_contact.php" method="POST">
                                                      <?php 
                                                      include '../services/connection.php';
                                                      error_reporting(E_ALL);
													  ini_set('display_errors', '1');
                                                      
                                                      $id=$_GET['id'];
                                                      $sql="SELECT * FROM contacts WHERE id='$id';";
                                                      $result=mysql_query($sql);
                                                      $row =mysql_fetch_assoc($result);
                                                      ?>
                                                        <div class="form-group col-md-6">
                                                          <label for="inputEmail4">Email</label>
                                                          <input type="email" name="email" value="<?php print($row['email']); ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                      
                                                      <div class="form-group col-md-6">
                                                        <label for="inputAddress">First Name</label>
                                                        <input type="text" name="firstname" value="<?php print($row['first_name']); ?>" class="form-control" id="inputAddress" placeholder="First Name">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Last Name</label>
                                                        <input type="text" name="lastname" value="<?php print($row['last_name']); ?>" class="form-control" id="inputAddress2" placeholder="Last Name">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Phone</label>
                                                        <input type="text"  name="phone" value="<?php print($row['phone_number']); ?>" class="form-control" id="inputAddress2" placeholder="Phone Number">
                                                      </div>
                                                      <input type="hidden" name="id" value="<?php print($row['id']); ?>">
                                                      <button type="submit" class="btn btn-primary">Update</button>
                                                      
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
