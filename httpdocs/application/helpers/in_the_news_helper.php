<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function generate_news_item($news_item)
	{
		if (isset($news_item))
		{
			echo '<div class="news-item-container">
				<div class="date-container">
					<div class="date-wrap">
						<div class="date">' . $news_item['date'] . ' /</div>
						<a href="' . base_url('about-us/in-the-news') . '">In the news</a>
					</div>
				</div
				><div class="news-container">
					<div class="news-wrap">
						<h2>' . $news_item['title'] . '</h2>
						<p>';
						if (isset($news_item['extract'])) {
							echo $news_item['extract'] . '... ';
						}
					echo '<a href="' . base_url('about-us/in-the-news/' . $news_item['url']) . '">Read More</a></p>
					</div>
				</div>
			</div>';
		}
	}
