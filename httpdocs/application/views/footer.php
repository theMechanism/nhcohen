			<?php if(isset($banner)) : ?>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
	        </div> <!-- end .body-container -->
	        <div class="footer-container">
	            <div class="container">
	                <footer class="wrapper">
	                    <nav>
	                        <ul>
	                            <li><a href="#">About Us</a></li
	                            ><li><a href="#">Contact Us</a></li
	                            ><li><a href="#">Site Map</a></li
	                            ><li><a href="#">Terms of Use</a></li
	                            ><li><a href="#">Disclosure Statement</a></li
	                            ><li><a href="#">Legal</a></li>
	                        </ul>
	                        <div class="info">
								<span class="copyright">&copy;<?php echo date("Y"); ?> NHCohen Partners LLC</span
								> <span>2 Park Avenue, 14th Floor New York, NY 10016</span
								> <span>T: <a href="tel:+12124986960">212.498.6960</a></span
								> <span>F: 855.856.6483</span>
	                        </div>
	                        <div class="disclaimer">Securities offered through NHCohen Capital LLC, a registered broker-dealer with the Securities and Exchange Commission and member of FINRA<br>
	                        NHCohen Capital LLC and NHCohen Partners LLC are affiliated companies.</div>
	                    </nav>
	                    <div class="socials">
	                        <ul>
	                            <li><a href="#" class="linked-in">LinkedIn</a></li>
	                            <li><a href="#" class="twitter">Twitter</a></li>
	                        </ul>
	                    </div>
	                </footer>
	            </div>
	        </div>
        </div> <!-- end .main -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.11.1.min.js'); ?>"><\/script>')</script>

        <!--[if gt IE 8]>-->
		<script src="<?php echo base_url('js/vendor/fastclick.js'); ?>"></script>
		<!--<![endif]-->
        <script src="<?php echo base_url('js/main.js'); ?>"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-<?php echo API_GOOGLE ?>');ga('send','pageview');
        </script>
    </body>
</html>
