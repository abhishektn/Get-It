<!DOCTYPE html>
<html>
	<head>
		<title>Get-It</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<style>
			 /* Note: Try to remove the following lines to see the effect of CSS positioning */
			.affix {
			top: 0;
			width: 100%;
			}

			.affix + .container-fluid {
			padding-top: 70px;
			}
			#logo {
			   
			}
			 .homepage-hero-module {
			  border-right: none;
			  border-left: none;
			  position: relative;
			}
			.no-video .video-container video,
			.touch .video-container video {
			  display: none;
			}
			.no-video .video-container .poster,
			.touch .video-container .poster {
			  display: block !important;
			}
			.video-container {
			  position: relative;
			  bottom: 0%;
			  left: 0%;
			  height: 100%;
			  width: 100%;
			  overflow: hidden;
			  background: #000;
			}
			.video-container .poster img {
			  width: 100%;
			  bottom: 0;
			  position: absolute;
			}
			.video-container .filter {
			  z-index: 100;
			  position: absolute;
			  background: rgba(0, 0, 0, 0.4);
			  width: 100%;
			}
			.video-container .title-container {
			  z-index: 1000;
			  position: absolute;
			  top: 35%;
			  width: 100%;
			  text-align: center;
			  color: #fff;
			}
			.video-container .description .inner {
			  font-size: 1em;
			  width: 45%;
			  margin: 0 auto;
			}
			.video-container .link {
			  position: absolute;
			  bottom: 3em;
			  width: 100%;
			  text-align: center;
			  z-index: 1001;
			  font-size: 2em;
			  color: #fff;
			}
			.video-container .link a {
			  color: #fff;
			}
			.video-container video {
			  position: absolute;
			  z-index: 0;
			  bottom: 0;
			}
			.video-container video.fillWidth {
			  width: 100%;
			}
				#section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
				  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
				  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
				  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
				  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
		</style>
		<script type='text/javascript'>//<![CDATA[
			$(function(){
			/** Document Ready Functions **/
			/********************************************************************/

			$( document ).ready(function() {

			    // Resive video
			    scaleVideoContainer();

			    initBannerVideoSize('.video-container .poster img');
			    initBannerVideoSize('.video-container .filter');
			    initBannerVideoSize('.video-container video');
		
			    $(window).on('resize', function() {
				scaleVideoContainer();
				scaleBannerVideoSize('.video-container .poster img');
				scaleBannerVideoSize('.video-container .filter');
				scaleBannerVideoSize('.video-container video');
			    });

			});

			/** Reusable Functions **/
			/********************************************************************/

			function scaleVideoContainer() {

			    var height = $(window).height();
			    var unitHeight = parseInt(height) + 'px';
			    $('.homepage-hero-module').css('height',unitHeight);

			}

			function initBannerVideoSize(element){
			    
			    $(element).each(function(){
				$(this).data('height', $(this).height());
				$(this).data('width', $(this).width());
			    });

			    scaleBannerVideoSize(element);

			}

			function scaleBannerVideoSize(element){

			    var windowWidth = $(window).width(),
				windowHeight = $(window).height(),
				videoWidth,
				videoHeight;
			    
			    console.log(windowHeight);

			    $(element).each(function(){
				var videoAspectRatio = $(this).data('height')/$(this).data('width'),
				    windowAspectRatio = windowHeight/windowWidth;

				if (videoAspectRatio > windowAspectRatio) {
				    videoWidth = windowWidth;
				    videoHeight = videoWidth * videoAspectRatio;
				    $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
				} else {
				    videoHeight = windowHeight;
				    videoWidth = videoHeight / videoAspectRatio;
				    $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
				}

				$(this).width(videoWidth).height(videoHeight);

				$('.homepage-hero-module .video-container video').addClass('fadeIn animated');
		

			    });
			}
			});//]]> 

		</script>

	</head>
	<body>
		
		
			<nav class="navbar navbar-default" data-spy="affix" data-offset-top="197">

				<div class="container">

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
						</button>

						<img src="src/logo.png" href="#">
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Student</a></li>
							<li><a href="#">Mentor</a></li> 
							
						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php
							echo '<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
								<li><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
						
						?>					
						</ul>
					</div>
				</div>
			</nav>
			<!-- Modal1 -->
			<div class="modal" id="myModal" role="dialog">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							 <h4 class="modal-title">SignUp</h4>
						</div>
						<div class="modal-body"><div class=" "></br></br>
							<form onsubmit="" class="form_wrapper " action="signup.php" METHOD="POST"> 
								<div class="input-group">
									<label ><h3>SignUP as:</h3></label>   
									&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup_met.php" type="submit" class="btn btn-primary btn-lg"aria-describedby="basic-addon3"><span class="glyphicon glyphicon-user"></span>  Mentor</a>&nbsp;&nbsp;
									<a href="signup_stu.php" type="submit" class="btn btn-primary btn-lg"aria-describedby="basic-addon3"><span class="glyphicon glyphicon-user"></span>  Student</a>
									</div>
								</br></br>
		 					 </form> 
						</div>
					</div>
					<div class="modal-footer">
		  				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
			<!-- Modal1 -->
			<!-- Modal2 -->
			<div class="modal " id="myModal1" role="dialog"> 
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header">
					  		<button type="button" class="close" data-dismiss="modal">&times;</button>
					  		<h4 class="modal-title">SignIn</h4>
						</div>
						<div class="modal-body"><div class=" ">
							  <form  class="form_wrapper " action="signin.php" METHOD="POST">   
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-user"></span></span>
									<input type="text" class="form-control" placeholder="Recipient's username" name="user_name" aria-describedby="basic-addon2">	
								</div></br>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">@</span>
										<input type="password" class="form-control" placeholder="Password" name="user_pass" aria-describedby="basic-addon1">
								</div></br>
								 <input type="submit" class="btn btn-primary" value="Login" name="login"/>    
							  </form> 
						</div>
					</div>
					<div class="modal-footer">
					 	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="homepage-hero-module">
		    <div class="video-container">
			<div class="title-container">
			    <div class="headline">
					<h1>Welcome to Get-It</h1>

			    </div>
			    <div class="description">
				<div class="inner">A fruitful collaboration of student and Study expert's fraternity!</div>
			    </div>
			</div>
			<div class="filter"></div>
			<video autoplay loop class="fillWidth">
			    <source src="http://dfcb.github.io/BigVideo.js/vids/dock.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
			<div class="poster hidden">
			    <img src="http://www.videojs.com/img/poster.jpg" alt="">
			</div>
		    </div>
		</div>
		<div id="section1" class="container-fluid fullscreen-bg">
			  <h1>Why Get-It?</h1>
			  <ul>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  </ul>
		</div>
		<div id="section2" class="container-fluid">
			  <h1>Main Features</h1>
			  <ul>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  </ul>
		</div>
		<div id="section3" class="container-fluid">
			  <h1>About</h1>
			  <ul>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  	<li> data </li>
			  </ul>
		</div>
			
	</body>
</html>
				
				
