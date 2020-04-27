<div class="t4Fixed topBar">
	<div class="fixedWidth header">
		<div class="t4Left logo">
			<img src="images/logo.png" alt="TFour Tech Pvt. Ltd." />
		</div>
		<div class="t4Right hContact">
			<img src="images/mobile-icon.png" alt="mobile icon" />+91 9261428980<br>
			<img src="images/mobile-icon.png" alt="mobile icon" />+91 7665678980<br>
		</div>
		<div class="t4Clear"></div>
	</div>
	
	<?php include('menu.php'); ?>
	<div class="t4Mobile mobileMenu">
		<div class="t4Right">
			<div class="t4Relative">
				<i class="fa fa-bars" aria-hidden="true" id="openMenu" onClick="innerMenu('1');"></i>
				<i class="fa fa-times t4Hide" aria-hidden="true" id="closeMenu" onClick="innerMenu('2');"></i>
				<div class="innerMenu t4Absolute" id="iMenu">
					<ul>
						<li><a href="index.php" title="Home">Home</a></li>
						<li><a href="index.php?pages=about" title="About Us">About Us</a></li>
						<li><a href="index.php?pages=services" title="Services">Services</a></li>
						<li><a href="index.php?pages=gallary" title="Gallary">Gallary</a></li>
						<li><a href="index.php?pages=contact" title="Contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="t4Clear"></div>
	</div>
</div>