<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class M_pelanggan extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getData()
		{
			$query = $this->db->query("SELECT * FROM pelanggan ORDER BY id_pelanggan DESC");
			if ($query->num_rows() > 0) {
				return $query->result();
			}else {
				return array();
			}
		}
		function insertData()
		{
			$data = array (
				'email' => $this->input->post('email'),
				'full_name' => $this->input->post('full_name'),
				'password' => $this->input->post('password'),
				'no_hp' => $this->input->post('no_hp'),
			);
			return $this->db->insert('pelanggan', $data);
		}
		function updateData($where,$table)
		{
			return $this->db->get_where($table,$where);
			
		}
		
		function hapus_data($id)
		{
			$this->db->where('id_pelanggan', $id);
			$this->db->delete('pelanggan');
		}
	}

?>