<?php
    include("../process/login/config.php");
 
    // Fetch all users data from database
    $result = mysqli_query($mysqli, "SELECT * FROM pesan ORDER BY tgl_pesan ASC");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panogu</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/creative.css" rel="stylesheet">

</head>

    <body id="bghead page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg bg-primary" id="mainNav">
            <div class="container">
                <a class="navbar-panogu js-scroll-trigger" href="index.php">Panogu</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="pesananGuide.php">CALLER</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="../index.php">LOGOUT</a>
                            

                            <?php
                                    //echo '<a class="nav-link dropdown-item" href="../index.php">LOGOUT</a>';
                                ?>

                            
                        </li>

                    </ul>
                </div>
            </div>
        </nav>



        <div style="height:50px;"></div>
  <div class="well" style="margin:auto; padding:auto; width:80%;">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
            <div class="panel panel-heading">
  <span class="title"><center><strong>Daftar Panggilan Guest</strong></center></span> 
    
    <div style="height:50px;"></div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
         <th>ID User</th>  <th>ID Guide</th> <th>Start Date</th> <th>End Date</th> <th>Destinasi</th>
      </thead>
      <tbody>
      <?php
        
 
          while($user_data = mysqli_fetch_array($result)) { 
            //$user_data['role']
            echo "<tr>";
            echo "<td>".$user_data['id_user']."</td>";
            echo "<td>".$user_data['id_guide']."</td>";
            echo "<td>".$user_data['tgl_pesan']."</td>";
            echo "<td>".$user_data['tgl_tour']."</td>";
            echo "<td>".$user_data['daerah']."</td>";
              
              ?>

          <?php
        }
 
      ?>
      </tbody>
    </table>
  </div>
  
</div>
</body>
</html>