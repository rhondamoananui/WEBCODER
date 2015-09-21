<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class junksunday extends CI_Controller {

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
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->library('form_validation');

	}



	public function index()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        $this->load->view('junksunday/slider');
        
        $this->load->view('junksunday/home-content');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

		public function gallery()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        // $this->load->view('junksunday/home');
        $this->load->view('junksunday/gallery');
		$this->load->view('junksunday/footer');
	}


		public function retro()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        
        $this->load->view('junksunday/retro-content');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

		public function vintage_clothing()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        
        $this->load->view('junksunday/vintage-content');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

		public function artdeco()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        
        $this->load->view('junksunday/artdeco-content');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

		public function antique()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        
        $this->load->view('junksunday/antique-content');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

		public function contact()
	{
		$this->load->view('junksunday/html');
        $this->load->view('junksunday/nav');
        $this->load->view('junksunday/headline');
        
        $this->load->view('junksunday/contact');
        $this->load->view('junksunday/home');
		$this->load->view('junksunday/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */