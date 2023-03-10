<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" >

<link href="/wp-content/themes/BrowserStack/css/common.css?k=1" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>
<body>
<header id="dvCustomHeadSection">
	<section class="custom-header-container">
		<div class="custom-row row-items-center ">
			<div class="custom-col-2 logo-wrapper">
				<div class="site-logo">
					<a href="/">Browserstack</a>
				</div>
			</div>
			<div class="custom-col-10 menu-list-wrapper">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
				</nav>
			</div>
		</div>
	</section>
</header>