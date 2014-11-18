<?php
	class MY_Controller extends CI_Controller {
		protected $sitemap;

		public function __construct() {
			parent::__construct();
			$this->data['sitemap'] = $this->Site_model->sitemap();
		}
	}
