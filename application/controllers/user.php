<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('autentifikasi'));
    }

    public function blok()
    {
        $this->load->view('template/header', );
        $this->load->view('template/sidebar', );
        $this->load->view('template/topbar', );
        $this->load->view('user/blok');
        $this->load->view('template/footer');
        
    }

        public function index()
        {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
        }


        public function anggota()
        {
        $data['judul'] = 'Data Anggota';
        $data['user'] = $this->modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('role_id', 1);
        $data['anggota'] = $this->db->get('user')->result_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('user/anggota', $data);
        $this->load->view('template/footer');
        }

        public function ubahanggota($value='') {
            $data['judul'] = 'Ubah Data Anggota';
            $data['user'] = $this->modeluser->cekdata(['email' => $this->session->userdata('email')])->row_array();
            $data['anggota'] = $this->modeluser->getUserWhere(['id' => $this->uri->segment(3)])->row_array();
    
            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
                'required' => 'Nama Belum diis!!'
            ]);
    
            $this->form_validation->set_rules('email', 'Alamat Email',
                'required|trim|valid_email|is_unique[user.email]', [
                'valid_email' => 'Email Tidak Benar!!',
                'required' => 'Email Belum diisi!!',
                'is_unique' => 'Email Sudah Terdaftar!'
            ]);
    
            if ($this->form_validation->run() == false) {
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar', $data);
                $this->load->view('template/topbar', $data);
                $this->load->view('user/ubah_anggota', $data);
                $this->load->view('template/footer');
            } else {
    
                $data = [
                    'nama' => $this->input->post('nama', true),
                    'email' => $this->input->post('email', true)
                ];
    
                $this->modeluser->updateanggota($data, ['id' => $this->input->post('id')]);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Ubah data anggota telah berhasil!!</div>'); 
                redirect('user/anggota');
            }
        }

        public function hapusanggota() { 
            $where = ['id' => $this->uri->segment(3)];
            $this->modeluser->hapusanggota($where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Hapus data anggota telah berhasil!!</div>'); 
            redirect('user/anggota');
        }


        public function ubahprofil()
        {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama', 'Nama Lengkap',
        'required|trim', [
        'required' => 'Nama tidak Boleh Kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('user/ubah-profile', $data);
            $this->load->view('template/footer');
            } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            
            
            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
    
    
        if ($upload_image) {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'pro' . time();
    
    
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('image')) {
        $gambar_lama = $data['user']['image'];
        if ($gambar_lama != 'taufiq.JPG') {
        unlink(FCPATH . 'assets/img/' . $gambar_lama);
        }
    
    
        $gambar_baru = $this->upload->data('file_name');
        $this->db->set('image', $gambar_baru);
        } else { }
        }
    
    
        $this->db->set('nama', $nama);
        $this->db->where('email', $email);
        $this->db->update('user');
    
    
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>'); 
        redirect('user');
        }
    }
}
