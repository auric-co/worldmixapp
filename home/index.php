<?php
require_once "./system/System.php";
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
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/linearicons/Web Font/style.css">
    <link rel="stylesheet" href="<?php echo  $sys->domain()?>/home/css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo  $sys->domain()?>/home/post/jquery.min.js"></script>
    <script src="<?php echo  $sys->domain()?>/home/js/bootstrapGrowlAlerts/jquery.bootstrap-growl.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".delete-listing").click(function(e){
                e.preventDefault();
                var dt = this.id;

                var id = dt.split('.');

                if(id[1] && id[0]){

                   if (confirm("Deleting "+ id[0]+" cannot be reversed. Are you sure?")){
                        $.ajax({
                            type:'POST',
                            url:'<?php echo  $sys->domain()?>/home/delete.php',
                            data:'id=' + id[1] + '&type=' + id[0],
                            success:function(data){
                                alert(data.remove);
                                /*if(data.remove = 'Successful'){

                                    /*$.bootstrapGrowl('Deleting ' +id[1] + ' was successful', {
                                        type: 'success',
                                        align: 'center',
                                        width: 'auto',
                                        allow_dismiss: true
                                    });
                                    

                                }else{

                                    $.bootstrapGrowl('Deleting ' +id[1] + ' failed', {
                                        type: 'danger',
                                        align: 'center',
                                        width: 'auto',
                                        allow_dismiss: true
                                    });
                                } */

                            }
                        });


                    }
                }

            });
        });
    </script>
    <title>Home - WorldMix</title>
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
                <div class="col-md-12">

                    <ul class="nav justify-content-center nav-pills nav-fill pills-dark mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="pills-home" aria-selected="true">Matches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="pills-listings" aria-selected="false">My Listings</a>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php
                            $sys->setToken($sys->getUserToken());
                            $cat = $sys->matchCount();
                            $services = $cat['count']['services'] ? $cat['count']['services'] : '0';
                            $accommodation = $cat['count']['accommodation'] ? $cat['count']['accommodation'] : '0';
                            $jobs = $cat['count']['jobs'] ? $cat['count']['jobs'] : '0';
                            $vehicle = $cat['count']['vehicle'] ? $cat['count']['vehicle'] : '0';

                            ?>
                            <div class="row">

                                <div class="col">
                                    <a href="<?php echo $sys->domain(); ?>/home/matched?category=1">
                                        <div class="card">
                                            <div class="card-block  text-center">
                                                <h4 class="card-title"><i class="fa fa-cogs"></i></h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Services</h6>
                                                <p>(<?php echo $services; ?>)</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="col">
                                    <a href="<?php echo $sys->domain(); ?>/home/matched?category=4">
                                        <div class="card">
                                            <div class="card-block text-center">
                                                <h4 class="card-title"><i class="lnr lnr-car"></i></h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Vehicle</h6>
                                                <p>(<?php echo $vehicle; ?>)</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a href="<?php echo $sys->domain(); ?>/home/matched?category=2">
                                        <div class="card">
                                            <div class="card-block text-center">
                                                <h4 class="card-title"><i class="lnr lnr-apartment"></i></h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Accommodation</h6>
                                                <p>(<?php echo $accommodation; ?>)</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="col">
                                    <a href="<?php echo $sys->domain(); ?>/home/matched?category=3">
                                        <div class="card">
                                            <div class="card-block text-center">
                                                <h4 class="card-title"><i class="lnr lnr-briefcase"></i></h4>
                                                <h6 class="card-subtitle mb-2 text-muted">Jobs</h6>
                                                <p>(<?php echo $jobs; ?>)</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="listings-tab">
                            <div class="row">
                                <div class="col-lg-12 mx-auto">

                                    <!-- List group-->
                                    <ul class="list-group shadow">
                                        

                                            <?php

                                            $curl = curl_init();
                                            curl_setopt_array($curl, array(
                                                CURLOPT_URL => "http://app.worldmixapp.com/api/user/my/listings",
                                                CURLOPT_RETURNTRANSFER => true,
                                                CURLOPT_ENCODING => "",
                                                CURLOPT_MAXREDIRS => 10,
                                                CURLOPT_TIMEOUT => 30,
                                                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                CURLOPT_CUSTOMREQUEST => "POST",
                                                CURLOPT_POSTFIELDS => $request = json_encode(array('token' => $sys->getUserToken())),
                                                CURLOPT_HTTPHEADER => array(
                                                    "content-type: application/json",
                                                ),
                                            ));

                                            $response = curl_exec($curl);
                                            $err = curl_error($curl);
                                            $data = json_decode($response, true);
                                            if ($err) {
                                                ?>
                                                <li class="list-group-item my-2">
                                                    <!-- Custom content-->
                                                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                        <div class="media-body order-2 order-lg-1">
                                                            <h5 class="mt-0 font-weight-bold mb-2">(0) Results found</h5>
                                                            <p class="font-italic text-muted mb-0 small"></p>
                                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                                <h6 class="font-weight-bold my-2"></h6>
                                                                <ul class="list-inline small">
                                                                    <li class="list-inline-item m-0">Internal Server Error</li>
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
                                                <?php
                                            } else {
                                                if($data['success'] == true){
                                                    if (sizeof($data['listing']) > 0){
                                                        foreach ($data['listing'] as $key){
                                                            ?>
                                                            <li class="list-group-item my-2">
                                                                <div class="card" style="width: 100%; border: 0; box-shadow: none;">
                                                                    <div class="card-body">
                                                                        <!-- Custom content-->

                                                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">

                                                                            <div class="media-body order-2 order-lg-1">

                                                                                <h5 class="mt-0 font-weight-bold mb-2"><?php echo $key['name']; ?></h5>

                                                                                <p class="font-italic text-muted mb-0 small"><?php if ($key['category']['id'] !== '2'){ echo $key['details']['details']; } ?></p>

                                                                                <div class="d-flex align-items-center justify-content-between mt-1">

                                                                                    <?php

                                                                                    if($key['category']['id'] == "1" || $key['category']['id'] == "3"){

                                                                                    }else{
                                                                                        ?>
                                                                                        <h6 class="font-weight-bold my-2">
                                                                                        <?php
                                                                                            echo "Price: $".$key['details']['price'];
                                                                                            ?>
                                                                                        </h6>
                                                                                        <?php

                                                                                    }

                                                                                    ?>

                                                                                    <div class="row" style="margin-top: 60px; margin-left:0;">
                                                                                        <hr>
                                                                                        <ul class="list-inline small">
                                                                                            <li class="list-inline-item m-1">
                                                                                                <span class="badge badge-danger"><?php echo $key['details']['type']; ?></span>
                                                                                            </li>

                                                                                            <li class="list-inline-item m-1">
                                                                                                <span class="badge badge-info"><?php echo $key['category']['name']; ?></span>
                                                                                            </li>

                                                                                            <li class="list-inline-item m-1">
                                                                                                <span class="badge badge-info"><?php echo $key['type']['name']; ?></span>
                                                                                            </li>

                                                                                            <li class="list-inline-item m-1">
                                                                                                <span class="badge badge-info">Posted on : <?php echo date('d M Y,  h:i', strtotime($key['date_created']));?></span>
                                                                                            </li>


                                                                                        </ul>
                                                                                    </div>



                                                                                </div>

                                                                            </div>
                                                                            
                                                                            <?php if ($key['category']['id'] !== "1") {
                                                                                if($key['listingType'] == 'request' && $key['category']['id'] !== "2"){
                                                                                ?>
                                                                                <img src="<?php echo $sys->domain() ?>/home/uploads/images/thumbnails/<?php echo $key['details']['thumbnail']; ?>"
                                                                                     alt="Thumbnail" width="200" class="ml-lg-5 order-1 order-lg-2">
                                                                                <?php
                                                                                    
                                                                                }
                                                                            } else {

                                                                            } ?>

                                                                        </div>
                                                                        <!-- End -->
                                                                    </div>
                                                                    <div class="card-footer" style="border: 0;">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item"><a href="#" class="delete-listing" id="<?php echo strtolower($key['details']['type']);?>.<?php echo$key['id'];?>" title="Delete Listing"><i class="fa fa-trash text-danger"></i></a> </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>



                                                            </li>
                                                            <?php
                                                        }
                                                    }else{
                                                        ?>
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
                                                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><img src="<?php echo $sys->domain() ?>/home/img/no results.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                                                            </div>
                                                            <!-- End -->
                                                        </li>
                                                        <?php
                                                    }

                                                }else{
                                                    ?>
                                                    <li class="list-group-item my-2">
                                                        <!-- Custom content-->
                                                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                                            <div class="media-body order-2 order-lg-1">
                                                                <h5 class="mt-0 font-weight-bold mb-2">(0) Results found</h5>
                                                                <p class="font-italic text-muted mb-0 small"></p>
                                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                                    <h6 class="font-weight-bold my-2"></h6>
                                                                    <ul class="list-inline small">
                                                                        <li class="list-inline-item m-0">Internal Server Error</li>
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
                                                    <?php
                                                }
                                            }
                                            curl_close($curl);



                                            ?>

                                        

                                    </ul>
                                    <!-- End -->
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

  <div class="hidden-md-up" id="modalBackdrop"></div>

<script src="<?php echo $sys->domain()?>/home/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/tether.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/bootstrap.min.js"></script>
<script src="<?php echo $sys->domain()?>/home/js/script.js"></script>
</body>
</html>
