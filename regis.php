<?php
include "koneksi.php";
$namalengkap = $_POST['inputNama'];
$username = $_POST['inputUsername'];
$email = $_POST['inputEmail'];
$nim = $_POST['inputNIM'];
$kelas = $_POST['inputKelas'];
$absen = $_POST['inputAbsen'];
// enkripsi dulu...
$password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);

// KODE-id_pemilih
$kode = substr(str_shuffle("1234567890"), 3, 3);
$id_pemilih = "VTI$kode"; 
// query simpan
mysqli_query($koneksi, "INSERT INTO tb_user VALUE('', '$id_pemilih', '$nim', '$email','$namalengkap', '$username', '$password', '$kelas', '$absen')");

header("location:login.php");
