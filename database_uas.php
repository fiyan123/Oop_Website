<?php
class database{
    public $host = "localhost", $user ="root", $pass = "" ,$db="tugas_uas";
    public $koneksi;

    public function __construct(){

        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db

        );
        if($this->koneksi){
            //echo "berhasil";
        }
        else{
            echo"koneksi database gagal";
        }

    }
}
$db = new database();
include 'jurusan.php';
include 'pendaftaran.php';
include 'pembayaran.php';
?>