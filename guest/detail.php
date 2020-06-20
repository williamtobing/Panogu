<?php 

include ("header2.php");

include ("../process/login/config.php");

	$id_guide = $_GET['id_guide'];
	$result =mysqli_query($mysqli, "SELECT * FROM guide where id_guide=$id_guide");

 ?>
<!--<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	Optional theme
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <style>
	</style>
<div class="container-fluid">
<div class="col-md-2"></div>
<title>Biodata Guide</title>

</head>-->



    

	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="about">
            <div class="panel panel-heading">

	
		<?php $row=mysqli_fetch_array($result) ?>
		<br>
		<table class="table table-striped table-bordered table-hover">
	
			<tr>
				<td rowspan="15" width="350px">
					<img src="../guide/<?php echo $row['foto']; ?>" width="350px" height="400px"/>
				</td>
			</tr>

			<tr>
				<td><b>Nama Guide</b></td>
				<td><?php echo $row['nama']; ?></td>
			</tr>

			<tr>
				<td><b>Alamat</b></td>
				<td><?php echo $row['alamat']; ?></td>
			</tr>

			<!--<tr>
				<td><b>Telepon</b></td>
				<td><?php echo $row['telepon']; ?></td>
			</tr>-->

			<tr>
				<td><b>Usia</b></td>
				<td><?php echo $row['usia']; ?></td>
			</tr>

			<tr>
				<td><b>Jenis Kelamin</b></td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
			</tr>

			<tr>
				<td><b>Kemampuan Berbahasa</b></td>
				<td><?php echo $row['kemampuan_berbahasa']; ?></td>
			</tr>

			<tr>
				<td><b>Lokasi Guide</b></td>
				<td><?php echo $row['lokasi']; ?></td>
			</tr>

			<tr>
				<td><b>Rate Guide</b></td>
				<td><?php echo $row['rate']; ?></td>
			</tr>

			<tr>
				<td><?php echo "<td><a href='pesanguide.php?id_guide=$row[id_guide]'>Hubungi Guide</a></td>"; ?></td>
			</tr>

		</table>
		</fieldset>
	</form>

	</div>
		</div>
			</div>
				</div>
					</div>


</body>