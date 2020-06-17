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
	                            <li><a href="<?php echo base_url('about-us'); ?>">About Us</a></li
	                            ><li><a href="<?php echo base_url('contact-us'); ?>">Contact Us</a></li
	                            ><li><a href="<?php echo base_url('sitemap'); ?>">Site Map</a></li
	                            ><li><a href="<?php echo base_url('terms-of-use'); ?>">Terms of Use</a></li
	                            ><li><a href="<?php echo base_url('business-continuity-plan-disclosure'); ?>">Disclosure Statement</a></li
	                            ><li><a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a></li>
	                        </ul>
	                        <div class="info">
								&copy;<?php echo date("Y"); ?> NHCohen Partners LLC<br>
								<!--NHCohen Capital LLC, Member: <a href="http://www.finra.org" rel="external">FINRA</a><br>-->
								One Grand Central Place, 60 East 42nd Street, 46th Floor New York, NY 10165 <span>T: <a href="tel:+12124986960">212.498.6960</a></span
								> <span>F: 855.856.6483</span>
	                        </div>
	                        <div class="disclaimer">Securities offered through NHCohen Capital LLC, a registered broker-dealer with the Securities and Exchange Commission and member of FINRA.<br>
	                        NHCohen Capital LLC and NHCohen Partners LLC are affiliated companies.</div>
	                    </nav>
	                    <div class="socials">
	                        <ul>
	                            <li><a href="http://www.linkedin.com/in/nedcohen" class="linked-in" rel="external">LinkedIn</a></li>
	                            <li><a href="https://twitter.com/NcohenNed" class="twitter" rel="external">Twitter</a></li>
	                        </ul>
	                    </div>
	                </footer>
	            </div>
	        </div>
        </div> <!-- end .main -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('js/vendor/jquery-1.11.1.min.js'); ?>"><\/script>')</script>
        <script src="<?php echo base_url('js/vendor/masked-input.js'); ?>"></script>
        <!--[if gt IE 8]>-->
		<script src="<?php echo base_url('js/vendor/fastclick.js'); ?>"></script>
		<!--<![endif]-->
        <script src="<?php echo base_url('js/main.js'); ?>"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-<?php echo API_GOOGLE ?>', 'auto');
			ga('send', 'pageview');
		</script>

    </body>
</html>
