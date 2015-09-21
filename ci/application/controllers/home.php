<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#	This is the controller for webcoder.co.nz (Rhonda's portfolio website)
#	this is a one page website, therefore all views are called within this controller
#	However I have included 2 other example websites which have their own controllers.
#	1. Junksunday - http://webcoder.co.nz/junksunday 
#	2. Fly to the limit - http://webcoder.co.nz/fttl




class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://webcoder.co.nz
	 *
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index()
	{
        

		$this->load->view('header');
        $this->load->view('nav');
		$this->load->view('welcome_message');
		$this->load->view('skills');
		

		$this->load->view('main-content');
		$this->load->view('portfolio');
		$this->load->view('contact');

		$this->load->view('footer');
	}

		public function email()
	{
		// Send an Email from the contact form

		// Get the post data
		$from = $this->input->post('from');
		$name = $this->input->post('name');
		$message = $this->input->post('message');
		$subject = $this->input->post('subject');
	

		// load the ci email library
        $this->load->library('email');

        // Send the email to the selected email address
		$this->email->from($from, $name);
		$this->email->to('rhonda29@vodafone.co.nz');
		$this->email->subject($subject);
		$this->email->message($message);

		$this->email->send();

		// Once email has been sent, go back to the webite
		$this->index();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */