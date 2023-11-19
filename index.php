<?php

require('include/librery/db.php');

$cookie_name = "user";
$cookie_value = "Woche";
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

$query = "SELECT * FROM ratings";
$resulte = mysqli_query($db, $query);
//    $Count = mysqli_num_rows($resulte);


// $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
// $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
// echo "The URL of current page: ".$CurPageURL;  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Woche</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Logo-Blue.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"> -->

    <link rel="stylesheet" href="assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-1.css">

    <style>
        #form-rev {
            width: 80%;
            border-radius: 20px;
        }

        #fr-groupe {
            width: 80%;
            margin-bottom: 0;
        }

        .Block {
            margin: 10px 0;
            width: 95%;
        }

        #rating-insert {
            display: none;
        }

        .section__title-2 {
            font-weight: 900;
            font-size: 30px;
            margin: 5px 0;
        }

        .main-video {
            margin-top: 20px;
            border: 7px solid #1a76ac;
        }

        #Rowpricing {
            margin-top: 30px;
        }

        #subscriptions {
            margin-bottom: 70px;
        }

        #testimonials {
            margin: 40px;
        }

        #about {
            margin: 70px 0;
        }

        .left,
        .right {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <!-- /*** */ include header ***/ -->
        <?php include('include/header.php'); ?>
        <!-- /*** */ include header ***/ -->
        <section class="home-slide d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-7">
                        <div class="home-slide-face aos" data-aos="fade-up">
                            <div class="home-slide-text ">
                                <h5>Ready to learn ?</h5>
                                <h1 style="color: #000;">Learn Anytime, Anywhere. Accelerate Your Future.</h1>
                                <p>Woche prepares students for their academic and professional futures. We offer year-round quality English language courses and a variety of supportive services for students, explorers, and business professionals. Our instructors use their deep knowledge of languages, cultures, and customs to create engaging tech-smart classes in a modern setting.</p>
                                <ul class="nav header-navbar-rht">
                                    <li class="nav-item">
                                        <a class="nav-link header-sign" href="contact.php">Get Started</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 d-flex align-items-center">
                        <div class="girl-slide-img aos" data-aos="fade-up">
                            <img src="assets/img/website.icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="research__area pt-4 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="research__wrapper-2">
                            <div class="section__title-wrapper-2">
                                <span class="section__title-pre-2">Discover us</span>
                                <h3 class="section__title-2" style="color: #000;">Why choose us ?</h3>
                            </div>
                            <div class="main-video">
                                <script src="https://fast.wistia.com/embed/medias/6xxlyqfj5z.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_6xxlyqfj5z seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/6xxlyqfj5z/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-6">
                        <div class="research__features-wrapper pt-35">
                            <div class="research__features-item d-sm-flex align-items-start mb-40">
                                <div class="research__features-icon mr-25">
                                    <span>

                                        <svg width="27" height="27" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z" stroke="#6151FB" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936" stroke="#6151FB" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4 style="color: #000;">Flexible Schedule</h4>
                                    <p>We provide flexible schedules, you can choose the best day and time for your classes.</p>
                                </div>
                            </div>
                            <div class="research__features-item d-sm-flex align-items-start mb-40">
                                <div class="research__features-icon mr-25">
                                    <span class="yellow-bg">
                                        <svg width="27" height="28" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.00004 5.5833C6.28592 5.5833 7.32833 4.5573 7.32833 3.29165C7.32833 2.02601 6.28592 1 5.00004 1C3.71416 1 2.67175 2.02601 2.67175 3.29165C2.67175 4.5573 3.71416 5.5833 5.00004 5.5833Z" stroke="#F4930E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M9 11.0001C9 9.22632 7.20722 7.79175 5 7.79175C2.79278 7.79175 1 9.22632 1 11.0001" stroke="#F4930E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4 style="color: #000;">Professional Teachers</h4>
                                    <p>We have a team specialized in teaching English from 34 different countries all over the world, and all of them are obsessed with improving your level.</p>
                                </div>
                            </div>
                            <div class="research__features-item d-sm-flex align-items-start">
                                <div class="research__features-icon mr-25">
                                    <span class="green-bg">
                                        <svg width="28" height="28" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.86447 1.72209L7.74447 3.49644C7.86447 3.74343 8.18447 3.98035 8.45447 4.02572L10.0495 4.29288C11.0695 4.46426 11.3095 5.2103 10.5745 5.94625L9.33447 7.19636C9.12447 7.40807 9.00947 7.81637 9.07447 8.10873L9.42947 9.65625C9.70947 10.8812 9.06447 11.355 7.98947 10.7148L6.49447 9.82259C6.22447 9.66129 5.77947 9.66129 5.50447 9.82259L4.00947 10.7148C2.93947 11.355 2.28947 10.8761 2.56947 9.65625L2.92447 8.10873C2.98947 7.81637 2.87447 7.40807 2.66447 7.19636L1.42447 5.94625C0.694466 5.2103 0.929466 4.46426 1.94947 4.29288L3.54447 4.02572C3.80947 3.98035 4.12947 3.74343 4.24947 3.49644L5.12947 1.72209C5.60947 0.759304 6.38947 0.759304 6.86447 1.72209Z" stroke="#20AD96" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="research__features-content">
                                    <h4 style="color: #000;">Adapted Levels</h4>
                                    <p>Our teachers will check your level of English in the first class and will adapt to it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <section class="section share-knowledge">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <div class="join-mentor aos" data-aos="fade-up">
                        <h2 style="color: #000;">Want to grow your knowledge?</br> Join us </h2>
                        <p>We have helped +3000 students to overcome their fears <br> and accompanied them so that they can communicate and move forward.<br> Unlike other academies, our online classes are very creative, flexible,<br> and tailored to the needs of our students.</p>
                        <ul class="course-list">
                            <li><i class="fa-solid fa-circle-check"></i>Best Courses</li>
                            <li><i class="fa-solid fa-circle-check"></i>Top rated Instructors</li>
                        </ul>
                        <div class="all-btn all-category d-flex align-items-center">
                            <a href="about.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="knowledge-img aos" data-aos="fade-up">
                        <img src="assets/img/certificate.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team__area pt-4">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="section__title-wrapper-2 mb-40">
                        <span class="section__title-pre-2">Our Best Teachers</span>
                        <h3 class="section__title-2">+92 Talented Teachers</h3>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="team__wrapper mb-45 pl-70">
                        <p style="font-size: 24px;font-weight:bold;">So good that you will fall in love with the individual classes</p>
                    </div>
                </div>
            </div>
            <div class="row" id="Rowpricing">
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/hobqr9mhia.jsonp" async></script>
                            <script src="https://fast.wistia.com/embed/medias/12a3fgorhc.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_12a3fgorhc seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/12a3fgorhc/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">United States</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/1ckp47e2o2.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_1ckp47e2o2 seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/1ckp47e2o2/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">United Kingdom</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/y99kfd2r1x.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_y99kfd2r1x seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/y99kfd2r1x/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">Ukraine</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/fnbis3cke0.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_fnbis3cke0 seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/fnbis3cke0/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">Spain</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/xsf5i5s4q6.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_xsf5i5s4q6 seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/xsf5i5s4q6/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">Argentina</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-4 col-xl-4 col-lg-4">
                    <div class="team__item text-center mb-40">
                        <div class="team__thumb blueg">
                            <script src="https://fast.wistia.com/embed/medias/v0aaym93lw.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_v0aaym93lw seo=true videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/v0aaym93lw/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="p-2">France</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__area pt-120 pb-120 p-relative" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="about__content pl-70 pr-25">
                        <div class="section__title-wrapper mb-15">
                            <h2 class="section__title">We challenge you to have the same desire as us!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- price area start -->
    <section class="price__area pb-85" id="subscriptions">
        <div class="container">
            <div class="row">

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="price__item white-bg mb-30 transition-3 fix mt-70 left active">
                        <h3 class="price__title text-center">Basic</h3>

                        <div class="price__content">
                            <div class="price__list mb-35">
                                <ul>
                                    <li>2 individual classes of 50 minutes / Week</li>
                                    <li>8 individual classes of 50 minutes / month</li>
                                    <li>Tasks and Personalized Material</li>
                                    <li>Teacher monitoring 7/7 days</li>
                                    <li>Certificación validad</li>
                                    <li>Improve your grammar and vocabulary or increase your fluency in speaking English</li>
                                </ul>
                            </div>
                            <div class="price__btn">
                                <a href="https://buy.stripe.com/7sIcPP3809Lveis6oo" class="tp-btn-9 tp-btn-12 w-100 btn-green-english">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="price__item active white-bg mb-30 transition-3 fix">
                        <h3 class="price__title text-center">Advanced</h3>

                        <div class="price__content">
                            <div class="price__list mb-35">
                                <ul>
                                    <li>3 individual classes of 50 minutes / Week</li>
                                    <li>12 individual classes of 50 minutes / month</li>
                                    <li>Tasks and Personalized Material</li>
                                    <li>Teacher monitoring 7/7 days</li>
                                    <li>Valid certification</li>
                                    <li>Make English a way of life for the next 8 months</li>
                                </ul>
                            </div>
                            <div class="price__btn">
                                <a href="https://buy.stripe.com/28o6rraAse1L0rCbIJ" class="tp-btn-9 tp-btn-12 w-100 btn-green-english">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                    <div class="price__item white-bg mb-30 transition-3 fix mt-70 right active">
                        <h3 class="price__title text-center">Fast Advanced</h3>

                        <div class="price__content">
                            <div class="price__list mb-35">
                                <ul>
                                    <li>4 individual classes of 50 minutes / Week</li>
                                    <li>16 individual classes of 50 minutes / month</li>
                                    <li>Tasks and Personalized Material</li>
                                    <li>Teacher monitoring 7/7 days</li>
                                    <li>Valid certification</li>
                                    <li>Whether you are looking to learn the language for work, travel or pleasure, it will be enough to achieve any ambitious goal.</li>
                                </ul>
                            </div>
                            <div class="price__btn">
                                <a href="https://buy.stripe.com/eVa5nn7oge1L7U4cMO" class="tp-btn-9 tp-btn-12 w-100 btn-green-english">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial__area fix mb-60 mt-30" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper-2 mb-40 text-center">
                        <span class="section__title-pre-2">Testimonials</span>
                        <h3 class="section__title-2">What our Students Say!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="grey-bg-4 card-of-testi">
                        <div class="header mt-10">
                            <div class="ratings">
                                4.6
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star empty"></i>
                                </div>
                                <span>453 reviews</span>
                            </div>
                            <div class="button">
                                <button type="button" id="btn_submit_review">Submit your review</button>
                            </div>
                        </div>

                        <div class="header mt-10" id="rating-insert">
                            <div class="form-group" id="fr-groupe">
                                <input type="email" name="name" class="form-control" id="form-rev" placeholder="Enter your description" value="">
                            </div>
                            <div class="button">
                                <button type="button" id="submit_review">Submit</button>
                            </div>
                        </div>
                        <hr>
                        <div class="body">
                            <?php while ($row = $resulte->fetch_assoc()) : ?>
                                <div class="user-section">
                                    <div class="datas">
                                        <div class="img">
                                            <img src="assets/img/upload/<?= $row['image']; ?>" alt="">
                                        </div>
                                        <div class="name"><?= $row['name']; ?></div>
                                        <div class="date"><?= $row['created_date']; ?> PM</div>
                                    </div>
                                    <div class="ratings">
                                        <?php for ($i = 0; $i < $row['rating']; $i++) : ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p class="desc"><?= $row['desc']; ?></p>
                                </div>
                            <?php endwhile; ?>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        let requestNumbers = document.querySelectorAll('#submit_review');
        $('#btn_submit_review').click(function() {
            $('#rating-insert').css('display', 'flex');
        });
        requestNumbers.forEach(requestNumbers => {
            requestNumbers.addEventListener('click', () => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Thank You !',
                    showConfirmButton: false,
                    timer: 1500
                })
                $(".swal2-styled.swal2-confirm").css('background-color', '#1a76ac');
            });
        });
    </script>
</body>


</html>