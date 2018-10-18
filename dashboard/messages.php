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
                                <h2 class="page-header-title">Message Report

                                </div>
                            </div>
                          </div>
                      </div>
                            <!-- Form -->
                            <div class="widget has-shadow">
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <h4>Message <!-- <?php if (isset($_GET['month'])) {
                                      print($_GET['month']);
                                    } ?> --> </h4>
                                </div>
                                <div class="widget-body">
                                  <?php if(!isset($_GET['next'])){?>
                                  <form>
                                    <div class="form-group col-md-6">
                                            <label for="short_code_id">Short Code</label>
                                            <select id="short_code_id" name="short_code_id" class="custom-select form-control">
                                              
                                                <div class="col-lg-9 select mb-3">
                                                  <?php 
                                                  include '../services/connection.php';
                                                  error_reporting(E_ALL);
                                                ini_set('display_errors','on'); 
                                                  $sql="select * from short_code";
                                                  $result=mysql_query($sql);
                                                  $row3['amount']=null;
                                                  $number_of_rows=mysql_num_rows($result);
                                                        
                                                         for($i=0;$i<$number_of_rows;$i++){
                                                          $row =mysql_fetch_assoc($result);  
                                                   ?>
                                                      <option value="<?php echo$row['id']; ?>"><?php echo $row['access_code'];  ?></option>
                                                  <?php } ?>

                                              </select></div>
                                              <button type="submit" class="btn btn-gradient-01 Right" name="next" value="1" >Next</button>
                                  </form>
                                <?php } ?>
                                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                              <?php if(isset($_GET['next'])){ ?>
                                                <input type="hidden" name="short_code_id" value="<?php echo$_GET['short_code_id']; ?>">
                                                 <div class="form-group col-md-6">
                                                      <label for="service_id">Service</label>
                                                      <select id="service_id" name="service_id" class="custom-select form-control">
                                                        
                                                          <div class="col-lg-9 select mb-3">
                                                            <?php 
                                                              error_reporting(E_ALL);
                                                ini_set('display_errors','on'); 
                                                            $access_code_id=$_GET['short_code_id'];
                                                            $sql="select * from category_config where access_code_id=$access_code_id";
                                                            $result=mysql_query($sql);
                                                            

                                                                  $row =mysql_fetch_assoc($result);  
                                                                    $category_id=$row['category_id'];
                                                                    $query="select * from services where category_id=$category_id";
                                                                    $result_1=mysql_query($query);
                                                                    $number_of_rows=mysql_num_rows($result_1);
                                                                   for($i=0;$i<$number_of_rows;$i++){
                                                                     $row_1 =mysql_fetch_assoc($result_1);  
                                                             ?>
                                                                <option value="<?php echo$row_1['id']; ?>"><?php echo $row_1['name'];  ?></option>
                                                            <?php } ?>

                                                        </select>
                                                      </div>
                                                  <div class="form-group col-md-6">
                                                      <label for="month">Month</label>
                                                        <select name="month" class="custom-select form-control">
                                                            <option value="01">January</option>
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
                                                <select id="year" name="year" class="custom-select form-control">
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>
                                                            <option class="selected" value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                </select>
                                              </div>
                                                  <div class="form-group col-md-6">
                                            <div class="page-header-tools">
                                                <input type="submit" name="submit" class="btn btn-gradient-01 Right" text="change" />
                                              </div></div>
                                       <?php } ?>
                                    </form>

                                 </div></div>
                                    <!-- Begin Row -->
                                    <div class="row flex-row">
                                      <!-- Begin Widget 01 -->
                                             <div class="widget widget-01 has-shadow">
                                               <?php 
                                                 error_reporting(E_ALL);
                                                ini_set('display_errors','off'); 
                                               $access_code_id=$_GET['short_code_id'];
                                               
                                                  $sql1="select * from category_config where access_code_id=$access_code_id";
                                                  $result1=mysql_query($sql1);
                                                   $row1 =mysql_fetch_assoc($result1);  
                                                     $category_id=$row1['category_id'];
                                                          $service_id=$_GET['service_id'];
                                                        $from=date('Y-m')."-01 00:00:00";
                                                        $to=date('Y-m-d H:i:s');

                                                        $year=$_GET['year'];
                                                        $month=$_GET['month'];
                                                        $year_month_from=$year.'-'.$month.'-01 00:00:00';
                                                         $year_month_to=$year.'-'.$month.'-30 00:00:00';
                                                        
                                                        $sql6="select
                                                                      *
                                                                    from
                                                                      `report`
                                                                    where
                                                                     `category_id`= '$category_id'
                                                                      and `service_id`= '$service_id'
                                                                      and `date` between '$from'
                                                                      and '$to'";
                                                        $result6=mysql_query($sql6);
                                                        $num6=mysql_num_rows($result6);
                                                        $x=0;
                                                        for ($i=0; $i < $num6; $i++) { 
                                                            $row4=mysql_fetch_assoc($result6);
                                                            $x=$x+$row4['count'];
                                                          }
                                                        $sql10="select
                                                                      *
                                                                    from
                                                                      `report`
                                                                    where
                                                                       `category_id`= '$category_id'
                                                                      and `service_id`= '$service_id'
                                                                      and `date` between '$year_month_from'
                                                                      and '$year_month_to'";
                                                        $result10=mysql_query($sql10);
                                                        
                                                        $num10=mysql_num_rows($result10);
                                                     $y=0;
                                                        for ($i=0; $i < $num10; $i++) { 
                                                            $row4=mysql_fetch_assoc($result10);
                                                            $y=$y+$row4['count'];
                                                          }
                                                        $sql7="select
                                                                      *
                                                                    from
                                                                      `report`
                                                                    where
                                                                       `category_id`= '$category_id'
                                                                      and `service_id`= '$service_id'
                                                                      ";
                                                                      
                                                        $result7=mysql_query($sql7);
                                                        $num7=mysql_num_rows($result7);
                                                         $z=0;
                                                        for ($i=0; $i < $num7; $i++) { 
                                                            $row4=mysql_fetch_assoc($result7);
                                                            $z=$z+$row4['count'];
                                                          }
                                                        if(isset($_GET['submit'])){    
                                                   ?>
                                                 </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                              <div class="widget widget-16 has-shadow">
                                                  <div class="widget-body">
                                                      <div class="row">
                                                          <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                              <div class="counter"><?php if(isset($x))print($x);else print'0';  ?></div>
                                                              <div class="total-views">New Sent Messages</div>
                                                              <small style="text-align: center;">
                                                                For the currnet month
                                                              </small> 
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="widget widget-17 has-shadow">
                                                  <div class="widget-body">
                                                      <div class="row">
                                                          <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                              <div class="counter"><?php if(isset($num7))print($z);else print'0';  ?></div>
                                                              <div class="total-visitors">Total Sent Message</div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                            <!-- End Widget 01 -->
                                      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="widget widget-16 has-shadow">
                                                <div class="widget-body">
                                                   <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                             <br><br><br><br>
                                                          </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Begin Widget 16 -->
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                              <div class="widget widget-16 has-shadow">
                                                  <div class="widget-body">
                                                      <div class="row">
                                                          <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                               <div class="counter"><?php if(isset($y))print($y);else print'0';  ?></div>
                                                              <div class="total-views">Messages</div>
                                                              <small style="text-align: center;">
                                                                Form <?php  echo $year.'-'.$month.'-1';?>
                                                                <br>To <?php echo $year.'-'.$month.'-30'; ?>
                                                              </small>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="widget widget-17 has-shadow">
                                                  <div class="widget-body">
                                                      <div class="row">
                                                          <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                              <div class="counter"></div>
                                                              <div class="total-visitors"></div>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </div><?php } ?>
                            <!-- End Form -->
                        </div></div>

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
