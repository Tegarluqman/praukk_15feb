<?php
include("koneksi.php");

$id = $_GET ['id_penyewa'];

mysqli_query($db,"DELETE FROM tb_penyewa where id_penyewa='$id'");
mysqli_query($db,"DELETE FROM tb_dvd where id_dvd='$id'");


header("location:tampil.php?status-sukses");
?>