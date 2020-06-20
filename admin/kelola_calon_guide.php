<?php
   include("header.php");
   include("../process/login/config.php");
 
   // Fetch all users data from database
   $result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id_user ASC");
?>

  <div style="height:50px;"></div>
  <div class="well" style="margin:auto; padding:auto; width:80%;">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
            <div class="panel panel-heading">
  <span class="title"><center><strong>Managemen Calon Guide dan Guide</strong></center></span> 
    
    <div style="height:50px;"></div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
         <th>No</th>  <th>Nama</th> <th>Status</th> <th>Action</th>
      </thead>
      <tbody>
      <?php
        
 
          while($user_data = mysqli_fetch_array($result)) { 
            //$user_data['role']
            echo "<tr>";
            echo "<td>".$user_data['id_user']."</td>";
            echo "<td>".$user_data['username']."</td>";
            //echo "<td>".$user_data['role']."</td>";
            $role = $user_data['role'];
            if($user_data['role'] == 1){
              # code...
              echo "<td>Admin</td>";
            }
            if ($user_data['role'] == 2) {
              # code...
              echo "<td>Guest</td>";
            }
            if ($user_data['role'] == 3) {
              # code...
              echo "<td>Guide</td>";
            }
            if ($user_data['role'] == 4) {
              # code...
              echo "<td>Student</td>";
            }
            echo "<td><a href='edit.php?id_user=$user_data[id_user]'>Edit</a></td></tr>"; 
            // | <a href='delete.php?id_user=$user_data[id_user]'>Delete</a>
              
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
  
