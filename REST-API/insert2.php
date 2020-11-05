<?php
require_once 'connect.php';

$absentt = $_POST['absentt'];
$nilaitt = $_POST['nilaitt'];

mysqli_query($koneksi, "update quiz set nilai_tumbuhan='$nilaitt' where id='$absentt'");

?>