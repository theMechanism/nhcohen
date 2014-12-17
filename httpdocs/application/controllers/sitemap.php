<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends MY_Controller {

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
		$this->data['view'] = 'sitemap';
		$this->data['title'] = 'Sitemap';

		$this->load->view('template', $this->data);
	}

	public function business_continuity_plan_disclosure()
	{
		$this->data['view'] = 'business_continuity_plan_disclosure';
		$this->data['title'] = 'Business Continuity Plan Disclosure';

		$this->load->view('template', $this->data);
	}

	public function terms_of_use()
	{
		$this->data['view'] = 'terms_of_use';
		$this->data['title'] = 'Terms of Use';

		$this->load->view('template', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
