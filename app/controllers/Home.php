<?php

class Home extends BC_Controller{

    // public function __construct()
    // {
    //     // var_dump($_POST);die;
    //     if( $this->model("Login_model")->prosesLogin($_POST) > 0 ) {
    //         $_SESSION['username'] = $username; // set sesion dengan variabel username
    //         // header("Location:http://localhost/com.project/BCapp/public/Login");
    //         exit;
    //     } else {
    //         Flasher::setflash('Gagal', 'Login', 'danger');
    //         // header("Location:http://localhost/com.project/BCapp/public/");
    //         exit;
    //     }
    // }

    public function index(){
        $data['title'] = "Home Page";
        
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}