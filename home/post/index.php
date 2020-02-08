<?php
require_once "../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}
$notif = "";
if (isset($_POST['service'])){
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $notes = $_POST['details'];

    $sys->setCategory($cat);
    $sys->setName($name);
    $sys->setDesc($notes);
    $sys->setToken($sys->getUserToken());
    $sys->postService();
}

if (isset($_POST['vehicle'])){
    $name = $_POST['name'];
    $subcat1 = $_POST['subcat1'];//mode
    $subcat2 = $_POST['subcat2'];//type
    $subcat3 = $_POST['subcat3'];//model
    $brand = $_POST['brand'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $notes = $_POST['details'];
    $town = $_POST['city'];
    $country = $_POST['country'];
    $price = $_POST['price'];


    $target_dir = "../uploads/images/thumbnails/";
    $target_file = $target_dir  . basename($_FILES["file"]["name"]);
    $uploadOk =1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);

    if($check !== false) {
        ;
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {

            echo "<script>alert('Sorry, file already exists!')</script>";
            echo "<script>window.open('index.php?&error=failed-upload-img-exist','_self')</script>";
            $uploadOk = 0;
        }
        // Check file size
        // Should also check if image dimensions fit for our display, template dimensions should be like this 486 width 648.
        if ($_FILES["file"]["size"] > 5000000) {

            echo "<script>alert('Sorry, your file is too large!')</script>";
            echo "<script>window.open('index.php?error=failed-file-large','_self')</script>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!')</script>";
            echo "<script>window.open('index.php?error=failed-file-not-supported','_self')</script>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded!')</script>";
            echo "<script>window.open('index.php?error=&utm_atc=error!Failed-upload','_self')</script>";
            // if everything is ok, try to upload file
        } else {
            $basename = bin2hex(random_bytes(8));
            $filename = sprintf('%s.%0.8s', $basename, $imageFileType);

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$filename)) {

                $sys->setToken($sys->getUserToken());
                $sys->setName($name);
                $sys->setMode($subcat1);
                $sys->setType($subcat2);
                $sys->setModel($subcat3);
                $sys->setBrand($brand);
                $sys->setFuel($fuel);
                $sys->setTransmission($transmission);
                $sys->setDesc($notes);
                $sys->setTown($town);
                $sys->setCountry($country);
                $sys->setPrice($price);
                $sys->setThumbnail($filename);
                $sys->postVehicle();
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file!')</script>";
                echo "<script>window.open('index.php?error=error!Failed-upload','_self')</script>";
            }
        }
    } else {
        echo "<script>alert('File is not an image!')</script>";
        echo "<script>window.open('index.php?error=File-not-image','_self')</script>";
        $uploadOk = 0;
    }



}

if (isset($_POST['property'])){
    $cat = $_POST['subcat1'];
    $name = $_POST['name'];
    $bedrooms = $_POST['bedrooms'];
    $dt = $_POST['date'];
    $town = $_POST['city'];
    $country = $_POST['country'];
    $price = $_POST['price'];
    $notes = $_POST['details'];

    $target_dir = "../uploads/images/thumbnails/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk =1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        ;
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {

            echo "<script>alert('Sorry, file already exists!')</script>";
            echo "<script>window.open('index.php?&error=failed-upload-img-exist','_self')</script>";
            $uploadOk = 0;
        }
        // Check file size
        // Should also check if image dimensions fit for our display, template dimensions should be like this 486 width 648.
        if ($_FILES["file"]["size"] > 5000000) {

            echo "<script>alert('Sorry, your file is too large!')</script>";
            echo "<script>window.open('index.php?error=failed-file-large','_self')</script>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {

            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed!')</script>";
            echo "<script>window.open('index.php?error=failed-file-not-supported','_self')</script>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded!')</script>";
            echo "<script>window.open('index.php?error=&utm_atc=error!Failed-upload','_self')</script>";
            // if everything is ok, try to upload file
        } else {
            $basename = bin2hex(random_bytes(8));
            $filename = sprintf('%s.%0.8s', $basename, $imageFileType);

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$filename)) {
                //upload successful now

                $sys->setToken($sys->getUserToken());
                $sys->setName($name);
                $sys->setCategory($cat);
                $sys->setBedrooms($bedrooms);
                $sys->setDateStart($dt);
                $sys->setPrice($price);
                $sys->setTown($town);
                $sys->setCountry($country);
                $sys->setDesc($notes);
                $sys->setThumbnail($filename);
                $sys->postAccommo();
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file!')</script>";
                echo "<script>window.open('index.php?error=error!Failed-upload','_self')</script>";
            }
        }
    } else {
        echo "<script>alert('File is not an image!')</script>";
        echo "<script>window.open('index.php?error=File-not-image','_self')</script>";
        $uploadOk = 0;
    }

}

