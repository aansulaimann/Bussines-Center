<?php

class Jasa_model {
    private $db;
    private $tb = 'tb_jasa';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function autonumber()
    {
        $query = "SELECT max(kdJasa) as id FROM tb_jasa";

        $this->db->query($query);
        $this->db->execute();

        $hasil = $this->db->single();    
        $kode = $hasil['id'];
        $noUrut = (int) substr($kode, 3, 3);
        $noUrut++;
        $char = "JS";
        return $this->newID = $char . sprintf("%04s", $noUrut);
    }

    public function getAllDataJasa()
    {
        $query = "SELECT * FROM tb_jasa";

        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function tambahDataJasa($data)
    {
        $query = "INSERT INTO tb_jasa VALUES(:kdJasa, :nmJasa, :lamaJasa, :hrgJasa)";
        $this->db->query($query);
        $this->db->bind('kdJasa', $data['kdJasa']);
        $this->db->bind('nmJasa', $data['nmJasa']);
        $this->db->bind('lamaJasa', $data['lamaJasa']);
        $this->db->bind('hrgJasa', $data['hrgJasa']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataJasa($data)
    {
        $query = "UPDATE tb_jasa SET 
                    nmJasa = :nmJasa, 
                    lamaJasa = :lamaJasa, 
                    hrgJasa = :hrgJasa 
                WHERE kdJasa = :kdJasa";

        $this->db->query($query);
        $this->db->bind('nmJasa', $data['nmJasa']);
        $this->db->bind('lamaJasa', $data['lamaJasa']);
        $this->db->bind('hrgJasa', $data['hrgJasa']);
        $this->db->bind('kdJasa', $data['kdJasa']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataJasa($kdJasa)
    {
        $query = "DELETE FROM tb_jasa WHERE kdJasa=:kdJasa";

        $this->db->query($query);
        $this->db->bind('kdJasa', $kdJasa);

        $this->db->execute();
        return $this->db->rowCount();
    }
}