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
        <title>Infocell - Revenue</title>
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
                                    <h2 class="page-header-title">Revenue</h2>
                                    <div>
                                    <div class="page-header-tools">
                                        <a class="btn btn-danger" href="revenue.php">Cancel</a>
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
                                                <h4>Add Revenue</h4>
                                            </div>
                                            <div class="widget-body">
                                                <form action="../services/revenue/add_revenue.php" method="POST">
                                                      <div class="form-group col-md-6">
                                                        	<label for="short_code_id">Short Code</label>
			                                                    <select id="short_code_id" name="short_code_id" class="custom-select form-control">
			                                                    	<?php echo $_session['session'];?>
                                                        <div class="col-lg-9 select mb-3">
                                                        	<?php 
			                                                    include '../services/connection.php';
			                                                    error_reporting(E_ALL);
			                                                    ini_set('display_errors', '1');
			                                                    $sql="select * from short_code";
			                                                    $result=mysql_query($sql);
			                                                    $number_of_rows=mysql_num_rows($result);
			                                                          
			                                                           for($i=0;$i<$number_of_rows;$i++){
			                                                            $row =mysql_fetch_assoc($result);  
			                                                     ?>
			                                                        <option value="<?php echo$row['id']; ?>"><?php echo $row['access_code'];  ?></option>
			                                                    <?php } ?>
			                                                    </select>
			                                                </div>
                                                      
                                                      <div class="form-group col-md-6">
                                                        <label for="amount">Amount</label>
                                                        <input type="text" name="amount" class="form-control" id="amount" placeholder="Amount">
                                                      </div>

                                                     <div class="form-group col-md-6">
                                                     	<label for="month">Month</label>
		                                                    <select name="month" class="custom-select form-control">
		                                                        <option value="01" >January</option>
		                                                        <option value="02">February</option>
		                                                        <option value="03">March</option>
		                                                        <option value="04">April</option>
		                                                        <option value="05">May</option>
		                                                        <option value="06">June</option>
		                                                        <option value="07">July</option>
		                                                        <option value="08">Augest</option>
		                                                        <option value="09">September</option>
		                                                        <option value="10">October</option>
		                                                        <option value="11">November</option>
		                                                        <option value="12">December</option>
		                                                    </select>
		                                              </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="year">Year</label>
                                                        <input type="text" name="year" class="form-control" id="year" placeholder="Year">
                                                      </div>
                                                     <div class="form-group col-md-6">
                                                      <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                      <br><br>
                                                       </div>
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
