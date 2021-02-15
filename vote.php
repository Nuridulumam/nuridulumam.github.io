<?php
include "koneksi.php";
session_start();
$namalengkap = $_SESSION['nama_lengkap'];
$email = $_SESSION['email'];
$id_pemilih = $_SESSION['id_pemilih'];
if ($_POST['KAHIM-WAKAHIM 1']) {
    $pilih = "NAMA CALON KAHIM 1";
} 
else if ($_POST['KAHIM-WAKAHIM 2']) {
    $pilih = "Nama CALON KAHIM 2";
}
$pilihan = $pilih;

// query simpan
mysqli_query($koneksi, "INSERT INTO tb_vote VALUE('$id_pemilih', '$email', '$namalengkap','$pilihan')");

session_destroy();
header("location:index.html");
