<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GIFTED</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
  <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 

</head>
<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.php" style="margin-top: auto;">
          <img src="assets/images/logo.png"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right mainNav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="price.html">Quiz</a></li>
          <li><a href="videos.html">Books</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Feedback <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="sidebar-right.html">Feedback Form</a></li>
              <li><a href="https://www.abilities.com/community/parents-20things.html">You Must Know This</a></li>
              <li><a href="https://kidshealth.org/en/parents/discipline-special.html">How To Deal</a></li>
              <li><a href="https://www.verywellfamily.com/what-are-special-needs-3106002">What To Expect</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">User <b class="caret"></b></a>
            <ul class="dropdown-menu">
            <p><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></p>
            <a href="logout.php" class="btn btn-danger ml-3">Click to Logout</a>
            </ul>
          </li> 
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar -->


	<!-- Header -->
	<header id="head">
		<div class="container">
             <div class="heading-text">							
              <h1 class="animated flipInY delay1" style="color: black; -webkit-text-stroke: 1px white;"><b>A Web Application for Betterment of Special Children</b></h1>
              <br>
							<b><p>We All are Special!</p>
              <p>Join us in making this initiative affect millions.</p></b>
						</div>
            
					<div class="fluid_container">                       
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            <h2>We develop.</h2>
                        </div> 
                        <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                        </div>
                        <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="container">
    <div class="row">
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/3.png" alt="" />
							</div><!--icon box top -->
							<h4>Online Courses</h4>
							
     						<p><a href="courses.html"><em>Click here</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/1.png" alt="" />
							</div><!--icon box top -->
							<h4>Meet our Staff</h4>
							
     						<p><a href="about.html#team"><em>Click here</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/2.png" alt="" />
							</div><!--icon box top -->
							<h4>Games For You</h4>
							
     						<p><a href="https://www.funbrain.com/pre-k-and-k-playground"><em>Click here</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="assets/images/4.png" alt="" />
							</div><!--icon box top -->
							<h4>Contact Us</h4>
							
     						<p><a href="contact.html"><em>Click here</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">
        <div class="container">
            <h2><span>Here's some Motivation to get you started..</span></h2>
            <div class="row">
       
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure style="height: 150px; width: 350px;"><a href="https://www.parentingspecialneeds.org/inspirations/special-parents-share/"><img src="assets/images/news2.jpg" alt=""></a></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h3 style="text-align: center;">Inspirational Stories for you..</h3></p>
                                            <p style="text-align: center;">Click on the picture above</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure style="height: 150px; width: 350px;"><a href="https://blog.madeformovement.com/"><img src="assets/images/news3.jpg" alt=""></a></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h3 style="text-align: center;">Stories we feed, for the help you need !</h3></p>
                                            <p style="text-align: center;">Click on the picture above</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure style="height: 150px; width: 350px;"><a href="https://differentdream.com/speaking/"><img src="assets/images/news4.jpg" alt=""></a></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h3 style="text-align: center;">A Speaker you would listen to all-day.</h3></p>
                                            <p style="text-align: center;">Click on the picture above</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  
	
      <section class="container">
      <div class="row">
      	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p><b>We at WebEdu aim to provide a common platform for all children of the God who seek assistance in education or motivation. Parents are welcome to use our resources and we hope that our small effort can bring about a change in one house too many.</b></p>
        <p>The Web Application we have deve...<a href="about.html" title="read more" class="btn-inline " target="_self">read more</a></p>
        </div>
              
          <br><br><br>
          <div class="col-md-4"><div class="title-box clearfix "><a href="courses.html"><h1 class="title-box_primary"> Courses We Offer-> </h1></a></div> 
         </div>
      </div>
      </section>
      
    	 
   <footer id="footer">
 
    <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="courses.html#1">
                Environmental Sudies 
              </a>
            </li>
            <li><a href="courses.html#2">
                English Language
              </a>
            </li>
            <li><a href="courses.html#3">
                Mathematics 
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Links to Follow
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="https://www.abilities.com/community/parents-20things.html">
                You Must Know </a>
            </li>
            <li><a href="https://kidshealth.org/en/parents/discipline-special.html">
              How to Deal
              </a>
            </li>
            <li><a href="https://www.verywellfamily.com/what-are-special-needs-3106002">
                What to Expect
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse through our Website
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="index.html">
                Home
              </a>
            </li>
            <li> <a href="about.html">
                About
              </a>
            </li>
            <li><a href="videos.html">
                Books
              </a>
            </li>
            <li>
              <a href="sidebar-right.html">
                Feedback
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
              <div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <br>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i><a href="https://goo.gl/maps/cXfNWMLYgjNaZz4GA"> &nbsp&nbspMumbai, Maharashtra - India</a><br><br>
            <i class="fa fa-phone"></i><a href="callto:917045489328"> &nbsp&nbsp+91 7045489328 </a><br><br>
             <i class="fa fa-envelope-o"></i><a href="mailto:aunshumansaha9@gmailcom">&nbsp&nbspaunshumansaha9@gmail.com</a><br>
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
      <div class="social text-center">
        <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
        <a href="https://en-gb.facebook.com/login/"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
        <a href="https://account.microsoft.com/account?lang=en-us"><i class="fa fa-envelope-o"></i></a>
        <a href="https://github.com/aunshumansaha9/Software-Development-Educator-System"><i class="fa fa-github"></i></a>
      </div>

      <div class="clear"></div>
      <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
      <div class="container">
        <div class="row">

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="simplenav">
                <a href="index.php">Home</a> | 
                <a href="about.html">About</a> |
                <a href="courses.html">Courses</a> |
                <a href="price.html">Quiz</a> |
                <a href="videos.html">Books</a> |
                <a href="contact.html">Contact Us</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="text-right">
                Copyright &copy; 2020, Thakur College of Engineering & Tech.
              </p>
            </div>
          </div>

        </div>
        <!-- /row of panels -->
      </div>
    </div>
  </footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
