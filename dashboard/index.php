<?php
 session_start();

 if (!isset($_SESSION['int_email'])) {
     header("Location: ../login.php?q=Intern");
     exit();
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Wandel - Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo-Blue.png">
    <?php include('dash-header/dash-header.php') ?>

    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h1 class="m-b-10">Dashboard</h1>

                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="margin-right: 5px;">
                            <a href="../index.php"> <i class="fa fa-home" ></i> </a>
                        </li>
                        <li class="breadcrumb-item"><i class="fa-solid fa-angle-right"></i> <a href="#!">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper" style="padding-bottom: 0;">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">52</h4>
                                            <h6 class="text-muted m-b-0">Total Students</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-user-graduate f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">10.4% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">0</h4>
                                            <h6 class="text-muted m-b-0">Calls</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-phone-volume f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">1</h4>
                                            <h6 class="text-muted m-b-0">Tasks</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-list-check f-28" style="width: 55px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">

                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">0</h4>
                                            <h6 class="text-muted m-b-0">Completed Tasks</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-award f-28" style="width: 55px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper" style="
                                padding-top: 0;padding-bottom: 0%;
                            ">
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">0</h4>
                                            <h6 class="text-muted m-b-0">Assigned Students</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-chalkboard-user f-26" style="width:55px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">0</h4>
                                            <h6 class="text-muted m-b-0">Leads</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-rectangle-list f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">0</h4>
                                            <h6 class="text-muted m-b-0">Attendance</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-calendar-days f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green">$0</h4>
                                            <h6 class="text-muted m-b-0">Total Bonus</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="fa-solid fa-dollar-sign f-28" style="width: 55px;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">0% change</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="fa fa-line-chart text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
        <div class="main-body">
            <div class="page-wrapper" style="padding-top: 0;">
                <div class="page-body">
                    <div class="row">
                        <!-- Donut chart start -->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Students Status</h5>

                                </div>
                                <div class="card-block">
                                    <canvas id="pie-chart" width="800" height="450"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Donut chart Ends -->
                        <!-- Donut chart start -->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Tasks Status</h5>

                                </div>
                                <div class="card-block">
                                    <canvas id="doughnut-chart" width="800" height="450"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Donut chart Ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('dash-header/end-dash.php') ?>
    <script type="text/javascript">
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["Total Students (52)", "Assigned Students (0)", "Leads (0)"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#30b7ff", "#8e5ea2", "#3cba9f"],
                    data: [10000, 0, 0]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'left',
                    labels: {
                        usePointStyle: true //<-- set this
                    }
                }
            }
        });
        new Chart(document.getElementById("doughnut-chart"), {
            type: 'doughnut',
            data: {
                labels: ["Not Started (1)", "In Progress (0)", "Completed (0)"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#30b7ff", "#8e5ea2", "#3cba9f"],
                    data: [10000, 0, 0]
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'left',
                    labels: {
                        usePointStyle: true //<-- set this
                    }
                }
            }
        });
    </script>

    </body>

</html>