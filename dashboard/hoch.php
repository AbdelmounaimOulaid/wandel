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
    <title>Wandel</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo-Blue.png">
    <link rel="stylesheet" type="text/css" href="assets/css/Popup.css">
    <style>
        .btn-primary {
            background-color: transparent !important;
            color: #30b7ff !important;
            font-size: large !important;
            font-weight: 600 !important;
            border: 2px solid !important;
        }

        .video-img {
            border: 8px solid #30b7ff;
            height: 384px;
            width: 700px;
        }

        .video-txt h2 {
            color: #303030;
            font-size: 3rem;
            margin-bottom: 35px;
        }

        @media only screen and (max-width: 788px) {
            .video-1-holder {
                padding: 30px 0 !important;
            }


            .video-txt h2 {
                font-size: 1.4rem;
            }
        }
    </style>
    <?php include('dash-header/dash-header.php') ?>


    <div class="video-1-holder">
        <div class="row d-block align-items-center">

            <!-- VIDEO TEXT -->
            <div class="col-md-12 ">
                <div class="video-txt" style="text-align: center;margin-top:25px;">
                    <h2>How to order your VoIP number in Poland</h2>
                </div>
            </div> <!-- END VIDEO TEXT -->
            <!-- VIDEO LINK -->
            <div class="col-md-12">
                <div class="video-link text-center" style="border: 7px solid #30b7ff;">

                    <!-- Change the link HERE!!! -->
                    <div class="play-btn play-btn-rose text-center">

                        <div class="main-video">
<script src="https://fast.wistia.com/embed/medias/793ixjd1eh.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_793ixjd1eh seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/793ixjd1eh/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
</div>
                    </div>

                </div>
            </div> <!-- END VIDEO LINK -->


            <!-- VIDEO TEXT -->
            <div class="col-md-12 ">
                <div class="video-txt" style="text-align: center;margin-top:25px;">
                    <a href="https://www.remitly.com/" target="_blank" class="btn btn-primary btn-round waves-effect waves-light">Order with <img src="assets/images/Logo_Full.png" style="width: 85px;"></a>
                </div>
            </div> <!-- END VIDEO TEXT -->


        </div> <!-- End row -->
    </div> <!-- End video-1-holder -->
    <?php include('dash-header/end-dash.php') ?>

    </body>

</html>