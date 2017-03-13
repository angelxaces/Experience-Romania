<?php

class New_members extends CI_Controller {

	function __construct()
	{
 		parent::__construct();
		@session_start();
        $this->load->library(array('form_validation' => 'formv'));
		//autoloaded:
			//helpers:'url', 'captcha', 'cookie', 'email', 'form', 'path'
			
	}
	function index()
	{

		$this->formv->set_rules('first_name', 'First Name', 'required|max_length[20]');
		$this->formv->set_rules('last_name', 'Last Name', 'required|max_length[20]');
		$this->formv->set_rules('email', 'email', 'required|valid_email|max_length[100]');
		$this->formv->set_rules('password', 'Password', 'required|max_length[255]');
		$this->formv->set_rules('confirm_password', 'Confirm Password', 'required|max_length[255]');

		$this->formv->set_error_delimiters('<br /><span class="error">', '</span>');

		if ($this->formv->run() == FALSE) // validation hasn't been passed
		{
			$c['page_title'] = 'Signup Now';
			$this->load->view('membership_view', $c);
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model

			$form_data = array(
					       	'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name'),
					       	'email' => set_value('email'),
					       	'password' => set_value('password'),
					       	'confirm_password' => set_value('confirm_password')
						);

			// run insert model to write data to db

			if ($this->front_end_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('new_members/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>
