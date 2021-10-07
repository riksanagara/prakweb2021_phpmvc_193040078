<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //        "nama" => "Riksa Kusumah Nagara",
    //        "nrp" => "193040078",
    //        "email" => "riksa@gmail.com",
    //        "jurusan" => "Teknik Informatika" 
    //     ],
    //     [
    //         "nama" => "Jagaddhita Arya Koswara",
    //         "nrp" => "193040098",
    //         "email" => "arya@yahoo.com",
    //         "jurusan" => "Teknik Pangan" 
    //      ],
    //      [
    //         "nama" => "Ardan Herdiansyah",
    //         "nrp" => "193040105",
    //         "email" => "ardan@ymail.com",
    //         "jurusan" => "Teknik Industri" 
    //      ]
    // ];

    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return  $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}