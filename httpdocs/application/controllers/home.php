<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

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

	public function index()
	{
		$this->load->model('In_the_news_model');
		$this->load->helper('in_the_news_helper');

		$this->data['view'] = 'home';
		$this->data['title'] = 'Home';
		// $this->data['notice'] = 'Ned Cohen announces new offering. Contact us at 212 221 3444 for more details';
		$this->data['latest_news'] = $this->In_the_news_model->latest();
		$this->load->view('template', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
