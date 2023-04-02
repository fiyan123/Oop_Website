<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Index Dosen</title>
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
        
        <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h3>Data Dosen</h3>
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
                <div class="card-body">
                    <!-- TABLE DOSEN -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIPD</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                                include'../database.php';
                                $dosen =  new Dosen();
                                $no = 1;
                                foreach ($dosen->index() as $data){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $data['nipd'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['mata_kuliah'] ?></td>
                                <td>
                                    <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</a> ||
                                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a> ||
                                    <form action="proses.php" method="post" class="d-inline">
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="hidden" name="aksi" value="delete">
                                        <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                                }
                            ?>
                        </tbody>
                    </table>
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