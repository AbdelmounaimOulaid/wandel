<?php

if (isset($_POST['submit'])) {
    $email_to = '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (!(empty($name) && empty($email) && empty($subject) && empty($message))) {
        include('include/mail.php');
        $email_to = "contact@wandelinstitute.com";
        header("Location: contact.php?Status=" . smtpmailer($email_to, $email, $name, $subject, $message));
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Wandel - Contact</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo-Blue.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-1.css">
    <style>
        .alert {
            padding: 1rem;
            border-radius: 5px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            font-size: x-large;
            width: 60%;
            height: fit-content;
        }

        .alert-success {
            background-color: #42ba96;
        }

        .alert-danger {
            background-color: #fc5555;
        }

        .alert-info {
            background-color: #2E9AFE;
        }

        .alert-warning {
            background-color: #ff9966;
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
                        <h1 class="mb-0">Contact Us</h1>
                        <div class="breadcrumb__list">
                            <span><a href="index.php">Home</a></span>
                            <span class="dvdr">></i></span>
                            <span><a href="employee.php">Contact</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <div class="row no-gutters">
                                <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                    <div class="contact-wrap w-100 p-md-5 p-4" id="display-contact" >
                                        <h3 class="mb-4">Get in touch</h3>
                                        <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="name">Full Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label" for="email">Email Address</label>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="subject">Subject</label>
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label" for="#">Message</label>
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <?php if (isset($_GET['Status'])) {
                                        if ($_GET['Status']) echo "<div class='alert alert-success'>Thanks You !! Your email is sent.</div>";
                                        else echo "<div class='alert alert-danger'>Please try Later, Error Occured while Processing...</div>";
                                    } ?>
                                </div>
                                <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                    <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                        <h3>Let's get in touch</h3>
                                        
                                        <h5 style="color: #fff;">We're open for any suggestion or just to have a chat.<h5> <br><br>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p style="color: #fff;"><span>Address:</span> An der. Spandauer Brucke 8, 10178 Berlin, Germany </p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p><span>Phone:</span> <a href="tel://1234567920">+49 (155)102-92165</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-paper-plane"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@wandelinstitute.com</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-center">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-globe"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p><span>Website</span> <a href="#">www.wandelinstitute.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /*** */ include footer ***/ -->
        <?php include('include/footer.php'); ?>
        <!-- /*** */ include footer ***/ -->

    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/plugins/slick/slick.js"></script>

    <script src="assets/plugins/aos/aos.js"></script>

    <script src="assets/js/script.js"></script>
    <?php if (isset($_GET["Status"])) echo '<script type="text/javascript">document.getElementById("display-contact").style.display = "none";</script>' ?>
</body>

</html>