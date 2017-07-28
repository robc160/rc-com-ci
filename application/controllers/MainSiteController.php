<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainSiteController extends CI_Controller {

	public function index() {

		$data['tabTitle'] = 'Home';
		$this->load->view('home', $data);

	}

	public function contact() {

		$data['tabTitle'] = 'Contact';
		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
	public function senderror(){

		$data['tabTitle'] = 'Contact';
		$this->load->view('header', $data);
		$this->load->view('senderror');
		$this->load->view('footer');
	}
	public function confirmation(){

		$data['tabTitle'] = 'Contact';
		$this->load->view('header', $data);
		$this->load->view('confirmation');
		$this->load->view('footer');

	}
	public function tutorials(){

		$this->load->library('pagination');
		$config['base_url'] = base_url().'tutorials';
		$config['per_page'] = 5;
		$config['num_links'] = 5;
		$config['total_rows'] = $this->TutorialsDataModel->getPostCount();
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);

		$data['tabTitle'] = 'Tutorials';
		$this->load->view('header', $data);
		$this->load->model('TutorialsDataModel');
		$data['records'] = $this->TutorialsDataModel->getList();
		$this->load->view('tutorials', $data);
		$this->load->model('TutorialsCatDataModel');
		$data['records'] = $this->TutorialsCatDataModel->getData();
		$this->load->view('categories', $data);
		$this->load->view('footer');

	}
	public function blog(){

		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = 'http://localhost/rc-com/index.php/MainSiteController/blog';
		$config['per_page'] = 5;

		$this->load->model('BlogDataModel');
		$config['total_rows'] = $this->BlogDataModel->getPostCount();
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);

		$data['tabTitle'] = 'Blog';
		$this->load->view('header', $data);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['records'] = $this->BlogDataModel->getPosts($config['per_page'], $page);
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('blog', $data);

		$this->load->model('BlogCatDataModel');
		$data['records'] = $this->BlogCatDataModel->getCategories();
		$this->load->view('categories', $data);
		$this->load->view('footer', $data);

	}

}
