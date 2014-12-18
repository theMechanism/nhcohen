<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class For_investors extends MY_Controller {

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
		$this->data['view'] = 'for_investors';
		$this->data['title'] = 'For Investors';

		$this->load->view('template', $this->data);
	}

	public function accredited_investing()
	{
		$this->data['view'] = 'accredited_investing';
		$this->data['title'] = 'Accredited Investing';

		$this->load->view('template', $this->data);
	}

	public function tax_advantages()
	{
		$this->data['view'] = 'tax_advantages';
		$this->data['title'] = 'Tax Advantages';

		$this->load->view('template', $this->data);
	}

	public function opening_an_account()
	{
		$this->data['view'] = 'opening_an_account';
		$this->data['title'] = 'Opening an account';
		$this->data['subtitle'] = 'Investing in real estate should be a key part of any investor\'s financial planning';

		$this->load->view('template', $this->data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
