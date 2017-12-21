<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

 
    <!-- Le styles 
    <link href="<?php echo site_url('assets/backoffice/')?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <link href="<?php echo site_url('assets/backoffice/')?>css/main.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/backoffice/')?>css/font-style.css" rel="stylesheet">
    <link href="<?php echo site_url('assets/backoffice/')?>css/register.css" rel="stylesheet">

<!--     <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/jquery.js"></script>    
    <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>bootstrap/js/bootstrap.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- DATA TABLE CSS -->
    <link href="<?php echo site_url('assets/backoffice/')?>css/table.css" rel="stylesheet">
 
    <script type="text/javascript" src="<?php echo site_url('assets/backoffice/')?>js/admin.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>

    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo site_url('assets/')?>logo.png" alt=""></a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>              
              <li class="active"><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

 
 

    <div class="container">
      	  
      		<div class="row">
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				          <li><strong>Select Your Plan</strong></li>
									<li class="header_row">
										<h1>Start</h1>
									</li>
									<li>USD $20 <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Contrary to popular belief. It has roots in a classical Latin</span></span></a></li>
									<li>0 Activation Point's</li> 
									<li>5% Binary percent <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Do your layouts deserve better than Lorem Ipsum?</span></span></a></li> 
									<li>200 Binary Point's</li>
				          <li>1200 Max. Binary point's<a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Apply as an art than director Do your</span></span></a></li>
				          <li>2% direct indication</li>
                  <li>0.8% daily yield</li>
                  <li>10BTP minimal donation</li>
                  <li>2BTP monthly payment</li>
									<li class="footer_row"><a href="<?php echo base_url('choose-package/1') ?>" class="hosting-button">Add To Cart</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Select Your Plan</strong></li>
									<li class="header_row">
										<h1>Pro</h1>
									</li>
									<li>Disk Space 500 MB <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Contrary to popular belief. It has roots in a classical Latin</span></span></a></li>
									<li>Bandwidth Unmetered</li> 
									<li>Setup Free <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Do your layouts deserve better than Lorem Ipsum?</span></span></a></li> 
									<li>5 Free Email Accounts</li>
				                    <li>5 FTP Accounts <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Apply as an art than director Do your</span></span></a></li>
				                    <li>Full Privacy</li>
									<li class="footer_row"><a href="#" class="hosting-button">Add To Cart</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Select Your Plan</strong></li>
									<li class="header_row">
										<h1>Gold</h1>
									</li>
									<li>Disk Space 2000 MB <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Contrary to popular belief. It has roots in a classical Latin</span></span></a></li>
									<li>Bandwidth Unmetered</li> 
									<li>Setup Free <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Do your layouts deserve better than Lorem Ipsum?</span></span></a></li> 
									<li>25 Free Email Accounts</li>
				                    <li>5 FTP Accounts <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Apply as an art than director Do your</span></span></a></li>
				                    <li>Full Privacy</li>
									<li class="footer_row"><a href="#" class="hosting-button">Add To Cart</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Select Your Plan</strong></li>
									<li class="header_row">
										<h1>Platinum</h1>
									</li>
									<li>Disk Space 10000 MB <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Contrary to popular belief. It has roots in a classical Latin</span></span></a></li>
									<li>Bandwidth Unmetered</li> 
									<li>Setup Free <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Do your layouts deserve better than Lorem Ipsum?</span></span></a></li> 
									<li>Unlimited Email Accounts</li>
				                    <li>Unlimited FTP Accounts <a class="tt" href="#">(?)<span class="tooltip"><span class="triangle-obtuse">Apply as an art than director Do your</span></span></a></li>
				                    <li>Full Privacy</li>
									<li class="footer_row"><a href="#" class="hosting-button">Add To Cart</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	

      		</div><!-- /row -->
      	</div><!-- /container -->
      	<br>
	<!-- FOOTER -->	
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="<?php echo site_url('assets/backoffice/')?>images/logo.png"" alt=""></p>
      			<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->

</body></html>