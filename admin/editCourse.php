<?php
// include database connection file
include("header.php");
include("../process/login/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update_course']))
{   
    $idcourse= $_POST['idcourse'];

    $coursename=$_POST['coursename'];

    $desciption = $_POST['desciption'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE course SET coursename='$coursename', desciption='$desciption' WHERE idcourse=$idcourse");

    // Redirect to homepage to display updated user in list
    header("Location: courseControl.php");
}

$idcourse = $_GET['idcourse'];

$result = mysqli_query($mysqli, "SELECT * FROM course WHERE idcourse=$idcourse");
$course_data = mysqli_fetch_array($result);

/*while($course_data = mysqli_fetch_array($result))
{
    $coursename = $course_data['coursename'];

    $desciption = $course_data['desciption'];
}*/
?>

        <div class="container" align="center">
            <div class="container, justify" style="margin-top: 30px;">
                <div class="box col-md-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <!--<form id="login-form" method="post" action="process/login/registerProcess.php">-->
                        <form name="update_course" method="post" action="editCourse.php">

                            <hr>

                            <legend style="text-transform: uppercase; color: #212529"><b>Update Course</b></legend>
                            <br>
                            <div class="input-group">
                                <input type="text" name="coursename" class="form-control" value="<?php echo $course_data['coursename']; ?>"/>
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="desciption" class="form-control" value="<?php echo $course_data['desciption']; ?>"/>
                                <!--<textarea name="desciption" id="" cols="30" rows="10" required class="form-control">
                                <?php //echo $desciption;?>
                                </textarea>-->
                            </div>
                            <br>

                            <!-- br -->
                            <div class="form-group">
                                <input type="hidden" name="idcourse" value=<?php echo $_GET['idcourse'];?>>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="update_course" value="CONFIRM" class="btn btn-success btn-block" />
                            </div>
                            <div class="form-group">
                                <a href="courseControl.php">
                                    <input name="cancel" value="CANCEL" class="btn btn-danger btn-block" />
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>