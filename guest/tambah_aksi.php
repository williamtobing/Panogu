<?php
include '../process/login/config.php';
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];

mysqli_query($mysqli,"insert into guide values('','$nama','$jeniskelamin','$alamat','$usia')");
header("location:index.php");

?>
