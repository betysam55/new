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
        <title>Infocell - Information</title>
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
                                <h2 class="page-header-title">Information</h2>
                                <div>
                               <!--  <div class="page-header-tools">
                                  <?php if(!isset($_POST['cancel'])&&!isset($_POST['edit']) ||isset($_POST['cancel'])){?>
                                  <form method="POST"><button class="btn btn-gradient-01" name="edit">Edit</button></form>
                                <?php }?>

                                  <?php if(isset($_POST['edit'])){?>
                                   <form method="POST"><button class="btn btn-gradient-01" name="cancel">Cancel</button></form> 
                                   <?php } ?>
                                </div> -->
                                </div>
                            </div>
                          </div>
                      </div>
                      <!-- Begin Row -->
                        <?php 
                include '../services/connection.php';
                error_reporting(E_ALL);
                ini_set('display_errors', '1');
                $user_id=$_SESSION['user_id'];
                $sql="SELECT * FROM `client_information` WHERE user_id=$user_id;";
                $result=mysql_query($sql);
                        $row =mysql_fetch_assoc($result);
                 ?>
                      
                                              <div class="col-xl-12">
                                <form action="edit_client_information.php" method="POST">
                                <div class="widget has-shadow">
                                  <div class="widget-header bordered no-actions d-flex align-items-center"><div class="page-header-tools">
                                  <?php if(!isset($_POST['cancel'])&&!isset($_POST['edit']) ||isset($_POST['cancel'])){?>
                                  <form method="GET"><button class="btn btn-gradient-01" name="edit">Edit</button></form>
                                <?php }?>

                                  <?php if(isset($_POST['edit'])){?>
                                   
                                    <button type="submit" class="btn btn-gradient-01" name="save">Save</button>
                                 
                                   <?php } ?>
                                 </div>

                                   <?php if(isset($_POST['edit'])){?>
                                    <div class="page-header-tools">
                                   <form method="GET"><button type="button" class="btn btn-gradient-01" name="cancel">Cancel</button></form> 
                                 </div>
                                   <?php } ?>
                                
                                    </div>
                                    <div class="widget-body">
                <input type="hidden" name="user_id" value="<?php echo$_SESSION['user_id']; ?>">
                      <div class="row flex-row">
                        
                        <div class="col-xl-12">
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>General information</h4>
                                    </div>
                                    <div class="widget-body">
                                       <div class="col-lg-9">

                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Company/Club Name</label>
                                                <div class="col-lg-9">
                                                    <input type="text" name="company_name" placeholder="<?php echo$row['company_name']; ?>" value="" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?> class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input name="address" placeholder="<?php echo$row['address']; ?>"  <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" class="form-control">
                                                    <small>

                                                    </small>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Tin No</label>
                                                <div class="col-lg-9">
                                                    <input name="tin" placeholder="<?php echo$row['tin']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" class="form-control">
                                                    <small>

                                                    </small>
                                                </div>
                                            </div>
                                                </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-12">
                                
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Contact</h4>
                                    </div>
                                    <div class="widget-body">
                                                    <div class="col-lg-9">
                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Contact Person Name</label>
                                                <div class="col-lg-9">
                                                    <input name="contact_person" placeholder="<?php echo$row['contact_person_name']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>   type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Phone</label>
                                                <div class="col-lg-9">
                                                    <input name="phone" placeholder="<?php echo$row['phone']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" class="form-control">
                                                    <small>

                                                    </small>
                                                </div>
                                            </div>
                                            
                                                </div>
                                                 
                                                
                                    </div>
                                </div>
                        </div>
                        <div class="col-xl-12">
                               
                                <div class="widget has-shadow">
                                 <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Bank information</h4>
                                    </div>
                                    <div class="widget-body">
                                       <div class="col-lg-9">
                                                    <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Type of Bank</label>
                                                <div class="col-lg-9">
                                                    <input name="bank_type" placeholder="<?php echo$row['bank_type']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Bank Name</label>
                                                <div class="col-lg-9">
                                                    <input name="bank_name" placeholder="<?php echo$row['bank_name']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" class="form-control">
                                                    <small>

                                                    </small>
                                                </div>
                                            </div>
                                             <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label">Account Number</label>
                                                <div class="col-lg-9">
                                                    <input name="account_no" placeholder="<?php echo$row['account_no']; ?>" <?php if (!isset($_POST['edit'])) {echo"disabled"; } ?>  type="text" value="" class="form-control">
                                                </div>
                                          </div>
                                    </div>
                                </div>
                        </div>
                      </div>
                      
                    </div>

                  </form>
                </div>
              </div>
            </div>
                    <!-- End Container -->

                    <!-- Begin Page Footer-->
                      <?php include('../modules/footer.php'); ?>
                    <!-- End Page Footer -->

                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>

                
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>


        <!-- Begin Vendor Js -->
      <?php include('../modules/footer_resources.php'); ?>
        <!-- End Page Snippets -->
    </body>
</html>
