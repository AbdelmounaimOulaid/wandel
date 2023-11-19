<?php
session_start();
// if (!isset($_SESSION['email'])) {
//     header("Location: login.php?q=Employee");
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Woche - Employee</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo-Blue.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-1.css">
    <style>

.swal2-styled.swal2-confirm{
    background-color: red;
}
.error__area {
    padding: 80px 0;
}
    </style>
</head>

<body>


    <div class="main-wrapper">
        <!-- /*** */ include header ***/ -->
        <?php include('include/header.php'); ?>
        <!-- /*** */ include header ***/ -->
        <div class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h1 class="mb-0">Employee Panel</h1>
                        <div class="breadcrumb__list">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr">></i></span>
                            <span>Employee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="error__area pt-115 pb-120" id="content">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8">
                        <div class="error__content text-center employee-container">
                            <div class="error__thumb m-img mb-45">
                                <div class="item-employee">
                                    <span>Employee ID : </span>
                                    <div class="card">SPCSAGENT241D</div>
                                </div>
                                <div class="item-employee">
                                    <span>Employee's Role : </span>
                                    <div class="card">Customer Service Agent</div>
                                </div>
                                <div class="item-employee">
                                    <span>Assigned Task : </span>
                                    <div class="card">Inviting Potential Students - Outbound Calls</div>
                                </div>
                                <div class="item-employee">
                                    <span>Assigned Countries : </span>
                                    <div class="card">United Kingdom - Germany - Netherlands</div>
                                </div>
                            </div><br><br>
                            <div class="error__content pt-60">
                                <div class="error__btn">
                                    <a href="/theme/assets/Schedule.pdf" class="tp-btn my-4 mx-4 rounded-pill shadow" download="schedule.pdf">Schedule</a>
                                    <a href="#" class="tp-btn my-4 mx-4 rounded-pill shadow request-number">VoIP Number</a>
                                    <a href="#" class="tp-btn my-4 mx-4 rounded-pill shadow request-number">Call Records</a>
                                    <a href="VoIP.php" class="tp-btn my-4 mx-4 rounded-pill shadow">VoIP Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        let requestNumbers = document.querySelectorAll('.request-number');

        requestNumbers.forEach(requestNumbers => {
            requestNumbers.addEventListener('click', () => {
                Swal.fire({
                    icon: 'error',
                    text: 'You are not authorized to access this page yet!',
                    
                })
                $(".swal2-styled.swal2-confirm").css('background-color', '#1a76ac');
            });
        });
    </script>
</body>

</html>