<?php
    include ("header.php");
    include ("../process/login/config.php");
    //idcourse = $_GET['idcourse'];
    //$id_user = $_GET['id_user'];
?>

<!--<form action="enrollProcess.php?id_user=<?php //echo($idcourse)?>" method="post">
    <table border="1">
        <tr>
            <td>Nama Pembeli</td>
            <td>:</td>
            <td><input type="text" name="nama_pembeli"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="no_telp"></td>
        </tr>
        <tr><td colspan="3"><input type="submit" name="action"
                                   value="Submit"></td></tr>
    </table>
</form>-->
    <div class="container" align="center">

    <hr>
        <legend style="text-transform: uppercase; color: #212529"><b>REQUEST COURSE</b></legend>
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
    </div>


<div class="container" align="center">
    <div class="container, justify" style="margin-top: 30px;">
        <div class="box col-md-6 col-sm-offset-3">
            <div class="panel panel-default">
                <form action="requestCourseProcess.php" method="post">
                <!--<form action="requestProcess.php" method="post">-->
                    <hr>
                    <br>
                    <div class="input-group">
                        <input type="text" name="iduserforrequestcourse" placeholder="Insert Student ID" required class="form-control" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="usernameforrequestCourse" placeholder="Insert Username" required class="form-control" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="idcourseforrequestcourse" placeholder="Insert Course ID" required class="form-control" />
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" name="reqcoursename" placeholder="Insert Course Name" required class="form-control" />
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="requestCoursetButton" value="Request" class="btn btn-success btn-block" />
                    </div>
                    <div class="form-group">
                        <a href="course.php">
                            <input name="cancel" value="CANCEL" class="btn btn-danger btn-block" />
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>