<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends MY_Controller {

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
		$this->load->model('Address_model');

		$this->data['view'] = 'contact_us';
		$this->data['title'] = 'Contact Us';
		$this->data['states'] = $this->Address_model->states();

		$this->load->view('template', $this->data);
	}

	public function success()
	{
		$this->data['view'] = 'contact_us-success';
		$this->data['title'] = 'Thank You For Contacting Us';

		$this->load->view('template', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
