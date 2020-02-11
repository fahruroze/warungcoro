<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_penjual extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM penjual ORDER BY id_penjual DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'nama' => $this->input->post('nama'),
				'lok_toko' => $this->input->post('lok_toko'),
				'nama_toko' => $this->input->post('nama_toko'),
				'jml_karyawan' => $this->input->post('jml_karyawan'),
			);
			return $this->db->insert('penjual', $data);
		}
		function updateData($where,$table)
		{
			return $this->db->get_where($table,$where);
			
		}
		
		function hapus_data($id)
		{
			$this->db->where('id_penjual', $id);
			$this->db->delete('penjual');
		}
	}

?>