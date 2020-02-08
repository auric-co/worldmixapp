<?php
require_once "../../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}

if (isset($_POST['save'])){


    $cat = $_POST['subcat1'];
    $name = $_POST['name'];
    $bedrooms = $_POST['bedrooms'];
    $town = $_POST['city'];
    $start = $_POST['date'];
    $name = $_POST['name'];
    $country = $_POST['country'];
    $price = $_POST['minPrice']."-".$_POST['maxPrice'];

    $sys->setToken($sys->getUserToken());
    $sys->setCategory($cat);
    $sys->setName($name);
    $sys->setBedrooms($bedrooms);
    $sys->setPrice($price);// how to pass range
    $sys->setDateStart($start);
    $sys->setTown($town);
    $sys->setCountry($country);// needs to change to be dynamic
    $sys->requestAccommo();
}

?>
<!DOCTYPE html>
<base href="../../">
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo  $sys->domain()?>/img/logo/favicon.png">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/linearicons/Web Font/style.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/estilos.css">
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/range.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo  $sys->domain()?>/home/post/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('#country3').on('change',function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/countriesAjax.php',
                        data:'country_id='+countryID,
                        success:function(html){
                            $('#state3').html(html);
                            $('#city3').html('<option value="">Select state first</option>');
                        }
                    });
                }else{
                    $('#state3').html('<option value="">Select country first</option>');
                    $('#city3').html('<option value="">Select state first</option>');
                }
            });

            $('#state3').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/countriesAjax.php',
                        data:'state_id='+stateID,
                        success:function(html){
                            $('#city3').html(html);
                        }
                    });
                }else{
                    $('#city3').html('<option value="">Select state first</option>');
                }
            });
            //third country end

        });
    </script>
    <title>Find Accommodation - WorldMix</title>
</head>
<body>
<header class="p-fixed">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-auto hidden-sm-down logo">
                <a href="<?php echo  $sys->domain()?>/home">
                    <img src="<?php echo  $sys->domain()?>/img/logo/logo.png" alt=""><span class="text-white">WorldMix</span>
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-6 search flex-last flex-sm-unordered">

            </div>
            <nav class="col-12 col-sm-3 col-lg-2 d-flex justify-content-around justify-content-sm-between mb-3 mb-sm-0 ml-auto menu p-0">

                <a href="<?php echo  $sys->domain()?>/home/settings/" class="d-inline-block"><img src="<?php echo  $sys->domain()?>/home/img/persona2.jpg" width="22" height="22" class="rounded-circle" alt=""></a>
            </nav>
        </div>
    </div>
</header>

<main class="container">
    <div class="row">
        <!-- col nav -->
        <div class="col-12 col-md-3 menu-left pl-md-0">
            <!-- nav -->
            <nav class="navbar navbar-toggleable-sm px-0 py-1 mx-auto">
                <div class="container p-0 d-flex align-items-center">
                    <!-- icon bar -->
                    <i class="navbar-toggler navbar-toggler-right fa fa-bars mb-0" data-toggle="collapse" data-target="#bc-menu" aria-controls="bc-menu" aria-expanded="false" aria-label="menu" id="btn-bar">
                    </i>
                    <!-- navbar-brand -->
                    <a href="#" class="navbar-brand text-white hidden-md-up ml-2">Menu</a>
                    <!-- modal collapse -->
                    <div class="navbar-collapse collapse hidden-md-up mr-auto fade w-75 hidden-md-up" id="bc-menu">
                        <div class="modal-body p-4 p-md-0 w-100" id="modal-body">
                            <!-- close button -->
                            <button type="button" name="button" class="close mb-5 d-md-none" id="close">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>

                            <ul class="p-0 mt-4 mt-md-0">
                                <li class="nav-item"><a href="<?php echo  $sys->domain()?>/home" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-home mr-3"></i>Home</a></li>
                                <li class="nav-item"><a href="<?php echo  $sys->domain()?>/home/find" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-cart mr-3"></i>Buy</a></li>
                                <li class="nav-item"><a href="<?php echo  $sys->domain()?>/home/post" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-store mr-3"></i>Sell</a></li>
                                <li class="nav-item"><a href="<?php echo  $sys->domain()?>/home/settings" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-cog mr-3"></i>Settings</a></li>
                                <li class="nav-item"><a href="<?php echo  $sys->domain()?>/home/logout.php" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-lock mr-3"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>

      <!-- col principal-container -->
      <div class="col mt-4">

        <div class="publicacion mb-5">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home/find">Find</a></li>
                        <li class="breadcrumb-item active">Accommodation</li>
                    </ul>
                    <hr>
                </div>

                <div class="col-md-12">
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="name">Title</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" maxlength="70" type="text" class="form-control input-md" placeholder="Display Title">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="subcat1">Select Category</label>
                                <div class="col-md-12">
                                    <select id="subcat1" name="subcat1" class="form-control">
                                        <?php
                                        $cat = $sys->getSubcat1(2);
                                        if (sizeof($cat) > 0){
                                            echo '<option>Select Category</option>';
                                            foreach($cat as $key){
                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                            }
                                        }else{
                                            echo '<option>No Categories found</option>';
                                        }


                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="bedrooms">No of Bedrooms</label>
                                <div class="col-md-9">
                                    <input id="bedrooms" name="bedrooms" maxlength="3" type="number" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="date">Start Date</label>
                                <div class="col-md-9">
                                    <input id="date" name="date" type="date" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label" for="price">Price (per month)</label>
                                <div class="col-md-12">
                                    <div class="selector">
                                        <div class="price-slider">
                                            <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                            </div>
                                            <span id="min-price" data-currency="$" class="slider-price">5</span> <span class="seperator">-</span> <span id="max-price" data-currency="$" data-max="10000"  class="slider-price">10000 +</span>
                                        </div>
                                        <input type="hidden" id="min_range" name="minPrice">
                                        <input type="hidden" id="max_range" name="maxPrice">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label" for="country3">Select Country</label>
                                <div class="col-md-8">
                                    <select id="country3" name="country" class="form-control">
                                        <?php
                                        $cat = $sys->getCountries();
                                        if (sizeof($cat) > 0){
                                            echo '<option>Select Country</option>';
                                            foreach($cat as $key){
                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                            }
                                        }else{
                                            echo '<option value="city">No Country found</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="state3">Select State</label>
                                <div class="col-md-8">
                                    <select name="state" class="form-control" id="state3">
                                        <option value="">Select country first</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="city3">Select City</label>
                                <div class="col-md-8">
                                    <select name="city" id="city3" class="form-control">
                                        <option value="">Select state first</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                                <div class="col-md-8">
                                    <button id="post" name="save" type="submit" class="btn btn-success">Ok</button>
                                    <button id="cancel" name="cancel" type="reset" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>

            </div>
          </div>

      </div>

      </div>
      <div class="row">

          <!-- Publicidades -->
          <div class="col-md-5 publicity hidden-md-down mt-3">
              <footer class="fixed-bottom m-4">
                  <a href="#" class="mr-2">Privacy Policy</a>
                  <a href="#" class="mr-2">Terms of Use</a>
                  <a href="#" class="mr-2">Listings Policy</a>
                  <p class="mt-2">WorldMix © <?php echo date("Y");?></p>
              </footer>
          </div>
      </div>
  </main>

  <div class="hidden-md-up" id="modalBackdrop"></div>

<script src="<?php echo $sys->domain()?>/home/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/tether.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/bootstrap.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'>
</script><script  src="<?php echo  $sys->domain()?>/home/js/range.js"></script>
</body>
</html>
