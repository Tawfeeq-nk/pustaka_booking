<?php
class matakuliah extends CI_Controller {
    public function index()
    {
        $this->load->view('view_form_matakuliah');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'kelamin' => $this->input->post('kelamin'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tanggallahir' => $this->input->post('tanggallahir'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'asalsekolah' => $this->input->post('asalsekolah'),
            'jurusan' => $this->input->post('jurusan')

        ];

        $this->load->view('view_data_matakuliah', $data);
    }
}