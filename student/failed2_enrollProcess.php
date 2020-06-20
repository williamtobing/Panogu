<?php
    include ("../process/login/config.php");

    $idcourse = $_POST['idcourse'];
    $id_user = $_POST['id_user'];
    $coursename = $_POST['coursename'];
    $username = $_POST['username'];

    $query = "INSERT INTO `transaksi`(`idcourse`, `id_user`, `coursename`, `username`) VALUES ('".$idcourse."', '".$id_user."', '".$coursename."', '".$username."') WHERE id_user = $id_user, idcourse = $idcourse";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        # code...
        header("location: course.php");
    }
?>