<?php
        include '../database.php';
        $mahasiswa = new mahasiswa();

        if(isset($_POST['save'])){
            $aksi           = $_POST['aksi'];
            $id             = @$_POST['id'];
            $nim            = $_POST['nim'];
            $nama           = $_POST['nama'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $id_dosen       = $_POST['id_dosen'];

                if ($aksi == "create")
                {
                    $mahasiswa->create($nim,$nama,$jenis_kelamin,$id_dosen);
                    header("location:index.php");
                }

                else if ($aksi == "update") 
                {
                    $mahasiswa->update($id, $nim, $nama, $jenis_kelamin , $id_dosen);
                    header("location:index.php");
                }

                else if ($aksi == "delete")
                {
                    $mahasiswa->delete($id);
                    header("location:index.php");
                }
        }

?>