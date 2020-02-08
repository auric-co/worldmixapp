<?php
require_once "../../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}

global $post;

if (isset($_GET['item']) && !empty($_GET['item'])){
    $sys->setId($_GET['item']);
    $sys->setToken($sys->getUserToken());
    $data = $sys->matchDetails();

    $post = $data;
   /* if ($data['details']['success'] == true){
        $post = $data;
    }*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <title>Dashboard - WorldMix</title>
</head>
<body>
<header class="p-fixed">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-auto hidden-sm-down logo">
                <a href="#">
                    <img src="<?php echo  $sys->domain()?>/home/img/logo.png" alt="">
                </a>
            </div>
            <div class="col-12 col-sm-8 col-lg-6 search flex-last flex-sm-unordered">

            </div>
            <nav class="col-12 col-sm-3 col-lg-2 d-flex justify-content-around justify-content-sm-between mb-3 mb-sm-0 ml-auto menu p-0">
                <a href="#"><i class="fa fa-users"></i></a>
                <a href="#"><i class="fa fa-bell"></i></a>
                <a href="#"><i class="fa fa-comments"></i></a>
                <a href="#" class="d-inline-block"><img src="<?php echo  $sys->domain()?>/home/img/nopic_2.png" width="22" height="22" class="rounded-circle" alt=""></a>
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
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo  $sys->domain()?>/home/matched?category=">Matches</a></li>
                        <li class="breadcrumb-item active">Item Name</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <!-- Publicacion 1 -->
                    <div class="publicacion mb-5">
                        <div class="row">
                            <div class="col">
                                <div class="post">
                                    <a href="#" class="name d-inline-block">Andrea Lorem Ipsum</a>

                                    <div class="p-3 mb-3 img-container">
                                        <div class="row">
                                            <div class="col">
                                                <strong class="d-inline-block mb-2 text-success">Post Cart</strong>
                                                <h3 class="mb-0">
                                                    <a class="text-dark" href="<?php echo $sys->domain(); ?>"> Post Title</a>
                                                </h3>
                                                <div class="mb-1 text-muted">
                                                    $00.00
                                                </div>
                                            </div>
                                            <div class="col">
                                                <img src="<?php echo  $sys->domain()?>/home/img/paisaje1.jpg" class="img-fluid" height="" alt="">
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <p class="text p-3 mb-3 text-justify">
                                                    <?php print_r($post); ?>
                                                </p>
                                                <div class="buttons-box d-flex justify-content-between align-items-center mb-4">
                                                    <button class="d-inline-block text-white border-0"><i class="fa fa-thumbs-o-up"></i></button>
                                                    <p class="mb-0">155 <i class="fa fa-thumbs-o-up"></i></p>
                                                </div>
                                            </div>
                                        </div>

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