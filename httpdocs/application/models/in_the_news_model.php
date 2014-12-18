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
				'title' => 'Ned Cohen starts his own firm',
				'url' => 'http://www.rew-online.com/2014/12/03/ned-cohen-starts-his-own-firm/',
				'date' => strtotime('12/03/2014'),
				'extract' => 'Ned H. Cohen, a 35-year veteran of real estate finance, has formed a new Manhattan-based investment firm, NHCohen Partners LLC, along with an affiliated registered broker-dealer, NHCohen Capital LLC'
			),
			array(
				'title' => 'Former Malkin Exec. Forms Real Estate Investment Firm',
				'url' => 'http://www.globest.com/news/12_984/newyork/finance/Former-Malkin-Exec-Forms-Real-Estate-Investment-Firm-352388.html',
				'date' => strtotime('11/10/2014'),
				'extract' => 'NEW YORK CITY—Ned H. Cohen, a former executive vice president with Malkin Securities Corp., has launched NHCohen Partners, LLC'
			),
			array(
				'title' => 'Internal Article',
				'view' => 'something-in-an-article',
				'date' => strtotime('11/01/2014'),
				'extract' => 'NEW Corp. NHCohen CITY—H. Cohen executive YORK, a launched vice with Malkin Securities, Ned has vice Partners former, LLC president'
			)
		);

		return $news;
	}

	function list_news($limit, $offset) {
		$ordered = $this->get_list($this->news(), $limit, $offset);

		return $ordered;
	}

	function specific_news($url = FALSE)
	{
		if ($url) {
			$news = $this->news();

			foreach ($news as $news_item) {
				if (isset($news_item['view']) && $news_item['view'] == $url) {
					return $news_item;
				}
			}
		}
		return FALSE;
	}

	function latest()
	{
		$news = $this->news();
		$news = $this->sort_news($news);

		return $news[0];

	}

	private function get_list($news, $offset = 0, $limit = 10) {
		$data = array();
		$k = 0;
		$news = $this->sort_news($news);
		$limit = (count($news) < $limit) ? count($news) : $limit;

		for ($i = $offset; $i < $limit; $i++) {
			$data[$k] = $news[$i];
			$k++;
		}

		return $data;
	}

	private function sort_news($news) {
		$date_array = array();
		foreach ($news as $key => $row) {
			$date_array[$key] = $row['date'];
		}
		array_multisort($date_array, SORT_DESC, $news);
		return $news;
	}

}
/* End of file site_model.php */
/* Location: ./system/application/models/site_model.php */
