<?php
include "../config/Database.php";
class Pelanggan{
    private $tabel = "pelanggan";
    private $dbkoneksi;

    public function __construct(){
        $this->dbkoneksi = new Database();
        $this->dbkoneksi = $this->dbkoneksi->sambungkan();
    }

    //method untuk ambil semua data pelanggan
    public function ambilSemua(){
        $sql = "SELECT * FROM $this->tabel";//siapkan perintah sql yang mau dijalankan
        $query = $this->dbkoneksi->prepare($sql);//siapin query nya
        $query->execute();//Jalanin query yang  udah disiapin 
        $hasil = $query->fetchAll(PDO::FETCH_ASSOC);//ngambil semua data hasil query
        return $hasil;//ngebalikin hasilnya
    }
    //fungsi method nya apa
    public function ambilData($filter){
        $sql = "SELECT * FROM  $this->tabel WHERE pelangganid='$filter'";//komentari
        $query = $this->dbkoneksi->prepare($sql);//komentari
        $query->execute();
        $hasil = $query->fetch(PDO::FETCH_ASSOC);
        return $hasil;
    }

    public function hapusData($filter){
        $sql = "DELETE FROM $this->tabel WHERE pelangganid='$filter'";
        $query = $this->dbkoneksi->prepare($sql);
        $query->execute();
        return $query;
    }
    public function tambahData($data){
        $sql = "INSERT INTO $this->tabel (pelangganid, namapelanggan, nomortelepon, alamat) VALUES (:id, :nama, :notelp, :alamat)";
        $query = $this->dbkoneksi->prepare($sql);
        $query->execute($data);
        return $query;
        
    }
}
?>