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
    <title>Woche</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo-Blue.png">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style-1.css">
    <style>
        .pricing-content ul li span i {
            color: green;
            padding: 2px;
        }

        #svg-78604338-263886854-title {
            cursor: pointer;
        }

        #payment {
            padding: 8px;
            border: 2px solid #30b7ee;
            border-radius: 40px;
        }

        .price__item.active {
            border-color: #30b7ff !important;
        }

        .price__list ul li span {
            border: 1px solid #30b7ff !important;
            background-color: #30b7ff !important;
        }

        select#payment {
            border: 1px solid #30b7ff !important;
            color: #30b7ff !important;
        }

        .tp-btn-9 {
            background-color: #30b7ff !important;
            border-color: #30b7ff !important;
        }
    </style>
    <?php include('dash-header/dash-header.php') ?>
    <div class="container">
        <div class="row justify-content-center">
            <section class="price__area pb-85">
                <div class="container ">
                    <div class="row d-flex justify-content-center" id="order">
                        <div class="col-12 col-md-6">
                            <div class="price__item white-bg mb-30 transition-3 fix active">
                                <h3 class="price__title text-center">VoIP Service Pack</h3>
                                <div class="price__content">
                                    <div class="price__amount mb-30 text-center">
                                        <h4 class="pricejs">$49.00 <span class="d-block"> per user/month</span></h4>
                                    </div>
                                    <form class="text-center pb-4">
                                        <select name="payment" id="payment">
                                            <option value="month">Monthly Payment</option>
                                            <option value="annual">Annual Payment</option>
                                        </select>
                                    </form>
                                    <div class="price__list mb-35">
                                        <ul>
                                            <li>Unlimited voice calling to 80 countries <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Work on: Unified mobile, desktop, and web app <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Multi-level auto attendant <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Call handling <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Secure HD voice <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Voicemail transcription <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Team messaging with document sharing <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Advanced moderator controls of audio and video meetings <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Single sign-on <span><i class="fa-solid fa-check"></i></span></li>
                                            <li>Unlimited internet fax <span><i class="fa-solid fa-check"></i></span></li>
                                        </ul>
                                    </div>
                                    <div class="price__btn">
                                        <a href="Voip.php" class="tp-btn-9 tp-btn-12 w-100">Order</a>
                                    </div>
                                    <div class="text-center" style="font-size: 15px;">
                                        Powered by<a> <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="svg-78604338-263886854-title" class="logo__img" fill="none" height="100" id="svg-78604338-263886854" role="img" viewBox="0 0 961 208" width="100">
                                                
                                                <path d="M960.999 24.4572H938.465V168.267H960.999V24.4572Z" fill="#FF7A00"></path>
                                                <path clip-rule="evenodd" d="M881.913 72.6667C861.113 72.6667 844.98 82.7619 842.256 103.371H864.408C865.97 95.6 871.704 90.9334 881.913 90.9334C893.761 90.9334 899.208 97.7334 899.208 108.419V113.276H876.465C855.513 113.276 840.027 122.61 840.027 141.657C840.027 160.705 852.656 170.61 870.923 170.61C885.113 170.61 894.446 164.571 899.494 154.857H900.465V168.19H921.837V109.143C921.742 86.3619 910.084 72.6667 881.913 72.6667ZM877.342 153.314C868.599 153.314 863.151 149.029 863.151 141.886C863.151 133.714 868.98 129.448 879.475 129.448H899.094L899.208 130.8C899.208 144.933 891.037 153.314 877.342 153.314Z" fill="#FF7A00" fill-rule="evenodd"></path>
                                                <path clip-rule="evenodd" d="M800.085 168.267V119.886C800.085 105.505 809.037 96.3619 823.208 96.3619H832.085V74.9905H822.942C812.256 74.9905 804.485 79.0667 799.627 88.2095H798.846V74.9905H777.666V168.324L800.085 168.267Z" fill="#FF7A00" fill-rule="evenodd"></path>

                                                <path clip-rule="evenodd" d="M763.361 147.676V168.267H748.008C726.428 168.267 714.58 158.267 714.58 136.686V93.5048H699.228V74.9905H714.58V50.2286H737.132V74.9905H763.361V93.5048H737.132V134.076C737.132 142.629 742.18 147.676 750.732 147.676H763.361Z" fill="#FF7A00" fill-rule="evenodd"></path>

                                                <path clip-rule="evenodd" d="M625.379 168.267V114.248C625.379 101.029 633.551 92.381 646.751 92.381C659.379 92.381 666.96 99.6762 666.96 113.962V168.267H689.532V110.362C689.532 86.8381 678.103 72.6667 654.751 72.6667C640.541 72.6667 629.684 79.0667 624.827 87.8095H624.027V74.9905H602.903V168.324L625.379 168.267Z" fill="#FF7A00" fill-rule="evenodd"></path>

                                                <path clip-rule="evenodd" d="M542.523 152.152C528.332 152.152 518.808 142.629 518.427 127.657H587.418L587.323 120.362C587.323 89.0857 567.113 72.7429 542.427 72.7429C515.761 72.7429 496.275 91.7905 496.275 121.714C496.275 151.638 514.351 170.686 542.427 170.686C565.932 170.686 581.284 158.248 585.761 139.981H563.894C561.475 146.99 555.532 152.152 542.523 152.152ZM542.427 91.4095C557.189 91.4095 565.932 99.7714 566.523 111.429H518.332C520.465 99.581 527.646 91.4095 542.427 91.4095Z" fill="#FF7A00" fill-rule="evenodd"></path>

                                                <path clip-rule="evenodd" d="M428.827 170.8C462.446 170.8 481.494 152.152 485.97 124.457H463.113C459.722 137.086 450.522 148.743 428.827 148.743C406.484 148.743 388.599 133.505 388.599 100.152C388.599 66.8 406.484 51.6 428.827 51.6C451.17 51.6 460.122 63.2572 463.113 75.6952H485.97C482.275 48 463.513 29.981 428.827 29.981C391.513 29.981 364.503 56.0191 364.503 100.457C364.503 144.895 391.513 170.933 428.827 170.933V170.8Z" fill="#FF7A00" fill-rule="evenodd"></path>

                                                <path clip-rule="evenodd" d="M327.875 74.9904V87.7904H326.808C321.761 78.8571 311.265 72.6476 296.332 72.6476C274.465 72.6476 254.751 89.9428 254.751 120.457C254.751 150.971 274.18 168.457 296.332 168.457C310.713 168.457 319.189 162.609 325.684 152.705H326.713V172.362C326.713 182.857 320.884 187.714 311.361 187.714H265.646V207.79H310.922C335.989 207.79 349.399 193.79 349.399 170.857V74.9904H327.875ZM302.522 148.057C287.551 148.057 278.027 138.743 278.027 120.476C278.027 102.209 287.456 92.8762 302.522 92.8762C317.094 92.8762 326.808 102.19 326.808 120.476C326.808 138.762 317.189 148.057 302.522 148.057Z" fill="#0684BC" fill-rule="evenodd"></path>
                                                <path clip-rule="evenodd" d="M176.865 168.267V114.248C176.865 101.029 185.037 92.381 198.256 92.381C210.884 92.381 218.465 99.6762 218.465 113.962V168.267H240.998V110.362C240.998 86.8381 229.57 72.6667 206.218 72.6667C192.027 72.6667 181.056 79.0667 176.198 87.8095H175.418V74.9905H154.332V168.324L176.865 168.267Z" fill="#0684BC" fill-rule="evenodd"></path>
                                                <path d="M135.284 74.9905H112.751V168.267H135.284V74.9905Z" fill="#0684BC"></path>
                                                <path clip-rule="evenodd" d="M73.4938 103.943V103.029C87.2842 99.2191 96.6176 89.962 96.6176 69.162C96.6176 47.7905 80.6747 32.2286 51.1319 32.2286H0.998535V168.267H24.3128V114.248H52.6938C65.9128 114.248 72.5223 120.857 72.5223 134.076V168.362H95.8366V134.076C95.8366 114.838 87.6652 107.067 73.4938 103.943ZM49.8747 93.2572H24.3128V53.2572H49.8747C62.5033 53.2572 72.2176 58.5144 72.2176 73.2763C72.2176 88.0382 62.4081 93.2572 49.8747 93.2572Z" fill="#0684BC" fill-rule="evenodd"></path>
                                                <path clip-rule="evenodd" d="M124.008 60.0191C126.971 60.0229 129.868 59.1475 132.333 57.5039C134.798 55.8603 136.72 53.5222 137.855 50.7858C138.991 48.0493 139.289 45.0375 138.712 42.1316C138.135 39.2256 136.708 36.5562 134.614 34.4613C132.519 32.3663 129.849 30.9401 126.943 30.363C124.037 29.7859 121.025 30.084 118.289 31.2195C115.553 32.355 113.215 34.2769 111.571 36.7419C109.927 39.2068 109.052 42.104 109.056 45.0667C109.03 48.0324 109.895 50.9375 111.539 53.4062C113.182 55.8749 115.529 57.7937 118.275 58.9143C120.091 59.6692 122.042 60.0451 124.008 60.0191Z" fill="#FF7A00" fill-rule="evenodd"></path>
                                                <path clip-rule="evenodd" d="M106.827 3.58098C101.369 5.86562 96.4121 9.19834 92.2366 13.3905L102.808 23.9619C105.579 21.175 108.872 18.9612 112.499 17.4471C116.126 15.9331 120.016 15.1483 123.946 15.1377C127.876 15.1271 131.77 15.8908 135.405 17.3853C139.04 18.8798 142.346 21.0757 145.132 23.8476L155.703 13.2762C149.426 7.01155 141.433 2.74724 132.734 1.02169C124.035 -0.703868 115.02 0.186712 106.827 3.58098Z" fill="#FF7A00" fill-rule="evenodd"></path>
                                            </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include('dash-header/end-dash.php') ?>

    <script type="text/javascript">
        let select = document.getElementById("payment");
        let value, text;

        select.addEventListener('change', function(e) {
            value = select.value, text = select.options[select.selectedIndex].text;


            if (text == 'Annual Payment') {
                sessionStorage.setItem('price', '$490.00');
                document.querySelector('.pricejs').innerHTML = '$490.00 <span class="d-block"> per user/12 months</span>';
            } else {
                sessionStorage.setItem('price', '$49.00');
                document.querySelector('.pricejs').innerHTML = '$49.00 <span class="d-block"> per user/month</span>';
            }
        });
    </script>
    </body>

</html>