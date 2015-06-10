<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function generate_mobile_nav($sitemap, $first_segment = FALSE, $second_segment = FALSE)
	{
		if (isset($sitemap))
		{
			echo '<div class="menu-slider">
				<nav>
					<ul class="menu-container">';

			foreach ($sitemap as $key => $topnav) {
				echo '	<li class="menu-item';
				if ($first_segment == $key) {
					echo ' on';
				}
				echo '"><div class="item-wrap"><a href="' . ((isset($topnav['url'])) ? $topnav['url'] : base_url($key)) . '">' . $topnav['title'] . '</a></div>';

				if (isset($topnav['children'])) {
					echo '	<ul class="menu-container">';

					foreach ($topnav['children'] as $secondkey => $secondnav) {
						echo '	<li class="menu-item';
						if ($second_segment == $secondkey) {
							echo ' on';
						}
						echo '"><div class="item-wrap"><a href="' . base_url($key . '/' . $secondkey) . '">' . $secondnav['title'] . '</a></div>';
					}

					echo '	</ul>';
				}

				echo '	</li>';
			}

			echo '	</ul>
					<div class="nav-background"></div>
				</nav>
			</div>';
		}
	}

	function generate_main_nav($sitemap, $first_segment = FALSE)
	{
		if (isset($sitemap))
		{
			echo '<nav>
				<ul class="menu-container">';

			foreach ($sitemap as $key => $topnav) {
				echo '<li class="menu-item';
				if (isset($first_segment) && $key == $first_segment) {
					echo ' on';
				}
				echo '"><div class="item-wrap"><a href="' . ((isset($topnav['url'])) ? $topnav['url'] : base_url($key)) . '">' . $topnav['title'] . '</a></div></li>';
			}

			echo '</ul>
			</nav>';
		}
	}

	function generate_sub_nav($sitemap, $first_segment = FALSE, $second_segment = FALSE)
	{
		if (isset($sitemap) && $first_segment && isset($sitemap[$first_segment]['children']))
		{
			echo '<div class="container">
				<nav class="sub-nav">
					<ul>';

			foreach ($sitemap[$first_segment]['children'] as $key => $navitem) {
				echo '<li';
				if ($second_segment && $key == $second_segment) {
					echo ' class="on"';
				}
				echo '><a href="' . base_url($first_segment . '/' . $key) . '">' . $navitem['title'] . '</a></li>';
			}

			echo '	</ul>
				</nav>
			</div>';
		}
	}

	function generate_breadcrumbs($sitemap, $first_segment, $second_segment = FALSE, $title)
	{
		echo '<ul class="breadcrumbs">
				<li><a href="' . base_url() . '">Home</a></li>';
		if (isset($sitemap) && array_key_exists($first_segment, $sitemap))
		{
			echo '<li><a href="' . base_url($first_segment) . '">' . $sitemap[$first_segment]['title'] . '</a></li>';
			if ($second_segment && isset($sitemap[$first_segment]['children']) && array_key_exists($second_segment, $sitemap[$first_segment]['children'])) {
				echo '<li><a href="' . base_url($first_segment . '/' . $second_segment) . '">' . $sitemap[$first_segment]['children'][$second_segment]['title'] . '</a></li>';

				if ($title !== $sitemap[$first_segment]['children'][$second_segment]['title']) {
					echo '<li><a href="' . base_url(uri_string()) . '">' . $title . '</a></li>';
				}
			}
		} else {
			echo '<li><a href="' . base_url(uri_string()) . '">' . $title . '</a></li>';
		}
		echo '</ul>';
	}

