<?php

class Cetak extends BC_Controller {

    public function index()
    {
        $data['title'] = "Form Cetak Nota";
        $data['nota'] = $this->model("Cetak_model")->autonumber();

        $this->view('templates/header', $data);
        $this->view('cetak/index', $data);
        $this->view('templates/footer');
    }

    public function hasilCetak()
    {
        $data['title'] = "Hasil Cetak";
        
        $this->view('templates/header', $data);
        $this->view('cetak/hasilCetak');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        // var_dump($_POST);die;
        if( $this->model("Cetak_model")->tambahDataCetak($_POST) > 0 ) {
            header('Location: '. BASEURL .'/Cetak');
        } else {
            header('Location: '. BASEURL .'/Cetak');
        }
    }

}
