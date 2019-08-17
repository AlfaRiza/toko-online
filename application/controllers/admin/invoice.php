<?php

class invoice extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Invoice';
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templates_admin/footer');
    }
}
