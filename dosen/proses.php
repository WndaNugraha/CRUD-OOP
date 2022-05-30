<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nipd = $_POST['nipd'];
    $nama = $_POST['nama'];
    $mata_kuliah = $_POST['mata_kuliah'];


    if ($aksi == "create") {
        $dosen->create($nipd,$nama,$mata_kuliah);
        header("location:index.php");
    } else if ($aksi == "update") {
        $dosen->update($id, $nipd,$nama,$mata_kuliah);
        header("location:index.php");
    } else if ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }
}
