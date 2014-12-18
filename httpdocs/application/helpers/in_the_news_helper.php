<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function generate_news_item($news_item)
	{
		if (isset($news_item))
		{
			// if no view is set, an external url will be assumed
			$external = !isset($news_item['view']);
			$url = (!$external) ? base_url('about-us/in-the-news/' . $news_item['view']) : $news_item['url'];
			$anchor = '<a href="' . $url . '"' . ($external ? 'rel="external"' : '') . '>';

			echo '<div class="news-item-container">
				<div class="date-container">
					<div class="date-wrap">
						<div class="date">' . Date('n.j /', $news_item['date']) . '</div>
						<a href="' . base_url('about-us/in-the-news') . '">In the news</a>
					</div>
				</div
				><div class="news-container">
					<div class="news-wrap">
						<h2>' . $anchor . $news_item['title'] . '</a></h2>
						<p>';
						if (isset($news_item['extract'])) {
							echo $news_item['extract'] . ' ... ';
						}
					echo $anchor . 'Read More</a></p>
					</div>
				</div>
			</div>';
		}
	}
