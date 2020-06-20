<?php
    include ("../process/login/config.php");

    //if(isset($_POST['add'])){
        # code...
    

        $coursename = $_POST['coursename'];
        $desciption = $_POST['desciption'];

        $query = "INSERT INTO `course`(`coursename`, `desciption`) VALUES ('".$coursename."', '".$desciption."')";
        $result = mysqli_query($mysqli, $query);

        if ($result) {
            # code...
            header("location: courseControl.php");
        }
    //}
?>