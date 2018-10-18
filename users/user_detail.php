<?php 
include '../services/connection.php';
session_start();

if(!isset($_SESSION['login_user'])){
header("location: ../login/index.php");
} 
// if (!isset($_SESSION['permission'])) {
//   die();
// }
?>
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
                                <h2 class="page-header-title">Roles</h2>
                                <div>
                                <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_role_to_user.php?id=<?php echo$_GET['id']; ?>">Add Role</a>
                                </div>
                                <div class="page-header-tools">
                                    <a class="btn btn-gradient-01" href="add_category_and_service_to_user.php?id=<?php echo$_GET['id']; ?>">Assign Category and Service</a>
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
                                        <h4>User Role List</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Role Title</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                              <tbody>
                                                    <?php 
                                                    include '../services/connection.php';

                                                    $user_id=$_GET['id'];
                                                    $sql="select * from users_roles where user_id=$user_id";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                    $_SESSION['number_of_rows']=$number_of_rows;
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $id=$row['role_id'];
                                                            $sql1="select * from roles where id=$id";
                                                            $result1=mysql_query($sql1);
                                                            $row1=mysql_fetch_assoc($result1);
                                                     ?>
                                                  <tr>
                                                      
                                                      <td><?php echo$row1['title']; ?></td>
                                                      <td><?php echo$row1['description']; ?></td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small danger"><form action="../services/users/remove_role_from_user.php" method="GET">

                                                                <input type="hidden" name="user_id" value="<?php echo$_GET['id']; ?>">
                                                                <input type="hidden" name="role_id" value="<?php echo($row1['id']); ?>">
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form></span></span></td> 

                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="widget has-shadow">
                                     <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Users Category and Service List</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Category Name</th>
                                                        <th>Service Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                              <tbody>
                                                    <?php 

                                                    $user_id=$_GET['id'];
                                                    $sql="select * from user_categoery where user_id=$user_id";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                    $_SESSION['number_of_rows']=$number_of_rows;
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $category_id=$row['category_id'];
                                                            $service_id=$row['service_id'];
                                                            $sql1="select * from `categories` where id=$category_id";
                                                            $result1=mysql_query($sql1);
                                                            $row1=mysql_fetch_assoc($result1);
                                                            $sql2="select * from `services` where id=$service_id";
                                                            $result2=mysql_query($sql2);
                                                            $row2=mysql_fetch_assoc($result2);
                                                     ?>
                                                  <tr>
                                                      <td><?php echo$row1['service_type']; ?></td>
                                                      <td><?php echo$row2['name']; ?></td>
                                                      <td><span><span class="badge-text badge-text-small danger"><form action="../services/users/remove_category_and_service.php" method="GET">
                                                                <input type="hidden" name="user_id" value="<?php echo$_GET['id']; ?>">
                                                                <input type="hidden" name="service_id" value="<?php echo$service_id; ?>">
                                                                <input type="hidden" name="category_id" value="<?php echo$category_id; ?>">
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                            </form></span></span></td> 

                                                  </tr>
                                                <?php } ?>
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
