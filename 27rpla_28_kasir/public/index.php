<?php 
include "../app/controllers/PelangganController.php";
$controllers = new PelangganController();

if(isset($_GET['page'])){
    $halaman = $_GET['page'];
}else{
    $halaman = 'list';
}

if($halaman == 'list'){
    $controllers->getList();
}
elseif($halaman == 'detail' && isset($_GET['id'])){
    $id = $_GET['id'];
    $controllers->getDetail($id);
}
elseif($halaman == 'delete' && isset($_GET['id'])){
    $id = $_GET['id'];
    $controllers->delete($id);
}
elseif($halaman == 'tambah'){
    $controllers->tambah();

}
elseif($halaman == 'simpan' && isset($_POST['sbt_simpan'])){
    $controllers->postTambah(); 
}
else{
    $controllers->getList();
}
?>