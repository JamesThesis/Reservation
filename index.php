<!--A Design by Student
Author: Student
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pension House</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Boostrap Framework CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Font-awesome CSS -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Datepicker CSS & JS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<script src="assets/js/datepicker.js"></script>
	<!-- ScrollToTop -->
	<link rel="stylesheet" type="text/css" href="assets/css/scrollToTop.css">
	<link rel="stylesheet" type="text/css" href="assets/css/easing.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="assets/js/jssor.core.js"></script>
    <script type="text/javascript" src="assets/js/jssor.utils.js"></script>
    <script type="text/javascript" src="assets/js/jssor.slider.js"></script>
    <script>
    	//jQuery to collapse the navbar on scroll
		$(window).scroll(function() {
		    if ($(".navbar").offset().top > 150) {
		        $(".navbar-fixed-top").addClass("top-nav-collapse");
		    } else {
		        $(".navbar-fixed-top").removeClass("top-nav-collapse");
		    }
		});
    </script>
    <script>
    	$(window).scroll(function(){
			if($(".navbar").offset().top>150){
				$(".navbar").animate({height:'50px'}, 200);
			}else{
				$(".navbar").animate({height:'100px'}, 200);
			}
		});
    </script>
    <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
</head>
<body style>
	<!-- Start Header -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:100px;">
      	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="#"><i class="fa fa-home"></i>Pensionne House</a>
        	</div>
	        <div class="navbar-collapse collapse navbar-inverse">
	          	<ul class="nav navbar-nav navbar-right">
	          		<li class="nav-li">
	          			<a class="active" href="#">Home</a>
	          		</li>
	          		<li class="nav-li">
	          			<a href="#">Rooms</a>
	          		</li>
	          		<li class="nav-li">
	          			<a href="#">About</a>
	          		</li>
	          		<li class="nav-li">
	          			<a href="#">Contacts</a>
	          		</li>
	          	</ul>
	        </div><!--/.navbar-collapse -->
      	</div>
    </div>
    <!-- Carousel -->
    <section class="block">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="active item">
                <img src="assets/image/01.jpg" alt="Slide1" />
            </div>
            <div class="item">
                <img src="assets/image/02.jpg" alt="Slide2" />
            </div>
            <div class="item">
                <img src="assets/image/03.jpg" alt="Slide3" />
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left fa2"></i></a>
 		<a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right fa2"></i></a>

    </div>
	</section>
	<div class="row">
	  	<div class="col-sm-10 col-sm-offset-1">
	  		<div class="row reservation">
	  			<div class="col-sm-4 box">
	  				<h4>Right something here</h4>
	  				<p>Reserve Now! Pay Later!</p>
	  			</div>
	  			<div class="col-sm-8 box1">
	  				<div class="row box2">
	  					<form role="form" action="rooms.php" method="GET">
		  					<div class="col-sm-4">
			  					<div class="form-group">
			  						<label for="check-in">Check-in</label>
			  						<input class="date form-control" type="text" name="c_in" value="" id="datepicker" placeHolder="DD/MM/YY"></input>
			  					</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="check-out">Check Out</label>
									<input class="date form-control" type="text" name="c_out" value="" id="datepicker1" placeHolder="DD/MM/YY"></input>
								</div>
							</div>
							<div class="col-sm-4 submit">
								<button class="btn btn-success" type="submit">Reserve</button>
							</div>
						</form>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</div>
	<!-- Main Content -->
	<div class="container main">
		<div class="row">
				<div class="col-sm-4">
					<img class="grid3" src="assets/image/room01.jpg">
					<h2>Single Rooms</h2>
					<p>Renovated to provide a tranquil atmosphere, with a duvet-style bed that our guests can gently wrap themselves in for a great night's sleep. The mist shower installed in the bathroom will help you ease your fatigue.</p>
				</div>
				<div class="col-sm-4">
					<img class="grid3" src="assets/image/room02.jpg">
					<h2>Double Rooms</h2>
					<p>Beds are placed symmetrically on both sides of room so that the two beds face each other. This layout creates a cozy atmosphere, making the room suitable for families and groups of young women</p>
				</div>
				<div class="col-sm-4">
					<img class="grid3" src="assets/image/room03.jpg">
					<h2>Suite Rooms</h2>
					<p>A room with large windows which create an open feeling. Have a pleasant time with your family or friends in this spacious room.</p>
				</div>				
		</div>
	</div>
	<!-- Footer -->
	<div class="row footer">
		<div class="col-sm-12">
			<p>© All rights reserved | Pensionne House ni James</p>
		</div>
	</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- ScrollToTop -->
	<script type="text/javascript" src="assets/js/jquery-scrollToTop.js"></script>
	<script type="text/javascript">
        $(document).ready(function($) {
            $('body').scrollToTop({skin: 'cycle'});
        });
    </script>
</body>
</html>
