<?php

class Jasa extends BC_Controller {
    public function index() 
    {
        $data['title'] = "Form Entry Jasa";
        // $data['jasa'] = $this->model("Jasa_model")->getAllDataJasa();
        $data['jasa'] = $this->model("Jasa_model")->autonumber();

        $this->view("templates/header", $data);
        $this->view("jasa/index", $data);
        $this->view("templates/footer");
    }

    public function daftarJasa()
    {
        $data['title'] = "Daftar Jasa";
        $data['jasa'] = $this->model("Jasa_model")->getAllDataJasa();

        $this->view("templates/header", $data);
        $this->view("jasa/daftarJasa", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        if( $this->model("Jasa_model")->tambahDataJasa($_POST) > 0 ) {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        }
        
    }

    public function ubah()
    {
        // var_dump($_POST);die;
        if( $this->model("Jasa_model")->ubahDataJasa($_POST) > 0 ) {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        }
    }

    public function hapus()
    {
        if( $this->model("Jasa_model")->hapusDataJasa($_POST['kdJasa']) > 0 ) {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header("Location: ". BASEURL ."/Jasa");
            exit;
        }
    }
}