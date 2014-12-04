<?php

class In_the_news_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function news()
	{

		// add new articles to the following array

		$news = array(
			array(
				'title' => 'Ned H. Cohen Establises NHCohen Partners LLC To Seek Prime Opportunities In Real Estate And Other Alternative Investments',
				'view' => 'ned_h_cohen_establishes_nhcohen_partners',
				'url' => 'ned-h-cohen-establishes-nhcohen-partners',
				'date' => '12.9',
				'extract' => 'NEW YORK CITY, September XX, 2014 – Ned H. Cohen, a 35-year veteran of real estate and finance, has formed a new Manhattan-based investment advisory firm, NHCohen Partners LLC'
			),
			array(
				'title' => 'News 2',
				'view' => 'news_2',
				'url' => 'news-2',
				'date' => '12.8'
			)
		);

		return $news;
	}

	function find_news($url = FALSE)
	{
		if ($url) {
			$news = $this->news();

			foreach ($news as $news_item) {
				if ($news_item['url'] == $url) {
					return $news_item;
				}
			}
		}
		return FALSE;
	}

	function latest()
	{
		$news = $this->news();

		return $news[0];

	}

}
/* End of file site_model.php */
/* Location: ./system/application/models/site_model.php */
