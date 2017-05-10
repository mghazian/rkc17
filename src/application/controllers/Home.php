<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{	
		parent::__construct();
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home/sidebar');
		$this->load->view('footer');
	}

	function registration()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('footer');
	}
}
