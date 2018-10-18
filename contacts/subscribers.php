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
        <title>subscribers - Dashboard</title>
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
                                <h2 class="page-header-title"> Subscribers</h2>
                                <div>

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
                                        <h4> List of Subscribers</h4>
                                    </div>
                                    <div class="widget-body">
                                      <form action="subscribers.php" method="GET">
                                        <?php if(!isset($_GET['next'])){ ?>
                                 <div class="row">
                                  <div class="col-sm">
                                    <div class="input-group">
                                      <select type="submit" name="category_id" class="custom-select form-control">

                                          <?php 
                                              $sql="select * from categories";
                                              $result=mysql_query($sql);
                                              $number_of_rows=mysql_num_rows($result);
                                                    
                                                     for($i=0;$i<$number_of_rows;$i++){
                                                      $row =mysql_fetch_assoc($result);  
                                               ?>
                                             <option value="<?php echo $row['id']; ?>"><?php echo $row['service_type']; ?></option>
                                           <?php }?>
                                      </select>

                                      </div>
                                    </div>
                                      <div class="col-sm">
                                   <div class="input-group-append">
                                              <button type="submit" name="next" value="1" class="btn btn-gradient-01" >Next</button>
                                            </div>
                                        
                                        </div></div><?php }if(isset($_GET['next'])){ $category_id=$_GET['category_id']; ?>
                                        <div class="row">
                                  <div class="col-sm">
                                    <input type="hidden" name="category_id" value="<?php print$category_id; ?>">
                                    <div class="input-group">

                                      <select type="submit" name="service_id" class="custom-select form-control">

                                          <?php 
                                              $sql="select * from services where category_id=$category_id";
                                              $result=mysql_query($sql);
                                              $number_of_rows=mysql_num_rows($result);
                                                    
                                                     for($i=0;$i<$number_of_rows;$i++){
                                                      $row =mysql_fetch_assoc($result);  
                                               ?>
                                             <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                           <?php }?>
                                      </select>

                                      </div></div>
                                      <div class="col-sm">
                                   <div class="input-group-append">
                                              <button type="submit" class="btn btn-gradient-01" >Next</button>
                                            </div>
                                        
                                        </div></div><?php } ?>
                                </form> 
                                <br><br><br>
                                  <?php if(isset($_GET['service_id'])){ 
                                    $category_id=$_GET['category_id'];
                                    $service_id=$_GET['service_id'];
                                    ?>
                                        <div class="table-responsive">

                                          <table id="sorting-table" class="table mb-0">
                                              <thead>
                                                  <tr>

                                                      <th>No</th>
                                                      <th>Phone</th>
                                                      <th>Category Name</th>
                                                      <th>Service Name</th>
                                                      <th><span style="width:100px;">Status</span></th>

                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                <?php 
                                                    include '../services/connection.php';
                                                    if (isset($_GET['pageno'])) {
                                                        $pageno = $_GET['pageno'];
                                                    } else {
                                                        $pageno = 1;
                                                    }
                                                    $no_of_records_per_page = 10;
                                                    $offset = ($pageno-1) * $no_of_records_per_page;
                                                    $total_pages_sql = "SELECT COUNT(*) FROM contact_group where status='1' AND service_contact_id=$service_id";
                                                    $result0 = mysql_query($total_pages_sql);
                                                    $total_rows = mysql_fetch_array($result0)[0];
                                                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                                                    $sql = "SELECT * FROM contact_group WHERE status='1' AND service_contact_id=$service_id ORDER BY `contact_group`.`created_at` DESC LIMIT $offset, $no_of_records_per_page";
                                                    
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                          
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $contact_id=$row['contact_id'];
                                                             $sql1="select * from contacts where id=$contact_id";
                                                             $result1=mysql_query($sql1);
                                                             $row1=mysql_fetch_assoc($result1);
                                                             $service_id=$row['service_contact_id'];
                                                             $category_id=$row['category_id'];
                                                             $sql2="select * from services where id=$service_id";
                                                             $result2=mysql_query($sql2);
                                                             $row2=mysql_fetch_assoc($result2);
                                                             $sql3="select * from categories where id=$category_id";
                                                             $result3=mysql_query($sql3);
                                                             $row3=mysql_fetch_assoc($result3);

                                                     ?>
                                                  <tr>
                                                      <td><?php echo $i+1; ?></td>
                                                      <td><span class="text-primary"><?php echo$row1['phone_number']; ?></span></td>
                                                      <td><span class="text-primary"><?php echo$row3['service_type']; ?></span></td>
                                                      <td><span class="text-primary"><?php echo $row2['name']; ?></span></td>
                                                      
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info">Subscriber</span></span></td>
                                                      <td class="td-actions">
                                                          <a href="#"><span style="width:100px;"><span class="badge-text badge-text-small danger">Remove</span></a>
                                                          
                                                      </td>
                                                  </tr>
                                                <?php } ?>
                                              </tbody>
                                          </table>
                                        </div>
                                        <div class="text-center ">
                                      <br>
                                      <nav aria-label="Page navigation" class="text-center">
                                        <ul class="pagination text-center" >
                                          &nbsp&nbsp&nbsp&nbsp&nbsp
                                          <li class="page-item"><a class="page-link" href="?category_id=<?php echo $category_id; ?>&&service_id=<?php echo $service_id; ?>&&pageno=1">First</a></li>
                                          <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?category_id=<?php echo $category_id; ?>&&service_id=<?php echo $service_id; ?>&&?pageno=".($pageno - 1); } ?>">Previous</a></li>
                                          <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?category_id=<?php echo $category_id; ?>&&service_id=<?php echo $service_id; ?>&&pageno=".($pageno + 1); } ?>">Next</a></li>
                                          <li class="page-item"><a class="page-link" href="?category_id=<?php echo $category_id; ?>&&service_id=<?php echo $service_id; ?>&&pageno=<?php echo $total_pages; ?>">Last</a></li>
                                        </ul>
                                      </nav>
                                        <br>
                                      </div>
                                    <?php }  ?>
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
