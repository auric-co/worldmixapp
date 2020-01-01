<!DOCTYPE html>
<base href="../">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/logo/favicon.png">
  <link rel="stylesheet" href="./home/css/bootstrap.css">
  <link rel="stylesheet" href="./home/css/font-awesome.min.css">
  <link rel="stylesheet" href="./home/css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <title>Home - WorldMix</title>
</head>
<body>
  <header class="p-fixed">
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-auto hidden-sm-down logo">
          <a href="#">
            <img src="../img/logo/logo.png" alt=""><span class="text-white">WorldMix</span>
          </a>
        </div>
        <div class="col-12 col-sm-8 col-lg-6 search flex-last flex-sm-unordered">

          </div>
        <nav class="col-12 col-sm-3 col-lg-2 d-flex justify-content-around justify-content-sm-between mb-3 mb-sm-0 ml-auto menu p-0">

          <a href="#" class="d-inline-block"><img src="../home/img/persona2.jpg" width="22" height="22" class="rounded-circle" alt=""></a>
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
                  <li class="nav-item"><a href="../home" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="fa fa-home mr-3"></i>Home</a></li>
                  <li class="nav-item"><a href="../home/find" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="fa fa-shopping-cart mr-3"></i>Buy</a></li>
                  <li class="nav-item"><a href="../home/post" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="fa fa-bolt mr-3"></i>Sell</a></li>
                  <li class="nav-item"><a href="../home/settings" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="fa fa-gear mr-3"></i>Settings</a></li>
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
                            <a class="nav-link" id="pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="pills-listings" aria-selected="false">Listings</a>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                Matches
                            </div>
                        </div>
                        <div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="listings-tab">
                            <div class="row">
                                Listings
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

  <script src="../home/js/jquery-3.2.1.min.js"></script>
  <script src="../home/js/tether.min.js"></script>
  <script src="../home/js/bootstrap.min.js"></script>
  <script src="../home/js/script.js"></script>
</body>
</html>