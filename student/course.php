<?php
    include ("header.php");
    include ("../process/login/config.php");
?>

<div class="bghead container-fluid">
    <div class="bg-head container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">
    
</h1>



<!-- Blog Post -->


<!-- Blog Post -->


<!-- Blog Post -->


<!-- Blog Post -->


<!-- Pagination -->


    </div>

    </div>
        </div>
<!-- /.container -->

        <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
            <div class="panel panel-heading">

        <h3>YOUR COURSE</h3><hr class="pg-titl-bdr-bta"></hr>
        <a href="requestCourse.php"><p class="text-center">Request Course</p></a>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Description</th>
                  <!--<th>Action</th>-->
                </tr>
              </thead>

              <tbody>

              <?php

                $result = mysqli_query($mysqli, "SELECT * FROM mycourse ORDER BY mycoursename ASC");

                while($mycourse_data = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$mycourse_data['mycoursename']."</td>";
                  echo "<td>".$mycourse_data['mydesciption']."</td>";
                  //echo "<td><a href='enrollProcess.php?id_user=$course_data[idcourse]'>Request</a></td>";
                  //echo "<td><a href='request.php?idcourse=$course_data[idcourse]'>Request</a></td>";
                  echo "<tr>";
                }
              ?>

                </tbody>
              </table>
            <!--<table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>Course</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

              <?php

                /*$result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY coursename ASC");

                while($course_data = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$course_data['coursename']."</td>";
                  echo "<td>".$course_data['desciption']."</td>";
                  //echo "<td><a href='enrollProcess.php?id_user=$course_data[idcourse]'>Request</a></td>";
                  //echo "<td><a href='request.php?idcourse=$course_data[idcourse]&id_user=$course_data[id_user]'>Request</a></td>";
                  echo "<td><a href='request.php?idcourse=$course_data[idcourse]'>Request</a></td>";
                  echo "<tr>";
                }*/
              ?>

                </tbody>
              </table>-->

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="..,vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/creative.min.js"></script>

    </body>