if (isset($_POST['job'])){
    $title = $_POST['title'];
    $cat = $_POST['jobCat'];
    $field = $_POST['field'];
    $level = $_POST['level'];
    $qualification = $_POST ['qualification'];
    $date = $_POST['date'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $notes = $_POST['details'];

    $sys->setToken($sys->getUserToken());
    $sys->setName($title);
    $sys->setCategory($cat);
    $sys->setField($field);
    $sys->setLevel($level);
    $sys->setQualification($qualification);
    $sys->setDeadline($date);
    $sys->setTown($city);
    $sys->setCountry($country);
    $sys->setDesc($notes);
    $sys->setCountry($country);
    $sys->postJob();

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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo  $sys->domain()?>/home/post/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            //vehicles
            $('#mode').on('change',function(){
                var modeID = $(this).val();

                if(modeID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/vehicleAjax.php',
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
                        url:'home/post/vehicleAjax.php',
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
                        url:'home/post/vehicleAjax.php',
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

            function getBrands() {
                var typeID = $('#type').val();
                var subtypeID = $('#subtype').val();
                var modeID = $('#mode').val();
                if(typeID && subtypeID && modeID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/vehicleAjax.php',
                        data:'mode_id = '+ modeID+'&type_id = '+ typeID+'subtype_id='+subtypeID,
                        success:function(html){
                            $('#brand').html(html);
                        }
                    });
                }else{
                    $('#brand').html('<option value="">Select Type first</option>');
                }
            }

            //jobs

            $('#jobCat').on('change',function(){
                var catId = $(this).val();
                if(catId){
                    $.ajax({
                        type:'POST',
                        url:'home/post/jobsAjax.php',
                        data:'cat_id='+catId,
                        success:function(html){
                            $('#field').html(html);
                        }
                    });
                }else{
                    $('#field').html('<option value="">Select Job Category first</option>');
                }
            });

            // first country
            $('#country1').on('change',function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/countriesAjax.php',
                        data:'country_id='+countryID,
                        success:function(html){
                            $('#state1').html(html);
                            $('#city1').html('<option value="">Select state first</option>');
                        }
                    });
                }else{
                    $('#state1').html('<option value="">Select country first</option>');
                    $('#city1').html('<option value="">Select state first</option>');
                }
            });

            $('#state1').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/countriesAjax.php',
                        data:'state_id='+stateID,
                        success:function(html){
                            $('#city1').html(html);
                        }
                    });
                }else{
                    $('#city1').html('<option value="">Select state first</option>');
                }
            });
            //first country end

            //second country
            $('#country2').on('change',function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/countriesAjax.php',
                        data:'country_id='+countryID,
                        success:function(html){
                            console.log(html);
                            $('#state2').html(html);
                            $('#city2').html('<option value="">Select state first</option>');
                        }
                    });
                }else{
                    $('#state2').html('<option value="">Select country first</option>');
                    $('#city2').html('<option value="">Select state first</option>');
                }
            });

            $('#state2').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/countriesAjax.php',
                        data:'state_id='+stateID,
                        success:function(html){
                            $('#city2').html(html);
                        }
                    });
                }else{
                    $('#city2').html('<option value="">Select state first</option>');
                }
            });
            //second country end

            //third country start
            $('#country3').on('change',function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:'POST',
                        url:'home/post/countriesAjax.php',
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
                        url:'home/post/countriesAjax.php',
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
    <title>Post - WorldMix</title>
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
                        <li class="breadcrumb-item active">Post a listing</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <h4>What do you want to Post</h4>
                    <hr>
                </div>
                <div class="col-md-5">

                    <ul class="nav flex-column nav-pills pills-dark nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#services" id="tabs-home-tab" data-toggle="pill" role="tab" aria-controls="tabs-home" aria-selected="true">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#property" id="tabs-property-tab" data-toggle="pill" role="tab" aria-controls="tabs-property" aria-selected="true">Accommodation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#vehicle" id="tabs-vehicle-tab" data-toggle="pill" role="tab" aria-controls="tabs-vehicle" aria-selected="true">Vehicle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jobs" id="tabs-job-tab" data-toggle="pill" role="tab" aria-controls="tabs-job" aria-selected="true">Jobs</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="cat">Select Category</label>
                                                <div class="col-md-9">
                                                    <select id="cat" name="cat" class="form-control">
                                                        <?php

                                                        $cat = $sys->getSubcat1(1);
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


                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Name</label>
                                                <div class="col-md-9">
                                                    <input id="name" name="name" maxlength="44" type="text" placeholder="Name of Service" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details">Details</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="5" maxlength="150"  id="details" name="details" placeholder="Notes here"></textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="service" name="service" type="submit" class="btn btn-success">Ok</button>
                                                    <button id="cancel" type="reset" name="cancel" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="property-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Title</label>
                                                <div class="col-md-12">
                                                    <input id="name" name="name" maxlength="45" type="text" placeholder="Display Name" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat1">Select Property Type</label>
                                                <div class="col-md-12">
                                                    <select id="subcat1" name="subcat1" class="form-control">
                                                        <?php
                                                        $cat = $sys->getSubcat1(2);
                                                        if (sizeof($cat) > 0){
                                                            echo '<option>Select Property Type</option>';
                                                            foreach($cat as $key){
                                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                                            }
                                                        }else{
                                                            echo '<option>No Property Types found</option>';
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
                                                <label class="col-md-5 control-label" for="price">Price (per month)</label>
                                                <div class="col-md-5">
                                                    <input id="price" name="price" maxlength="10" type="number" class="form-control input-md">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="country1">Select Country</label>
                                                <div class="col-md-8">
                                                    <select id="country1" name="country" class="form-control">
                                                        <?php
                                                        $cat = $sys->getCountries();
                                                        if (sizeof($cat) > 0){
                                                            echo '<option>Select Country</option>';
                                                            foreach($cat as $key){
                                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                                            }
                                                        }else{
                                                            echo '<option value="">No Country found</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="state1">Select State / Province</label>
                                                <div class="col-md-8">
                                                    <select name="state" class="form-control" id="state1">
                                                        <option value="">Select country first</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="city1">Select City</label>
                                                <div class="col-md-8">
                                                    <select name="city" id="city1" class="form-control">
                                                        <option value="">Select state first</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details">Details</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" maxlength="150" rows="5" id="details" name="details" placeholder="Notes"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-8" for="file">Display Image</label>
                                                <div class="col-md-12">
                                                    <input id="file" name="file" type="file" accept="image/*">
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="property" type="submit" class="btn btn-success">Ok</button>
                                                    <button id="cancel" name="cancel" type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="vehicle" role="tabpanel" aria-labelledby="vehicle-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
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
                                                <label class="col-md-8 control-label" for="subtype">Select Sub Type</label>
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
                                                <label class="col-md-8 control-label" for="country2">Select Country</label>
                                                <div class="col-md-8">
                                                    <select id="country2" name="country" class="form-control">
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
                                                <label class="col-md-8 control-label" for="state2">Select State / Province</label>
                                                <div class="col-md-8">
                                                    <select name="state" class="form-control" id="state2">
                                                        <option value="">Select country first</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="city2">Select City</label>
                                                <div class="col-md-8">
                                                    <select name="city" id="city2" class="form-control">
                                                        <option value="">Select state first</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="price">Price</label>
                                                <div class="col-md-8">
                                                    <input id="price" name="price" type="number" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details">Details</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" rows="5" maxlength="150" id="details" name="details" placeholder="Description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8" for="image">Display Image</label>
                                                <div class="col-md-12">
                                                    <input id="image" name="file" type="file" accept="image/*">
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="vehicle" type="submit" class="btn btn-success">Ok</button>
                                                    <button id="cancel" name="cancel" type="reset" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="title">Job Title</label>
                                                <div class="col-md-12">
                                                    <input id="title" name="title" maxlength="45" type="text" placeholder="Job Title" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="jobCat">Select Job Category</label>
                                                <div class="col-md-12">
                                                    <select id="jobCat" name="jobCat" class="form-control">
                                                        <?php

                                                        $cat = $sys->getSubcat1(3);
                                                        if (sizeof($cat) > 0){
                                                            echo '<option>Select Job Category</option>';
                                                            foreach($cat as $key){
                                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                                            }
                                                        }else{
                                                            echo '<option>No Job Categories found</option>';
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="field">Select Job Field</label>
                                                <div class="col-md-12">
                                                    <select id="field" name="field" class="form-control">
                                                        <option value="">Select Job Category First</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="level">Select Job Level</label>
                                                <div class="col-md-12">
                                                    <select id="level" name="level" class="form-control">
                                                        <?php

                                                        $cat = $sys->getJobsLevel();
                                                        if (sizeof($cat) > 0){
                                                            echo '<option>Select Job Level</option>';
                                                            foreach($cat as $key){
                                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                                            }
                                                        }else{
                                                            echo '<option>No Job Levels found</option>';
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="qualification">Select Qualification</label>
                                                <div class="col-md-12">
                                                    <select id="qualification" name="qualification" class="form-control">
                                                        <?php

                                                        $cat = $sys->getJobsQualifications();
                                                        if (sizeof($cat) > 0){
                                                            echo '<option>Select Job Qualification</option>';
                                                            foreach($cat as $key){
                                                                echo '<option value="'.$key["id"].'">'.$key["name"].'</option>';
                                                            }
                                                        }else{
                                                            echo '<option>No Job Qualifications found</option>';
                                                        }


                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="date">Deadline</label>
                                                <div class="col-md-9">
                                                    <input id="date" name="date" type="date" class="form-control input-md">
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
                                                <label class="col-md-8 control-label" for="state3">Select State / Province</label>
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

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details">Details</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" maxlength="150" rows="5" id="details" name="details" placeholder="Details or Notes"></textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="job" type="submit" class="btn btn-success">Ok</button>
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
            </div>
          </div>

      </div>

      </div>
      <div class="row">

          <!-- Publicidades-->
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


  <script src="<?php echo $sys->domain()?>/home/js/tether.min.js"></script>
  <script src="<?php echo $sys->domain()?>/home/js/bootstrap.min.js"></script>
  <script src="<?php echo $sys->domain()?>/home/js/script.js"></script>
</body>
</html>
