<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Model {
public function index()
	{
		$this->load->view('login_vista');
	}
}