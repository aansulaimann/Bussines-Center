<?php

class Divisi extends BC_Controller {
    public function index()
    {
        $data["title"] = "Form Entry Divisi";
        // $data['divisi'] = $this->model("Divisi_model")->getAllDivisi();
        $data['divisi'] = $this->model("Divisi_model")->autonumber();
        // var_dump($data['divisi']);die;

        $this->view("templates/header", $data);
        $this->view("divisi/index", $data);
        $this->view("templates/footer");
    }

    public function daftarDivisi()
    {
        $data['title'] = "Detil Data Divisi";
        $data['divisi'] = $this->model("Divisi_model")->getAllDivisi();

        $this->view("templates/header", $data);
        $this->view("divisi/daftarDivisi", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        // var_dump($_POST);
        if( $this->model("Divisi_model")->tambahDataDivisi($_POST) > 0 ) {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        }
    }

    public function ubah()
    {
        if( $this->model("Divisi_model")->ubahDataDivisi($_POST) > 0 ) {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        }
    }

    public function hapus()
    {
        if( $this->model("Divisi_model")->hapusDataDivisi($_POST['idDivisi']) > 0 ) {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        } else {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: '. BASEURL .'/Divisi');
            exit;
        }
    }


    
    // public function getUbah()
    // {
    //     // var_dump($data['Id']);
    //     echo json_decode($this->model("Divisi_model")->getDivisiById($_POST['Id']));
    //     // $this->view('divisi/index', $data);
    // }

}