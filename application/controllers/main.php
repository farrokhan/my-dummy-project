<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$this->load->view('main_view');
	}
	public function form_validation()
	{
		//echo 'ok';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name","first name",'required|alpha');
		$this->form_validation->set_rules("last_name","last name",'required|alpha');
		if($this->form_validation->run())
		{
			$this->load->model("main_model");
		}
		else{
			$this->index();
			
		
	
	}//form validation library
		}
		}
		


