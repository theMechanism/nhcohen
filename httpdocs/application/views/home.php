<div class="banner-container big">
	<?php if (isset($notice)) : ?>
		<div class="notice-container">
			<div class="container">
        		<div class="title">Important Announcement</div
        		><div class="notice"><a href=""><?php echo $notice; ?></a></div>
    		</div>
		</div>
	<?php endif ?>
	<div class="hero-container">
	    <div class="bg-container" style="background-image:url('<?php echo base_url('img/hero-banner.jpg'); ?>');"></div>
	    <div class="container">
	        <div class="hero-text">
	            <h2>Perspective and insight<br>for real estate investment<br>that stands the test of time</h2>
	            <a class="hero-cta" href="#">Learn More</a>
	        </div>
        </div>
    </div>
</div>
<div class="homepage-cta">
	<div class="container">
		<ul>
			<li><a href="">Our Approach</a></li>
			<li><a href="">What is an Accredited Investor?</a></li>
			<li><a href="">Become an Investor</a></li>
		</ul>
	</div>
</div>
<?php $this->load->view('latest-news'); ?>
