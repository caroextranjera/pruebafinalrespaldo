<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Di Moneda</title>

<?php wp_head() ?>
  
</head>
<body class="container-fluid">

	<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
		<header class="container">
			 <img src="<?php echo $logo[0]; ?>" alt="">
		</header>