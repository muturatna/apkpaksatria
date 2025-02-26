<?php 
    //print_r($data);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h2 class="text-center">Detail Pelanggan</h2>
    <div class="card p-4 mx-auto" style="max-width: 400px;">
        <img src="./assets/batman.jpg" class="Foto Pelanggan img-thumbnail mx-auto d-block" width="100">
        <p><strong>ID Pelanggan:</strong> <?= $data['pelangganid'] ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= $data['namapelanggan'] ?>
        <p><strong>No Telepon:</strong><?= $data['nomortelepon'] ?></p>
        <p><strong>Alamat:</strong><?= $data['alamat'] ?></p>
        <a href="list.php" class="btn btn-secondary">Kembali</a>
    </div>

</body>

</html>