<?php
    include ("header.php");
    include ("../process/login/config.php");
?>

 </div>

</div>
    </div>
<!-- /.container -->

<br>

    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="about">
        <div class="panel panel-heading">
            <h3>REQUEST COURSE</h3><hr class="pg-titl-bdr-bta"></hr>
            
        </div>
        <table class="table table-striped table-bordered table-hover">


          <thead>
            <tr>
              <th>Req ID</th>
              <th>Student ID</th>
              <th>Student Name</th>
              <th>Course ID</th>
              <th>Course Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

          <?php

            $result = mysqli_query($mysqli, "SELECT * FROM requestcourse ORDER BY idrequestCourse ASC");

            while($course_data = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$course_data['idrequestCourse']."</td>";
              echo "<td>".$course_data['id_user']."</td>";
              echo "<td>".$course_data['usernameforrequestCourse']."</td>";
              echo "<td>".$course_data['idcourse']."</td>";
              echo "<td>".$course_data['reqcoursename']."</td>";
              //$Status = $course_data['Status'];
              if ($course_data['Status'] == 1) {
                # code...
                echo "<td>ACCEPTED</td>";
              }else {
                # code...
                echo "<td>PENDING</td>";
              }
              echo "<td><a href='respondCourse.php?idrequestCourse=$course_data[idrequestCourse]'>Respond</a></td>";
              echo "<tr>";
            }
          ?>

            </tbody>
            </table>

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