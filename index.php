<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<base href=".">

	<title>James Licciardi</title>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/sitewide.css"/>
	<link rel="stylesheet" href="css/home.css" />

	<script src="js/overlay.js"></script>
</head>

<body>
	<!-- Header import -->
<?php
	readfile("html/header.html")
?>
	<!-- Desktop photo and contact -->
	<div id="info">
		<img src="docs/images/profile-medium.png">
		<!-- Footer -->
		<footer id="footer_desktop">
			<div class="contact">
				<a href="tel:0423554605" alt="Phone Number">
					<div class="container">
						<img class="contactimage" src="docs/images/phone.png" alt="Phone Icon">
						<div class="overlay">
							<div class="textOverlay" id="phoneNum">
								0423 554 605
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="contact">
				<a href="mailto:james.licciardi@gmail.com" alt="Email">
					<div class="container">
						<img class="contactimage" src="docs/images/email.png" alt="Email Icon">
						<div class="overlay">
							<div class="textOverlay">
								james.licciardi@gmail.com
							</div>
						</div>
					</div>
				</a>
			</div>

			<div class="contact">
				<a href="http://www.linkedin.com/in/james-licciardi-3a6849a4" alt="LinkedIn Profile">
					<div class="container">
						<img class="contactimage" src="docs/images/linkedin.png" alt="LinkedIn Icon">
						<div class="overlay">
							<div class="textOverlay">
								Connect on LinkedIn
							</div>
						</div>
					</div>
				</a>
			</div>
		</footer>
	</div>

	<!-- Description for both Mobile and Desktop -->
	<div id="mainbody">
		<!-- Overlay for Mobile Nav -->
		<div id="menucontainer">
			<div class="mask"></div>
			<div id="menuoverlay">
				<nav>
					<ul>
						<a href="work/index.html"><li>WORK</li></a>
						<a href="education/index.html"><li>EDUCATION</li></a>
						<a href="projects/index.html"><li>PROJECTS</li></a>
						<a href="resume/index.html"><li>RESUME</li></a>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Bubble Overview -->
		<div id="overview">
			<h2>a bit about me...</h2>

			<div id="bubblehome">
				<div class="bubble">
					<a href="education/adl/index.html" alt="UoA">
						<div class="bubblecontainer">
							<figure>
								<img class="bubbleimage" src="docs/images/adl.png">
								<img class="overlay" src="docs/images/circle.png">
								<figcaption>UoA</figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="bubble">
					<a href="projects/electric-skateboard/index.html" alt="E-Board">
						<div class="bubblecontainer">
							<figure>
								<img class="bubbleimage" src="docs/images/skateboard.png">
								<img class="overlay" src="docs/images/circle.png">
								<figcaption>E-Board</figcaption>
							</figure>
						</div>
					</a>
				</div>

				<div class="bubble">
					<a href="education/ubc/index.html" alt="UBC">
						<div class="bubblecontainer">
							<figure>
								<img class="bubbleimage" src="docs/images/ubc.png">
								<img class="overlay" src="docs/images/circle.png">
								<figcaption>UBC</figcaption>
							</figure>
						</div>
					</a>
				</div>
			</div>
		</div>

		<!-- Description of who I am -->
		<div id="description">
			<p>
				<b>Who am I?</b>
				I am currently in my fourth year of studies, undergoing a Bachelor of Engineering and Computer Sciences, with expanding from battery technology to Electric Vehicles.				I am currently in my fourth year of studies, undergoing a Bachelor of Engineering and Computer Sciences, with expanding from battery technology to Electric Vehicles.
				I am currently in my fourth year of studies, undergoing a Bachelor of Engineering and Computer Sciences, with expanding from battery technology to Electric Vehicles.
				I am currently in my fourth year of studies, undergoing a Bachelor of Engineering and Computer Sciences, with expanding from battery technology to Electric Vehicles.
				I am currently in my fourth year of studies, undergoing a Bachelor of Engineering and Computer Sciences, with expanding from battery technology to Electric Vehicles.

			</p>
			<hr>
			<p>
				<b>What are my projects?</b>
				Any project that peaks my interest or gets me thinking, I act on. I currently use a self built electric skateboard to get from A to B,  and I am planning my next Electric Vehicle of a larger scale… I run an Ubuntu Server that hosts all of my automated online needs, as well as hosting this site, designed and coded from scratch by myself.
			</p>
			<hr>
			<p>
				<b>What do I have to offer?</b>
				With my professional experience in both customer service and IT networking, my ever-growing list of DIY projects, and my determined nature, I offer flexibility and the ability to adapt, learn, and enhance my technical knowledge in order to complete any project.
			</p>
		</div>
	</div>

	<!-- Footer -->
	<footer id="footer_mobile">
		<div class="contact">
			<a href="tel:0423554605" alt="Phone Number">
				<div class="container">
					<img class="contactimage" src="docs/images/phone.png" alt="Phone Icon">
					<div class="overlay">
						<div class="textOverlay">
							0423554605
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="contact">
			<a href="mailto:james.licciardi@gmail.com" alt="Email">
				<div class="container">
					<img class="contactimage" src="docs/images/email.png" alt="Email Icon">
					<div class="overlay">
						<div class="textOverlay">
							Email
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="contact">
			<a href="http://www.linkedin.com/in/james-licciardi-3a6849a4" alt="LinkedIn Profile">
				<div class="container">
					<img class="contactimage" src="docs/images/linkedin.png" alt="LinkedIn Icon">
					<div class="overlay">
						<div class="textOverlay">
							Connect
						</div>
					</div>
				</div>
			</a>
		</div>
	</footer>
</body>
</html>
