<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel/owl.carousel.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/aos/aos.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/packery/packery.pkgd.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/waitforimages/jquery.waitforimages.min.js" charset="utf-8"></script>
	<script type="text/javascript" src="assets/js/jquery.app.js"></script>
	<script type="text/javascript" src="assets/js/jquery.work.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/aos/aos.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.app.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.work.css">
	
	<meta charset="utf-8">
	<title>Work</title>
</head>
<body class="preload">
<div id="container">
	<?php
		$this->load->view('header', array('theme' => 'pink', 'headerTitle' => 'Good design makes life better'));
	?>
	<div class="section">
		<div class="section-container">
			<div class="work-item-container">
				<?php 
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/8-Tips-For-Boosting-Your-Website’s-Performance_b52aeff1da97c6da6d7956e791a586c1.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/njorun-madebyshape-thumb2_ba70c53f73b486e4404b9862f59e6e07.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/kirsty-intro_b52aeff1da97c6da6d7956e791a586c1.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/8-Tips-For-Boosting-Your-Website’s-Performance_b52aeff1da97c6da6d7956e791a586c1.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/kirsty-intro_b52aeff1da97c6da6d7956e791a586c1.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Boys By Girls', 'src' => 'assets/image/njorun-madebyshape-thumb2_ba70c53f73b486e4404b9862f59e6e07.jpg'));
				?>
			</div>
		</div>
	</div>
	<div class="section background-ltgray">
		<div class="section-container">
			<h2 class="section-title padding-width-2x">Work in progress</h2>
			<div class="work-progress-container">
				<?php
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/dribbble_1x_85fe4262e6f7d664e679f74b4c4d6c35.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/header-variations_1x_85fe4262e6f7d664e679f74b4c4d6c35.gif'));
				?>
				<div class="show-desktop">
				<?php
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/header-variations_1x_85fe4262e6f7d664e679f74b4c4d6c35.gif'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/room_detail_1x_85fe4262e6f7d664e679f74b4c4d6c35.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/v1_1x_85fe4262e6f7d664e679f74b4c4d6c35.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/dribbble-full_1x_85fe4262e6f7d664e679f74b4c4d6c35.jpg'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/dribbble_1x_85fe4262e6f7d664e679f74b4c4d6c35 (1).jpg'));
				$this->load->view('partition/work_item', array('title' => 'Lorem ipsum', 
					'titleSize' => 'h3', 
					'src' => 'assets/image/2_1x_85fe4262e6f7d664e679f74b4c4d6c35.jpg'));
				?>
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