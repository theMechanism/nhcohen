<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class error_404 extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data = array(
            'view' => '404',
            'title' => 'Page Not Found'
        );
        $this->load->view('template', $data);       
    } 
} 