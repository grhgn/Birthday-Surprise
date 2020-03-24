<?php
    session_start();
    include("asset/ceksession.php");
?>
<!doctype html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="asset/favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>From Yours</title>
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link href="css/default.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
	<script type="text/javascript" src="js/jssor.slider-27.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/functions_dev.js"></script>
	<script type="text/javascript" src="js/garden_dev.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="se-pre-con"></div>
	<div class="wrapper">
		<div class="nav-tops">
			<div class="bg-image image1"></div>
			<div class="bg-image image2"></div>
			<div class="bg-image image3"></div>
			<div class="bg-image image4"></div>
			<div class="bg-image image5"></div>
			<div class="bg-image image6"></div>
		</div>
		<div id="tabs">
			<div class="header">
				<ul>
					<li><a href="#tabs-1" class="story">Happy Birthday</a></li>
					<li><a href="#tabs-3" class="memories">Our Memories</a></li>
					<li><a href="#tabs-2" class="gift">Gift For You</a></li>
				</ul>
				<div class="header-line">
					<div class="line1">
					</div>
					<div class="line2">
					</div>
				</div>
				<div class="footer-line">
					<div class="line2">
					</div>
					<div class="line1">
					</div>
				</div>
				<div class="body">
					<div class="title-1">
						<h1 class="">Happy Birthday Babe!</h1>
					</div>
					<div class="title-2">
						<h2 class="">On Your xxth Birthday</h1>
					</div>
				</div>
			</div>
			<div id="tabs-1">
				<div class="quotes quotes-anim">
					<div>
						<span>
							Finding someone you love and who loves you back is a wonderful, wonderful feeling. But finding a true soul mate is an even better feeling. A soul mate is someone who understands you like no other, loves you like no other, will be there for you forever, no matter what.
							P.S. I Love You
						</span>
					</div>
				</div>
			</div>
			<div id="tabs-3">
				<audio hidden loop id="foryou">
					<source src="asset/fallforyou.mp3" type="audio/mpeg">
					If you're reading this, audio isn't supported. 
				</audio>
				<div class="timeline">
					<section class="cd-timeline js-cd-timeline">
						<div class="cd-timeline__container">
							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/1.jpg" class="timeline-photo" id="myPicture">
									<span class="cd-timeline__date" id="asdasd">First Time</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-1" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>First Time</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/1.jpg">
									  </div>
									  <div class="modal-desc">
									    <div class="desc-img">
											<img src="img/1-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/2.jpg" class="timeline-photo" id="myPicture-2">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
							
								<div id="Modal-2" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/2.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/2-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/3.jpg" class="timeline-photo" id="myPicture-3">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-3" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/3.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/3-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/4.jpg" class="timeline-photo" id="myPicture-4">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-4" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/4.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/4-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/5.jpg" class="timeline-photo" 	id="myPicture-5">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-5" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/5.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/5-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/6.jpg" class="timeline-photo" id="myPicture-6">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-6" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/6.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/6-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->
							
							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/7.jpg" class="timeline-photo" id="myPicture-7">
									<span class="cd-timeline__date" id="asdasd">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-7" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/7.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/7-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/8.jpg" class="timeline-photo" id="myPicture-8">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
							
								<div id="Modal-8" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/8.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/8-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/9.jpg" class="timeline-photo" id="myPicture-9">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-9" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/9.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/9-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/10.jpg" class="timeline-photo" id="myPicture-10">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-10" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/10.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/10-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/11.jpg" class="timeline-photo" 	id="myPicture-11">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-11" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/11.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/11-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/12.jpg" class="timeline-photo" id="myPicture-12">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-12" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/12.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/12-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->
							
							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/13.jpg" class="timeline-photo" id="myPicture-13">
									<span class="cd-timeline__date">Day Month Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-13" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>Day Month Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/13.jpg">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/13-2.jpg">
										</div>
										<br>
										Insert your caption and the day description
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->
							
							<div class="cd-timeline__block js-cd-block">
								<div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
									<img src="img/cd-icon-picture.svg" alt="Picture">
								</div> <!-- cd-timeline__img -->

								<div class="cd-timeline__content js-cd-content">
									<img src="img/14.png" class="timeline-photo" id="myPicture-14">
									<span class="cd-timeline__date">? Day ?? Month ???? Year</span>
								</div> <!-- cd-timeline__content -->
								
								<div id="Modal-14" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
									<div class="modal-header">
									  <span class="close">&times;</span>
									  <h2>? Day ?? Month ???? Year</h2>
									</div>
									<div class="modal-body">
									  <div class="modal-photo">
										<img src="img/14.png">
									  </div>
									  <div class="modal-desc">
										<div class="desc-img">
											<img src="img/14-2.png">
										</div>
										<br>
										Your wishlist about future of both of you.
									  </div>
									</div>
								  </div>
								</div>
								
							</div> <!-- cd-timeline__block -->

						</div>
					</section> <!-- cd-timeline -->
				</div>
				<div class="slideshow">
					<div class="slideshow-title">
						<h2>These are Our Memories Since 20xx and will still continued</h2>
					</div>
					<div>
					<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:860px;height:400px;overflow:hidden;visibility:hidden;">
						<!-- Loading Screen -->
						<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:10px;left:10px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
							<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
						</div>
						<div data-u="slides" style="cursor:default;position:relative;top:10px;left:10px;width:840px;height:400px;overflow:hidden;">
							<div data-p="170.00">
								<img src="img/022.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/022-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/023.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/023-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/024.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/024-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/025.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/025-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/026.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/026-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/027.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/027-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/021.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/021-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/028.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/028-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/029.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/029-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/030.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/030-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/031.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/031-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/032.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/032-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/033.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/033-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/034.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/034-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/035.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/035-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/036.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/036-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/037.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/037-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/038.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/038-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/039.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/039-s96x48.jpg" />
								</div>
							</div>
							<div data-p="170.00">
								<img src="img/040.jpg" class="photo-slideshow"/>
								<div style="width: 270px; height: 380px"></div>
								<div data-u="thumb">
									<img data-u="thumb" class="i" src="img/040-s96x48.jpg" />
								</div>
							</div>
						</div>
						<!-- Thumbnail Navigator -->
						<div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:10px;top:0px;width:120px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
							<div data-u="slides">
								<div data-u="prototype" class="p" style="width:120px;height:68px;">
									<div data-u="thumbnailtemplate" class="t"></div>
								</div>
							</div>
						</div>
						<!-- Bullet Navigator -->
						<div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
							<div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
								<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
									<circle class="b" cx="8000" cy="8000" r="3000"></circle>
								</svg>
								<div data-u="numbertemplate" class="n"></div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div id="tabs-2">
			    <audio hidden loop id="river">
					<source src="asset/river.mp3" type="audio/mpeg">
					If you're reading this, audio isn't supported. 
				</audio>
				<div id="mainDiv">
					<div class="msg"> Not supported with mobile web :(
					</div>
					<div id="content">
						<div id="code">
							<span class="comments">/**</span><br />
							<span class="space"/><span class="comments">* Today, the xxth day of Month, is your birthday.</span><br />
							<span class="space"/><span class="comments">* So I created a page to celebrate this extraordinary day.</span><br />
							<span class="space"/><span class="comments">*/</span><br />
							This is for <span class="keyword">You</span>(<span class="string">"Girls name"</span>);<br />
							<span class="comments">// I didn't ever thought that i would meet someone like you</span></br>
							<span class="comments">// May your all days as special as your birthday</span></br>
							<span class="comments">// i'm sorry that i'm not a romantic person and careless</span></br>
							<span class="comments">// but...</span></br>
							<span class="comments">// I can do everything to make them happen</span></br>
							<span class="comments">// I may not be there there to see your smile that how happy you are when cutting your birthday cake but you will be in my thoughts.</span></br><br/>
							<span class="comments">// Our blessing will be with you together.</span><br />
							<span class="comments">// Forever and ever. I wish</span><br />
							<span class="comments">// luckiness,</span><br />
							<span class="comments">// happiness,</span><br />
							<span class="comments">// and everything you wish can be achieved.</span><br />
							<span class="comments">// The last thing I wanna say, is:</span><br />
							We may be apart today, but our love will bring us closer together. <span class="string">"Happy Birthday Babe!"</span><br /><br />
							<div class="last-message">
								<p>- Yours</p></br>
								<p>Your Name</p>
							</div>
						</div>
						<div id="loveHeart">
							<canvas id="garden"></canvas>
							<div id="words">
								<div id="messages">
									</br>
									</br>
									</br>
									</br>
									<div class="times">
										You've been in the world for
									</div>
									<div id="elapseClock"></div>
									<!-- You can change the birth date in all.js var together.setFullYear(year,month,day). -->
								</div>
								<div id="loveu">
									<div class="letter">
										May you have a year full of happiness.<br/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<span>© 2018 by Galih Rahagi, Proudly created with much hardwork and love</span>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script> <!-- Resource JavaScript -->
</body>
</html>