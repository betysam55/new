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
                                <h2 class="page-header-title">Contacts</h2>
                                <div>
                                <div class="page-header-tools">
                                    
                                    <a class="btn btn-gradient-01" href="../services/contacts/blockme.php?id=<?php echo$_GET['id']; ?>">Block Me</a>

                                    <a class="btn btn-gradient-01" href="add_subscription.php?id=<?php echo$_GET['id']; ?>">Add Subscription</a>
                                    <a class="btn btn-gradient-01" href="contacts.php">Back to Contacts</a>
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
                                        <h4>Contact History</h4>
                                    </div>
                                    <div class="widget-body">
                                        
                                        <ul class="nav nav-tabs nav-fill" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="just-tab-1" data-toggle="tab" href="#j-tab-1" role="tab" aria-controls="j-tab-1" aria-selected="true">Active Subscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="just-tab-2" data-toggle="tab" href="#j-tab-2" role="tab" aria-controls="j-tab-2" aria-selected="false">Past Subscription</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">

                                            <div class="tab-pane fade show active" id="j-tab-1" role="tabpanel" aria-labelledby="just-tab-1">
                                                <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Service</th>
                                                        <th>Start Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                                    include '../services/connection.php';
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', '1');
                                                    $id=$_GET['id'];
                                                    $sql="SELECT * FROM `contact_group` where `contact_id`=$id AND status='1';";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $category_id=$row['category_id'];
                                                            $service_id=$row['service_contact_id'];
                                                            $sql1="SELECT * FROM `services` WHERE category_id=$category_id AND id=$service_id";  
                                                            $service=mysql_query($sql1);
                                                            $services =mysql_fetch_assoc($service);
                                                     ?>
                                                    <tr>
                                                        <td><span class="text-primary"><?php echo $i+1; ?></span></td>
                                                        <td><?php echo $services['name']; ?></td>
                                                        <td><?php echo $row['start_date']; ?></td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?php if($row['status']=='1') print("Subscribed"); else echo "Not Active";?></span></span></td>
                                                        <td class="td-actions">
                                                            <form action="../services/contacts/block_contact.php" method="GET">

                                                                <input type="hidden" name="status" value="<?php echo$_GET['id']; ?>">
                                                                <input type="hidden" name="service_id" value="<?php echo($services['id']); ?>">
                                                                <button class="btn btn-warning" type="submit">Unsubscribe</button>
                                                            </form>
                                                            
                                                            
                                                        </td>
                                                    </tr>
                                                  <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="j-tab-2" role="tabpanel" aria-labelledby="just-tab-2">
                                                <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                         <th>No</th>
                                                        <th>Service</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', '1');
                                                    $id=$_GET['id'];
                                                    $sql="SELECT * FROM `contact_group` where `contact_id`=$id AND status='blocked';";

                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $category_id=$row['category_id'];
                                                            $service_id=$row['service_contact_id'];
                                                            $sql1="SELECT * FROM `services` WHERE category_id=$category_id AND id=$service_id";  
                                                            $service=mysql_query($sql1);
                                                            $services =mysql_fetch_assoc($service);
                                                     ?>
                                                    <tr>
                                                        <td><span class="text-primary"><?php echo $i+1; ?></span></td>
                                                        <td><?php echo $services['name']; ?></td>
                                                        <td><?php echo $row['start_date']; ?></td>
                                                        <td><?php echo $row['end_date']; ?></td>
                                                        <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?php if($row['status']=='0') print("Unsubscribed"); else echo "Active";?></span></span></td>
                                                    </tr>
                                                  <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>

                                            </div>
                                           
                                    </div>
                                </div>
                                <!-- End Sorting -->

                            </div>
                      </div>
                      <!-- End Row -->
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
