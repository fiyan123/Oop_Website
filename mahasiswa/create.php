<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/dosen">Dosen <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/mahasiswa">Mahasiswa <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CARDs -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" align="center">
                Tambah Mahasiswa
            </div>
            <div class="card-body">  
            <form action="../mahasiswa/proses.php" method="post">
                <input type="hidden" name="aksi" value="create">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM</label> 
                        <input type="text" class="form-control" name="nim" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NAMA</label>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">JENIS KELAMIN</label>
                        <input type="text" class="form-control" name="jenis_kelamin">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Dosen</label>
                        <select name ="id_dosen" class="form-control">
                            <!-- menampilkan data nama dari database dosen -->
                            <?php
                                include'../database.php';
                                $dosen =  new Dosen();
                                $no = 1;
                                foreach ($dosen->index() as $data){
                            ?>

                                <option value="<?php echo $data['id'] ?>"> <?php echo $data['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" name="save" class="btn btn-dark">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
       
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>