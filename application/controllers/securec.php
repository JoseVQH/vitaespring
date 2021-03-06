<?php

class Securec extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->auth->is_logged_in();
	}
	
	function index() {
		$data['title'] = 'Secure | Envysea Codeigniter Authentication';
		$data['module'] = 'securec';
		$data['template'] = 'home_view';
	
		$this->load->view('template', $data);
	}

	/* Example of Adding Pages to the Secure section
	--------------------------------------*/
	function page1() {
		$data['title'] = 'page1 | Envysea Codeigniter Authentication';
		$data['module'] = 'securec';
		$data['template'] = 'page1_view';
	
		$this->load->view('template', $data);
	}
	
	function page2() {
		$data['title'] = 'page2 | Envysea Codeigniter Authentication';
		$data['module'] = 'securec';
		$data['template'] = 'page2_view';
	
		$this->load->view('template', $data);
	}
	
	function page3() {
		$data['title'] = 'page3 | Envysea Codeigniter Authentication';
		$data['module'] = 'securec';
		$data['template'] = 'page3_view';
	
		$this->load->view('template', $data);
	}
	
	function logout() {
		$this->auth->logout();		
		
		$data['message'] = '<div class="alert alsert-success">Sesion Cerrada!</div>';
		$data['title'] = 'Logged Out! | Envysea Codeigniter Authentication';
		$data['module'] = 'envysea';
		$data['template'] = 'login_view';
		
		$this->load->view('template', $data);
	}
}