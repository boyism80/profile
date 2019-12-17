<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culture extends CI_Controller {

	public function index()
	{
		$this->load->view('culture');
	}
}
