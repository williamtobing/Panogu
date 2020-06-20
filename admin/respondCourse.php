<?php
    include ("header.php");
    include ("../process/login/config.php");
    $idrequestCourse = $_GET['idrequestCourse'];
?>

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
        </tr>
      </thead>

      <tbody>

      <?php
        $quer = "SELECT * FROM requestcourse WHERE idrequestCourse = " . $idrequestCourse . " ORDER BY idrequestCourse ASC";
        $result = mysqli_query($mysqli, $quer);

        $course_data = mysqli_fetch_array($result);
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
          echo "<tr>";
      ?>

        </tbody>
        </table>

        

<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
            <div class="panel panel-heading">

        <!--<h3>YOUR COURSE</h3><hr class="pg-titl-bdr-bta"></hr>-->
        All Course
        <table class="table table-striped table-bordered table-hover">
              <thead style="text-align: center">
                <tr>
                  <th>Course ID</th>
                  <th>Course</th>
                  <th>Description</th>
                  <!--<th>Action</th>-->
                </tr>
              </thead>

              <tbody>

              <?php

                $result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY idcourse ASC");
                
                while($course_data = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td style='text-align: right'>".$course_data['idcourse']."</td>";
                  echo "<td>".$course_data['coursename']."</td>";
                  echo "<td>".$course_data['desciption']."</td>";
                  //echo "<td><a href='enrollProcess.php?id_user=$course_data[idcourse]'>Request</a></td>";
                  //echo "<td><a href='request.php?idcourse=$course_data[idcourse]&id_user=$course_data[id_user]'>Request</a></td>";
                  //echo "<td><a href='request.php?idcourse=$course_data[idcourse]'>Request</a></td>";
                  echo "<tr>";
                }
              ?>

                </tbody>
              </table>



        <div class="container" align="center">
    <div class="container, justify" style="margin-top: 30px;">
        <div class="box col-md-6 col-sm-offset-3">
            <div class="panel panel-default">
                <form action="respondCourse.php?idrequestCourse=$course_data[idrequestCourse]" method="post">
                <!--<form action="requestProcess.php" method="post">-->
                    <hr>
                    <br>
                    <div class="input-group">
                        <input type="text" name="id_user" placeholder="Insert Student ID" required class="form-control" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="mycoursename" placeholder="Insert Course Name" required class="form-control" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="mydesciption" placeholder="Insert Description" required class="form-control" />
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="saveRequestCoursetButton" value="Save" class="btn btn-success btn-block" />
                    </div>
                    <div class="form-group">
                        <a href="requestCourseControl.php">
                            <input name="cancel" value="CANCEL" class="btn btn-danger btn-block" />
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
