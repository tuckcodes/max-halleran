<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css" type="text/css">

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/waypoints-styles.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Waypoints.js -->
		<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>

		<!-- Custom Waypoints JavaScript File -->
		<script src="js/custom-waypoints.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<script src="js/script.js"></script>

		<title>Max Halleran Portfolio</title>
	</head>

	<body>

		<div class="parallax">
			<div class="container-fluid">

				<!--top logo with name in top left of top background image-->
				<div class="row" id="waypoint-top">
					<div class="col-md-12">
						<img src="images/maxlogo2.png" alt="maxlogo" id="maxlogo">
					</div>
				</div>

				<!--graphic of portrait and intro that will come into page through animation on click-scroll-->
				<div class="row">
					<div class="col-md-12">
						<div class="row text-center">
							<div id="waypoint-1" class="animated waypoint text-right">
								<img src="images/MaxRedBrickCircle.png" alt="Max" id="max"/>
								<img src="images/intromax.png" alt="blurb" id="intromax"/>
							</div>
						</div>
					</div>
				</div>

				<!--graphic depicting city that will come into page through animation on click-scroll-->
				<div class="row">
					<div class="col-md-12">
						<div id="waypoint-2" class="animated waypoint text-right">
							<img src="images/floatingcitycalgary.png" id="city"/>
							<div>
							</div>
						</div>

						<!--graphic depicting description that will come into page through animation on click-scroll-->
						<div class="row">
							<div class="col-md-12">
								<div id="waypoint-3" class="animated waypoint">
									<img src="images/maxdescription.png" alt="description" id="description">
								</div>
							</div>
						</div>

						<!--graphic listing skills that comes into page through animation on click-scroll-->
						<div class="row">
							<div class="col-md-12">
								<div id="waypoint-4" class="animated waypoint">
									<img src="images/maxskills.png" alt="skills" id="skills">
								</div>
							</div>
						</div>

						<!--contact me graphic that slides in above form-->
						<div class="row">
							<div class="col-md-12">
								<div id="waypoint-5" class="animated waypoint text-right">
									<img src="images/contactme.png" alt="contact" id="contactme">
								</div>
								<div class="row text-center">
									<!--Begin Contact Form-->
									<form id="contact-form" action="php/mailer.php" method="post">
										<div class="form-group">
											<label for="name">Name <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-user" aria-hidden="true"></i>
												</div>
												<input class="form-control" type="text" class="form-control" id="txtName"
														 name="txtName"
														 placeholder="Name">
											</div>
										</div>
										<div class="form-group">
											<label for="email">Email <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-envelope" aria-hidden="true"></i>
												</div>
												<input type="email" class="form-control" id="email" name="email"
														 placeholder="Email">
											</div>
										</div>
										<div class="form-group">
											<label for="subject">Subject</label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-pencil" aria-hidden="true"></i>
												</div>
												<input type="text" class="form-control" id="subject" name="subject"
														 placeholder="Subject">
											</div>
										</div>
										<div class="form-group">
											<label for="message">Message <span class="text-danger">*</span></label>
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-comment" aria-hidden="true"></i>
												</div>
												<textarea class="form-control" rows="5" id="message" name="message"
															 placeholder="Message (2000 characters max)"></textarea>
											</div>
										</div>

										<!-- reCAPTCHA -->
										<div class="g-recaptcha" data-sitekey="6LfuxCMUAAAAAMFnHLmm3rUtZHWvclK0Kka336bq"></div>

										<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send
										</button>
										<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
									</form>

									<!--empty area for form error/success output-->
									<div class="row">
										<div class="col-xs-12">
											<div id="output-area"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--footer to have button that triggers incremental scroll to div waypoiints-->
						<footer class="fixed-to-bottom" id="footer">
							<div class="container-fluid">
								<div class="row">
					<span class="text-muted">
						<div class="col-md-4 col-sm-4 hidden-xs" id="moveright"><img src="images/LeftArrow.png"
																										 class="img.responsive"
																										 id="leftarrow"></div>
						<div class="col-md-4 col-sm-4 col-xs-12"><button class="button" id="button"><a id="click"></a><img
									src="images/BikeWheel.png" class="img.responsive" id="bike"></button></div>
						<div class="col-md-4 col-sm-4 hidden-xs" id="moveleft"><img src="images/RightArrow.png"
																										class="img.responsive"
																										id="rightarrow"></div>
					</span>
								</div>
							</div>
						</footer>
	</body>

</html>
