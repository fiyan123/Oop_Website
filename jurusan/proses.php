<?php
        include '../database_uas.php';
        $jur = new jurusan();

        if(isset($_POST['save'])){
            $aksi         = $_POST['aksi'];
            $id           = @$_POST['id'];
            $kode_jurusan = $_POST['kode_jurusan'];
            $jurusan      = $_POST['jurusan'];

                if ($aksi == "create")
                {
                    $jur->create($kode_jurusan,$jurusan);
                    header("location:index.php");
                }

                else if ($aksi == "update") 
                {
                    $jur->update($id, $kode_jurusan, $jurusan);
                    header("location:index.php");
                }

                else if ($aksi == "delete")
                {
                    $jur->delete($id);
                    header("location:index.php");
                }
        }

?>