<?php 
    //print_r($data);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2 class="mb-4">Daftar Pelanggan</h2>
    <a href="index.php?page=tambah" class="btn btn-primary mb-3">Tambah Pelanggan</a>

    <table class="table table-bordered">
        <thead class="table-dark">                 
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php foreach($data as $baris):?>
            <tr>
                <td><?= $baris ['pelangganid']?></td>
                <td><?= $baris ['namapelanggan']?></td>
                <td><?= $baris ['nomortelepon']?></td>
                <td><img src="./assets/batman.jpg" alt="Foto Pelanggan" width="200"></td>
                <td>
                    <a href="index.php?page=detail&id=<?= $baris['pelangganid'] ?>" class="btn btn-warning btn-sm">Detail</a>
                    <a href="edit.php?page=delete&id=edit.php?id=1" class="btn btn-success btn-sm">Edit</a>
                    <a href="index.php?page=delete&id=<?= $baris['pelangganid'] ?>" class="btn btn-secondary btn-sm">Hapus</a>
                </td>
            </tr>
                <?php 
                endforeach;
                ?>
            
        </tbody>
    </table>

</body>
</html>