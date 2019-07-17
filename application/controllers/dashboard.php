<?php
class dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampilData()->result();
        $data['judul'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
