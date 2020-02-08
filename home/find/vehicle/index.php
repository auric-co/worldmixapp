<?php
require_once "../../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}

if (isset($_POST['save'])){

    $name = $_POST['name'];
    $subcat1 = $_POST['subcat1'];//mode
    $subcat2 = $_POST['subcat2'];//type
    $subcat3 = $_POST['subcat3'];//model
    $brand = $_POST['brand'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $town = $_POST['city'];
    $country = $_POST['country'];
    $price = $_POST['minPrice']."-".$_POST['maxPrice'];

    $sys->setToken($sys->getUserToken());
    $sys->setName($name);
    $sys->setMode($subcat1);
    $sys->setType($subcat2);
    $sys->setModel($subcat3);
    $sys->setBrand($brand);
    $sys->setFuel($fuel);
    $sys->setTransmission($transmission);
    $sys->setTown($town);
    $sys->setCountry($country);
    $sys->setPrice($price);
    $sys->requestVehicle();
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
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/range.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="<?php echo  $sys->domain()?>/home/post/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            //vehicles
            $('#mode').on('change',function(){
                var modeID = $(this).val();

                if(modeID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/vehicleAjax.php',
                        data:'mode_id='+modeID,
                        success:function(html){
                            $('#type').html(html);
                            $('#subtype').html('<option value="">Select Type first</option>');
                        }
                    });
                }else{
                    $('#type').html('<option value="">Select Mode first</option>');
                    $('#subtype').html('<option value="">Select Sub Type first</option>');
                }
            });

            $('#type').on('change',function(){
                var typeID = $(this).val();
                if(typeID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/vehicleAjax.php',
                        data:'type_id='+typeID,
                        success:function(html){
                            $('#subtype').html(html);
                        }
                    });
                }else{
                    $('#subtype').html('<option value="">Select Type first</option>');
                }
            });

            $('#subtype').on('change',function(){
                var typeID = $(this).val();
                if(typeID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/vehicleAjax.php',
                        data:'subtype_id='+typeID,
                        success:function(html){
                            $('#subtype').html(html);
                            getBrands();
                        }
                    });
                }else{
                    $('#subtype').html('<option value="">Select Type first</option>');
                }
            });


            //third country start
            $('#country3').on('change',function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/countriesAjax.php',
                        data:'country_id='+countryID,
                        success:function(html){
                            console.log(html);
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

            function getBrands() {
                var typeID = $('#type').val();
                var subtypeID = $('#subtype').val();
                var modeID = $('#mode').val();
                if(typeID && subtypeID && modeID){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>/home/post/vehicleAjax.php',
                        data:'mode_id = '+ modeID+'&type_id = '+ typeID+'subtype_id='+subtypeID,
                        success:function(html){
                            $('#brand').html(html);
                        }
                    });
                }else{
                    $('#brand').html('<option value="">Select Type first</option>');
                }
            }


        });
    </script>
    <title>Find Vehicle - WorldMix</title>
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
            <div class="row"><div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home/find">Find</a></li>
                        <li class="breadcrumb-item active">Vehicle</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Title</label>
                                <div class="col-md-12">
                                    <input id="name" name="name" maxlength="45" type="text" placeholder="Display Name" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Select Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="mode">Select Mode of Travel</label>
                                <div class="col-md-12">
                                    <select id="mode" name="subcat1" class="form-control">
                                        <?php
                                        $cat = $sys->getSubcat1(4);
                                        if (sizeof($cat) > 0){
                                            echo '<option>Select Mode</option>';
                                            foreach($cat as $key){
                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                            }
                                        }else{
                                            echo '<option>No Mode of travel found</option>';
                                        }


                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="type">Select Type</label>
                                <div class="col-md-12">
                                    <select id="type" name="subcat2" class="form-control">
                                        <option value="">Select Mode First</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="subtype">Select Model</label>
                                <div class="col-md-12">
                                    <select id="subtype" name="subcat3" class="form-control">
                                        <option value="">Select Type First</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="brand">Select Brand</label>
                                <div class="col-md-12">
                                    <select id="brand" name="brand" class="form-control">
                                        <option value="">Select Sub Type First</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Fuel Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="fuel">Select Fuel Type</label>
                                <div class="col-md-12">
                                    <select id="fuel" name="fuel" class="form-control">
                                        <option value="petrol">Petrol</option>
                                        <option value="diesel">Diesel</option>
                                        <option value="electric">Electric</option>
                                        <option value="hybrid">Hybrid</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Select Type -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="transmission">Select Transmission</label>
                                <div class="col-md-12">
                                    <select id="transmission" name="transmission" class="form-control">
                                        <option value="Manual">Manual</option>
                                        <option value="Auto">Auto</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label" for="town">Select Town</label>
                                <div class="col-md-12">
                                    <select id="town" name="town" class="form-control">
                                        <option value="Manual">Manual</option>
                                        <option value="Auto">Auto</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="price">Price</label>
                                <div class="col-md-12">
                                    <div class="selector">
                                        <div class="price-slider">
                                            <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                            </div>
                                            <span id="min-price" data-currency="$" class="slider-price">500</span> <span class="seperator">-</span> <span id="max-price" data-currency="$" data-max="10000"  class="slider-price">100000 +</span>
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
                                    <button id="save" name="save" type="submit" class="btn btn-success">Ok</button>
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
</script><script  src="<?php echo  $sys->domain()?>/home/js/vehicleRange.js"></script>
</body>
</html>
