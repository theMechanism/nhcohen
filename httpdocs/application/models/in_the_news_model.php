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
				'title' => 'Q&A with Ned H. Cohen — Commercial Observer',
				'url' => 'http://moweekly.commercialobserver.com/04242015.pdf',
				'date' => strtotime('04/24/2015'),
				'extract' => '"I\'ll be raising equity for a fund sponsored by one of New York\'s best-known real estate entities ... with a conservative approach similar to mine."'
			),
			array(
				'title' => 'NHCohen and Herrick, Feinstein Team Up',
				'url' => 'http://www.globest.com/news/12_1064/newyork/office/NHCohen-and-Herrick-Feinstein-Team-Up-356108-1.html?CMP=OTC-RSS',
				'date' => strtotime('03/12/2015'),
				'extract' => 'Real estate investment firm NHCohen Partners LLC and Herrick, Feinstein LLP, a leader in commercial real estate law since 1928, have formed a strategic alliance'
			),
			array(
				'title' => 'Ex-Empire State Bldg. owners new chance to invest',
				'url' => 'http://www.crainsnewyork.com/article/20150311/REAL_ESTATE/150319967/ex-empire-state-bldg-owners-new-chance-to-invest',
				'date' => strtotime('03/11/2015'),
				'extract' => 'Ned Cohen hopes to raise tens of millions of dollars from the former stakeholders of the Empire State Building'
			),
			array(
				'title' => 'Cohen elected to board of 5 Stone Green',
				'url' => 'http://www.rew-online.com/2015/01/28/cohen-elected-to-board-of-5-stone-green/',
				'date' => strtotime('01/28/2015'),
				'extract' => 'Ned H. Cohen, founder and president of NHCohen Partners LLC, has been elected to serve on the Board of Advisors of 5 Stone Green Capital'
			),
			array(
				'title' => 'Cohen: Inflation Will Bring Investors Yield',
				'url' => 'http://www.globest.com/news/12_1012/newyork/finance/Cohen-Inflation-Will-Bring-Investors-Yield-353532.html',
				'date' => strtotime('12/22/2014'),
				'extract' => 'NEW YORK CITY—After starting his own set of companies last month, former Malkin executive Ned Cohen tells GlobeSt.com in this EXCLUSIVE Q&A about market conditions and other factors that were conducive to him striking out on his own.'
			),
			array(
				'title' => 'NHCohen Partners President Ned H. Cohen Is Elected To Board of Advisors of 5 Stone Green Capital',
				'view' => 'nhcohen-partners-president-ned-h-cohen-is-elected-to-board-of-advisors-of-5-stone-green-capital',
				'date' => strtotime('12/09/2014'),
				'extract' => 'NEW YORK CITY, December 09, 2014 – Ned H. Cohen, founder and president of NHCohen Partners LLC, has been elected to serve on the Board of Advisors of 5 Stone Green Capital, a real estate investment fund focused on sustainability and the use of clean energy.'
			),
			array(
				'title' => 'Newly minted brokerage firm targets property syndications',
				'view' => 'newly-minted-brokerage-firm-targets-property-syndications',
				'date' => strtotime('12/08/2014'),
				'extract' => 'Ned Cohen, a commercial real estate syndica- tion veteran, has formed an investment company that will identify opportunities for high-net-worth investors to participate in limited partnerships as equity investors. NHCohen Partners, and its affiliate broker-dealer NHCohen Capital, hopes to invest nationally in transactions of $15-50m.'
			),
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
