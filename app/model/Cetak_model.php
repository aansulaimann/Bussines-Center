<?php

class Cetak_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function autonumber()
    {
        $query = "SELECT max(noNota) as id FROM tb_nota";

        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();    
        $kode = $hasil['id'];
        $noUrut = (int) substr($kode, 3, 3);
        $noUrut++;
        $char = "NT";
        return $this->newID = $char . sprintf("%04s", $noUrut);
    }

    public function tambahDataCetak($data)
    {
        $query = "INSERT INTO tb_nota VALUES(:noNota, :noSp, :tglNota, :jmlHarga)";

        $this->db->query($query);
        $this->db->bind('noNota', $data['noNota']);
        $this->db->bind('noSp', $data['noSp']);
        $this->db->bind('tglNota', $data['tglNota']);
        $this->db->bind('jmlHarga', $data['totalHarga']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}