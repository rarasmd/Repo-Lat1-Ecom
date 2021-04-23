<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Produk | Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h4 class="text-center">Kelola Kos</h4>
        <hr>
        <div class="col-lg-6">
            <h5>Input Kos</h5>
            <form action="<?=base_url('kos/admin/uploadKos')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
               
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="pemilik">Pemilik Kos</label>
                    <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                </div>
                <div class="form-group">
                <label for="gambar"></label>
                <input type="file" id="gambar" name="gambar">
                </div>
               
                <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah</button>
            </form>
        </div>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Kos</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($list as $a):
                ?>
                    <tr>
                        <th><?= $a['nama']; ?></th>
                        <td><?= $a['alamat']; ?></td>
                        <td><?= $a['pemilik']; ?></td>
                        <td><img src="<?=base_url('assets/gambarkos/') .$a['gambar'] ?>" class="img-fluid" width="100px" alt=""></td>
                        <td><a href="#" class="badge badge-danger">Delete</a></td>
                    </tr>
                <?php
                endforeach; 
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>