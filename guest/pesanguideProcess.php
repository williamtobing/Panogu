<?php

include ("../process/login/config.php");

//session_start();

  
/*if (isset($_POST['kirim'])) {
    if(isset($_SESSION['username'])){
      $id_user =$_SESSION['id_user'];

      $username = $_SESSION['username'];
    }*/
    $id_guide =$_GET['id_guide'];

    $tgl_pesan =$_POST['tgl_pesan'];
    $tgl_tour =$_POST['tgl_tour'];
    $daerah = $_POST['daerah'];

    //$query = "INSERT INTO pesan (id_user, tgl_pesan, tgl_tour, daerah) VALUES ('$id_user', '$tgl_pesan','$tgl_tour','$daerah')";
    //$query = "INSERT INTO pesan (id_guide, tgl_pesan, tgl_tour, daerah) VALUES ('$id_guide' ,'$tgl_pesan','$tgl_tour','$daerah')";
    $query = "INSERT INTO `pesan`(`id_guide`, `tgl_pesan`, `tgl_tour`, `daerah`) VALUES ('".$id_guide."', '".$tgl_pesan."', '".$tgl_tour."', '".$daerah."')";
    $result = mysqli_query($mysqli, $query);
    //$result2 = mysqli_query($mysqli, "SELECT * FROM guide,pesan where pesan.id_guide=".$id_guide);
    //$pesan_data=mysqli_fetch_array($result2);

    //header("location:selesai.php?id_guide=$pesan_data[id_guide]");
    header("location: selesai.php?id_guide=$id_guide");

?>