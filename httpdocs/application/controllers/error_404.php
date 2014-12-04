<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class error_404 extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->output->set_status_header('404');
        $this->data['view'] = '404';
        $this->data['title'] = 'Page Not Found';
        $this->data['banner'] = true;

        $this->load->view('template', $this->data);
    }
}
