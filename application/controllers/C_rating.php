<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');
class C_rating extends CI_Controller {
    public function __construct(){
       parent:: __construct();
        $this->load->model('M_rating');  
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_produk'] = $this->M_rating->getData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_rating', $data);
        $this->load->view('templates/footer');
    }

    public function tambahTabel()
    {
        $this->M_produk->insertData();
        ?>
            <script type="text/javascript">
                alert('Data berhasil disimpan');
                document.location='http://localhost/warungcoro/produk';
            </script>
        <?php
    }
    public function editTabel($id_produk)
    {
         $where = array('id_produk' => $id_produk);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_produk'] = $this->M_produk->updateData($where,'produk')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('V_edit_produk', $data);
        $this->load->view('templates/footer');
    }

     public function update()
    {
        $id_produk= $this->input->post('id_produk');
        $nama= $this->input->post('nama');
        $detail_produk= $this->input->post('detail_produk');

        $data = array (
            'nama'  =>$nama,
            'detail_produk'   =>$detail_produk      
        );

        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('produk', $data);
        redirect('produk');
    }
    public function hapusTabel($id)
    {
        $this->M_produk->hapus_data($id);
        ?>
            <script type="text/javascript">
                alert('Data berhasil dihapus');
                document.location='http://localhost/warungcoro/produk';
            </script>
        <?php
    }     
}
?>