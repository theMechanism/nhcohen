<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; if ($title <> SITE_NAME): echo ' | ' . SITE_NAME; endif; ?></title>

        <?php if (isset($description)) { ?><meta name="description" content="<?php echo $description; ?>" /><?php } ?>
        <?php if (isset($keywords)) { ?><meta name="keywords" content="<?php echo $keywords; ?>" /><?php } ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <div class="container">
                    <div class="title-container"><a href="<?php echo base_url(); ?>"><h1 class="title">NHCohen Partners, LLC.</h1></a></div>
                    <nav>
                        <ul class="menu-container">
                            <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('about-us'); ?>">About Us</a></div></li>
                            <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('for-investors'); ?>">For Investors</a></div></li>
                            <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></div></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <?php if (isset($banner)) : ?>
                <div class="banner-container<?php if (isset($isHero)) echo ' big'; ?>">
                    <div class="bg-container" style="background-image:url('<?php echo base_url('img/' . $banner); ?>');"></div>
                    <?php if (isset($isHero)) : ?>
                		<div class="notice-container">
                			<div class="container">
	                    		<div class="title">Important Announcment</div>
	                    		<div class="notice"><a href=""><?php echo $notice; ?></a></div>
                    		</div>
                		</div>
                        <div class="container">
                        	<?php if (isset($notice)) : ?>
                        	<?php endif ?>
                            <div class="hero-text">
                                <h2>Perspective and insight,<br>for real estate investment<br>that stands the test of time</h2>
                                <a class="hero-cta" href="#">Learn More</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
