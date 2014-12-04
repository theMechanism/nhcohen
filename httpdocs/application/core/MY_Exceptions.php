<?php
// application/core/MY_Exceptions.php
class MY_Exceptions extends CI_Exceptions {

    public function show_404($page = '', $log_error = TRUE)
    {
		include APPPATH . 'config/routes.php';

		// By default we log this, but allow a dev to skip it
		if ($log_error)
		{
			log_message('error', '404 Page Not Found --> '.$page);
		}

		if(!empty($route['404_override'])){

			$CI =& get_instance();
			$CI->load->model('Site_model');

			$data = array (
				'view' => '404',
				'title' => 'Not Found',
				'sitemap' => $CI->Site_model->sitemap(),
				'banner' => true
			);

			$CI->load->view('template', $data);
			echo $CI->output->get_output();
			exit;

		} else {

		$title = "404 Page Not Found";
		$message = "The page you requested was not found.";

		echo $this->show_error($heading, $message, 'error_404', 404);
		exit;

		}
	}

}
