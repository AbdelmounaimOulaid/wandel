<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/Logo-Blue.png">

  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
  <!-- <link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css"> -->
  <!-- 
<link rel="stylesheet" href="../../assets/plugins/slick/slick.css">
<link rel="stylesheet" href="../../assets/plugins/slick/slick-theme.css"> -->
  <!-- 
<link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="../../assets/plugins/aos/aos.css"> -->

  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/style-1.css">
  <!-- <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="../assets/global.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <title>Wandel</title>
</head>
<style>
  .fa-brands {
    line-height: inherit;
  }

  body {

    background: #f8faf5;

  }



  p {
    color: #404F5E;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-size: 20px;
    margin: 20px;
    font-weight: 600;
  }

  .checkmark {
    color: #9ABC66;
    font-size: 60px;
    line-height: 155px;
    margin-left: -10px;
  }

  #footer {
    margin-top: 120px;
  }

  .card {
    width: 65%;
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
  }

  .Text {
    color: #404F5E;
    font-size: 18px;
    margin: 40px 20px 0;
    font-weight: 100;
    text-align: center;
  }

  .Text strong {
    font-weight: 700;
    color: #000;
  }

  .header-nav {
    height: 93px;
    background-color: #fff;
  }

  .header-fixed {
    background-color: #fff;
  }

  .card-whatsapp {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container-whatsapp {
    width: 500px;
    height: fit-content;
    padding: 10px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid transparent;
    border-radius: 12px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
  }

  .img-for-wtp {
    position: relative;
    border: 1px solid transparent;
    background: url('../../assets/img/logo.jpg');
    background-size: cover;
    border-radius: 50%;
    width: 50px;
    height: 50px;
  }

  .text-whatsapp {
    text-align: left;
  }

  .text-contact {
    font-weight: 100;
    font-size: small;
  }

  .btn {
    color: white;
    background-color: #25d366;
    margin: 0px;
  }

  .container-whatsapp .fa-square-whatsapp {
    position: absolute;
    border: 0px solid black;
    color: #25d366;
    bottom: 0;
    right: 0;
    scale: 200%;
  }

  @media (max-width: 767.98px) {
    
    .card {
      width: 80%;
      padding: 20px 2px;
    }
    .Text{
      color: #000 !important;
    }
    .card .text-received{
      font-size: 20px !important;
    }
    .card-whatsapp{
      padding: 30px;
    }
    .text-contact{
      font-size: small;
    }
    .text-whatsapp{
      text-align: center;
    }
    .container-whatsapp{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .checkmark{
      position: absolute;
      width: auto;
      height: auto;
      font-size: 300%;
      color:white;
    }
    .check{
      width: 75px !important;
      height: 75px !important;
      background: green !important;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  }
</style>

<body>
  <div class="main-wrapper" style="margin: 120px 0;">
    <!-- /*** */ include header ***/ -->
    <?php include('../include/header.php'); ?>
    <div style="text-align: center;">
      <div class="card">
        <div  class="check" style="border-radius:200px; height: 150px; width: 150px; background: #F8FAF5; margin:0 auto; position:relative;">
          <i class="checkmark">✓</i>
        </div>
        <p class="text-received" style="color: #000;font-size:30px">We received your application successfully</p>
        <p class="Text">Please make sure to provide your application ID <strong> (#W78553CHC) </strong> to the hiring team at WhatsApp to confirm your application, otherwise your application will be cancelled.
        </p>
          <!-- <br><br><br> -->
        <div class="card-whatsapp">

          <div class="container-whatsapp">
            <div class="img-for-wtp">
              <i class="fa-brands fa-square-whatsapp"></i>
            </div>
            <div class="text-whatsapp">
              <p> <span class="text-contact">
                  CONTACT US ON WHATSAPP
                </span>
                <br>
                <span>+49 (155)102-92165</span>
              </p>
            </div>
            <button onclick="whatsappGo()" class="btn">Contact Us</button>
          </div>
        </div>
        <!-- <button class="btn"><i class="fa-brands fa-whatsapp"></i>Contact Us</button> -->
        <!-- <a href="https://wa.me/"><img src="../../assets/img/whatsapp-success.png"  width="10%"/></a> -->
      
      </div>
    </div>

    <?php include('../include/footer.php'); ?>
  </div>

</body>

</html>

<script>
      function whatsappGo(){
        location.href = 'https://wa.me/message/PPDNDTZCJGYJC1'
      }
</script>