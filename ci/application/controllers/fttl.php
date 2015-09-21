<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fttl extends CI_Controller {

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
		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
        $this->load->view('fttl/homepage');
		$this->load->view('fttl/home');
		$this->load->view('fttl/footer');
	}

	public function aircrafts()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/aircrafts');
		$this->load->view('fttl/footer');
	}

	public function pilots()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/pilots');
		$this->load->view('fttl/footer');
	}

	public function adventures()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/adventures');
		$this->load->view('fttl/footer');
	}

	public function gallery()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/gallery');
		$this->load->view('fttl/footer');
	}


	public function glider()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/glider');
		$this->load->view('fttl/footer');
	}	

	public function chopper()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/chopper');
		$this->load->view('fttl/footer');
	}

	public function fixed_wing()
	{

		$this->load->view('fttl/header');
        $this->load->view('fttl/nav');
		$this->load->view('fttl/fixed_wing');
		$this->load->view('fttl/footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */