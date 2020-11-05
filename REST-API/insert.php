<?php
require_once 'connect.php';

$absen = $_POST['absen'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nilai = $_POST['nilai'];

mysqli_query($koneksi, "insert into quiz(id,nama,kelas,nilai_hewan) values('$absen','$nama','$kelas','$nilai')");

?>