<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
        <title><?php echo $title; if ($title <> SITE_NAME): echo ' | ' . SITE_NAME; endif; ?></title>

        <?php if (isset($description)) { ?><meta name="description" content="<?php echo $description; ?>" /><?php } ?>
        <?php if (isset($keywords)) { ?><meta name="keywords" content="<?php echo $keywords; ?>" /><?php } ?>

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url('css/dave.css'); ?>">

        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
    </head>
    <body class="<?php echo $view; ?>">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php generate_mobile_nav($sitemap, $this->uri->segment(1), $this->uri->segment(2)); ?>

        <div class="main">
        	<div class="body-container">
		        <div class="header-container">
		            <header class="wrapper clearfix">
		                <div class="container">
			                <div class="menu-button"><a href="#" id="menu-trigger"><span>menu</span></a></div>
		                    <div class="title-container"><a href="<?php echo base_url(); ?>"><h1 class="title">NHCohen Partners, LLC</h1></a></div>
		                    <?php generate_main_nav($sitemap, $this->uri->segment(1)); ?>
		                </div>
		            </header>
		        </div>
	            <?php if (isset($banner)) : ?>
		            <div class="banner-container">
		                <div class="bg-container"></div>
						<?php generate_sub_nav($sitemap, $this->uri->segment(1), $this->uri->segment(2)); ?>
		            </div>
					<div class="content-container">
						<div class="container">
							<div class="wrapper">
								<div class="cont">
									<h1 class="title"><?= $title ?></h1>
									<?php generate_breadcrumbs($sitemap, $this->uri->segment(1), $this->uri->segment(2), $title); ?>
									<?php if (isset($subtitle)) : ?><h2 class="subtitle"><?= $subtitle ?></h2><?php endif; ?>

		        <?php endif; ?>
