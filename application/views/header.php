<?php
if(empty($theme))
	$theme = 'default';
?>

<div id="header" theme=<?php echo $theme; ?>>
	<div class="header-container">
		<a href="/" class="header-site-logo">boyism80</a>
		<nav class="header-site-nav show-desktop">
			<ul>
				<li>
					<a href="profile" class="nav-item">
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="#" class="nav-item">
						<span>Development</span>
					</a>
					<div class="header-nav-dropdown">
						<div><a href="#" class="dropdown-item"><span>Game</span></a></div>
						<div><a href="#" class="dropdown-item"><span>Thermal Camera</span></a></div>
						<div><a href="#" class="dropdown-item"><span>Framework</span></a></div>
						<div><a href="#" class="dropdown-item"><span>Web</span></a></div>
						<div><a href="#" class="dropdown-item"><span>Other Softwares</span></a></div>
					</div>
				</li>
				<li>
					<a href="work" class="nav-item">
						<span>Menu</span>
					</a>
				</li>
				<li>
					<a href="culture" class="nav-item">
						<span>Menu</span>
					</a>
				</li>
				<li>
					<a href="#" class="nav-item">
						<span>Menu</span>
					</a>
				</li>
				<li>
					<a href="#" class="nav-item">
						<span>Menu</span>
					</a>
				</li>
				<li>
					<a href="#" class="nav-item">
						<span>Menu</span>
					</a>
				</li>
			</ul>
		</nav>
		<div>
			<a href="#" class="default-button show-desktop" theme=<?php echo $theme; ?>>Contact Us</a>
		</div>
		<div class="header-site-burger hide-desktop">
			<span></span>
		</div>
	</div>
</div>
<?php
if(isset($headerTitle))
	$this->load->view('partition/header_title', array('title' => $headerTitle, 'theme' => $theme));
?>
<div class="header-mobile-nav show-mobile">
	<div class="mobile-nav-wrap padding-top-8_5x">
		<ul>
			<li>
				<a href="profile" class="nav-item">
					<span>Profile</span>
				</a>
			</li>
			<li>
				<a href="#" class="nav-item">
					<span>Development</span>
				</a>
				<div class="header-nav-dropdown">
					<div><a href="#" class="dropdown-item"><span>Game</span></a></div>
					<div><a href="#" class="dropdown-item"><span>Thermal Camera</span></a></div>
					<div><a href="#" class="dropdown-item"><span>Framework</span></a></div>
					<div><a href="#" class="dropdown-item"><span>Web</span></a></div>
					<div><a href="#" class="dropdown-item"><span>Other Softwares</span></a></div>
				</div>
			</li>
			<li>
				<a href="work" class="nav-item">
					<span>Menu</span>
				</a>
			</li>
			<li>
				<a href="culture" class="nav-item">
					<span>Menu</span>
				</a>
			</li>
			<li>
				<a href="#" class="nav-item">
					<span>Menu</span>
				</a>
			</li>
			<li>
				<a href="#" class="nav-item">
					<span>Menu</span>
				</a>
			</li>
			<li>
				<a href="#" class="nav-item">
					<span>Menu</span>
				</a>
			</li>
		</ul>
		<div>
			<a href="#" class="default-button" theme=pink>Contact Us</a>
		</div>
	</div>
</div>