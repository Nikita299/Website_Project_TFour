<?php error_reporting(0); ?>

<html>
	<head>
		<title>PSD Conversion with Div</title>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		
		<link href="styles/style.css" type="text/css" rel="stylesheet" />
		<link href="styles/mobile-css-999.css" type="text/css" rel="stylesheet" />
		
		<link href="styles/t4Library.css" type="text/css" rel="stylesheet" />
		<link href="fonts/font-awesome-4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="parent">
			<?php include('header.php'); ?>
			
			<div class="mainContent">
				<?php include('slider.php'); ?>
				<?php
					switch($_GET['pages']){
						case 'about' 	: include('about.php'); 	break;
						case 'services' : include('services.php'); 	break;
						case 'gallary' 	: include('gallary.php'); 	break;
						case 'contact' 	: include('contact.php'); 	break;
						default		 	: include('home.php'); 		break;
					}
				?>
			<?php include('footer.php'); ?>
			</div>
		</div>
		
		<script src="scripts/script.js" type="text/javascript"></script>
	</body>
</html>