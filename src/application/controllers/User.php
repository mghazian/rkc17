<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		
		//$this->load->view('header');
		//$this->load->view('navbar');

		$this->load->view('isi');

		//$this->load->view('footer');
		
		//$this->load->view ('test');
	}
}
