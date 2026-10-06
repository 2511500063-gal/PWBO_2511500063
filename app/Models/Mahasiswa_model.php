<?php
class Mahasiswa_model {
    private $dbh; //database handler
    private $stmt; //statement yang digunakan untuk menyimpan query

    public function __construct()
    {
        //datasource name
        $dsn ='mysql:host=localhost;dbname=pwbo-2511500063';

        try{
            $this->dbh = new PDO($dsn,  'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}