<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { 
    public function index () {
        $this->load->view('login');
    }
    public function login () {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = $this->db->get_where('user', ['email'=>$email])->row_array();
        if($data){
        if($data['pass'] == $password){
            if($data['akses'] > 1){
                echo "User";
            }else{
                redirect('kos/admin');
            }
        }
        }else{
            echo "email belum terdaftar";
        }
    }
}