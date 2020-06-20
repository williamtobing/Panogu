<?php
include 'koneksi.php';
$id=$_POST['id'];
?>
<html>
<head>
<title>Form Pencarian</title>
</head>
<body>
<p align="center"><strong>Membuat Form Pencarian</strong></p>
<form method="post" action="" class="search" >
<table align="center" border="0">
<tr>
<td>
<input size="45" name="id" id="id" type="text" placeholder="Masukkan id">
<input class="submit" type="submit" name="cari" value="CARI" >
</td>
</tr>
</table>
</form>
      <table width="600" border="1" align="center" cellpadding="1" cellspacing="0">
        <tr bgcolor="#FF9999">
          <td><div align="center">No</div></td>
          <td><div align="center">id</div></td>
          <td><div align="center">Nama</div></td>
          <td><div align="center">Jenis Kelamin</div></td>
          <td><div align="center">Alamat</div></td>
          <td><div align="center">Usia</div></td>
        </tr>
        <?php
        $no= 1;
        $data = mysqli_query($koneksi, "select * from guide where id=$id order by id DESC");
while($d=mysqli_fetch_array($data)){
?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $c['id']; ?></td>
          <td><?php echo $c['Nama']; ?></td>
          <td><?php echo $c['JenisKelamin']; ?></td>
          <td><?php echo $c['Alamat']; ?></td>
          <td><?php echo $c['usia']; ?></td>
</tr>
<?php 
$no++; 
} 
?>
</table>
</body>
</html>