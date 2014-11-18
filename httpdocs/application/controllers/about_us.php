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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
