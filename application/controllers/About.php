<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
		parent::__construct();
/*
		$this->load->helper(array('form','url','html','cookie','date'));
		$this->load->library(array('session','form_validation','pagination'));*/

	}
	public function index()
	{
		$title="ABOUT";
		$main_view='about/history';
		$this->load->view('page',compact('main_view','title'));
	}
}

/* End of file About.php */
/* Location: ./application/controllers/About.php */