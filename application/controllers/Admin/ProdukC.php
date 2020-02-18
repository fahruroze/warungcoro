<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class ProdukC extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_produk_c');  
    }
    public function index()
    {
    	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    	$data['data_produk_c'] = $this->M_produk_c->getData();
        $this->form_validation->set_rules('kode_produk', 'Kode Produk', 'required');
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('detail_produk', 'Detail Produk', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar', 'required');

        if ($this->form_validation->run() == false) {
        	$this->load->view('templates/header', $data);
    		$this->load->view('templates/sidebar', $data);
    		$this->load->view('produk/V_produkC', $data);
    		$this->load->view('templates/footer');
        }else{
            $this->M_produk_c->insertData();
            $this->session->set_flashdata('message', 'Data Produk Telah Ditambahkan!');
            redirect('admin/ProdukC');
        }
    }

    public function tambahTabel()
    {
        $this->M_produk_c->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/warungcoro/admin/produkC';
            </script>
        <?php
    }
    public function editTabel($id_produk)
    {
         $where = array('id_produk' => $id_produk);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_produk_c'] = $this->M_produk_c->updateData($where,'produk')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('produk/V_edit_produkC', $data);
        $this->load->view('templates/footer');
    }

     public function update()
    {
        $id_produk= $this->input->post('id_produk');
        $kode_produk= $this->input->post('kode_produk');
        $nama= $this->input->post('nama');
        $detail_produk= $this->input->post('detail_produk');
        $gambar= $this->input->post('gambar');
        $created_by= $this->input->post('created_by');
        $created_date= $this->input->post('created_date');
        $updated_by= $this->input->post('updated_by');
        $updated_date= $this->input->post('updated_date');

        $data = array (
            'kode_produk' => $kode_produk,
            'nama'  =>$nama,
            'detail_produk'   =>$detail_produk,
            'gambar'      =>$gambar,
            'created_by' => $created_by,
            'created_date' => $created_date,
            'updated_by' => $updated_by,
            'updated_by' => $updated_date,
        );

        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('produk', $data);
        redirect('admin/produkC');
    }
    public function hapusTabel($id)
    {
        $this->M_produk_c->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/warungcoro/admin/produkC';
            </script>
        <?php
    }     
}
?>