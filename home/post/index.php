<!DOCTYPE html>
<base href="../../">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./img/logo/favicon.png">
    <link rel="stylesheet" href="./home/css/bootstrap.css">
    <link rel="stylesheet" href="./home/css/font-awesome.min.css">
    <link rel="stylesheet" href="./home/css/linearicons/Web Font/style.css">
    <link rel="stylesheet" href="./home/css/estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <title>Post - WorldMix</title>
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

          <a href="../home/settings" class="d-inline-block"><img src="../home/img/persona2.jpg" width="22" height="22" class="rounded-circle" alt=""></a>
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
                    <li class="nav-item"><a href="../home" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-home mr-3"></i>Home</a></li>
                    <li class="nav-item"><a href="../home/find" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-cart mr-3"></i>Buy</a></li>
                    <li class="nav-item"><a href="../home/post" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-store mr-3"></i>Sell</a></li>
                    <li class="nav-item"><a href="../home/settings" class="d-block nav-link p-3 px-md-0 py-md-1"><i class="lnr lnr-cog mr-3"></i>Settings</a></li>
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
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="selectbasic">Select Category</label>
                                                <div class="col-md-9">
                                                    <select id="selectbasic" name="selectbasic" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Name</label>
                                                <div class="col-md-9">
                                                    <input id="name" name="name" type="text" placeholder="Name of Service" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textarea">Details</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" rows="5" id="textarea" name="textarea">Notes here</textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="button1id" type="submit" class="btn btn-success">Ok</button>
                                                    <button id="cancel" type="reset" name="post" class="btn btn-danger">Cancel</button>
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
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat1">Select Category</label>
                                                <div class="col-md-12">
                                                    <select id="subcat1" name="subcat1" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-8" for="name">Display Image</label>
                                                <div class="col-md-12">
                                                    <input id="image" name="image" type="file" accept="image/*">
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Name</label>
                                                <div class="col-md-12">
                                                    <input id="name" name="name" type="text" placeholder="Display Name" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="bedrooms">No of Bedrooms</label>
                                                <div class="col-md-9">
                                                    <input id="bedrooms" name="bedrooms" type="number" class="form-control input-md">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="date">Start Date</label>
                                                <div class="col-md-9">
                                                    <input id="date" name="date" type="date" class="form-control input-md">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="price">Price</label>
                                                <div class="col-md-4">
                                                    <input id="price" name="price" type="number" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="address">Address</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" id="address" name="address">Property address</textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="post" type="submit" class="btn btn-success">Ok</button>
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
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name">Name</label>
                                                <div class="col-md-12">
                                                    <input id="name" name="name" type="text" placeholder="Display Name" class="form-control input-md">
                                                </div>
                                            </div>

                                            <!-- Select Type -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat1">Select Mode of Travel</label>
                                                <div class="col-md-12">
                                                    <select id="subcat1" name="subcat1" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Type -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat2">Select Type</label>
                                                <div class="col-md-12">
                                                    <select id="subcat2" name="subcat2" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Type -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat3">Select Sub Type</label>
                                                <div class="col-md-12">
                                                    <select id="subcat3" name="subcat3" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Type -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="brand">Select Brand</label>
                                                <div class="col-md-12">
                                                    <select id="brand" name="brand" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
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
                                                <label class="col-md-8" for="name">Display Image</label>
                                                <div class="col-md-12">
                                                    <input id="image" name="image" type="file" accept="image/*">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="price">Price</label>
                                                <div class="col-md-4">
                                                    <input id="price" name="price" type="number" class="form-control input-md">
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="address">Details</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" id="address" name="address">Description</textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="post" type="submit" class="btn btn-success">Ok</button>
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
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="title">Job Title</label>
                                                <div class="col-md-12">
                                                    <input id="title" name="title" type="text" placeholder="Job Title" class="form-control input-md">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label" for="subcat1">Select Job Category</label>
                                                <div class="col-md-12">
                                                    <select id="subcat1" name="subcat1" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="level">Select Job Level</label>
                                                <div class="col-md-12">
                                                    <select id="level" name="level" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="subcat1">Select Qualification</label>
                                                <div class="col-md-12">
                                                    <select id="subcat1" name="subcat1" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
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
                                                <label class="col-md-8 control-label" for="country">Select Country</label>
                                                <div class="col-md-12">
                                                    <select id="country" name="country" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-8 control-label" for="town">Select Town</label>
                                                <div class="col-md-12">
                                                    <select id="town" name="town" class="form-control">
                                                        <option value="1">Option one</option>
                                                        <option value="2">Option two</option>
                                                        <option value="3">Option three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="details">Details</label>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" id="details" name="details">Details or Notes</textarea>
                                                </div>
                                            </div>

                                            <!-- Button (Double) -->
                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button id="post" name="post" type="submit" class="btn btn-success">Ok</button>
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
