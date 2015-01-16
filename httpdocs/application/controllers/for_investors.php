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
		$this->data['title'] = 'What is an Accredited Investor?';

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
		$this->data['title'] = 'Opening an Account';

		$this->load->view('template', $this->data);
	}

	public function why_invest_in_real_estate()
	{
		$this->data['view'] = 'why_invest_in_real_estate';
		$this->data['title'] = 'Why Invest?';
		$this->data['subtitle'] = 'Investing in real estate should be a key part of any investor\'s financial planning';

		$this->load->view('template', $this->data);
	}


	public function accredited_investor_form($action = FALSE)
	{

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="txtError">', '</p>');

		if ($_POST) {

			$this->load->helper('validation_helper');

			$this->form_validation->set_rules('chkIndorTrust', 'individual or trustee', 'trim|required');
			if ($this->input->post('chkIndorTrust') == 'Trust') {
				$this->form_validation->set_rules('txtTrustName', 'trust name', 'trim|required|max_length[255]');
			}
			$this->form_validation->set_rules('txtFirstName', 'first name', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtMiddleName', 'middle name', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtLastName', 'last name', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtDob', 'date of birth', 'trim|required|max_length[10]|callback_date_check');
			$this->form_validation->set_message('date_check', 'This is not a valid date!');
			$this->form_validation->set_rules('txtSSN', 'SSN/Tax ID', 'trim|required|max_length[11]|callback_account_check');
			$this->form_validation->set_message('account_check', 'This is not a valid Social Security number!');
			$this->form_validation->set_rules('txtAddress', 'address', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtCity', 'city', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtState', 'state', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtZip', 'zip', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtCountry', 'country', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtHomePhone', 'home phone', 'trim|required|max_length[255]|callback_phone_check');
			$this->form_validation->set_message('phone_check', 'This is not a valid phone number!');
			$this->form_validation->set_rules('txtSecondPhone', 'second phone', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtMobilePhone', 'mobile phone', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtFax', 'fax', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtEmail', 'email', 'trim|required|valid_email|max_length[255]');
			$this->form_validation->set_rules('txtEmailConf', 'email confirmation', 'trim|required|valid_email|max_length[255]|matches[txtEmail]');
			$this->form_validation->set_message('matches', 'The emails provided do not match');
			$this->form_validation->set_rules('txtVote', 'state you are registered to vote', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtBusiness', 'business', 'trim|max_length[255]');
			//$this->form_validation->set_rules('txtProfession', 'profession', 'trim|required|max_length[255]');
			$this->form_validation->set_rules('txtTitle', 'title', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtCompany', 'company', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtEmployedSince', 'employed since', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusAddress', 'business address', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusCity', 'business city', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusState', 'business state', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusZip', 'business zip', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusCountry', 'business country', 'trim|max_length[255]');
			$this->form_validation->set_rules('txtBusPhone', 'business phone', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtBusSecondPhone', 'business second phone', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtBusMobilePhone', 'business mobile phone', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtBusFax', 'business fax', 'trim|max_length[255]|callback_phone_check');
			$this->form_validation->set_rules('txtBusEmail', 'business email', 'trim|valid_email|max_length[255]');
			$this->form_validation->set_rules('chkAddress', 'preferred correspondence', 'trim|required');
			$this->form_validation->set_rules('txtGrowth', 'growth', 'trim|integer|max_length[1]|callback_objectives');
			$this->form_validation->set_message('objectives', 'Please enter all overall investment objectives.');
			$this->form_validation->set_rules('txtIncome', 'income', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('txtTax', 'tax deferral', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('txtLiquidity', 'liquidity', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('txtGrowthRE', 'growth', 'trim|integer|max_length[1]|callback_real_estate_objectives');
			$this->form_validation->set_message('real_estate_objectives', 'Please enter all overall real estate objectives.');
			$this->form_validation->set_rules('txtIncomeRE', 'income', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('txtTaxRE', 'tax deferral', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('txtLiquidityRE', 'liquidity', 'trim|integer|max_length[1]');
			$this->form_validation->set_rules('chkRisk', 'risk tolerance', 'trim|required');
			$this->form_validation->set_rules('chkSpeculation', 'speculation', 'trim|required');
			$this->form_validation->set_rules('chkPrimary', 'primary source of income', 'trim|required');
			$this->form_validation->set_rules('chk001', '', 'trim|callback_determination');
			$this->form_validation->set_rules('chk002', '', 'trim|callback_determination');
			$this->form_validation->set_rules('chk003', '', 'trim|callback_determination');
			$this->form_validation->set_rules('chk004', '', 'trim|callback_determination');
			$this->form_validation->set_rules('chk005a', '', 'trim|callback_determination');
			$this->form_validation->set_rules('chk005b', '', 'trim|callback_determination');
			$this->form_validation->set_message('determination', 'At least one determination must be checked.');
			$this->form_validation->set_rules('chk006', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk007', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk008', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk009', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk010', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk011', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk012', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk013', '', 'trim|callback_prior_experience');
			$this->form_validation->set_rules('chk014', '', 'trim|callback_other_types');
			$this->form_validation->set_message('other_types', 'Please describe the other types of investments.');
			$this->form_validation->set_message('prior_experience', 'At least one prior experience must be checked.');
			$this->form_validation->set_rules('txtOther', '', 'trim');
			$this->form_validation->set_rules('txtPercent', 'percent of real estate in your investment portfolio', 'trim|required');

			$this->form_validation->set_rules('txtReferred', 'speculation', 'trim|max_length[255]');
			if (TRUE == $this->form_validation->run())
			{
				// send message
				$this->load->library('email');
				$this->email->from('no-reply@nhcohenpartners.com');
				$this->email->to('george.brassey@themechanism.com');
				$this->email->subject('[NHCohenPartners.com] Accredited Investor Suitability Form');
				$msg = 'Type of Investor ' . $this->input->post('chkIndorTrust') . "\n" .
					'Trust name: ' . $this->input->post('txtTrustName') . "\n" .
					'First name: ' . $this->input->post('txtFirstName') . "\n" .
					'Middle name: ' . $this->input->post('txtMiddleName') . "\n" .
					'Last name: ' . $this->input->post('txtLastName') . "\n" .
					'Date of birth: ' . $this->input->post('txtDob') . "\n" .
					'Social Security/Tax ID: ' . $this->input->post('txtSSN') . "\n" .
					'Address: ' . $this->input->post('txtAddress') . "\n" .
					'City: ' . $this->input->post('txtCity') . "\n" .
					'State: ' . $this->input->post('txtState') . "\n" .
					'Zip: ' . $this->input->post('txtZip') . "\n\n" .
					'Home phone: ' . $this->input->post('txtHomePhone') . "\n" .
					'Second phone: ' . $this->input->post('txtSecondPhone') . "\n" .
					'Mobile phone: ' . $this->input->post('txtMobilePhone') . "\n" .
					'Fax: ' . $this->input->post('txtFax') . "\n" .
					'Email: ' . $this->input->post('txtEmail') . "\n" .
					'State registered to vote in: ' . $this->input->post('txtVote') . "\n\n" .
					'Business: ' . $this->input->post('txtBusiness') . "\n" .
					'Title: ' . $this->input->post('txtTitle') . "\n" .
					'Company: ' . $this->input->post('txtCompany') . "\n" .
					'Employed since: ' . $this->input->post('txtEmployedSince') . "\n" .
					'Business address: ' . $this->input->post('txtBusAddress') . "\n" .
					'Business city: ' . $this->input->post('txtBusCity') . "\n" .
					'Business state: ' . $this->input->post('txtBusState') . "\n" .
					'Business zip: ' . $this->input->post('txtBusZip') . "\n" .
					'Business country: ' . $this->input->post('txtBusCountry') . "\n" .
					'Business phone: ' . $this->input->post('txtBusPhone') . "\n\n" .
					'Business second phone: ' . $this->input->post('txtBusSecondPhone') . "\n" .
					'Business mobile phone: ' . $this->input->post('txtBusMobilePhone') . "\n" .
					'Business fax: ' . $this->input->post('txtBusFax') . "\n" .
					'Business email: ' . $this->input->post('txtBusEmail') . "\n" .
					'Preferred correspondence: ' . $this->input->post('chkAddress') . "\n\n" .
					'Overall Investment Objectives' . "\n" .
					'Growth: ' . $this->input->post('txtGrowth') . "\n" .
					'Income: ' . $this->input->post('txtIncome') . "\n" .
					'Tax deferral: ' . $this->input->post('txtTax') . "\n" .
					'Liquidity: ' . $this->input->post('txtLiquidity') . "\n\n" .
					'Real Estate Objectives' . "\n" .
					'Growth: ' . $this->input->post('txtGrowthRE') . "\n" .
					'Income: ' . $this->input->post('txtIncomeRE') . "\n" .
					'Tax deferral: ' . $this->input->post('txtTaxRE') . "\n" .
					'Liquidity: ' . $this->input->post('txtLiquidityRE') . "\n\n" .
					'Risk tolerance: ' . $this->input->post('chkRisk') . "\n" .
					'Do Investment Objectives Allow Speculation? ' . $this->input->post('chkSpeculation') . "\n" .
					'Primary source of income: ' . $this->input->post('chkPrimary') . "\n" .
					'Estimated percent of real estate in your investment portfolio: ' . $this->input->post('txtPercent') . "%\n\n" .
					'Determination of Accredited Investor Status' . "\n";
				if ($this->input->post('chk001'))
				{
					$msg .= '* ' . $this->input->post('chk001') . "\n";
				}
				if ($this->input->post('chk002'))
				{
					$msg .= '* ' . $this->input->post('chk002') . "\n";
				}
				if ($this->input->post('chk003'))
				{
					$msg .= '* ' . $this->input->post('chk003') . "\n";
				}
				if ($this->input->post('chk004'))
				{
					$msg .= '* ' . $this->input->post('chk004') . "\n";
				}
				if ($this->input->post('chk005a'))
				{
					$msg .= '* ' . $this->input->post('chk005a') . "\n";
				}
				if ($this->input->post('chk005b'))
				{
					$msg .= '* ' . $this->input->post('chk005b') . "\n";
				}
				if ($this->input->post('chk005c'))
				{
					$msg .= '* ' . $this->input->post('chk005b') . "\n";
				}
				if ($this->input->post('chk005d'))
				{
					$msg .= '* ' . $this->input->post('chk005b') . "\n";
				}
				if ($this->input->post('chk005e'))
				{
					$msg .= '* ' . $this->input->post('chk005e') . "\n";
				}
				$msg .= "\n" . 'Prior Investment Experience' . "\n";
				if ($this->input->post('chk006'))
				{
					$msg .= '* ' . $this->input->post('chk006') . "\n";
				}
				if ($this->input->post('chk007'))
				{
					$msg .= '* ' . $this->input->post('chk007') . "\n";
				}
				if ($this->input->post('chk008'))
				{
					$msg .= '* ' . $this->input->post('chk008') . "\n";
				}
				if ($this->input->post('chk009'))
				{
					$msg .= '* ' . $this->input->post('chk009') . "\n";
				}
				if ($this->input->post('chk010'))
				{
					$msg .= '* ' . $this->input->post('chk010') . "\n";
				}
				if ($this->input->post('chk011'))
				{
					$msg .= '* ' . $this->input->post('chk011') . "\n";
				}
				if ($this->input->post('chk012'))
				{
					$msg .= '* ' . $this->input->post('chk012') . "\n";
				}
				if ($this->input->post('chk013'))
				{
					$msg .= '* ' . $this->input->post('chk013') . "\n";
				}
				if ($this->input->post('chk014'))
				{
					$msg .= '* ' . $this->input->post('chk014') . ':' . "\n";
					if ($this->input->post('txtOther'))
					{
						$msg .= '** ' . $this->input->post('txtOther') . "\n";
					}
				}
				$msg .= "\n" . 'Referred by: ' . $this->input->post('txtReferred') . "\n" .
					"\r\n\r\n" . 'Sent at ' . date('Y-m-d H:i:s') . ' from <' . current_url() . '> by ' . $_SERVER['REMOTE_ADDR'];
				$this->email->message($msg);
				if ($this->email->send())
				{
					redirect('for-investors/accredited-investor-form/success', 'location');
				}
				else
				{
					$this->data['error'] = '<p class=""></p>';
				}
			}
		}

		$this->load->model('Address_model');
		$this->data['states'] = $this->Address_model->states();

		$this->data['view'] = 'accredited_investor_form';
		$this->data['title'] = 'Accredited Investor Form';

		if ('success' == $action)
		{
			$this->data['success'] = 'Thank you for submitting the Accredited Investor Suitability Form. You will be contacted shortly by a NHCohen Partners LLC. representative.';
		}

		$this->load->view('template', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
