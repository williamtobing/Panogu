<?php
    // include database connection file
    include ("../process/login/config.php");

    $iduserforrequestcourse = $_POST['iduserforrequestcourse'];
    $idcourseforrequestcourse = $_POST['idcourseforrequestcourse'];
    $reqcoursename = $_POST['reqcoursename'];
    $usernameforrequestCourse = $_POST['usernameforrequestCourse'];

    //$idcourse = $_GET['idcourse'];
    //$id_user = $_GET['id_user'];
    
    //$iduser = $_POST['iduser'];
    //$reqname = $_POST['reqname'];

    $query = "INSERT INTO `requestCourse`(`iduserforrequestcourse`, `idcourseforrequestcourse`, `reqcoursename`, `usernameforrequestCourse`) VALUES ('".$iduserforrequestcourse."', '".$idcourseforrequestcourse."', '".$reqcoursename."', '".$usernameforrequestCourse."')";
    //$query = "INSERT INTO " . $this->table_name. " SET home_id=:home_id, account_id=:account_id";
    //$query = "INSERT INTO `transaksi` SET idcourse=:idcourse, id_user=:iduser";
    //$query = "INSERT INTO `transaksi`(`idcourse`) VALUES ('".$idcourse."')";
    $result = mysqli_query($mysqli, $query);
    //header("location: course.php");

    if ($result) {
        # code...
        header("location: course.php");
    }

?>