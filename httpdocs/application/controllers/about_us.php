<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
        parent::__construct();

		$this->data['banner'] = true;

	}

	public function index()
	{
		$this->data['view'] = 'about_us';
		$this->data['title'] = 'About Us';
		$this->data['subtitle'] = 'Investment Philosophy & Values';

		$this->load->view('template', $this->data);
	}

	public function leadership()
	{
		$this->data['view'] = 'leadership';
		$this->data['title'] = 'Leadership';
		$this->data['subtitle'] = 'Ned H. Cohen, President';

		$this->load->view('template', $this->data);
	}

	public function our_approach()
	{
		$this->data['view'] = 'our_approach';
		$this->data['title'] = 'Our Approach';

		$this->load->view('template', $this->data);
	}
	
	public function for_sponsors()
	{
		$this->data['view'] = 'for_sponsors';
		$this->data['title'] = 'For Sponsors';

		$this->load->view('template', $this->data);
	}

	public function in_the_news($url = FALSE)
	{
		$this->load->model('In_the_news_model');
		$this->load->helper('in_the_news_helper');

		$this->data['news'] = $this->In_the_news_model->news();

		if ($url) {

			$news_item = $this->In_the_news_model->find_news($url);

			if ($news_item) {

				// if news item is defined in models/in_the_news_model.php
				// add new articles to the array in that model

				$this->data['view'] = 'in_the_news/' . $news_item['view'];
				$this->data['title'] = $news_item['title'];

			} else {

				show_404('in-the-news/' . $url);

			}

		} else {

			$this->data['view'] = 'in_the_news';
			$this->data['title'] = 'In The News';

		}

		$this->load->view('template', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
