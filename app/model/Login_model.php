<?php

class Login_model {
    private $db, $count;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function prosesLogin($data)
    {
        if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
            
            // $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
            // $password = $_POST['password']; // isi variabel dengan mengambil data password pada form
        
            $query = "SELECT * FROM tb_login WHERE username = :username AND password = :password";
            $this->db->query($query);
            // $stmt = $conn->prepare($sql);
            $this->db->bind('username', $data['username']); 
            $this->db->bind('password', $data['password']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function logout()
    {
        session_start(); //digunakan untuk memulai session
        session_destroy(); //digunakan untuk menghapus session
    }
        
}