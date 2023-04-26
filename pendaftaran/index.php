    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Index Pendaftaran</title>
        <style>
            body{
                font-family : times new roman;
                background-image : url(https://wallpapercave.com/wp/wp4947022.jpg);
                color : white;
            }
            td{
                color : white;
            }
            .card-body{
                background-image : url(https://samu.space/assets/code%20rain.gif);
                background-repeat : no repeat;
                background-size : cover;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://smkassalaambandung.sch.id/img/logo-custom.png" width="90" height="70" alt="">
        </a>
            <a class="navbar-brand" href="#">Ian1965_</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/Tugas_Uas_Sofyan/home.php">Utama<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/jurusan/index.php">Jurusan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/pendaftaran/index.php">Pendaftaran</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Oop_Website/pembayaran/index.php">Pembayaran</a>
                </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Telusuri" aria-label="Search">
                <button class="btn btn-dark my-2 my-sm-0" type="submit">Telusuri</button>
            </form>
            <br>
        </nav>
        <!-- AKHIR -->
            
            

            <br><br><center><h2>DATA PENDAFTARAN</h2></center>
            <!-- CARDs -->
            <div class="container" style="width : 190rem">
            <div class="card"  style="margin : 0px -160.10px">
                <div class="card-header" style="background-color : black">
                    <h3>Data Pendaftaran</h3>
                    <center><a href="create.php" class="btn btn-primary">Create Data</a></center>
                </div>
                <div class="card-body" style="width : 90rem">
                    <!-- TABLE PENDAFTARAN -->
                    <table class="table table-striped">

                        <thead class="table-primary">
                            <tr class="table-success" >
                            <th scope="col">NO</th>
                            <th scope="col">KODE PENDAFTARAN</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TANGGAL LAHIR</th>
                            <th scope="col">TEMPAT LAHIR</th>
                            <th scope="col">JENIS KELAMIN</th>
                            <th scope="col">AGAMA</th>
                            <th scope="col">JURUSAN</th>
                            <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        
                        <tbody>

                            <?php
                                include'../database_uas.php';
                                $pendaftaran =  new pendaftaran();
                                $no = 1;
                                foreach ($pendaftaran->index() as $data){
                            ?>

                            <tr>
                            <th scope="row" style="color:white"><?php echo $no++ ?></th>
                            <td><?php echo $data['kode_pendaftaran'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['tanggal_lahir'] ?></td>
                            <td><?php echo $data['tempat_lahir'] ?></td>
                            <td><?php echo $data['jenis_kelamin'] ?></td>
                            <td><?php echo $data['agama'] ?></td>
                            <td><?php echo $data['nama_jurusan'] ?></td>
                            
                            <td>
                                <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-warning">Show</a> ||
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-success">Edit</a> ||
                                <form action="proses.php" method="post" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="hidden" name="aksi" value="delete">
                                <button type="submit" class="btn btn-outline-danger" class="d-inline" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
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
                    <!-- /TABLE jurusan -->
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