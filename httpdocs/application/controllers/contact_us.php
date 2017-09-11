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
		$this->load->helper('form'); 

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

		//$from_email = "investorservices@nhcohenpartners.com"; 
		//$to_email = "investorservices@nhcohenpartners.com";
		$from_email = "lyle@huzzahstudios.com"; 
		$to_email = "lyle@huzzahstudios.com";
		//$to_email = $this->input->post('email'); 
		$user_name = $this->input->post('last_name');
		$user_email = $this->input->post('email');
		$user_phone = $this->input->post('phone');
		$user_address = $this->input->post('street');
		$user_city = $this->input->post('city');
		$user_state = $this->input->post('state');
		$user_zipcode = $this->input->post('zip');
		$user_type = $this->input->post('00No0000008wHqF');
		$user_message = $this->input->post('description');

		if (empty($user_state)) {
			$user_state = $this->input->post('00No0000008wHqP');
		}

		$message = "<p>Name : " . $user_name . "</p>
					<p>Email : " . $user_email . "</p>
					<p>Phone : " . $user_phone . "</p>
					<p>Address : " . $user_address . "</p>
					<p>City : " . $user_city . "</p>
					<p>State : " . $user_state . "</p>
					<p>Zipcode : " . $user_zipcode . "</p>
					<p>Type : " . $user_type . "</p>
					<p>Message : " . $user_message . "</p>";

		//Load email library 
		$this->load->library('email'); 
		$this->email->set_mailtype("html");
		$this->email->from($from_email, 'Nhcohenpartners.com Website'); 
		$this->email->to($to_email);
		$this->email->subject($user_name . ' has sent a message'); 
		$this->email->message($message); 

		//Send mail 
		$this->data['view'] = 'contact_us-success';
		if($this->email->send()) {			
			$this->data['title'] = 'Thank You For Contacting Us';
		} else { 
			$this->data['title'] = 'Unfortunately there was an Error, Please try again.';
		}

		$this->load->view('template', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
