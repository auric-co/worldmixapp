<?php
require_once "./home/system/System.php";


$token = "2026395034c5a9";
$sys = new System();
if (isset($_POST['login'])){
    $num = ltrim($_POST['full_number'], '+');
    $pwd = $_POST['pwd'];
    $sys->setMsisdn($num);
    $sys->setPassword($pwd);
    $sys->login();

}

if (isset($_POST['register'])){
    $num = ltrim($_POST['full_number'], '+');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $cdata = json_decode($_POST['countryData'], true);
    $country = $cdata['country'];
    $city = $cdata['city'];

    $sys->setMsisdn($num);
    $sys->setName($name);
    $sys->setLastName($surname);
    $sys->setPassword($pwd);
    $sys->setConfirmPassword($cpwd);
    $sys->setTown($city);
    $sys->setCountry($country);
    $sys->register();
}





?>
<!doctype html>
<html lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up - Worldmix</title>
    <link rel="icon" href="img/logo/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./build/style.css">
    <link rel="stylesheet" href="./build/css/intlTelInput.css">
    <script src="./build/js/intlTelInput.js"></script>
    <style>
        body{
            background: #087cf9;
            background: -webkit-linear-gradient(to left, #087cf9, #37dbf5);
            background: linear-gradient(to left, #087cf9, #37dbf5);
        }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand main_logo" href="/"> <img src="img/logo/logo-full.png" alt="logo" width="100"></a>
                        <a class="navbar-brand single_page_logo" href="/"> <img src="img/logo/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                            </ul>
                        </div>
                        <a href="/" class="d-none d-sm-block btn_1 home_page_btn">Home</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <div class="container h-100">
        <div class="row h-100" style="margin-top: 100px;">
            <div class="col-md-12">
                <div class="form">

                    <ul class="tab-group">
                        <li class="tab active"><a href="#login">Log In</a></li>
                        <li class="tab"><a href="#signup">Sign Up</a></li>

                    </ul>

                    <div class="tab-content">

                        <div id="login">
                            <h1>Welcome Back!</h1>

                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Phone Number</label>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="field-wrap">
                                            <input id="phone" name="phone" type="tel" required autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input type="password" name="pwd" required autocomplete="off"/>
                                </div>

                                <p class="forgot"><a href="#">Forgot Password?</a></p>

                                <button class="button button-block" type="submit" name="login">Log In</button>

                            </form>

                        </div>

                        <div id="signup">
                            <h1>Sign Up </h1>

                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <input type="hidden" id="country" name="countryData">
                                <div class="top-row">
                                    <div class="field-wrap">
                                        <label>
                                            First Name<span class="req">*</span>
                                        </label>
                                        <input type="text" name="name" required autocomplete="off" />
                                    </div>

                                    <div class="field-wrap">
                                        <label>
                                            Last Name<span class="req">*</span>
                                        </label>
                                        <input type="text" name="surname" required autocomplete="off"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Phone Number</label>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="field-wrap">
                                            <input id="phone2" name="phone" type="tel" required autocomplete="off"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required name="pwd" autocomplete="off"/>
                                </div>

                                <div class="field-wrap">
                                    <label>
                                        Confirm Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required name="cpwd" autocomplete="off"/>
                                </div>
                                <div class="field-wrap">
                                    <p class="forgot">By clicking Get Started you agree to WorldMix's <a href="#">Terms and Conditions</a></p>
                                </div>
                                <button type="submit" class="button button-block"  name="register">Get Started</button>

                            </form>

                        </div>
                    </div><!-- tab-content -->

                </div>
            </div>

        </div>
    </div>

    <!--footer start-->
    <footer id="footer"  class="footer">
        <div class="container">
            <div class="footer-menu">
                <div class="row">
                    <div class="col-sm-3">
                    </div><!--/.navbar-header-->
                </div>
            </div>
        <div class="hm-footer-copyright container">
            <div class="row">
                <div class="col-sm-5">
                    <p class="text-white">
                        &copy; Copyright Worldmix
                    </p><!--/p-->
                </div>
            </div>

        </div><!--/.hm-footer-copyright-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up "  data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->
    <!-- jquery plugins here-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script src="js/app.js"></script>

    <script  src="./build/script.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            hiddenInput: "full_number",
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io?token=<?php echo $token; ?>", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    success(countryCode);
                });
            },
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            //preferredCountries: ['zw', 'za'],
            separateDialCode: true,
            utilsScript: "build/js/utils.js"
        });
        
        var input2 = document.querySelector("#phone2");
        var iti = window.intlTelInput(input2,{
            hiddenInput: "full_number",
            initialCountry: "auto",
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io?token=<?php echo $token; ?>", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    success(countryCode);
                });
            },
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            //preferredCountries: ['zw', 'za'],
            separateDialCode: true,
            utilsScript: "build/js/utils.js"
        });
        
        $.get("https://ipinfo.io?token=<?php echo $token; ?>", function(response) {
          
          $("#phone2").on("blur", function(){
                $("#country").val(JSON.stringify(response));
            });
          
          
          
        }, "jsonp")
    </script>
</body>

</html>