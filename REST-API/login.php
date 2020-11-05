<?php
require_once 'connect.php';

$username = $_POST['username'];
$passwords = $_POST['passwords'];

$login = mysqli_query($koneksi, "select * from users where username='$username' and password='$passwords'");

$baris = mysqli_num_rows($login);

$cekakses = mysqli_fetch_array($login);
$cekuser = $cekakses['username'];

echo "hasil=".$baris."&cekuser=".$cekuser;

?>