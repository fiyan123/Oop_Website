<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Tambah Jurusan</title>
    <style>
        body{
            font-family : times new roman;
            background-image : url(https://wallpapercave.com/wp/wp4947022.jpg);
            color : white;
        }
        label{
            color : white;
        }
        .card-body{
            background-image : url(https://media.istockphoto.com/photos/abstract-3d-background-picture-id1182956228?b=1&k=20&m=1182956228&s=170667a&w=0&h=0Us8jpDfFBCdmstUVXzJsmxsU0iioJCX05r1NFq_NtQ=);
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
                <a class="nav-link" href="/ian/Tugas_Uas_Sofyan/home.php">Utama<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/ian/jurusan/index.php">Jurusan</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/ian/pendaftaran/index.php">Pendaftaran</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/ian/pembayaran/index.php">Pembayaran</a>
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
<br><br>
            <center><h2>TAMBAH DATA JURUSAN</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card" style="background-color : black">
            <div class="card-header">
                Tambah Jurusan
            </div>
            <div class="card-body">
                
            <form action="../jurusan/proses.php" method="post">
                <input type="hidden" name="aksi" value="create">
                    <div class="form-group">
                        <label for="exampleInputEmail1">KODE JURUSAN</label> 
                        <input type="text" class="form-control" name="kode_jurusan" >
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">JURUSAN</label>
                        <input type="text" class="form-control" name="jurusan">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
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