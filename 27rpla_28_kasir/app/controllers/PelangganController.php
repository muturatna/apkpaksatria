<?php
include "../app/models/Pelanggan.php";
class PelangganController{
    private $model;//atribut 1

    //method untuk otomatis pas class dibikin 
    public function __construct(){
        $this->model = new Pelanggan();//membuat objek model didalam class pelanggan 
    }

    //method buat ngambil data pelanggan terus nampilin dihalaman daftar pelanggan 
    public function getList(){
        $data = $this->model->ambilSemua();//manggil method dari model buat ngambil semua data pelangan 
        include "../app/views/pelanggan/list.php";//menampilkan data ditampilan list pelanggan
    }

    public function getDetail($id){
        $data = $this->model->ambilData($id);
        include "../app/views/pelanggan/detail.php";
    }

    public function delete($id){
        $query = $this->model->hapusData($id);
        $this->getList();
    }
    //menampilkan halaman form tambah
    public function tambah(){
        //nantinya akan panggil model jika id ingin otomatis.

        include "../app/views/pelanggan/tambah.php";

    }

    public function postTambah(){
        $data = [
            'id' => $_POST['txt_id'],
            'nama' => $_POST['txt_nama'],
            'notelp' => $_POST['txt_telp'],
            'alamat' => $_POST['txt_alamat']
        ];

        $this->model->tambahData($data);
        $this->getList();
    }

    

}
?>