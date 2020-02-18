<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Penjual extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_penjual');  
    }
    public function index()
    {
    	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data['data_penjual'] = $this->M_penjual->getData();
    	$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('V_penjual', $data);
		$this->load->view('templates/footer');
    }
   

    public function tambahTabel()
    {
        $this->M_penjual->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/warungcoro/penjual';
            </script>
        <?php    
    }
    public function editTabel($id)
    {
        $where = array('id_penjual' => $id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_penjual'] = $this->M_penjual->updateData($where,'penjual')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_edit_penjual', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id= $this->input->post('id_penjual');
        $nama= $this->input->post('nama');
        $lok_toko= $this->input->post('lok_toko');
        $nama_toko= $this->input->post('nama_toko');
        $jml_karyawan= $this->input->post('jml_karyawan');

        $data = array (
            'nama'  =>$nama,
            'lok_toko'   =>$lok_toko,
            'nama_toko'      =>$nama_toko,
            'jml_karyawan'         =>$jml_karyawan       
        );

        $this->db->where('id_penjual', $this->input->post('id_penjual'));
        $this->db->update('penjual', $data);
        redirect('penjual');
    }
    public function hapusTabel($id)
    {
        $this->M_penjual->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/warungcoro/penjual';
            </script>
        <?php
    }     
}
?>