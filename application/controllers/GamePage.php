<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GamePage extends CI_Controller {

	public function index(){
		
		$this->load->view('GamePage');
	}

	public function DoctorHeal(){
		echo "hello world";
	}
}


