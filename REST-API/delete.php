<?php
require_once 'connect.php';

$hapusdata = $_POST["hapusdata"];
mysqli_query($koneksi, "delete from quiz where id='$hapusdata'");

?>