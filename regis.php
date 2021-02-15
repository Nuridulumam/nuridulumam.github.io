<?php
include "koneksi.php";
$namadepan = $_POST['inputfname'];
$namabelakang = $_POST['inputlname'];
$email = $_POST['inputEmail'];
$nim = $_POST['inputNIM'];
$kelas = $_POST['inputKelas'];
$absen = $_POST['inputAbsen'];
// enkripsi dulu...
$password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);

// query simpan
mysqli_query($koneksi, "INSERT INTO user VALUES ('','$nim','$email','$namadepan','$namabelakang','$password','$kelas','$absen')");

header("location:login.php");
