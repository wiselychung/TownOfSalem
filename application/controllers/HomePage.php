<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function index()
	{
		$this->load->view('HomePage');
	}
	public function Story()
	{
		$this->load->view('StoryPage');
	}
}
