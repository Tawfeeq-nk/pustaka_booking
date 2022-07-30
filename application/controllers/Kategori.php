<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		cek_login();
	}

	public function index()
	{
		$data['judul'] = 'Data Buku';
		$data['user'] = $this->modeluser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['buku'] = $this->modelbuku->getBuku()->result_array();
		$data['kategori'] = $this->modelbuku->getKategori()->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('buku/kategori', $data);
		$this->load->view('template/footer');
	}

	public function tambahKategori()
	{
		$data = [
			'nama_kategori' => $this->input->post('kategori', true)
		];

		$this->modelbuku->simpanKategori($data); //menggunakan model
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Tambah kategori telah berhasil!</div>');
		redirect('kategori');
	}

	public function hapusKategori()
	{
		$where = ['id_kategori' => $this->uri->segment(3)];
		$this->modelbuku->hapusKategori($where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Hapus kategori telah berhasil!</div>');
		redirect('kategori');
	}
}