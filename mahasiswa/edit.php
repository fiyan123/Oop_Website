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

    <div class="container mt-5">
        <div class="card">
            <div class="card-header" align="center">
                Edit Mahasiswa
            </div>
            <div class="card-body">

            <?php
                include '../database.php';
                $mahasiswa = new mahasiswa();
                foreach ($mahasiswa->edit($_GET['id']) as $data) {

                    $id             = $data['id'];
                    $nim            = $data['nim'];
                    $nama           = $data['nama'];
                    $jenis_kelamin  = $data['jenis_kelamin'];
                    $id_dosen       = $data['id_dosen'];
                }
            ?>
            
            <form action="../mahasiswa/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM</label> 
                        <input type="text" class="form-control" name="nim" value="<?php echo $nim; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NAMA</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">JENIS KELAMIN</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">DATA DOSEN</label>

                        <?php
                            $dosen = new dosen();
                        ?>
                        <!-- DROPDOWN DARI DATA DOSEN -->
                        <select class="form-control" name="id_dosen" value="<?php echo $id_dosen ?>">
                    
                            <?php foreach($dosen->index() as $data) :?>
                                <option value="<?= $data['id']?>"> <?= $data['nama']?></option>
                            <?php endforeach ?>

                        </select>

                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>