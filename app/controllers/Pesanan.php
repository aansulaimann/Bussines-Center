<?php

class Pesanan extends BC_Controller {
    public function index()
    {
        $data['title'] = "Form Entry Pesanan";
        $data['auto'] = $this->model("Pesanan_model")->autonumber();

        $this->view("templates/header", $data);
        $this->view("pesanan/index", $data);
        $this->view("templates/footer");
    }

    public function daftarPesan()
    {
        $data['title'] = "Daftar Pesanan";
        $data['pesan'] = $this->model("Pesanan_model")->detilPesan();
        
        $this->view('templates/header', $data);
        $this->view('pesanan/daftarPesan', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);die;
        if( $this->model("Pesanan_model")->tambahDataPesan($_POST) > 0 ) {
            Flasher::setFlash('Gagal', 'Ditambah', 'danger');
            header("Location: ". BASEURL ."/Pesanan");
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Ditambah', 'success');
            header("Location: ". BASEURL ."/Pesanan");
            exit;
        }
    }
}