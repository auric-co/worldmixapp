<?php
require_once "../../system/System.php";
$sys = new System();

if ($sys->checkLoginState() == false){
    header("location:".$sys->domain());
    exit();
}

if (isset($_POST['save'])){

    $cat = $_POST['jobCat'];
    $field = $_POST['field'];
    $level = $_POST['level'];
    $qualification = $_POST ['qualification'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $name = $_POST['title'];

    $sys->setToken($sys->getUserToken());
    $sys->setCategory($cat);
    $sys->setField($field);
    $sys->setName($name);
    $sys->setLevel($level);
    $sys->setQualification($qualification);
    $sys->setTown($city);
    $sys->setCountry($country);
    $sys->requestJob();
}

?>
<!DOCTYPE html>
<base href="../../../">
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
            //jobs

            $('#jobCat').on('change',function(){
                var catId = $(this).val();
                if(catId){
                    $.ajax({
                        type:'POST',
                        url:'<?php echo  $sys->domain()?>home/post/jobsAjax.php',
                        data:'cat_id='+catId,
                        success:function(html){
                            $('#field').html(html);
                        }
                    });
                }else{
                    $('#field').html('<option value="">Select Job Category first</option>');
                }
            });

            //country start
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
  <title>Find Job - WorldMix</title>
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
                        <li class="breadcrumb-item active">Jobs</li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="title">Job Title</label>
                                <div class="col-md-12">
                                    <input id="title" name="title" type="text" maxlength="45" placeholder="Job Title" class="form-control input-md">
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
</body>
</html>
