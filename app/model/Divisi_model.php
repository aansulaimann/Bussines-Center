<?php

class Divisi_model {
    private $db;
    private $idDivisi, $newID, $hasil, $kode, $noUrut, $char;
    // private $table = 'tb_divisi';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function autonumber()
    {
        $query = "SELECT max(idDivisi) as id FROM tb_divisi";

        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();    
        $kode = $hasil['id'];
        $noUrut = (int) substr($kode, 2, 2);
        $noUrut++;
        $char = "D";
        return $this->newID = $char . sprintf("%03s", $noUrut);
    }


    public function getDivisiById($idDivisi)
    {
        $query = "SELECT * FROM tb_divisi WHERE idDivisi=:idDivisi";
        $this->db->query($query);
        $this->db->bind('idDivisi', $idDivisi);

        $this->db->execute();
        return $this->db->single();
    }

    public function getAllDivisi()
    {
        $query = "SELECT * FROM tb_divisi";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function tambahDataDivisi($data)
    {
        $query = "INSERT INTO tb_divisi VALUES(:idDivisi, :nmDivisi, :Lantai, :noTelp)";

        $this->db->query($query);

        $this->db->bind('idDivisi', $data['idDivisi']);
        $this->db->bind('nmDivisi', $data['nmDivisi']);
        $this->db->bind('Lantai', $data['Lantai']);
        $this->db->bind('noTelp', $data['noTelp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataDivisi($data)
    {
        $query = "UPDATE tb_divisi SET 
                    nmDivisi = :nmDivisi, 
                    Lantai = :Lantai, 
                    noTelp = :noTelp 
                WHERE idDivisi = :idDivisi";

        $this->db->query($query);

        $this->db->bind('nmDivisi', $data['nmDivisi']);
        $this->db->bind('Lantai', $data['Lantai']);
        $this->db->bind('noTelp', $data['noTelp']);
        $this->db->bind('idDivisi', $data['idDivisi']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataDivisi($idDivisi)
    {
        $query = "DELETE FROM tb_divisi WHERE idDivisi = :idDivisi";

        $this->db->query($query);
        $this->db->bind('idDivisi', $idDivisi);

        $this->db->execute();
        return $this->db->rowCount();
    }
}