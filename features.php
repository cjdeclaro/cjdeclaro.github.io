<!DOCTYPE html>
<html lang="en">
<head>

<!-- page title -->
<title>Intent - Features</title>

<!-- theme css --> 
<link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
<!-- carousel css -->
<link href="assets/js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">

<!-- author -->
<meta name="author" content="Lucid Themes">
<!-- responsive meta tag -->
<meta 
     name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' 
/>
<meta charset="UTF-8">

<!-- google fonts used -->
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>


<body class="page-template-features">
<?php include 'topnav.php'?>
<div id="main-content">
	
	<!-- theme slideshows -->
	<section class="feature-slideshow-section">
		<div class="container">
		
			<div class="section-inner no-border">
			
				<!-- Section title -->
				<div class="section-title">
					<h2 class="font-montserrat-reg">Slideshows</h2>
					<p class="font-opensans-reg">Create stunning slideshow to showcase images</p>
				</div>
				
				<div id="feature-slideshow-outer" class="carousel-outer">
				
					<!-- Previous slide button -->
					<span class="slideshow-btn previous-slide-btn fa fa-angle-left"></span>
					
					<!-- Single portfolio slideshow -->
					<div id="feature-slideshow" class="carousel">
					
						<!-- feature slide example -->
						<div class="feature-slide" style="background-image:url('assets/img/portfolio_placeholder_3.jpg');">
						</div>
						
						<!-- feature slide example -->
						<div class="feature-slide" style="background-image:url('assets/img/single_placeholder_1.jpg');">
						</div>
						
						<!-- feature slide example -->
						<div class="feature-slide" style="background-image:url('assets/img/portfolio_placeholder_7.jpg');">
						</div>
					
					</div>
					
					<!-- Next slide button -->
					<span class="slideshow-btn next-slide-btn fa fa-angle-right"></span>
				
				</div>
				
				<div class="feature-slide-animation">
				
					<div class="row">
					
						<div class="col-xlarge-10 col-medium-9">
					
							<div class="row">
							
								<div class="col-xlarge-3 hidden-medium">
									<p class="font-opensans-reg">Change animation in:</p>
								</div>
								
								<div class="col-xlarge-3 col-medium-6">
									<select id="slideshow-animation-in" class="slideshow-animation-select">
										<optgroup label="Default">
											<option value="fadeIn">fadeIn</option>
										</optgroup>
										
										<optgroup label="Attention Seekers">
										  <option value="bounce">bounce</option>
										  <option value="flash">flash</option>
										  <option value="pulse">pulse</option>
										  <option value="rubberBand">rubberBand</option>
										  <option value="shake">shake</option>
										  <option value="swing">swing</option>
										  <option value="tada">tada</option>
										  <option value="wobble">wobble</option>
										  <option value="jello">jello</option>
										</optgroup>

										<optgroup label="Bouncing Entrances">
										  <option value="bounceIn">bounceIn</option>
										  <option value="bounceInDown">bounceInDown</option>
										  <option value="bounceInLeft">bounceInLeft</option>
										  <option value="bounceInRight">bounceInRight</option>
										  <option value="bounceInUp">bounceInUp</option>
										</optgroup>

										<optgroup label="Bouncing Exits">
										  <option value="bounceOut">bounceOut</option>
										  <option value="bounceOutDown">bounceOutDown</option>
										  <option value="bounceOutLeft">bounceOutLeft</option>
										  <option value="bounceOutRight">bounceOutRight</option>
										  <option value="bounceOutUp">bounceOutUp</option>
										</optgroup>

										<optgroup label="Fading Entrances">
										  <option value="fadeIn">fadeIn</option>
										  <option value="fadeInDown">fadeInDown</option>
										  <option value="fadeInDownBig">fadeInDownBig</option>
										  <option value="fadeInLeft">fadeInLeft</option>
										  <option value="fadeInLeftBig">fadeInLeftBig</option>
										  <option value="fadeInRight">fadeInRight</option>
										  <option value="fadeInRightBig">fadeInRightBig</option>
										  <option value="fadeInUp">fadeInUp</option>
										  <option value="fadeInUpBig">fadeInUpBig</option>
										</optgroup>

										<optgroup label="Fading Exits">
										  <option value="fadeOut">fadeOut</option>
										  <option value="fadeOutDown">fadeOutDown</option>
										  <option value="fadeOutDownBig">fadeOutDownBig</option>
										  <option value="fadeOutLeft">fadeOutLeft</option>
										  <option value="fadeOutLeftBig">fadeOutLeftBig</option>
										  <option value="fadeOutRight">fadeOutRight</option>
										  <option value="fadeOutRightBig">fadeOutRightBig</option>
										  <option value="fadeOutUp">fadeOutUp</option>
										  <option value="fadeOutUpBig">fadeOutUpBig</option>
										</optgroup>

										<optgroup label="Flippers">
										  <option value="flip">flip</option>
										  <option value="flipInX">flipInX</option>
										  <option value="flipInY">flipInY</option>
										  <option value="flipOutX">flipOutX</option>
										  <option value="flipOutY">flipOutY</option>
										</optgroup>

										<optgroup label="Lightspeed">
										  <option value="lightSpeedIn">lightSpeedIn</option>
										  <option value="lightSpeedOut">lightSpeedOut</option>
										</optgroup>

										<optgroup label="Rotating Entrances">
										  <option value="rotateIn">rotateIn</option>
										  <option value="rotateInDownLeft">rotateInDownLeft</option>
										  <option value="rotateInDownRight">rotateInDownRight</option>
										  <option value="rotateInUpLeft">rotateInUpLeft</option>
										  <option value="rotateInUpRight">rotateInUpRight</option>
										</optgroup>

										<optgroup label="Rotating Exits">
										  <option value="rotateOut">rotateOut</option>
										  <option value="rotateOutDownLeft">rotateOutDownLeft</option>
										  <option value="rotateOutDownRight">rotateOutDownRight</option>
										  <option value="rotateOutUpLeft">rotateOutUpLeft</option>
										  <option value="rotateOutUpRight">rotateOutUpRight</option>
										</optgroup>

										<optgroup label="Sliding Entrances">
										  <option value="slideInUp">slideInUp</option>
										  <option value="slideInDown">slideInDown</option>
										  <option value="slideInLeft">slideInLeft</option>
										  <option value="slideInRight">slideInRight</option>

										</optgroup>
										<optgroup label="Sliding Exits">
										  <option value="slideOutUp">slideOutUp</option>
										  <option value="slideOutDown">slideOutDown</option>
										  <option value="slideOutLeft">slideOutLeft</option>
										  <option value="slideOutRight">slideOutRight</option>
										  
										</optgroup>
										
										<optgroup label="Zoom Entrances">
										  <option value="zoomIn">zoomIn</option>
										  <option value="zoomInDown">zoomInDown</option>
										  <option value="zoomInLeft">zoomInLeft</option>
										  <option value="zoomInRight">zoomInRight</option>
										  <option value="zoomInUp">zoomInUp</option>
										</optgroup>
										
										<optgroup label="Zoom Exits">
										  <option value="zoomOut">zoomOut</option>
										  <option value="zoomOutDown">zoomOutDown</option>
										  <option value="zoomOutLeft">zoomOutLeft</option>
										  <option value="zoomOutRight">zoomOutRight</option>
										  <option value="zoomOutUp">zoomOutUp</option>
										</optgroup>

										<optgroup label="Specials">
										  <option value="hinge">hinge</option>
										  <option value="rollIn">rollIn</option>
										  <option value="rollOut">rollOut</option>
										</optgroup>
									</select>
								</div>
								
								<div class="col-xlarge-3 hidden-medium">
									<p class="font-opensans-reg">Change animation out:</p>
								</div>
								
								<div class="col-xlarge-3 col-medium-6">
									<select id="slideshow-animation-out" class="slideshow-animation-select">
									
										<optgroup label="Default">
											<option value="fadeOut">fadeOut</option>
										</optgroup>
									
										<optgroup label="Attention Seekers">
										  <option value="bounce">bounce</option>
										  <option value="flash">flash</option>
										  <option value="pulse">pulse</option>
										  <option value="rubberBand">rubberBand</option>
										  <option value="shake">shake</option>
										  <option value="swing">swing</option>
										  <option value="tada">tada</option>
										  <option value="wobble">wobble</option>
										  <option value="jello">jello</option>
										</optgroup>

										<optgroup label="Bouncing Entrances">
										  <option value="bounceIn">bounceIn</option>
										  <option value="bounceInDown">bounceInDown</option>
										  <option value="bounceInLeft">bounceInLeft</option>
										  <option value="bounceInRight">bounceInRight</option>
										  <option value="bounceInUp">bounceInUp</option>
										</optgroup>

										<optgroup label="Bouncing Exits">
										  <option value="bounceOut">bounceOut</option>
										  <option value="bounceOutDown">bounceOutDown</option>
										  <option value="bounceOutLeft">bounceOutLeft</option>
										  <option value="bounceOutRight">bounceOutRight</option>
										  <option value="bounceOutUp">bounceOutUp</option>
										</optgroup>

										<optgroup label="Fading Entrances">
										  <option value="fadeIn">fadeIn</option>
										  <option value="fadeInDown">fadeInDown</option>
										  <option value="fadeInDownBig">fadeInDownBig</option>
										  <option value="fadeInLeft">fadeInLeft</option>
										  <option value="fadeInLeftBig">fadeInLeftBig</option>
										  <option value="fadeInRight">fadeInRight</option>
										  <option value="fadeInRightBig">fadeInRightBig</option>
										  <option value="fadeInUp">fadeInUp</option>
										  <option value="fadeInUpBig">fadeInUpBig</option>
										</optgroup>

										<optgroup label="Fading Exits">
										  <option value="fadeOut">fadeOut</option>
										  <option value="fadeOutDown">fadeOutDown</option>
										  <option value="fadeOutDownBig">fadeOutDownBig</option>
										  <option value="fadeOutLeft">fadeOutLeft</option>
										  <option value="fadeOutLeftBig">fadeOutLeftBig</option>
										  <option value="fadeOutRight">fadeOutRight</option>
										  <option value="fadeOutRightBig">fadeOutRightBig</option>
										  <option value="fadeOutUp">fadeOutUp</option>
										  <option value="fadeOutUpBig">fadeOutUpBig</option>
										</optgroup>

										<optgroup label="Flippers">
										  <option value="flip">flip</option>
										  <option value="flipInX">flipInX</option>
										  <option value="flipInY">flipInY</option>
										  <option value="flipOutX">flipOutX</option>
										  <option value="flipOutY">flipOutY</option>
										</optgroup>

										<optgroup label="Lightspeed">
										  <option value="lightSpeedIn">lightSpeedIn</option>
										  <option value="lightSpeedOut">lightSpeedOut</option>
										</optgroup>

										<optgroup label="Rotating Entrances">
										  <option value="rotateIn">rotateIn</option>
										  <option value="rotateInDownLeft">rotateInDownLeft</option>
										  <option value="rotateInDownRight">rotateInDownRight</option>
										  <option value="rotateInUpLeft">rotateInUpLeft</option>
										  <option value="rotateInUpRight">rotateInUpRight</option>
										</optgroup>

										<optgroup label="Rotating Exits">
										  <option value="rotateOut">rotateOut</option>
										  <option value="rotateOutDownLeft">rotateOutDownLeft</option>
										  <option value="rotateOutDownRight">rotateOutDownRight</option>
										  <option value="rotateOutUpLeft">rotateOutUpLeft</option>
										  <option value="rotateOutUpRight">rotateOutUpRight</option>
										</optgroup>

										<optgroup label="Sliding Entrances">
										  <option value="slideInUp">slideInUp</option>
										  <option value="slideInDown">slideInDown</option>
										  <option value="slideInLeft">slideInLeft</option>
										  <option value="slideInRight">slideInRight</option>

										</optgroup>
										<optgroup label="Sliding Exits">
										  <option value="slideOutUp">slideOutUp</option>
										  <option value="slideOutDown">slideOutDown</option>
										  <option value="slideOutLeft">slideOutLeft</option>
										  <option value="slideOutRight">slideOutRight</option>
										  
										</optgroup>
										
										<optgroup label="Zoom Entrances">
										  <option value="zoomIn">zoomIn</option>
										  <option value="zoomInDown">zoomInDown</option>
										  <option value="zoomInLeft">zoomInLeft</option>
										  <option value="zoomInRight">zoomInRight</option>
										  <option value="zoomInUp">zoomInUp</option>
										</optgroup>
										
										<optgroup label="Zoom Exits">
										  <option value="zoomOut">zoomOut</option>
										  <option value="zoomOutDown">zoomOutDown</option>
										  <option value="zoomOutLeft">zoomOutLeft</option>
										  <option value="zoomOutRight">zoomOutRight</option>
										  <option value="zoomOutUp">zoomOutUp</option>
										</optgroup>

										<optgroup label="Specials">
										  <option value="hinge">hinge</option>
										  <option value="rollIn">rollIn</option>
										  <option value="rollOut">rollOut</option>
										</optgroup>
									</select>
								</div>
								
							</div>
						
						</div>
					
						<div class="col-xlarge-2 col-medium-3">
							<p id="feature-autoplay" class="font-opensans-reg">Autoplay: off</p>
						</div>
					
					</div>
					
				</div>
				
				<div class="page-content">
					<h3>Customizable Slideshows</h3>
					<p>Slideshows can be applied to any blog post or page to showcase your images beautifully. All slideshows include the ability to change the animation used for when the slide comes into view and when it goes out. You can test this out by changing the options above.</p>
				</div>
			
			</div>
		
		</div>
	</section>
	
	<!-- typography section -->
	<section class="feature-column-section">
		<div class="container">
		
			<div class="section-inner">
			
				<!-- Section title -->
				<div class="section-title">
					<h2 class="font-montserrat-reg">Typography</h2>
					<p class="font-opensans-reg">Typography used for pages and blog posts</p>
				</div>
				
				<!-- post content -->
				<div class="page-content">
					<img src="assets/img/portfolio_placeholder_2.jpg" alt="" class="alignright"/>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu, efficitur molestie purus. Sed a elementum mi. Sed interdum mattis risus, sit amet eleifend ligula luctus ut. Sed ullamcorper lorem aliquam, tincidunt lorem et, ultrices est. Suspendisse eleifend dui odio, id volutpat quam iaculis eu. Nunc sit amet scelerisque mauris. Phasellus volutpat mauris ac sem tincidunt, in fringilla arcu ultrices. Phasellus scelerisque eros vel pulvinar gravida. Aenean suscipit felis orci, sed egestas libero dignissim at. Sed commodo malesuada ligula, nec vehicula risus fermentum sed.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu, efficitur molestie purus. Sed a elementum mi. Sed interdum mattis risus, sit amet eleifend ligula luctus ut. Sed ullamcorper lorem aliquam, tincidunt lorem et, ultrices est. Suspendisse eleifend dui odio, id volutpat quam iaculis eu. Nunc sit amet scelerisque mauris. Phasellus volutpat mauris ac sem tincidunt, in fringilla arcu ultrices. Phasellus scelerisque eros vel pulvinar gravida. Aenean suscipit felis orci, sed egestas libero dignissim at. Sed commodo malesuada ligula, nec vehicula risus fermentum sed.</p>
					<p>Integer pretium posuere est. Ut interdum mollis ipsum, ac vehicula nisl laoreet et. Curabitur ac ipsum aliquam, varius purus at, lobortis purus. Maecenas quis sem dapibus, volutpat odio non, mattis dui. Nam eget urna nec mi tempor mollis vel nec felis. Cras tellus est, malesuada at leo vitae, lacinia pellentesque eros. Donec accumsan tincidunt velit.</p>
					<h3>Example subheading</h3>
					<p>Nullam lobortis faucibus cursus. Sed aliquam semper mi sit amet interdum. <a href="">Aliquam</a> felis quam, ultrices ut elementum a, porta vel ex. Pellentesque at tempus magna. Vestibulum viverra lectus quis laoreet ullamcorper. Nunc finibus orci in luctus hendrerit. Ut dui mi, lacinia hendrerit elit ut, malesuada luctus enim.</p>
					<blockquote><p>Aliquam a malesuada elit. Aliquam sit amet augue nec diam lacinia tempus. Phasellus accumsan ac arcu ut fermentum. Curabitur volutpat, ex vel tincidunt sollicitudin, quam velit malesuada lorem. Vivamus varius aliquam enim at sagittis. Nulla facilisi.</p></blockquote>
					<p>Sed rhoncus, velit sit amet mollis cursus, velit urna congue orci, in dignissim elit magna eget ante. Mauris sem justo, volutpat in quam quis, vulputate luctus neque. Sed ultricies eget augue quis hendrerit. Nullam quis nisi sit amet velit pharetra lobortis ac eget magna. Phasellus varius turpis quis quam vulputate, sed ultricies ex gravida. Suspendisse leo ipsum, porttitor sed ullamcorper id, pretium vel urna. Donec sit amet mauris leo. Sed nibh odio, lacinia eu condimentum eu, accumsan id elit. Sed porttitor pretium ipsum, et lacinia quam faucibus fringilla. Vivamus a augue maximus, gravida ante eget, pulvinar est. Nulla laoreet feugiat elit, eu euismod mauris volutpat ut.</p>
					<ul>
						<li>Aliquam sit amet augue nec diam lacinia tempus</li>
						<li>Mauris sem justo, volutpat in quam quis, vulputate luctus neque</li>
						<li>Congue orci in dignissim elit magna eget ante</li>
						<li>Velit sit amet mollis cursus</li>
					</ul>
					<h3>Example subheading</h3>
					<p>Nullam lobortis faucibus cursus. Sed aliquam semper mi sit amet interdum. <a href="">Aliquam</a> felis quam, ultrices ut elementum a, porta vel ex. Pellentesque at tempus magna. Vestibulum viverra lectus quis laoreet ullamcorper. Nunc finibus orci in luctus hendrerit. Ut dui mi, lacinia hendrerit elit ut, malesuada luctus enim.</p>
					<p>Aliquam a malesuada elit. Aliquam sit amet augue nec diam lacinia tempus. Phasellus accumsan ac arcu ut fermentum. Curabitur volutpat, ex vel tincidunt sollicitudin, quam velit malesuada lorem. Vivamus varius aliquam enim at sagittis. Nulla facilisi.</p>
					<ol>
						<li>Aliquam sit amet augue nec diam lacinia tempus</li>
						<li>Mauris sem justo, volutpat in quam quis, vulputate luctus neque</li>
						<li>Congue orci in dignissim elit magna eget ante</li>
						<li>Velit sit amet mollis cursus</li>
					</ol>
				</div>
				
			</div>
		
		</div>
	</section>
	
	<!-- page header section -->
	<section class="feature-header-section">
		<div class="container">
		
			<div class="section-inner">
			
				<!-- Section title -->
				<div class="section-title">
					<h2 class="font-montserrat-reg">Page Headers</h2>
					<p class="font-opensans-reg">Can be used on any page or blog post</p>
				</div>
				
			</div>
		
		</div>
			
		<!-- page header section -->
		<section class="page-header wide-header">
			<div class="container">
			
				<!-- page header inner -->
				<div class="section-inner no-border" style="background-image:url('assets/img/featured_placeholder_1.jpg');">
					<div class="page-head-inside">
						<h1 class="font-montserrat-reg">Custom Page Headers</h1>
						<p class="font-opensans-reg">Change Width, Height, Background Image, Colors</p>
					</div>
				</div>
				
			</div>
		</section>
		
		<!-- page header section -->
		<section class="page-header">
			<div class="container">
			
				<!-- page header inner -->
				<div class="section-inner no-border" style="background-image:url('assets/img/featured_placeholder_3.jpg');">
					<div class="page-head-inside">
						<h1 class="font-montserrat-reg">Narrow Page Header</h1>
						<p class="font-opensans-reg">Background Image</p>
					</div>
				</div>
				
			</div>
		</section>
		
		<!-- page header section -->
		<section class="page-header">
			<div class="container">
			
				<!-- page header inner -->
				<div class="section-inner no-border" style="background-image:url('assets/img/page_header_placeholder.jpg');">
					<div class="page-head-inside">
						<h1 class="font-montserrat-reg">Narrow Page Header</h1>
						<p class="font-opensans-reg">Custom background & text colors</p>
					</div>
				</div>
				
			</div>
		</section>

	</section>
	
	<!-- column structure section -->
	<section class="feature-column-section">
		<div class="container">
		
			<div class="section-inner">
			
				<!-- Section title -->
				<div class="section-title">
					<h2 class="font-montserrat-reg">Columns</h2>
					<p class="font-opensans-reg">Responsive 12 column grid structure</p>
				</div>
				
				<!-- Row example -->
				<div class="row">
				
					<!-- Column example -->
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
					
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
					<div class="col-xlarge-2 col-medium-2 col-small-2">
						<div class="column-item">
							<p>1/6</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xlarge-3 col-medium-3 col-small-3">
						<div class="column-item">
							<p>1/4</p>
						</div>
					</div>
					<div class="col-xlarge-3 col-medium-3 col-small-3">
						<div class="column-item">
							<p>1/4</p>
						</div>
					</div>
					<div class="col-xlarge-3 col-medium-3 col-small-3">
						<div class="column-item">
							<p>1/4</p>
						</div>
					</div>
					<div class="col-xlarge-3 col-medium-3 col-small-3">
						<div class="column-item">
							<p>1/4</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xlarge-4 col-medium-4 col-small-4">
						<div class="column-item">
							<p>1/3</p>
						</div>
					</div>
					<div class="col-xlarge-4 col-medium-4 col-small-4">
						<div class="column-item">
							<p>1/3</p>
						</div>
					</div>
					<div class="col-xlarge-4 col-medium-4 col-small-4">
						<div class="column-item">
							<p>1/3</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xlarge-6 col-medium-6 col-small-6">
						<div class="column-item">
							<p>1/2</p>
						</div>
					</div>
					<div class="col-xlarge-6 col-medium-6 col-small-6">
						<div class="column-item">
							<p>1/2</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xlarge-12 col-medium-12 col-small-12">
						<div class="column-item">
							<p>Full width</p>
						</div>
					</div>
				</div>
			
			</div>
		
		</div>
	</section>

</div>

<?php include 'footer.php'?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>