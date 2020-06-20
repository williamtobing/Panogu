<?php 

  include ("header2.php");
  $id_guide =$_GET['id_guide'];

  
//include ("../process/login/config.php");

//session_start();

  
/*if(isset($_POST['kirim'])) {
    /*if(isset($_SESSION['username'])){
      $id_user =$_SESSION['id_user'];

      $username = $_SESSION['username'];
    }*/
    /*$id_guide = $_GET['id_guide'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $tgl_tour = $_POST['tgl_tour'];
    $daerah = $_POST['daerah'];

    $query = "INSERT INTO `pesan`(`id_guide`, `tgl_pesan`, `tgl_tour`, `daerah`) VALUES ('".$id_guide."', '".$tgl_pesan."', '".$tgl_tour."', '".$daerah."')";
    //$query = "INSERT INTO pesan (id_user, id_guide, tgl_pesan, tgl_tour, daerah) VALUES ('$id_user','$id_guide','$tgl_pesan','$tgl_tour','$daerah')";
    //$query = "INSERT INTO pesan (id_guide) VALUES ('$id_guide')";
    
    $result = mysqli_query($mysqli, $query);
    //$result2 = mysqli_query($mysqli, "SELECT * FROM guide,pesan where pesan.id_guide=".$id_guide);
    //$pesan_data=mysqli_fetch_array($result2);
    if ($result) {
      # code...
      //header("location:selesai.php");
      header("location:selesai.php?id_guide=<?php echo($id_guide) ?>");
    }
    //header("location:selesai.php?id_guide=$pesan_data[id_guide]");
    
  }*/
  
  
?>

    
<!--<div class="container" style="background-color: skyblue; padding: 40px; padding-top: 50px; padding-bottom: 350px">-->

  <!--<h1 class="mt-4 mb-3">Pesan Guide Sekarang Juga</h1>
  <form action="#" method="post">
    <table border="0" width="50%">
       <lable>Tanggal Keberangkatan</lable>
                        <div class="input-control text" data-role="input-control">
              <input type="text" name="tgl_pesan">
                        
                        </div>
                        <lable>Tanggal Tanggal Kepulangan</lable>
                        <div class="input-control text" data-role="input-control">
              <input type="text" name="tgl_tour">
                        
                        </div>
                        <lable>Tujuan</lable>
                        <div class="input-control text" data-role="input-control">
              <input type="text" name="status">
        <td colspan="3" align="right">
   
          <input type="Submit" value="Kirim" name="kirim" class="button button2">
        </td>
      </tr>
    </table>
  </form>-->


<div class="container" align="center">
    <div class="container, justify" style="margin-top: 30px;">
        <div class="box col-md-6 col-sm-offset-3">
            <div class="panel panel-default">
                <form action="pesanguideProcess.php?id_guide=<?php echo($id_guide) ?>" method="post">
                <!--<form action="pesanguide.php" method="post">-->
                    <hr>
                    <legend style="text-transform: uppercase; color: #212529"><b>Set Your Plan</b></legend>
                    <br>

                    <table border=0>
                      <tr>
                        <td>Start Date</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td width="500">
                          <div class="input-group">
                            <input type="date" name="tgl_pesan" required class="form-control" />
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td><br></td>
                      </tr>

                      <tr>
                        <td>End Date</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="input-group">
                            <input type="date" name="tgl_tour" required class="form-control" />
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td><br></td>
                      </tr>

                      <tr>
                        <td>Destination</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <div class="input-group">
                            <input type="text" name="daerah" required class="form-control" />
                          </div>
                        </td>
                      </tr>
                    </table>

                    <!-- br -->
                    <br>
                    <!--<div class="form-group">
                        <input type="hidden" name="id_guide" value=<?php //echo $_GET['id_guide'];?>>
                    </div>-->

                    <div class="form-group">
                      <!--<a href="selesai.php">-->
                        <input type="submit" name="kirim" value="Request" class="btn btn-success btn-block" />
                        <!--</a>-->
                    </div>
                    <div class="form-group">
                        <a href="index.php">
                            <input name="cancel" value="CANCEL" class="btn btn-danger btn-block" />
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</div>



      
