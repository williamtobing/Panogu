<?php
    include ("../process/login/config.php");

    $mycoursename = $_POST['mycoursename'];
    $mydesciption = $_POST['mydesciption'];
    $iduserformycourse = $_POST['iduserformycourse'];
    //$Status = $_POST['Status'];
    
    $idrequestCourse = $_GET['idrequestCourse'];

    $query = "INSERT INTO `mycourse`(`mycoursename`, `mydesciption`, `iduserformycourse`) VALUES ('".$mycoursename."', '".$mydesciption."', '".$iduserformycourse."')";
    $result = mysqli_query($mysqli, $query);

    /*$query2 = 'UPDATE requestcourse SET Status = 1 WHERE idrequestCourse = '.$idrequestCourse;
    $result2 = mysqli_query($mysqli, $query2);*/

    /*if ($result && $result2) {
        # code...
        header("location: requestCourseControl.php");
    }*/
    header("location: requestCourseControl.php");
?>