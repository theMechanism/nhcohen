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
				'title' => 'NHCohen Partners funds Texas Comfort Suites purchase',
				'view' => 'nhcohen-partners-funds-texas-comfort-suites-purchase',
				'date' => strtotime('10/16/2017'),
				'extract' => 'New York City-based NHCohen Partners completed an equity raise of $6.1 million to facilitate the acquisition of the Comfort Suites Arlington hotel'
			),
			array(
				'title' => 'NHCohen Partners Completes Equity Raise for Acquisition of Comfort Suites in NC',
				'view' => 'nhcohen-partners-completes-equity-raise-for-acquisition-of-comfort-suites-in-nc',
				'date' => strtotime('08/15/2016'),
				'extract' => 'NHCohen Partners has completed the equity raise for the acquisition of the Comfort Suites Raleigh Durham Airport/RTP hotels'
			),
			array(
				'title' => 'Stock market volatility shines spotlight on real estate attributes',
				'view' => 'stock-market-volatility-shines-spotlight-on-real-estate-attributes',
				'date' => strtotime('09/03/2015'),
				'extract' => 'The performance of direct real estate investments is not correlated to the stock market and will generally provide a more stable flow of distributions.'
			),
			array(
				'title' => 'Stock Market’s Ominous Volatility Shines Spotlight On Real Estate’s Defensive Attributes, Says Ned H. Cohen',
				'view' => 'stock-markets-ominous-volatility-shines-spotlight-on-real-estates-defensive-attributes-says-ned-h-cohen',
				'date' => strtotime('08/31/2015'),
				'extract' => 'Is the long-predicted bear market finally here, or are recent sharp declines merely a chance to load up on good stocks? Since no one can truly know, prudence demands that greater attention be given to portfolio diversification, says Ned H. Cohen,'
			),
			array(
				'title' => 'Q&A with Ned H. Cohen Commercial Observer',
				'view' => 'qa-with-ned-h-cohen-commercial-observer',
				'date' => strtotime('04/24/2015'),
				'extract' => '"I\'ll be raising equity for a fund sponsored by one of New York\'s best-known real estate entities ... with a conservative approach similar to mine."'
			),
			array(
				'title' => 'NHCohen and Herrick, Feinstein Team Up',
				'view' => 'nhcohen-and-herrick-feinstein-team-up',
				'date' => strtotime('03/12/2015'),
				'extract' => 'Real estate investment firm NHCohen Partners LLC and Herrick, Feinstein LLP, a leader in commercial real estate law since 1928, have formed a strategic alliance'
			),
			array(
				'title' => 'Ex-Empire State Bldg. owners new chance to invest',
				'view' => 'ex-empire-state-bldg-owners-new-chance-to-invest',
				'date' => strtotime('03/11/2015'),
				'extract' => 'Ned Cohen hopes to raise tens of millions of dollars from the former stakeholders of the Empire State Building'
			),
			array(
				'title' => 'Cohen elected to board of 5 Stone Green',
				'view' => 'cohen-elected-to-board-of-5-stone-green',
				'date' => strtotime('01/28/2015'),
				'extract' => 'Ned H. Cohen, founder and president of NHCohen Partners LLC, has been elected to serve on the Board of Advisors of 5 Stone Green Capital'
			),
			array(
				'title' => 'Cohen: Inflation Will Bring Investors Yield',
				'view' => 'cohen-inflation-will-bring-investors-yield',
				'date' => strtotime('12/22/2014'),
				'extract' => 'NEW YORK CITYAfter starting his own set of companies last month, former Malkin executive Ned Cohen tells GlobeSt.com in this EXCLUSIVE Q&A about market conditions and other factors that were conducive to him striking out on his own.'
			),
			array(
				'title' => 'NHCohen Partners President Ned H. Cohen Is Elected To Board of Advisors of 5 Stone Green Capital',
				'view' => 'nhcohen-partners-president-ned-h-cohen-is-elected-to-board-of-advisors-of-5-stone-green-capital',
				'date' => strtotime('12/09/2014'),
				'extract' => 'NEW YORK CITY, December 09, 2014  Ned H. Cohen, founder and president of NHCohen Partners LLC, has been elected to serve on the Board of Advisors of 5 Stone Green Capital, a real estate investment fund focused on sustainability and the use of clean energy.'
			),
			array(
				'title' => 'Newly minted brokerage firm targets property syndications',
				'view' => 'newly-minted-brokerage-firm-targets-property-syndications',
				'date' => strtotime('12/08/2014'),
				'extract' => 'Ned Cohen, a commercial real estate syndication veteran, has formed an investment company that will identify opportunities for high-net-worth investors to participate in limited partnerships as equity investors.'
			),
			array(
				'title' => 'Ned Cohen starts his own firm',
				'view' => 'ned-cohen-starts-his-own-firm',
				'date' => strtotime('12/03/2014'),
				'extract' => 'Ned H. Cohen, a 35-year veteran of real estate finance, has formed a new Manhattan-based investment firm, NHCohen Partners LLC, along with an affiliated registered broker-dealer, NHCohen Capital LLC'
			),
			array(
				'title' => 'Former Malkin Exec. Forms Real Estate Investment Firm',
				'view' => 'former-malkin-exec-forms-real-estate-investment-firm',
				'date' => strtotime('11/10/2014'),
				'extract' => 'NEW YORK CITY Ned H. Cohen, a former executive vice president with Malkin Securities Corp., has launched NHCohen Partners, LLC'
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

	private function get_list($news, $offset = 0, $limit = 15) {
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
