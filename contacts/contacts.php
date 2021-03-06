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

                <div class="content-inner">
                  <div class="container-fluid">
                      <!-- Begin Page Header-->
                      <div class="row">
                          <div class="page-header">
                            <div class="d-flex align-items-center">
                                <h2 class="page-header-title"> Contacts</h2>
                                <div>
                                <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_contact.php">Add contacts</a>
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
                                    
                                    <div class="widget-header bordered no-actions d-flex">
                                        <i class="fa-th"></i> <h3>Contacts</h3>
                                        <div href="#" class=" ml-auto">
                                          <form action="../contacts/search.php" method="GET">
                                          <div class="input-group">
                                            <input type="text" class="form-control" name="search_by_phone" required="" placeholder="Enter Phone Number" aria-label="Enter Phone Number" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                              <button type="submit" class="btn btn-gradient-01" >Search</button>
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                  </div>

                                    <div class="widget-body">
                                        <div class="table-responsive">
                                          <table id="sorting-table" class="table mb-0">
                                              <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Phone</th>
                                                      <th>Full Name</th>
                                                      <th><span style="width:100px;">Status</span></th>
                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <?php 
                                                    include '../services/connection.php';
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', '1');
                                                    if (isset($_GET['pageno'])) {
                                                        $pageno = $_GET['pageno'];
                                                    } else {
                                                        $pageno = 1;
                                                    }
                                                    $no_of_records_per_page = 10;
                                                    $offset = ($pageno-1) * $no_of_records_per_page;
                                                    $total_pages_sql = "SELECT COUNT(*) FROM contacts";
                                                    $result0 = mysql_query($total_pages_sql);
                                                    $total_rows = mysql_fetch_array($result0)[0];
                                                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                                                    $sql = "SELECT * FROM contacts ORDER BY `contacts`.`created_at` DESC LIMIT $offset, $no_of_records_per_page";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                          
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                             
                                                     ?>
                                                  <tr>
                                                      <td><span class="text-primary"><?php print($i+1); ?></span></td>
                                                      <td><a href="../contacts/contact_history.php?id=<?php echo $row['id']; ?>"><?php print($row['phone_number']); ?></a></td>
                                                      <td><?php print($row['first_name']); ?> <?php print($row['last_name']); ?></td>
                                                      <td><span style="width:95px;"><span class="badge-text badge-text-small info"><?php if($row['status']=='1')print('Subscribed');else print('Unsubscribed') ?></span></span></td>
                                                      <td class="td-actions">
                                                          <a href="edit_contact.php?id=<?php echo$row['id'];?>"><i class="la la-edit edit"></i></a>
                                                          <a href="delete_contact.php?id=<?php echo$row['id'];?>"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>
                                                <?php }?>
                                                  

                                              </tbody>
                                          </table>
                                        </div>
                                    </div>
                                    <?php include "../modules/pagination.php" ?>
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
