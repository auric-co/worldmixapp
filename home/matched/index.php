<?php
require_once "../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}


?>
<!DOCTYPE html>
<base href="../">
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo  $sys->domain()?>/img/logo/favicon.png">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/linearicons/Web Font/style.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <title>Matches - WorldMix</title>
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

                <a href="<?php echo  $sys->domain()?>/home/settings/" class="d-inline-block"><img src="<?php echo  $sys->domain()?>/home/img/nopic_2.png" width="22" height="22" class="rounded-circle" alt=""></a>
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
                        <li class="breadcrumb-item active">Matches</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <h4>My Matches</h4>
                    <hr>
                </div>
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-12">

                            <ul class="nav justify-content-center nav-pills nav-fill pills-dark mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="pills-home" aria-selected="true">To Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="pills-listings" aria-selected="false">To Sell</a>
                                </li>
                            </ul>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <?php

                                    if (isset($_GET['category']) && !empty($_GET['category']))
                                    {
                                        $cat = $_GET['category'];

                                        $sys->setToken($sys->getUserToken());
                                        $count = $sys->matchCount();
                                        $matches = $sys->myMatches();
                                        
                                        if(sizeOf($count) !== 0){
                                            $size = $count['count']['services'] + $count['count']['accommodation'] + $count['count']['jobs'] + $count['count']['vehicle'];
                                        }else{
                                            $size == 0;
                                        }
                                        
                                        
                                        
                                        
                                        
                                        if ($size !== 0){
                                            foreach ($matches['requests'] as $key) {
                                                if ($key['category']['id'] == $cat){
                                                    ?>
                                                    <div class="publicacion mb-5">
                                                        <div class="row">
                                                            <div class="col-auto image pl-3 mr-3">
                                                                <a href="#">
                                                                    <?php
                                                                        if (isset($key['match']['user']['profile']) && $key['match']['user']['profile'] !== '0'){
                                                                            ?>
                                                                            <img src="<?php echo  $sys->domain()?>/home/uploads/images/profile/<?php echo $key['match']['user']['profile'];?>" class="rounded-circle" alt="">
                                                                            <?php
                                                                        }else{
                                                                            ?>
                                                                            <img src="<?php echo  $sys->domain()?>/home/img/nopic_2.png" class="rounded-circle" alt="No profile">
                                                                            <?php
                                                                        }

                                                                    ?>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <div class="post">
                                                                    <a href="#" class="name d-inline-block"><?php echo $key['match']['user']['name']."   ".$key['match']['user']['surname']; ?></a>

                                                                    <div class="p-3 mb-3 img-container">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <strong class="d-inline-block mb-2 <?php if($key['details']['type'] == 'Listing'){ echo "text-primary"; }else{ echo "text-success";} ?>"><?php echo $key['details']['type']; ?></strong>
                                                                                <h3 class="mb-0">
                                                                                    <a class="text-dark" href="<?php echo $sys->domain(); ?>/home/matched/more?item=<?php echo $key['id']?>"><?php echo $key['name']; ?></a>
                                                                                </h3>
                                                                                <p class="text-dark ">
                                                                                    <?php

                                                                                    if($key['category']['id'] == "1" || $key['category']['id'] == "3"){

                                                                                    }else{

                                                                                        echo "Price: $".$key['details']['price'];
                                                                                    }

                                                                                    ?>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <?php
                                                                                if ($key['category']['id'] !== '1' ){
                                                                                    ?>
                                                                                    <img src="<?php echo $sys->domain() ?>/home/uploads/images/thumbnails/<?php echo $key['details']['thumbnail']; ?>" class="img-fluid" height="" alt="">
                                                                                    <?php
                                                                                }else{
                                                                                    ?>
                                                                                    <img src="<?php echo  $sys->domain()?>/home/img/paisaje1.jpg" class="img-fluid" height="50" alt="">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <hr>
                                                                                <p class="text p-3 mb-3 text-justify"><?php if ($key['category']['id'] !== '2'){ echo $key['details']['details']; } ?></p>
                                                                                <div class="buttons-box d-flex justify-content-between align-items-center mb-4">
                                                                                    <button class="d-inline-block text-white border-0"><a style="color: #ffffff;" href="tel:<?php echo $key['match']['user']['msisdn']; ?>"><i class="fa fa-phone "></i> </a></button>
                                                                                    <p class="mb-0"> Contact Now : <a href="tel:<?php echo $key['match']['user']['msisdn']; ?>"><?php echo$key['match']['user']['msisdn'] ?></a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                        }else{
                                            ?>
                                            <ul class="list-group shadow">
                                                <li class="list-group-item my-2">
                                                    <!-- Custom content-->
                                                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                        <div class="media-body order-2 order-lg-1">
                                                            <h5 class="mt-0 font-weight-bold mb-2">(0) Results found</h5>
                                                            <p class="font-italic text-muted mb-0 small"></p>
                                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                                <h6 class="font-weight-bold my-2"></h6>
                                                                <ul class="list-inline small">
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div><img src="<?php echo $sys->domain() ?>/home/img/no results.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                                                    </div>
                                                    <!-- End -->
                                                </li>
                                            </ul>
                                            <?php
                                        }
                                    }

                                    ?>
                                </div>

                                <div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="listings-tab">
                                    <?php

                                    if (isset($_GET['category']) && !empty($_GET['category']))
                                    {
                                        $cat = $_GET['category'];

                                        $sys->setToken($sys->getUserToken());
                                        $count = $sys->matchCount();
                                        if(sizeOf($count) !== 0){
                                            $size = $count['count']['services'] + $count['count']['accommodation'] + $count['count']['jobs'] + $count['count']['vehicle'];
                                        }else{
                                            $size = 0;
                                        }

                                        $matches = $sys->myMatches();

                                        if ($size !== 0){
                                            foreach ($matches['listings'] as $key) {
                                                if ($key['category']['id'] == $cat){
                                                    ?>
                                                    <div class="publicacion mb-5">
                                                        <div class="row">
                                                            <div class="col-auto image pl-3 mr-3">
                                                                <a href="#">
                                                                    <?php
                                                                    if (isset($key['match']['user']['profile']) && $key['match']['user']['profile'] !== '0'){
                                                                        ?>
                                                                        <img src="<?php echo  $sys->domain()?>/home/uploads/images/profile/<?php echo $key['match']['user']['profile'];?>" class="rounded-circle" alt="">
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                        <img src="<?php echo  $sys->domain()?>/home/img/nopic_2.png" class="rounded-circle" alt="No profile">
                                                                        <?php
                                                                    }

                                                                    ?>
                                                                </a>
                                                            </div>
                                                            <div class="col">
                                                                <div class="post">
                                                                    <a href="#" class="name d-inline-block"><?php echo $key['match']['user']['name']."   ".$key['match']['user']['surname']; ?></a>

                                                                    <div class="p-3 mb-3 img-container">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <strong class="d-inline-block mb-2 <?php if($key['details']['type'] == 'Listing'){ echo "text-primary"; }else{ echo "text-success";} ?>"><?php echo $key['details']['type']; ?></strong>
                                                                                <h3 class="mb-0">
                                                                                    <a class="text-dark" href="<?php echo $sys->domain(); ?>/home/matched/more?item=<?php echo $key['id']?>"><?php echo $key['name']; ?></a>
                                                                                </h3>
                                                                                <p class="text-dark ">
                                                                                    <?php

                                                                                    if($key['category']['id'] == "1" || $key['category']['id'] == "3"){

                                                                                    }else{

                                                                                        echo "Price: $".$key['details']['price'];
                                                                                    }

                                                                                    ?>
                                                                                </p>
                                                                            </div>
                                                                            <div class="col">
                                                                                <?php
                                                                                if ($key['category']['id'] !== '1' ){
                                                                                    ?>
                                                                                    <img src="<?php echo $sys->domain() ?>/home/uploads/images/thumbnails/<?php echo $key['details']['thumbnail']; ?>" class="img-fluid" height="" alt="">
                                                                                    <?php
                                                                                }else{
                                                                                    ?>
                                                                                    <img src="<?php echo  $sys->domain()?>/home/img/paisaje1.jpg" class="img-fluid" height="50" alt="">
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <hr>
                                                                                <p class="text p-3 mb-3 text-justify"><?php if ($key['category']['id'] !== '2'){ echo $key['details']['details']; } ?></p>
                                                                                <div class="buttons-box d-flex justify-content-between align-items-center mb-4">
                                                                                    <button class="d-inline-block text-white border-0"><a style="color: #ffffff;" href="tel:<?php echo $key['match']['user']['msisdn']; ?>"><i class="fa fa-phone text-white"></i></a> </button>
                                                                                    <p class="mb-0"> Contact Now : <a href="tel:<?php echo $key['match']['user']['msisdn']; ?>"><?php echo$key['match']['user']['msisdn'] ?></a></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                        }else{
                                            ?>
                                            <ul class="list-group shadow">
                                                <li class="list-group-item my-2">
                                                    <!-- Custom content-->
                                                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                        <div class="media-body order-2 order-lg-1">
                                                            <h5 class="mt-0 font-weight-bold mb-2">(0) Results found</h5>
                                                            <p class="font-italic text-muted mb-0 small"></p>
                                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                                <h6 class="font-weight-bold my-2"></h6>
                                                                <ul class="list-inline small">
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div><img src="<?php echo $sys->domain() ?>/home/img/no results.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                                                    </div>
                                                    <!-- End -->
                                                </li>
                                            </ul>
                                            <?php
                                        }
                                    }

                                    ?>
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

  <script src="<?php echo $sys->domain()?>/home/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo $sys->domain()?>/home/js/tether.min.js"></script>
  <script src="<?php echo $sys->domain()?>/home/js/bootstrap.min.js"></script>
  <script src="<?php echo $sys->domain()?>/home/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js" integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9&#43;4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb" crossorigin="anonymous"></script>
</body>
</html>
