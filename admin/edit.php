<?php
// include database connection file
include("header.php");
include("../process/login/config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_user= $_POST['id_user'];

    $username=$_POST['username'];

    $email = $_POST['email'];
   
    $role=$_POST['role'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE user SET username='$username', email='$email', role='$role' WHERE id_user=$id_user");

    // Redirect to homepage to display updated user in list
    header("Location: kelola_calon_guide.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_user = $_GET['id_user'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id_user=$id_user");

while($user_data = mysqli_fetch_array($result))
{
    $username = $user_data['username'];

    $email = $user_data['email'];
    
    $role = $user_data['role'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <br/><br/>

    <!--<form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="username" value=<?php //echo $username;?>></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="role" value=<?php //echo $role;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_user" value=<?php //echo $_GET['id_user'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>-->

        <div class="container" align="center">
            <div class="container, justify" style="margin-top: 30px;">
                <div class="box col-md-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <!--<form id="login-form" method="post" action="process/login/registerProcess.php">-->
                        <form name="update_user" method="post" action="edit.php">

                            <hr>

                            <legend style="text-transform: uppercase; color: #212529"><b>Update User</b></legend>
                            <br>
                            <div class="input-group">
                                <input type="text" name="username" value=<?php echo $username;?> required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="email" value=<?php echo $email;?> required class="form-control" />
                            </div>
                            <br>
                            <div class="input-group">
                                Ubah dari &nbsp; <?php 
                                    if ($role == 1) {
                                        # code...
                                        echo " <b>Admin</b> ";
                                    }
                                    if ($role == 2) {
                                        # code...
                                        echo " <b>Guest</b> ";
                                    }
                                    if ($role == 3) {
                                        # code...
                                        echo " <b>Guide</b> ";
                                    }
                                    if ($role == 4) {
                                        # code...
                                        echo " <b>Student</b> ";
                                    }
                                ?> &nbsp; menjadi :
                            </div>
                            <br>
                            <div class="input-group">

                                <!--<input type="text" name="role" value=<?php //echo $role;?> required class="form-control" />-->
                                <!--<label>
                                    <select name="role" required class="form-control center">
                                        <option value="#">--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Guest</option>
                                        <option value="3">Guide</option>
                                        <option value="4">Student</option>
                                    </select>
                                </label>-->

                                &nbsp;<p><input type="radio" name="role" value=1 required>&nbsp;Admin</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<p><input type="radio" name="role" value=2 required>&nbsp;Guest</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<p><input type="radio" name="role" value=3 required>&nbsp;Guide</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;<p><input type="radio" name="role" value=4 required>&nbsp;Student</p>
                                <!--<input type="number" name="role" placeholder="Role" required class="form-control" />-->
                            </div>

                            <!-- br -->
                            <div class="form-group">
                                <input type="hidden" name="id_user" value=<?php echo $_GET['id_user'];?>>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="update" value="CONFIRM" class="btn btn-success btn-block" />
                            </div>
                            <div class="form-group">
                                <a href="kelola_calon_guide.php">
                                    <input name="cancel" value="CANCEL" class="btn btn-danger btn-block" />
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
