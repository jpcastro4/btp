<?php 

  check_manutencao(); 
  check_session();
  
?>

<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Carlos Alvarez - Alvarez.is">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css"> 

    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">


    <link href="<?php echo site_url('assets/backoffice/')?>css/main.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/backoffice/')?>css/font-style.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/backoffice/')?>css/flexslider.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    
  
  
  <!-- NOTY JAVASCRIPT -->
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/jquery.noty.js"></script>
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/layouts/top.js"></script>
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/layouts/topLeft.js"></script>
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/layouts/topRight.js"></script>
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/layouts/topCenter.js"></script>
  
  <!-- You can add more layouts if you want -->
  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
  

  

  <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/admin.js"></script>
   
  <?php if(!empty($page_index)) : ?>
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script src="<?php echo site_url('assets/backoffice/')?>js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/dash-charts.js"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/gauge.js"></script>
    <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/lineandbars.js"></script>
  <?php endif; ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

    <!-- Google Fonts call. Font Used Open Sans & Raleway -->
  

<script type="text/javascript">
  
    <?php if(!empty($page_index)) : ?>
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });


      });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

    <?php endif; ?>

</script>    
  </head>
  <body>
  
    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top pt-4 pb-5">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle menu" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('backoffice/')?>"><img src="<?php echo site_url('assets/')?>logo.png" alt=""></a>

        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>