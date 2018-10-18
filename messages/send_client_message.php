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
                                    <a class="btn btn-gradient-01" href="add_message.php">Add Message</a>
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
                                        <h4> Selected Message</h4>
                                    </div>
                                    	<?php 
									  	$category_id=$_GET['category_id'];
									  	$id=$_GET['id'];
										$sql = "SELECT * FROM `clients_message` WHERE `id` = '$id'";
										$result=mysql_query($sql);
										$number_of_rows=mysql_num_rows($result);
									    $row1 = mysql_fetch_assoc($result);
									    ?>
	                                    <div class="widget-body">
	                                        <div class="input-group">
	                                        	<textarea type="text" class="form-control" name="content_id" value=<?php echo$row1['id']; ?>  disabled=""><?php echo $row1["content"]; ?></textarea>
											 
											  <div class="input-group-append">
											    <a  href="client_edit_message.php?id=<?php print$id; ?>&&category_id=<?php print$category_id; ?>" <?php if($row1["status"]=="1")print('style="pointer-events:none;"'); ?> class="btn btn-gradient-01">
                                                    <?php if($row1["status"]=="1")print('Message cant be edited.All ready sent');else print('Edit'); ?></a>
											  </div>
											</div>
	                                    </div>
	                                    <div class="widget-body">
	                                    <form action="../services/messages/send_client_message.php" method="POST">
                                            <input type="hidden" name="content_id" value="<?php echo$row1['id']; ?>">
                                            <input type="hidden" name="category_id" value="<?php echo$row1['category_id']; ?>">
                    										  <div class="form-row">
                    										  	<div class="col-6">
                    										      <div class="form-group">
                    										      	 <label for="test">Testing</label>
                    										  	<div class="input-group mb-3">
                    											  <div class="input-group-prepend">
                    											    <div class="input-group-text">
                    											      <input type="checkbox" name="test" id="test" value="test">
                    											    </div>
                    											  </div>
                    											  <input type="text" class="form-control" name="test_number" placeholder="put your test number here">
                    											</div>
                    											</div>
                    											</div>
                    										    <div class="col-6">
                    										      <div class="form-group">
                    											    <label class="col-lg-6 form-control-label" for="select">Service Numbers</label>
                    											    <div class="col-lg-9 select mb-3">
                                              <select name="short_code" class="custom-select form-control">
                                                  <?php 
                    								$id=$row1['category_id'];
                                                    $sql="SELECT * FROM `category_config` WHERE category_id=$id";
                                                    $result=mysql_query($sql);
                                                    $number_of_rows=mysql_num_rows($result);
                                                           for($i=0;$i<$number_of_rows;$i++){
                                                            $row =mysql_fetch_assoc($result);
                                                            $access_code_id=$row['access_code_id'];
                                                            $sql1="SELECT * FROM `short_code` WHERE id=$access_code_id";
                                                            $result1=mysql_query($sql1);
                                                            $row3 =mysql_fetch_assoc($result1);  
                                                     ?>
                                                    <option value="<?php print($row3['access_code']); ?>" ><?php print($row3['access_code']); ?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                    											  </div>
                    										    </div>
                    										  </div>
                    										  <div class="form">
                    										  	<div class="col-6">
                    										      <div class="form-group">
                    											 <div class="mb-3">
                    											 	<label class="col-lg-3 form-control-label">Services</label>
                                                                           <?php 
                    												$category_id=$row1['service_id'];
                    												$sql = "SELECT * FROM `services` WHERE `id` =$category_id";
                    												
                    												$result=mysql_query($sql);
                    												$number_of_rows=mysql_num_rows($result);
                    												 for($i=0;$i<$number_of_rows;$i++){
                    												$row = mysql_fetch_assoc($result);
                    												?>
                                                                        <div class="styled-checkbox">
                                                                            
                                                                            <input type="checkbox" name="service_id[]" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>"  >
                                                                            <label for="<?php echo $row['id']; ?>"><?php print($row['name']); ?></label>
                                                                        </div>
                    												<?php } ?>
                                                                  </div>
                    											</div>
                    											</div>
                    											<button type="submit" class="btn btn-gradient-01 btn-lg mr-1 mb-2">Send</button>

                    										  </div>
                    										</form>
                    									</div>
                                </div>
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
