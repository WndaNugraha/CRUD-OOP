<?php

class Database{
    public $host= "localhost", $user="root",$pass="",$db="rpl2";
    public $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            //echo "berhasil";
        }
        else{
            echo "Koneksi Database Gagal";
        }
    }
}

$db = new Database();

include 'dosen.php';
include 'mahasiswa.php';


?>