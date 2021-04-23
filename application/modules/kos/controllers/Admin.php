<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller { 
    public function index () {
        $this->load->view('admin');
    }
    public function uploadPorduk(){
        $data['list'] = $this->db->get('list_kos')->result_array();
        $this->load->view('upload',$data);
    }
    public function uploadKos(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pemilik = $this->input->post('pemilik');

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'pemilik' => $pemilik
        ];

        $upload_gambar = $_FILES['gambar']['name'];

        if ($upload_gambar) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '500000';
            $config['upload_path'] = './assets/gambarkos/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maksimal Berkas 200Mb </div>');
            }
        }
        $this->db->insert('list_kos', $data);
        redirect('kos/admin/uploadPorduk');
    }
}