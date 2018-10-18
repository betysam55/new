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
                                <h2 class="page-header-title">Subscribers</h2>
                                <div>

                                </div>
                            </div>
                          </div>
                      </div>
                            <!-- Form -->
                            <div class="widget has-shadow">
                                <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <h4>Subscribers <!-- <?php if (isset($_GET['month'])) {
                                      print($_GET['month']);
                                    } ?> --> </h4>
                                </div>
                                <?php if(!isset($_GET['submit'])){ ?>
                                <div class="widget-body">
                                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
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
                                                            <option value="2018">2018</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                </select>
                                              </div>
                                                  <div class="form-group col-md-6">
                                            <div class="page-header-tools">
                                                <input type="submit" name="submit" class="btn btn-gradient-01 Right" text="change" />
                                              </div></div>
                                       
                                    </form>
                                 </div>
                               <?php } ?>
                               </div>
                                    <!-- Begin Row -->
                                    <div class="row flex-row">
                                      <!-- Begin Widget 01 -->
                                            <div class="widget widget-01 has-shadow">
                                               <?php 
                                               include("../services/connection.php");
                                               error_reporting(E_ALL);
                                                ini_set('display_errors','Off'); 
                                               if(isset($_GET['fdf_set_submit_form_action(fdf_document, fieldname, trigger, script, flags)'])){
                                                          $category_id=$_SESSION['user_category'];
                                                          $service_id=$_SESSION['user_service'];
                                                          $year=$_GET['year'];
                                                          $month=$_GET['month'];
                                                          $year_month_from=$year.'-'.$month.'-01 00:00:00';
                                                          $year_month_to=$year.'-'.$month.'-30 00:00:00';
                                                          $short_code_id=$_SESSION['user_short_code'];
                                                          $sql3="select * from revenue where year=$year and month=$month and short_code_id=$short_code_id";
                                                          $result3=mysql_query($sql3);
                                                          $number_of_rows3=mysql_num_rows($result3);
                                                          $row3=mysql_fetch_assoc($result3);
                                                          $sql4="select
                                                                    *
                                                                  from
                                                                    report
                                                                  where(
                                                                      service_id = '$service_id'
                                                                      and category_id = '$category_id'
                                                                      and date between '$year_month_from'
                                                                      and '$year_month_to'
                                                                    )
                                                                ";
                                                          $result4=mysql_query($sql4);
                                                          $num2=mysql_num_rows($result4);
                                                          $x=0;
                                                          for ($i=0; $i < $num2; $i++) { 
                                                            $row4=mysql_fetch_assoc($result4);
                                                            $x=$x+$row4['count'];
                                                          }
                                                          // print('   X='.$x);
                                                          $sql5="select * from report where category_id=$category_id";
                                                          $result5=mysql_query($sql5);
                                                          $num=mysql_num_rows($result5);
                                                          $y=0;
                                                          for ($i=0; $i < $num; $i++) { 
                                                            $row5=mysql_fetch_assoc($result5);
                                                            $y=$y+$row5['count'];
                                                          }
                                                          
                                                            // print('  y='.$y);
                                                            $total_revenue=$row3['amount'];
                                                         $service_revenue=($x*$total_revenue)/$y;
                                                         // print('  service_revenue='.$service_revenue);
                                                        }
                                                        $category_id=$_SESSION['user_category'];
                                                          $service_id=$_SESSION['user_service'];
                                                        $from=date('Y-m')."-01 00:00:00";
                                                        $to=date('Y-m-d H:i:s');

                                                        $year=$_GET['year'];
                                                        $month=$_GET['month'];
                                                        $year_month_from=$year.'-'.$month.'-01 00:00:00';
                                                         $year_month_to=$year.'-'.$month.'-30 00:00:00';

                                                        $sql6="select
                                                                      *
                                                                    from
                                                                      `contact_group`
                                                                    where
                                                                      `status` = '1'
                                                                      and `category_id`= '$category_id'
                                                                      and `service_contact_id`= '$service_id'
                                                                      and `created_at` between '$from'
                                                                      and '$to'";
                                                        $result6=mysql_query($sql6);
                                                        $num6=mysql_num_rows($result6);
                                                        $sql10="select
                                                                      *
                                                                    from
                                                                      `contact_group`
                                                                    where
                                                                      `status` = '1'
                                                                      and `category_id`= '$category_id'
                                                                      and `service_contact_id`= '$service_id'
                                                                      and `created_at` between '$year_month_from'
                                                                      and '$year_month_to'";
                                                        $result10=mysql_query($sql10);
                                                        
                                                        $num10=mysql_num_rows($result10);
                                                    
                                                        $sql7="select
                                                                      *
                                                                    from
                                                                      `contact_group`
                                                                    where
                                                                      `status` = '1'
                                                                      and `category_id`= '$category_id'
                                                                      and `service_contact_id`= '$service_id'
                                                                      ";
                                                                      
                                                        $result7=mysql_query($sql7);
                                                        $num7=mysql_num_rows($result7);
                                                        
                                                        
                                                        //  $sql8="select * from report where category_id=$category_id and date between '$year_month_from'
                                                        //               and '$year_month_to'";
                                                        //   $result8=mysql_query($sql8);
                                                        //   $num8=mysql_num_rows($result8);
                                                        //   $y=0;
                                                        //   for ($i=0; $i < $num8; $i++) { 
                                                        //     $row8=mysql_fetch_assoc($result8);
                                                        //     $y=$y+$row8['count'];
                                                        //   }
                                                        //   // print($y);
                                                        //   $short_code_id=$_SESSION['user_short_code'];
                                                        //   $sql9="select * from revenue where year=$year and month=$month and short_code_id=$short_code_id";
                                                        //   $result9=mysql_query($sql9);
                                                        //   $row9=mysql_fetch_assoc($result9);
                                                        //   $revenue=$row9['amount'];
                                                        //   // print($revenue);
                                                        //   $hit_rate=round(((($revenue*10)/($y*6))/100),4);
                                                   if(isset($_GET['submit'])){   
                                                   ?>

                                                 </div>
                                               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                              <div class="widget widget-16 has-shadow">
                                                  <div class="widget-body">
                                                      <div class="row">
                                                          <div class="col-xl-12 d-flex flex-column justify-content-center align-items-center">
                                                              <div class="counter"><?php if(isset($num6))print($num6);else print'0';  ?></div>
                                                              <div class="total-views">New Subscribers</div>
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
                                                              <div class="counter"><?php if(isset($num7))print($num7);else print'0';  ?></div>
                                                              <div class="total-visitors">Total Subscribers</div>
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
                                                               <div class="counter"><?php if(isset($num10))print($num10);else print'0';  ?></div>
                                                              <div class="total-views">Subscribers</div>
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
                                          </div>
                                          <!-- End Widget 16 -->
                                          <!-- Begin Widget 17 -->
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                                          </div>
                                          <!-- End Widget 17 -->
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
