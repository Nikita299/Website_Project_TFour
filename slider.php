<?php
	switch($_GET['pages']){
		case 'about' 	: $banner = 'banner-1.png'; $alt="About Banner"; 	break;
		case 'services' : $banner = 'banner-2.png'; $alt="Services Banner"; break;
		case 'gallary' 	: $banner = 'banner-3.png'; $alt="Gallary Banner"; 	break;
		case 'contact' 	: $banner = 'banner-4.png'; $alt="Contact Banner"; 	break;
		default		 	: $banner = 'slider-1.png'; $alt="Home Banner"; 	break;
	}
?>

<div class="banner"><img src="images/banners/<?php echo $banner; ?>" alt="<?php echo $alt; ?>" /></div>