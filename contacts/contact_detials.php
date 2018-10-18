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
                                        <h4> messessage</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                          <table id="sorting-table" class="table mb-0">
                                              <thead>
                                                  <tr>
                                                      <th>ID</th>
                                                      <th> Messages</th>
                                                      <th>Date</th>
                                                      <th><span style="width:100px;">Status</span></th>

                                                      <th>Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td><span class="text-primary">054-01-FR</span></td>
                                                      <td>club message put here</td>
                                                      <td>10/21/2017</td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info">Wating for aproval</span></span></td>

                                                      <td class="td-actions">
                                                          <a href="#"><i class="la la-edit edit"></i></a>
                                                          <a href="#"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td><span class="text-primary">054-01-FR</span></td>
                                                      <td>club message put here</td>
                                                      <td>10/21/2017</td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info">Wating for aproval</span></span></td>

                                                      <td class="td-actions">
                                                          <a href="#"><i class="la la-edit edit"></i></a>
                                                          <a href="#"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td><span class="text-primary">054-01-FR</span></td>
                                                      <td>club message put here</td>
                                                      <td>10/21/2017</td>
                                                      <td><span style="width:100px;"><span class="badge-text badge-text-small info">Wating for aproval</span></span></td>

                                                      <td class="td-actions">
                                                          <a href="#"><i class="la la-edit edit"></i></a>
                                                          <a href="#"><i class="la la-close delete"></i></a>
                                                      </td>
                                                  </tr>

                                              </tbody>
                                          </table>
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
