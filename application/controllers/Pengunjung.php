<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {
	public function index()
	{
		$data['produk'] = $this->db->get('produk')->result_array();
		$data['penjual'] = $this->db->get('penjual')->result_array();
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/slider');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/produk', $data);
		$this->load->view('pengunjung/penjual', $data);
		$this->load->view('pengunjung/testimoni');
		$this->load->view('pengunjung/templates/footer');
	
	}
	public function produk()
	{
		$data['produk'] = $this->db->get('produk')->result_array();
		$data['penjual'] = $this->db->get('penjual')->result_array();
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/produk', $data);
		$this->load->view('pengunjung/templates/footer');
	
	}
	public function about()
	{
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/about');
		$this->load->view('pengunjung/templates/footer');
	
	}

	public function berita()
	{
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/beritaterbaru');
		$this->load->view('pengunjung/templates/footer');
	
	}
	public function contact()
	{
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/contact');
		$this->load->view('pengunjung/templates/footer');
	
	}

		public function reservation()
	{
		$this->load->view('pengunjung/templates/head');
		$this->load->view('pengunjung/templates/header');
		$this->load->view('pengunjung/templates/nav');
		$this->load->view('pengunjung/reservation');
		$this->load->view('pengunjung/templates/footer');
	
	}
}