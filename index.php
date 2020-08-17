<?php
	// PAGE INFO
	$pageTitle			 = "Tonya W Collection";
	$pageDescription	 = "";
	$pageKeywords		 = "";
	$pageID		     	 = "homepage";

	$keyID = isset($_GET['keyid']) ? $_GET['keyid'] : '';
	$secondaryID = isset($_GET['secondaryid']) ? $_GET['secondaryid'] : '';

	// CHECK URL IF MESSAGE WAS SENT
	$messageSent = isset($_GET['msg']) ? $_GET['msg'] : '';
?>

<!DOCTYPE html>
<html class="">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta name="keywords" content="<?php echo $pageKeywords; ?>">
    
    <!-- CSS -->
    <link href="https://unpkg.com/ionicons@4.4.6/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css?ver=1.0">

    <!-- FAVICON -->
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">

	<!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- MASTHEAD -->
	<header class="masthead">
		<div class="container">
			<div class="row">
				<!-- kw logo -->
				<div class="col-6 col-md-4 kw-wrapper">
					<img class="kw-logo" src="img/kw-logo.png" alt="KW Paint Creek">
				</div>

				<!-- tw logo -->
				<div class="col-6 col-md-4 tw-wrapper">
					<img class="tw-logo" src="img/logo-dark.svg" alt="Tonya W Collection">
				</div>

				<!-- btn -->
				<div class="col-4 btn-wrapper">
					<a href="#contact" class="btn btn-outline-primary" title="Contact Tonya W">Contact Me <i class="icon ion-md-arrow-round-forward"></i></a>
				</div>
			</div>
		</div>
	</header>
	<!-- /MASTHEAD -->

	<!-- HERO -->
	<section class="hero">
		<!-- ALERTS -->
		<?php
			if ($messageSent != "sent") { echo ""; } else {
		?>
		<!-- SENT MSG -->
		<div id="message-sent">
			<div class="container">
				<div id="inner-message" class="alert alert-success alert-dismissible fade show" role="alert">
				<h4 class="alert-heading">Message Sent</h4>
				<p>Your message has been sent. I will respond as soon as possible. Thank you!</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

		<?php
			}

			if ($messageSent != "error") { echo ""; } else {
		?>

		<!-- ERROR MSG -->
		<div id="message-sent">
			<div class="container">
				<div id="inner-message" class="alert alert-danger alert-dismissible fade show" role="alert">
				<h4 class="alert-heading">Message Not Sent</h4>
				<p>Your message has not been sent. Please make sure all information is entered correctly.</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

		<?php
			}
		?>
		<!-- /ALERTS -->

		<img class="logo-bg" src="img/logo-icon.svg">

		<div class="container text-center">
			<h1 class="heading">Where Dreams <br> Follow You Home</h1>

			<a href="#contact" class="btn btn-lg btn-block btn-outline-light">Contact Me <i class="icon ion-md-arrow-round-forward"></i></a>
		</div>
	</section>
	<!-- /HERO -->

	<!-- ABOUT -->
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 about-img">
					<img class="tonya-img" src="img/tonya.jpg">
				</div>

				<div class="col-12 col-md-6 about-info">
					<h2 class="heading"><span>Y</span>our <span>R</span>ealtor</h2>
					<div class="heading-lg"><span>T</span>onya <span>W</span></div>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /ABOUT -->

	<!-- COLLECTION -->
	<section class="collection">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6 order-md-2 collection-img">

				</div>

				<div class="col-12 col-md-6 collection-info">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

					<a href="#" class="btn btn-lg btn-light" title="View the Collection">SEE THE COLLECTION <i class="icon ion-md-arrow-round-forward"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- /COLLECTION -->

	<!-- CONTACT -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="text-center">
				<h2 class="heading">Contact Me</h2>
				<div class="heading-lg"><span>G</span>et <span>I</span>n <span>T</span>ouch</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<div class="details">
						<div><i class="icon ion-md-pin"></i> 543 N Main St #111, Rochester, MI 48307</div>
						<div><i class="icon ion-md-call"></i> 248-555-5555</div>
						<div><i class="icon ion-md-mail"></i> tonya@tonyawcollection.com</div>
					</div>
				</div>

				<div class="col-12 col-md-6">
					<form id="contactForm" class="contact__form" name="sentMessage" novalidate="novalidate" action="mail.php" method="POST">
							
						<div class="form-group">
	                    	<input name="name" type="text" class="form-control" placeholder="Name" required>
	                    </div>
	                    <div class="form-group">
	                        <input name="email" type="email" class="form-control" placeholder="Email" required>
	                    </div>
	                    <div class="form-group">
	                        <input name="phone" type="text" class="form-control" placeholder="Phone" required>
	                    </div>
	                    <div class="form-group">
	                        <input name="subject" type="text" class="form-control" placeholder="Subject" required>
	                    </div>
	                    <div class="form-group">
	                        <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
	                    </div>
								
						<div class="spacer-20px"></div>

						<button id="sendMessageButton" class="btn btn-lg btn-primary" type="submit">Send Message <i class="icon ion-md-arrow-round-forward"></i></button>	
					</form>
				</div>
			</div>
		</div>

		<img class="contact-house" src="img/large-house.jpg">
	</section>
	<!-- /CONTACT -->

	<!-- FOOTER -->
	<footer class="footer">
		<div class="container">
			<div class="text-center">
				<img class="logo" src="img/logo-white.svg">
				<p>Copyright &copy; <?php echo date('Y'); ?> Tonya W Collection. All rights reserved. 
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->
</body>
</html>
