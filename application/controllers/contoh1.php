<?php
class contoh1 extends CI_Controller{
    public function index()
    {
        echo"<h1>Selamat datang, selamat belajar web programming</h1>";
        //$this->load->view('view-latihan');
        
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan');
       
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan->jumlah($n1, $n2);

        $this->load->view('latihan', $data);
    }
}
?>