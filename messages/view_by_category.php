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
                                <h2 class="page-header-title"> Messages</h2>
                                <div>
                                <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_message.php?id=<?php echo $_GET['id']; ?>">Add Message</a>
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
                                        <h4> Message</h4>
                                    </div>
                                    <div class="widget-body">
                                      <div class="widget-body sliding-tabs">
                                        <ul class="nav nav-tabs nav-fill" id="example-one" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link <?php if(isset($_GET['pagenoa'])) print'active';elseif(!isset($_GET['pagenoa'])&&!isset($_GET['pageno']))print'active'; ?>" id="base-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">All Messages</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if(isset($_GET['pageno'])) print'active'; ?>" id="base-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Client Messges</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane fade <?php if(isset($_GET['pagenoa'])) print'show active'; elseif(!isset($_GET['pagenoa'])&&!isset($_GET['pageno']))print'show active'; ?>" id="tab-1" role="tabpanel" aria-labelledby="base-tab-1">
                                             <div class="table-responsive">
                                          <table id="sorting-table" class="table mb-0">
                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>Message</th>
                                                      <th> Message Date</th>
                                                      <th><span style="width:100px;">Status</span></th>
                                                      <th> Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                           <?php 
                                            include("../services/connection.php");
                                            error_reporting(E_ALL);
                                             ini_set('display_errors', '1');
                                             $id=$_GET['id'];
                                             if (isset($_GET['pagenoa'])) {
                                                        $pagenoa = $_GET['pagenoa'];
                                                    } else {
                                                        $pagenoa = 1;
                                                    }
                                                    $no_of_records_per_pagea = 10;
                                                    $offseta = ($pagenoa-1) * $no_of_records_per_pagea;
                                                    $total_pages_sql = "SELECT COUNT(*) FROM draft_message WHERE `category_id` = '$id'";
                                                    $result0 = mysql_query($total_pages_sql);
                                                    $total_rowsa = mysql_fetch_array($result0)[0];
                                                    $total_pagesa = ceil($total_rowsa / $no_of_records_per_pagea);
                                            $sql = "SELECT * FROM `draft_message` WHERE `category_id` = $id  ORDER BY `draft_message`.`created_at` DESC LIMIT $offseta, $no_of_records_per_pagea";
                                            //$sql = "SELECT * FROM `messages2` ORDER BY `messages2`.`id` DESC LIMIT 30 ";
                                            $result=mysql_query($sql);
                                            $number_of_rows=mysql_num_rows($result);
                                             for($i=0;$i<$number_of_rows;$i++){
                                              $row = mysql_fetch_assoc($result);
                                              ?>
                                                  <tr>
                                                      <td><span class="text-primary"><?php echo $row["id"]; ?></span></td>
                                                      <td><a href="send_message.php?id=<?php echo $row["id"]; ?>&category_id=<?php echo$_GET['id']; ?>"><?php echo $row["content"]; ?></a></td>
                                                      <td><?php print($row['created_at']); ?></td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?php if($row["status"]=="Sent")print "all ready sent"; else print "not sent";?></td></span></span></td>
                                                      <td class="td-actions">
                                                          <a href="#"><i class="la la-edit edit"></i></a>
                                                          <a href="#"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>
                                                <?php } ?>
                                              </tbody>
                                          </table>
                                          <div class="text-center ">
                                            <br>
                                            <nav aria-label="Page navigation" class="text-center">
                                              <ul class="pagination text-center" >
                                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                                <li class="page-item"><a class="page-link" href="?id=$id&&pagenoa=1">First</a></li>
                                                <li class="page-item <?php if($pagenoa <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pagenoa <= 1){ echo '#'; } else { echo "?id=$id&&pagenoa=".($pagenoa - 1); } ?>">Previous</a></li>
                                                <li class="page-item <?php if($pagenoa >= $total_pagesa){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pagenoa >= $total_pagesa){ echo '#'; } else { echo "?id=$id&&pagenoa=".($pagenoa + 1); } ?>">Next</a></li>
                                                <li class="page-item"><a class="page-link" href="?id=$id&&pagenoa=<?php echo $total_pagesa; ?>">Last</a></li>
                                              </ul>
                                            </nav>
                                              <br>
                                            </div>
                                        </div>
                                            </div>
                                            <div class="tab-pane fade <?php if(isset($_GET['pageno'])) print'show active';?>" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">
                                                
                                                <div class="table-responsive">
                                          <table id="sorting-table" class="table mb-0">
                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th>Message</th>
                                                      <th>From</th>
                                                      <th>Service</th>
                                                      <th>Message Date</th>
                                                      <th><span style="width:100px;">Status</span></th>
                                                      <th> Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                           <?php 
                                             $id=$_GET['id'];
                                             if (isset($_GET['pageno'])) {
                                                        $pageno = $_GET['pageno'];
                                                    } else {
                                                        $pageno = 1;
                                                    }
                                                    $no_of_records_per_page = 10;
                                                    $offset = ($pageno-1) * $no_of_records_per_page;
                                                    $total_pages_sql = "SELECT COUNT(*) FROM clients_message WHERE `category_id` = '$id'";
                                                    $result0 = mysql_query($total_pages_sql);
                                                    $total_rows = mysql_fetch_array($result0)[0];
                                                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                                            $sql1 = "SELECT * FROM `clients_message` WHERE `category_id` = '$id' ORDER BY `clients_message`.`created_at` DESC LIMIT $offset, $no_of_records_per_page";

                                            $result1=mysql_query($sql1);
                                            $number_of_rows1=mysql_num_rows($result1);
                                             for($i=0;$i<$number_of_rows1;$i++){
                                              $row1 = mysql_fetch_assoc($result1);
                                              $user_id=$row1['user_id'];
                                              $sql2="SELECT * FROM `users` WHERE id='$user_id';";
                                              $result2=mysql_query($sql2);
                                              $row2=mysql_fetch_assoc($result2);
                                              $service_id=$row1['service_id'];
                                              $sql3="SELECT * FROM `services` WHERE id='$service_id';";
                                              $result3=mysql_query($sql3);
                                              $row3=mysql_fetch_assoc($result3);
                                              ?>
                                                  <tr>
                                                      <td><span class="text-primary"><?php echo $row1["id"]; ?></span></td>
                                                      <td><a href="send_client_message.php?id=<?php echo $row1["id"]; ?>&category_id=<?php echo$_GET['id']; ?>"><?php echo $row1["content"]; ?></a></td>
                                                      <td><?php echo$row2['first_name']; ?> <?php echo$row2['last_name']; ?></td>
                                                      <td><?php echo$row3['name']; ?></td>
                                                      <td><?php print($row1['created_at']); ?></td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info"><?php if($row1["status"]=="1")print "all ready sent"; else print "not sent";?></td></span></span></td>
                                                      <td class="td-actions">
                                                          <a href="#"><i class="la la-edit edit"></i></a>
                                                          <a href="#"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>
                                                <?php } ?>
                                              </tbody>
                                          </table>
                                        <div class="text-center ">
                                          <br>
                                          <nav aria-label="Page navigation" class="text-center">
                                            <ul class="pagination text-center" >
                                              &nbsp&nbsp&nbsp&nbsp&nbsp
                                              <li class="page-item"><a class="page-link" href="?id=<?php echo $id; ?>&&pageno=1">First</a></li>
                                              <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?id=".$id."&&pageno=".($pageno - 1); } ?>">Previous</a></li>
                                              <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?id=".$id."&&pageno=".($pageno + 1); } ?>">Next</a></li>
                                              <li class="page-item"><a class="page-link" href="?id=<?php echo $id; ?>&&pageno=<?php echo $total_pages; ?>">Last</a></li>
                                            </ul>
                                          </nav>
                                            <br>
                                          </div>
                                        </div>
                                            </div>
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
