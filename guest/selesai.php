<?php session_start();

include("../process/login/config.php");
include("header2.php");

if(isset($_SESSION['username'])){
$id_user =$_SESSION['id_user'];


$username = $_SESSION['username'];

}
$id_guide =$_GET['id_guide'];
?>
    
<!--<form action="#" style="width: 800px"class="posisi";>
<fieldset class="h"/>
<table style="width: 900px;">-->

<!--<div class="container" style="background-color: transparent; padding: 40px; padding-top: 100px; padding-bottom: 300px">-->
  <br><br><br><br><br><br>
  <center>

    <h1>Terima Kasih</h1>
    <h2>Pesanan Anda telah diterima.</h2>

    <h2>Silahkan hubungi Guide </h2> 
    <?php
    //$result=mysqli_query($mysqli, "SELECT * FROM guide,user,pesan where pesan.id_user=user.id_user AND pesan.id_guide=guide.id_guide");
    $result = mysqli_query($mysqli, "SELECT * FROM guide WHERE id_guide=".$id_guide);
    ?>
      <?php 
        $row=mysqli_fetch_array($result)
      ?>
      <h2><?php echo $row['telepon']; ?></h2>
   

   

      <a href="index.php"><h3>OK</h3></a>
  </center>
<!--</div>-->
