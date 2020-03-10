<?php

class Pesanan_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function autonumber()
    {
        $query = "SELECT max(noSp) as id FROM tb_sp";

        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();    
        $kode = $hasil['id'];
        $noUrut = (int) substr($kode, 3, 3);
        $noUrut++;
        $char = "SP";
        return $this->newID = $char . sprintf("%04s", $noUrut);
    }

    public function getAllDetil()
    {
        $query = "SELECT * FROM tb_detil_pesan";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getAllPesanan()
    {
        $query = "SELECT * FROM tb_sp";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function detilPesan()
    {
        $query = "SELECT s.noSp, s.tglSp, s.idDivisi, d.nmDivisi, d.Lantai, d.noTelp, dt.kdJasa, dt.jmlJual, dt.hrgJual, j.nmJasa, j.lamaJasa FROM tb_sp s, tb_divisi d, tb_detil_pesan dt, tb_jasa j WHERE s.idDivisi=d.idDivisi and j.kdJasa=dt.kdJasa and s.noSp=dt.noSp group by s.noSp";
        // $query = "SELECT s.noSp, s.tglSp, s.idDivisi, d.nmDivisi, d.Alamat, d.noTelp, dt.kdJasa, dt.jmlJual, dt.hrgJual FROM tb_sp s, tb_divisi d, tb_detil_pesan dt WHERE s.idDivisi=d.idDivisi and s.noSp=dt.noSp";

        // $query = "SELECT s.noSp, s.tglSp, s.idDivisi, d.nmDivisi, d.Alamat, d.noTelp FROM tb_sp s, tb_divisi d WHERE s.idDivisi=d.idDivisi and s.noSp =s.noSp";

        $this->db->query($query);
        // $this->db->bind('idDivisi', ':idDivisi');
        // $this->db->bind('noSp', ':noSp');
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function tambahDataPesan($data)
    {
        $query = "INSERT INTO tb_detil_pesan VALUES(:noSp, :kdJasa, :jmlJual, :hrgJual);";
        $query .= "INSERT INTO tb_sp VALUES(:noSp, :idDivisi, :tglSp)";

        $this->db->query($query);

        $this->db->bind('noSp', $data['noSp']);
        $this->db->bind('kdJasa', $data['kdJasa']);
        $this->db->bind('jmlJual', $data['jmlJual']);
        $this->db->bind('hrgJual', $data['hrgJual']);
        $this->db->bind('noSp', $data['noSp']);
        $this->db->bind('idDivisi', $data['idDivisi']);
        $this->db->bind('tglSp', $data['tglPesan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}