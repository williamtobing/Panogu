<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from guide where id='$id'");
 
header("location:index.php");
?>