<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

	}

	function send() 
	{	
		$this->load->library('form_validation');
		$this->load->model('Email_model');
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('comments', 'Comments', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|');
		
		if($this->form_validation->run() == FALSE)
		{
		$data['page_title'] = 'Verde Valley Business Resource';
		$data['banner'] = 'banner-contact';
		$data['page'] = 'feedback_view'; // pass the actual view to use as a parameter
		$this->load->view('container',$data);
		}
		else
		{
			// validation has passed. Now send the email
			$name = (string)$this->input->post('name', TRUE);
			$phone = (string)$this->input->post('phone', TRUE);
			$email = (string)$this->input->post('email', TRUE);
			$subject = (string)$this->input->post('subject', TRUE);
			$comments = (string)$this->input->post('comments', TRUE);
			$recipient = 'info@vvbusinessresource.com';
			
			$message = "Message from: " . $name . "<br/>" ;
			$message .= "Phone Number: " . $phone . "<br/>";
			$message .= "Email: " . $email . "<br/>";
			$message .= "Subject: " . $subject . "<br/>";
			$message .= "Message: " . $comments . "<br/>";
			
			$redirect = "/site/contact_confirmation";

			$this->Email_model->sendeMail($name, $email, $message, $subject, $redirect, $recipient);
	}
	}
	
	

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */