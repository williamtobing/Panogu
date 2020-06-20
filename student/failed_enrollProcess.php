<?php
    include("../process/login/config.php");
    $id_user = $_POST['id_user'];
    $idcourse = $_POST['idcourse'];

    $query = "INSERT INTO `transaksi`(`id_user`, `idcourse`) VALUES('".$id_user."', '".$idcourse."')";
    $result = mysqli_query($mysqli, $query);
    header("course.php");
?>