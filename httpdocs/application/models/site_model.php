<?php

class Site_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function sitemap()
	{
		$sitemap = array(
			'about-us' => array(
				'title' => 'About Us',
				'children' => array(
					'our-approach' => array(
						'title' => 'Our Approach'
					),
					'leadership' => array(
						'title' => 'Leadership'
					),
					'for-sponsors' => array(
						'title' => 'For Sponsors'
					),
					'in-the-news' => array(
						'title' => 'In The News'
					)
				)
			),
			'for-investors' => array(
				'title' => 'For Investors',
				'children' => array(
					'accredited-investing' => array(
						'title' => 'Accredited Investing'
					),
					'tax-advantage' => array(
						'title' => 'Tax Advantage'
					),
					'opening-an-account' => array(
						'title' => 'Opening an Account'
					),
					'accredited-investor-form' => array(
						'title' => 'Accredited Investor Form'
					)
				)
			),
			'contact-us' => array(
				'title' => 'Contact Us'
			)
		);

		return $sitemap;
	}

}
/* End of file site_model.php */
/* Location: ./system/application/models/site_model.php */
