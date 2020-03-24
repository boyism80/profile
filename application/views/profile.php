<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel/owl.carousel.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/aos/aos.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/jquery.app.js"></script>
	<script type="text/javascript" src="assets/js/jquery.profile.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.app.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.profile.css">
	
	<meta charset="utf-8">
	<title>Profile</title>
</head>
<body class="preload">
<div id="container">
	<?php
		$this->load->view('header', array('theme' => 'pink', 'headerTitle' => 'Good design makes life better'));
	?>
	<div class="section">
		<div class="section-container">
			<div class="flex-row" data-aos="fade-up">
				<div class="flex-column content-left">
					<h2>Expert Designers and Developers trained in the creative and digital industry who offer a bespoke, professional and trustworthy service.</h2>
				</div>
				<div class="flex-column content-right">
					<p>We are an Award-Winning Web Design Agency based in Manchester, UK who specialise in Website Design, Web Development, eCommerce and Organic SEO.</p>
					<p>With over a decade of experience, Shape is a energetic, fresh and vibrant team offering creative talent, industry knowledge and extremely high standards. All of our team members have degrees in both Graphic Design and Web Design.</p>
					<p>We work with Sole Traders and ambitious Start Up Businesses through to large global organisations such as Blackberry, NHS and L'Occitane so we can tailor our services to suit your needs. Our preferred content management system of choice is Craft CMS.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="owl-carousel" data-aos="fade-up">
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-3_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-115_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-15_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-121_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-118_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
			<img src='<?php cdn('assets/image/profile/Shape-2018-LR-46_9977872a3f7a78a7f287b4fd61d9121a.jpg'); ?>' />
		</div>
	</div>
	<?php
		$this->load->view('footer');
	?>
</div>

</body>
</html>