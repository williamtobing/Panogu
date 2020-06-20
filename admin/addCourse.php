<?php
    include ("header.php");
?>

        <div class="container" align="center">
            <div class="container, justify" style="margin-top: 30px;">
                <div class="box col-md-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <form method="post" action="addCourseProcess.php">

                            <hr>

                            <legend style="text-transform: uppercase; color: #212529"><b>Add Course</b></legend>
                            <br>
                            <div class="input-group">
                                <input type="text" name="coursename" placeholder="Course Name" required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <!--<input type="text" name="desciption" placeholder="Description" required class="form-control" />-->
                                <textarea name="desciption" id="" cols="30" rows="10" placeholder="Description" required class="form-control"></textarea>
                            </div>

                            <!-- br -->
                            <!--<div class="form-group">
                                <input type="hidden" name="idcourse" value=<?php //echo $_GET['idcourse'];?>>
                            </div>-->
                            <br>

                            <div class="form-group">
                                <input type="submit" name="addCourseButton" value="CONFIRM" class="btn btn-success btn-block" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>