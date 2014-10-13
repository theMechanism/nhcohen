<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller {

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
		$data->subnav = array(
			'leadership' => 'Leadership',
			'in-the-news' => 'In the News'
		);
		$data->view = 'about_us';
		$data->title = 'About Us';
		$data->subtitle = 'Investment Philosophy & Values';
		$data->banner = true;

		$this->load->view('template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
