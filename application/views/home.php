<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/slick/slick.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/owl.carousel/owl.carousel.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/aos/aos.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/jquery.app.js"></script>
	<script type="text/javascript" src="assets/js/jquery.home.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.home.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.app.css">

	<meta charset="utf-8">
	<title>Home</title>

</head>
<body class="preload">
<div id="container">
	<?php $this->load->view('header'); ?>
	<div class="section padding-0x padding-top-8_5x">
		<div class="js-slideshow-slick">
			<div>
				<div class="section-container">
					<div class="slider-item">
						<div class="slider-item-left">
							<h1 class="main-text slide-animation" data-word="We're a Web Design Studio in Manchester">We're a Web Design Studio in Manchester</h1>
							<div class="additional-text slide-animation" data-word="But we have clients all over the world">But we have clients all over the world</div>
							<div class="slick-slide-button">
								<a href="#" class="default-button" data-word="Find out more">Find out more</a>
							</div>
						</div>
						<div class="slider-item-right">
							<img src="<?php echo cdn('assets/image/blob-1.svg'); ?>">
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="section-container">
					<div class="slider-item">
						<div class="slider-item-left">
							<h1 class="main-text slide-animation" data-word="We're known for our eCommerce websites">We're known for our eCommerce websites</h1>
							<div class="additional-text slide-animation" data-word="with great user experience to increase sales and profit">with great user experience to increase sales and profit</div>
							<div class="slick-slide-button">
								<a href="#" class="default-button" data-word="Find out more">Find out more</a>
							</div>
						</div>
						<div class="slider-item-right">
							<img src="<?php echo cdn('assets/image/blob-2.svg'); ?>">
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="section-container">
					<div class="slider-item">
						<div class="slider-item-left">
							<h1 class="main-text slide-animation" data-word="We create responsive & mobile websites">We create responsive & mobile websites</h1>
							<div class="additional-text slide-animation" data-word="Giving your viewer the ultimate online experience">Giving your viewer the ultimate online experience</div>
							<div class="slick-slide-button">
								<a href="#" class="default-button" data-word="Find out more">Find out more</a>
							</div>
						</div>
						<div class="slider-item-right">
							<img src="<?php echo cdn('assets/image/blob-3.svg'); ?>">
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="section-container">
					<div class="slider-item">
						<div class="slider-item-left">
							<h1 class="main-text slide-animation" data-word="Nominated Best Manchester Digital Agency of the year">Nominated Best Manchester Digital Agency of the year</h1>
							<div class="additional-text slide-animation" data-word="Learn more about our studio environment">Learn more about our studio environment</div>
							<div class="slick-slide-button">
								<a href="#" class="default-button" data-word="Find out more">Find out more</a>
							</div>
						</div>
						<div class="slider-item-right">
							<img src="<?php echo cdn('assets/image/blob-4.svg'); ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section padding-0x show-desktop">
		<div class="section-container">
			<ul class="slideshow-page-header-tabs js-slideshow-slick-pagination">
				<li data-slideshow-slide-index="0">
					<a href="#">
						<span>Web Design Manchester</span>
					</a>
				</li>
				<li data-slideshow-slide-index="1">
					<a href="#">
						<span>eCommerce Websites</span>
					</a>
				</li>
				<li data-slideshow-slide-index="2">
					<a href="#">
						<span>Responsive / Mobile Websites</span>
					</a>
				</li>
				<li data-slideshow-slide-index="3">
					<a href="#">
						<span>Digital Agency</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section background-ltgray">
		<div class="section-container">
			<h2 class="intro-tbox" data-aos="fade-up">We are a web design agency in Manchester who care, understand, build relationships, have industry experience, win awards, and have fun. We are Shape</h2>
			<div class="owl-carousel" data-aos="fade-up">
				<div> Your Content </div>
				<div> Your Content </div>
				<div> Your Content </div>
				<div> Your Content </div>
				<div> Your Content </div>
				<div> Your Content </div>
				<div> Your Content </div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="section-container" data-aos="fade-up">
			<h2 class="section-title padding-width-2x">Lorem ipsum</h2>
			<div class="flex-row">
				<div class="flex-column">
					<?php
					$this->load->view('partition/work_item', array('title' => 'Njorun Activewear', 'src' => cdn('assets/image/njorun-madebyshape-thumb2_ba70c53f73b486e4404b9862f59e6e07.jpg')));
					?>
				</div>
				<div class="flex-column">
					<?php
					$this->load->view('partition/work_item', array('title' => 'The Plough at Lupton', 'src' => cdn('assets/image/plough-inn-lupton-madebyshape_ba70c53f73b486e4404b9862f59e6e07.jpg')));
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="section background-ltgray">
		<div class="section-container" data-aos="fade-up">
			<h2 class="section-title padding-width-2x">Lorem ipsum</h2>
			<div class="flex-row">
				<div class="flex-column">
					<?php
					$this->load->view('partition/work_item', array('title' => 'Kirsty Intro Kirsty Meredith - New Project Manager at MadeByShape',
						'src' => cdn('assets/image/kirsty-intro_b52aeff1da97c6da6d7956e791a586c1.jpg'),
						'titleSize' => 'h3'))
					?>
				</div>
				<div class="flex-column">
					<?php
					$this->load->view('partition/work_item', array('title' => 'Insight - Why our studio just outside of Manchester works for us',
						'src' => cdn('assets/image/Shape-2018-LR-15_b52aeff1da97c6da6d7956e791a586c1.jpg'),
						'titleSize' => 'h3'))
					?>
				</div>
				<div class="flex-column padding-width-2x show-desktop">
					<?php
					$this->load->view('partition/work_item', array('title' => 'Latest Article - 8 Tips For Boosting Your Website’s Performance',
						'src' => cdn('assets/image/8Tips.jpg'),
						'titleSize' => 'h3'))
					?>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('footer'); ?>
</div>

</body>
</html>