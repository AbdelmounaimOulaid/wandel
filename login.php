<?php
session_start();

// if (!isset($_SESSION['int_email'])) {
//     header("Location: login.php?q=Intern");
//     exit();
// }else{
//     header("Location: Dashboard/index.php");
//     exit();
// }
// if (!isset($_SESSION['email'])) {
//     header("Location: login.php?q=Employee");
//     exit();
// }else{
//     header("Location: employee.php");
//     exit();
// }
/********************
 *         $query = "SELECT * FROM employee WHERE email_employee='{$email_employee}' and pass_employee='{$password_employee}'";
        $int_query = "SELECT * FROM intern WHERE int_email='{$email_employee}' and int_password='{$password_employee}'";
        $resulte = mysqli_query($db, $query);
        if (mysqli_num_rows($resulte) === 1) {
        } else if (mysqli_num_rows(mysqli_query($db, $int_query))) {
            $_SESSION['email'] = $email_employee;
            header("Location: dashboard/index.php");
            exit();
        } else {
            $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
        }********************** */
include('include/librery/db.php');
$msg = "";
if (isset($_POST['submit'])) {
    $email_employee = $_POST['email'];
    $password_employee = $_POST['pass'];
    if (!empty($email_employee) && !empty($password_employee)) {
        switch ($_GET['q']) {
            case 'Employee':
                $query = "SELECT * FROM employee WHERE email_employee='{$email_employee}' and pass_employee='{$password_employee}'";
                if (mysqli_num_rows(mysqli_query($db, $query)) === 1) {
                    $_SESSION['email'] = $email_employee;
                    header("Location: employee.php");
                    exit();
                } else {
                    $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
                }
            case 'Intern':
                $int_query = "SELECT * FROM intern WHERE int_email='{$email_employee}' and int_password='{$password_employee}'";
                if (mysqli_num_rows(mysqli_query($db, $int_query)) === 1) {
                    $_SESSION['int_email'] = $email_employee;
                    header("Location: dashboard/index.php");
                    exit();
                } else {
                    $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
                }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Woche - Login</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo-Blue.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .alert {
            padding: 1rem;
            border-radius: 5px;
            color: white;
            margin: 1rem 0;
            font-weight: 500;
            width: 100%;
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

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme" style="width: 650.5px;margin-right: 24px;padding: 70px;">
                    <a href="index.php"><img src="assets/img/Login/log-in.png" alt="login"></a>
                </div>
            </div>

            <div class="col-md-6 login-wrap-bg">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo">
                                <img src="assets/img/Logo-Blue.png" class="img-fluid" alt="Logo">
                                <div class="back-home">
                                    <a href="index.php">Back to Home</a>
                                </div>
                            </div>
                            <h1>Sign into Your Account</h1>
                            <?php echo $msg ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="pass" class="form-control pass-input" placeholder="Enter your password">
                                        <span class="feather-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="forgot">
                                    <span><a class="forgot-link" href="contact.php">Forgot Password ?</a></span>
                                </div>
                                <div class="remember-me">

                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" name="submit" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="google-bg text-center">
                        <p class="mb-0">New User ? <a href="contact.php">Create an Account</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>