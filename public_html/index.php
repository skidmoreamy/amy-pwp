<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
		xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
		xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

	<head>
		<meta charset="utf-8"/>
		<!--Tells the browser that the page is written in UTF-8 unicode. This is for internationalization.-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!--This tag is for Internet Explorer, and it allows us to specify what version of IE to render page in. "IE=edge" tells IE to display our content in the highest mode available, which avoids "IE Compatibility Mode" bugs.-->

		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!--This is the responsive meta tag. This is used to scale and size our content relative to the "viewport" - which is essentially is the visible portion of screen itself. This tag also sets the inital zoom scale to 1:1. This <meta> tag is required when creating a responsive web site.-->

		<meta name="description" content="PWP">
		<meta name="author" content="Amy Skidmore">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme compiled/min/css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet"/>
		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Fredericka+the+Great|Merriweather|Nunito:800" rel="stylesheet">
		<!--custom css-->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--This is an HTML Conditional Comment. These are conditional statements that are read and executed only by

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins, This loads the jQuery JavaScript library from Google's CDN. jQuery required for many of Bootstrap's built-in functionality.) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript"

				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"
				  type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"
				  type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!-- Custom Javascript -->
		<script src="js/scrolling-nav.js" type="text/javascript"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<title>Amy Skidmore</title>
	</head>
	<body>
		<header>
			<nav>
				<div class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header page-scroll">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
									  data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="#page-top" class="navbar-brand page-scroll">
								<div class="name"><span>Amy Skidmore</span>
								</div>
							</a>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a class="page-scroll" href="#about">About</a>
								</li>
								<li>
									<a class="page-scroll" href="#portfolio">Portfolio</a>
								</li>
								<li>
									<a class="page-scroll" href="#contact">Contact</a>
								</li>
								<li>
									<a href="php/resume.pdf">Resume</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/amy-skidmore-6a9972139/" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="https://github.com/skidmoreamy/" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- /.navbar-default -->
			</nav>
		</header>

		<!--Bootstrap-Jumbotron-->
		<div class="extra-jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1>ASTECH</h1>
						<h1><bold>Web Development & Design</bold></h1>
					</div>
				</div>
			</div>
		</div>

		<section id="about" class="about-section">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-lg-9 col-xs-6">
						<h2>About</h2>
						<p>Hi, I'm Amy and I freelance as a Junior FullStack Web Developer. I strive to build creative,
							functional, and responsive web sites from the ground up using, clean dry code.
							I currently work with: PHP, MySQL, CSS, Bootstrap, WordPress, Python, JavaScript, and Angular.
							Feel free to contact me with any questions or requests. </p>
						<a href="#about"/a>
					</div>
					<div class="col-lg-3 col-xs-6">
						<a href="#about">
							<img class="img-circle img-responsive" src="image/profile.jpg" alt="map displaying data">
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Portfolio section -->
		<section id="portfolio" class="portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1 class="section-heading">PORTFOLIO</h1>
						<p></p>
					</div>
				</div>
			</div>
		</section>
		<!--Contact-->

		<section><form id="contact" action="php/mailer.php" method="post">
				<h2><center>Contact</center></h2>
			<div class="form-group">
				<label for="name">Name <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="contact-form" name="contact-form" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label for="subject">Subject</label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</div>
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
				</div>
			</div>
			<div class="form-group">
				<label for="message">Message <span class="text-danger">*</span></label>
				<div class="input-group">
					<div class="input-group-addon">
						<i class="fa fa-comment" aria-hidden="true"></i>
					</div>
					<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
				</div>
			</div>


			<!-- reCAPTCHA -->
			<div class="g-recaptcha" data-sitekey="6LcozSMUAAAAAHO-noFgY51rTyFVdBI4Psp2ldjt"></div>
			<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
			<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
		</form>


		<!--empty area for form error/success output-->
		<div class="row">
			<div class="col-xs-12">
				<div id="output-area"></div>
			</div>
		</div>
		</section>
	</body>
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="text-left">copy right @ Amy Skidmore 2017</div>
			</div>
		</div>
	</footer>
</html>