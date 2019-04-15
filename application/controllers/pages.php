<?php
	class Pages extends CI_cONTROLLER {
		
		public function logInView($page = 'logIn'){ //create login
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			//$this->load->view('templates/toogleBar');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		} 
		
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('templates/toogleBar');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		} 
		public function Admin($page = 'Admin'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		} 
		public function Owner($page = 'Owner'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		}
		public function  Form($page = 'Form'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/' .$page, $data);
			$this->load->view('templates/footer');
		}
	}