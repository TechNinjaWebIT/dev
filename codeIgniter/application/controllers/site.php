<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->home();
	}

	public function home(){
		$this->load->view("site_header.php");
		$this->load->view("site_nav.php");
		$this->load->view("content_home.php");
		$this->load->view("site_footer.php");
	}
	public function community(){
		$this->load->view("site_header.php");
		$this->load->view("site_nav.php");
		$this->load->view("content_community.php");
		$this->load->view("site_footer.php");
	}
	public function testimonials(){
		$this->load->view("site_header.php");
		$this->load->view("site_nav.php");
		$this->load->view("content_testimonials.php");
		$this->load->view("site_footer.php");
	}
}