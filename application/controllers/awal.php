<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class awal extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();

		$this->load->helper('url');
	    $this->load->helper('form');


	    $this->load->library('session');

	  }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function saya()
	{
		$this->load->view('beranda');
	}

	public function tentang()
	{
		$this->load->view('about');
	}

	public function produk()
	{
		$this->load->view('products');
	}

	public function toko()
	{
		$komen = $this->input->post('komen');
		$hasil['data'] = $komen;

		$this->load->view('store',$hasil);
		$this->session->set_userdata('komentar',$komen);
	}
	// public function komentar()
	// {
	// 	$komen = $this->input->post('komen');
	// 	$this->load->view('store',$komen);
	// }
}
