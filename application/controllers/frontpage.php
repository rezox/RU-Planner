<?php

class Frontpage extends CI_Controller
{

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('include/footer');
	}

}
