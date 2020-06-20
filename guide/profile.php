<?php 

include ("header.php");
include("../process/login/config.php");



	$id_guide = $_POST['id_guide'];
	$result =mysqli_query($mysqli, "SELECT * FROM guide where id_guide=$id_guide");
			


	
 ?>
<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <style>
	</style>
<div class="container-fluid">
<div class="col-md-2"></div>
<title>Biodata Guide</title>

</head>
<body>
<form action="#" style="width: 800px"class="posisi";>
<fieldset class="h"/>
<table style="width: 900px;">
	
<tr>
<td rowspan="15" width="250px">
<img src="../guide/a.jpg" width="250px" height="420px"/>
</td>
</tr>

<tr>
	<?php while($row=mysqli_fetch_array($result)){ ?>
<td><b>Nama Guide:</b></td>
<td><?php echo $row['nama']; ?></td>
</tr>
<tr>
<td><b>Alamat:</b></td>
<td><?php echo $row['alamat']; ?></td>
</tr>
<tr>
<td><b>Telepon:</b></td>

<td><?php echo $row['telepon']; ?></td>
</tr>
<tr>
<td><b>Usia:</b></td>

<td><?php echo $row['usia']; ?></td>
</tr>
<tr>
<td><b>Jenis Kelamin:</b></td>
<td><?php echo $row['jenis_kelamin']; ?></td>
</tr>
<tr>
<td><b>Kemampuan Berbahasa:</b></td>
<td><?php echo $row['kemampuan_berbahasa']; ?></td>
</tr>
<tr>
	<td><b>Lokasi Guide:</b></td>
<td><?php echo $row['lokasi']; ?></td>
</tr>
<tr>
	<td><b>Rate Guide:</b></td>
<td><?php echo $row['rate']; ?></td>
</tr>
<td>
<?php echo "<td><a href='index.php'>KembaliGuide</a></td>"; ?>
</tr>
<?php
}
?>

</td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>