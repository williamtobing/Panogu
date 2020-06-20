<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$namaguide = $_POST['namaguide'];
$jeniskelamin = $_POST['jeniskelamin'];
$usia= $_POST['usia'];
 
mysqli_query($koneksi,"update guide set nama ='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat,usia='$usia'");
 

header("location:index.php?pesan=update");
 
?>