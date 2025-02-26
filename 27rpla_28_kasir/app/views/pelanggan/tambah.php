<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Tambah Pelanggan</h2>
    <form action="index.php?page=simpan" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">ID Pelanggan</label>
            <input type="text" "id" name="txt_id" required class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" "nama" name="txt_nama" required class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">No Telepon</label>
            <input type="text" "telepon" name="txt_telp" required class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" "foto" name="fl_foto" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea "alamat" name="txt_alamat" required class="form-control"></textarea>
        </div>
        <button type="submit" name="sbt_simpan"class="btn btn-success">Simpan</button>
        <a href="list.php" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>