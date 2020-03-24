<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/aos/aos.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/jquery.app.js"></script>
	<script type="text/javascript" src="assets/js/jquery.culture.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.app.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.culture.css">
	
	<meta charset="utf-8">
	<title>About</title>
</head>
<body class="preload">
<div id="container">
	<?php
		$this->load->view('header');
	?>
	</div>
	<div class="section">
		<div class="section-container padding-top-8_5x">
			<div class="flex-row">
				<div class="flex-column content-left">
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="<?php cdn('assets/image/culture/Shape-2018-LR-3_d3867277feb154defec9b24a5714fadb.jpg'); ?>" />
						</div>
						<h3 class="work-item-title">Our Environment</h3>
						<p class="work-item-content">Our home from home. We want our team members to feel comfortable in the space, and for clients to feel welcome when they visit us for meetings. It’s scientifically proven that the interior design of an environment promotes creative thinking, innovation and productivity. Our office is designed by our team; when people get what they want from their office space, they want to come here every day.</p>
					</a>
				</div>
				<div class="flex-column content-right">
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="<?php cdn('assets/image/culture/Shape-2018-LR-115_d3867277feb154defec9b24a5714fadb.jpg'); ?>" />
						</div>
						<h3 class="work-item-title">Our Ethos</h3>
						<p class="work-item-content">We produce good work for good people. With the idea that the client will be happy, and bring more work our way.</p>
					</a>
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="<?php cdn('assets/image/culture/team-trips-thumb_d3867277feb154defec9b24a5714fadb.jpg'); ?>" />
						</div>
						<h3 class="work-item-title">Team Trips</h3>
						<p class="work-item-content">It's important to treat, reward, and look after team members. We organise trips to let our hair down and enjoy time together socially.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-container">
			<div class="flex-row">
				<div class="flex-column content-left">
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="assets/image/culture/Shape-2018-LR-73_d3867277feb154defec9b24a5714fadb.jpg" />
						</div>
						<h3 class="work-item-title">Client Communication</h3>
						<p class="work-item-content">We understand that every client is different, some want to be involved as much as possible - some stand back and let us take the lead. Our studio is always open to arrange face to face meetings, meeting at a convenient location for them, or communicating via email and phone.</p>
					</a>
				</div>
				<div class="flex-column content-right">
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="assets/image/culture/Shape-Xmas-MadeByShape-Header_d3867277feb154defec9b24a5714fadb.jpg" />
						</div>
						<h3 class="work-item-title">Studio Projects</h3>
						<p class="work-item-content">Each year we try to inspire, excite and challenge ourselves through a topic chosen by the agency.</p>
					</a>
					<a href="#" class="work-item" data-aos="fade-up">
						<div class="work-item-thumb">
							<img src="assets/image/culture/Shape-2018-LR-40_d3867277feb154defec9b24a5714fadb.jpg" />
						</div>
						<h3 class="work-item-title">Interns</h3>
						<p class="work-item-content">We like to offer select places throughout the year to standout candidates. We feel that a studio environment helps development.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
		$this->load->view('footer');
	?>
</div>

</body>
</html>