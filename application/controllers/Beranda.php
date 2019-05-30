<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	public function index() {
		$data['title'] = 'PDFREADER | BUKA FILE PDF ANDA DENGAN MUDAH';
		$this->load->view('templates/header', $data);
		$this->load->view('beranda/index');
		$this->load->view('templates/footer');
	}

}