<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Index Page for this models.
 * @author : Santo Saputro
 */

class Home extends CI_Controller {
  
  public function index()
	{
		$this->load->view('welcome_message');
	}
}
