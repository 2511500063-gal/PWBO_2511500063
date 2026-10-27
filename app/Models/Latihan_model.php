<?php
class Latihan_model {
    private $table = 'latihan'; 
    private $db; 

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLatihan()
    {
       $this->db->query('SELECT * FROM '.$this->table);
       return $this->db->resultSet();
    }

    public function getLatihanById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataLatihan($data)
    {
        $query = "INSERT INTO $this->table(nama, user, rank, wr) VALUES (:nama, :user, :rank, :wr)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('user', $data['user']);
        $this->db->bind('rank', $data['rank']);
        $this->db->bind('wr', $data['wr']);

        $this->db->execute();

        return $this->db->rowCount();
    }

public function hapusDataLatihan($id)
{
    $query = "DELETE FROM $this->table WHERE id= :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
}
}