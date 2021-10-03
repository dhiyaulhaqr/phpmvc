<?php

class Mahasiswa_model {
    // database handler
    // statement
    private $dbh; 
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch ( PDOException $e) {
            die($e->getMessage());
        }
    }
    
    // private $mhs =
    // [
    //     [
    //         "nama" => "Dhiya Ulhaq R",
    //         "nrp" => "193040095",
    //         "email" => "13dhiyaulhaq@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "ravenya",
    //         "nrp" => "193040096",
    //         "email" => "ravenya@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "jungkook",
    //         "nrp" => "193040097",
    //         "email" => "jungkook@gmail.com",
    //         "jurusan" => "Teknik Kebumian"

    //     ]
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}