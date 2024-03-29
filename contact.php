
<!DOCTYPE html>
<html lang="en" class="ng-scope">
	<head>
		<title>Hannah Roe: Front-End Web Developer</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="desciption" content="Hannah Roe is a Front-End Web Developer based in Salt Lake City.">
		<meta name="author" content="Hannah Roe">
		<meta name="robots" content="index, follow">
		<meta property="og:title" content="Hannah Roe: Front-End Web Developer">
		<meta property="og:description" content="">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<!--[if lt IE 9]>
    		<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600|Quicksand:300' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src ="js/googleAnalytics.js"></script>
	</head>
	<body  ng-app="NavApp" ng-controller="navCtrl" class="ng-scope"ng-app="contactApp" ng-controller="formCtrl">
		<header id="top" >
		<!-- Hamburger Button -->
			<ul class="skipLinks">
				<li class="navigation">
					<button ng-click="showLeft($event)">
						<i class="menu">
							<span class="icon sr-only" >Skip to Navigation</span>
							<span class="icon"></span>
							<span class="icon"></span>
							<span class="icon"></span>
						</i>
					</button>
				</li>
				<li class="content sr-only">
					<a href="#page">Skip to Content</a>
				</li>
			</ul>

			<!-- Brand Top Left -->
			<a class="brand" href="index.html">Hannah Roe</a>

			<!-- Top Navigation -->
			<nav id="nav"  visible="leftVisible" alignment="left">
				<span id="navSpan">
					<ul id="navLinks" class="ng-isolate-scope" >
						<li><a href="index.html" class="navLinkA">Home</a></li>
						<li><a href="about.html" class="navLinkA">About</a></li>
						<li><a href="portfolio.html" class="navLinkA">Portfolio</a></li>
						<li><a href="#" class="active navLinkA">Contact</a></li>

					</ul>
					
					<!--Top Right Social Icons -->
					<ul id="iconList">
						<li>
							<a href="https://www.linkedin.com/in/hannahdroe" target="_blank" id="linkedIn"  class="iconListA"></a>
						</li>
						<li>
							<a href="http://www.bitbucket.org/hannahdroe/" target="_blank"  id="bitBucket" class="iconListA"></a>
						</li>
						<li>
							<a href="contact.php" id="emailMe" class="iconListA"></a>
						</li>
					</ul>
				</span>
			</nav>
		</header>

		<!-- Main Content -->
		<main>
			<h1 id="contactHeader">Contact Me</h1>
			
			<!--Contact Form -->
			<div id="fieldContainer">
			<p>Send Me a Message</p>
			<form id="contactForm" action="email_form.php" method="post" role="form" name="contactForm" ng-submit="submitForm(contactForm.$valid)" novalidate>
				<fieldset>
					<!-- Name Input Field -->
					<div>
						<label for="name">Name</label>
						<input id="name" type="text" name="name" placeholder="Your Name" ng-model="name" required />

							<!-- Angular Input Verification -->
							<div ng-messages="contactForm.name.$error" ng-if="contactForm.name.$pristine &&  contactForm.name.$touched">
								<p class="messageContnr" ng-message="required">Your name please.</p>
							</div>
					</div>

					<!-- Email Input Field --> 
					<div>
						<label for="email">Email Address</label>
						<input id="email" type="email" name="email" placeholder="Your Email Address" ng-model="email" required />

							<!-- Angular Email Verification -->  
							<div ng-messages="contactForm.email.$error" ng-if="contactForm.email.$invalid && contactForm.email.$touched">
								<p class="messageContnr" ng-message="email">Enter a valid email.</p>
							</div>
					</div>

					<!-- Message Input Field -->
					<div>
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Message..." ng-model="message" required></textarea>

							<!-- Angular Message Verification -->
							<div ng-messages="contactForm.message.$error" ng-if="contactForm.message.$touched && contactForm.message.$pristine">
								<p class="messageContnr" ng-message="required">Please leave your message.</p>
							</div>
						<!-- Anti-spam Because No one likes spam -->
						<input id="antiSpam" type="text" name="_gotcha" />
						<!-- Submit Button-->
						<button type="submit" value="Send" id="submit" ng-disabled="contactForm.$invalid">Send</button>
					</div>
					
				</fieldset>
			</form>
			</div>
		</main>
	<footer></footer>

	<!-- Javascript! jquery, Angular with form validation -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https:////ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-messages.js"></script>
	<script src="js/app.js" ></script>

	
	</body>


</html>