<?php
require_once 'connect.php';

$qselect = mysqli_query($koneksi, "select * from quiz");

$daftarid = "";
$daftarnm = "";
$daftarkl = "";
$daftarnihe = "";
$daftarnitum = "";
$daftarnitot = "";
$counter = 0;
$baris = mysqli_num_rows($qselect);

while($datan = mysqli_fetch_array($qselect)){
	$id = $datan["id"];
	$nama = $datan["nama"];
	$kelas = $datan["kelas"];
	$nilaihe = $datan["nilai_hewan"];
	$nilaitum = $datan["nilai_tumbuhan"];
	$nilaitot = $datan["nilai_hewan"] + $datan["nilai_tumbuhan"];
	$nrata2 = $nilaitot / 2;
	$daftarid .= ",".$id;
	$daftarnm .= ",".$nama;
	$daftarkl .= ",".$kelas;
	$daftarnihe .= ",". $nilaihe;
	$daftarnitum .= ",". $nilaitum;
	$daftarnitot .= ",". $nrata2;
	$counter++;
}

echo "datan=".$daftarid."&datan2=".$daftarnm."&datan3=".$daftarkl."&datan4=".$daftarnihe."&datan5=".$daftarnitum."&datan6=".$daftarnitot."&totalItem=".$baris;

mysqli_free_result($qselect);
mysqli_close($koneksi);
?>