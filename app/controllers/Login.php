<?php

class Login extends BC_Controller {
    public function __construct()
    {
        // if( $this->model("Login_model")->prosesLogin($_POST) > 0 ) {
        //     $_SESSION['username'] = $username; // set sesion dengan variabel username
        //     header("Location: http://localhost/com.project/BCapp/public");
        //     return;
        // } else {
        //     Flasher::setflash('Gagal', 'Login', 'danger');
        //     header("Location: http://localhost/com.project/BCapp/public");
        //     return;
        // }
    }
    public function index()
    {
        $data['title'] = "Login Page";

        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    // public function login()
    // {
    //     if( $this->model("Login_model")->prosesLogin($_POST) > 0 ) {
    //         $_SESSION['username'] = $username; // set sesion dengan variabel username
    //         header("Location: http://localhost/com.project/BCapp/public");
    //         return;
    //     } else {
    //         Flasher::setflash('Gagal', 'Login', 'danger');
    //         header("Location: http://localhost/com.project/BCapp/public");
    //         return;
    //     }
    // }

    public function logout()
    {
        $this->model("Login_model")->logout();
        header('Location: http://localhost/com.project/BCapp/public/Login');
    }
}