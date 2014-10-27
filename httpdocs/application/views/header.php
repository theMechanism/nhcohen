<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
        <title><?php echo $title; if ($title <> SITE_NAME): echo ' | ' . SITE_NAME; endif; ?></title>

        <?php if (isset($description)) { ?><meta name="description" content="<?php echo $description; ?>" /><?php } ?>
        <?php if (isset($keywords)) { ?><meta name="keywords" content="<?php echo $keywords; ?>" /><?php } ?>

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/dave.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body class="<?php echo $view; ?>">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="menu-slider">
            <nav>
                <ul class="menu-container">
                    <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('about-us'); ?>">About Us</a></div></li>
                    <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('for-investors'); ?>">For Investors</a></div></li>
                    <li class="menu-item"><div class="item-wrap"><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></div></li>
                </ul>
                <div class="nav-background"></div>
            </nav>
        </div>

        <div class="main">
        	<div class="body-container">
		        <div class="header-container">
		            <header class="wrapper clearfix">
		                <div class="container">
			                <div class="menu-button"><a href="#" id="menu-trigger"><span>menu</span></a></div>
		                    <div class="title-container"><a href="<?php echo base_url(); ?>"><h1 class="title">NHCohen Partners, LLC.</h1></a></div>
		                    <nav>
		                        <ul class="menu-container">
		                            <li class="menu-item<?php if ('about-us' == $this->uri->segment(1)) { echo " on"; } ?>"><div class="item-wrap"><a href="<?php echo base_url('about-us'); ?>">About Us</a></div></li>
		                            <li class="menu-item<?php if ('for-investors' == $this->uri->segment(1)) { echo " on"; } ?>"><div class="item-wrap"><a href="<?php echo base_url('for-investors'); ?>">For Investors</a></div></li>
		                            <li class="menu-item<?php if ('contact-us' == $this->uri->segment(1)) { echo " on"; } ?>"><div class="item-wrap"><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></div></li>
		                        </ul>
		                    </nav>
		                </div>
		            </header>
		        </div>
	            <?php if (isset($banner)) : ?>
		            <div class="banner-container">
		                <div class="bg-container"></div>
						<div class="container">
							<?php if (isset($subnav)) : ?>
						    <nav class="sub-nav">
							    <ul>
							    	<?php foreach ($subnav as $key => $navitem) : ?>
								    	<li><a href="<?php echo base_url('about-us/' . $key); ?>"><?php echo $navitem ?></a></li>
							    	<?php endforeach; ?>
							    </ul>
							</nav>
							<?php endif; ?>
						</div>
		            </div>
					<div class="content-container">
						<div class="container">
							<div class="wrapper">
								<div class="cont">
									<h1 class="title"><?= $title ?></h1>
									<?php if (isset($subtitle)) : ?><h2 class="subtitle"><?= $subtitle ?></h2><?php endif; ?>

		        <?php endif; ?>
