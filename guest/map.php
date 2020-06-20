<?php 
    include ("header.php")
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>Maps</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="icon" type="image/png" href="image/tobatransbiru.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!--  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>     
<!--  -->
  
  <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(2.39793,99.21678),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>
  
</head>
<body>
    <?php 
//    require_once("header.php");
    ?>

  <div id="googleMap" style="width:100%;height:380px;"></div>
  
  <form action="" method="post">
    <input type="text" id="lat" name="lat" value="">
    <input type="text" id="lng" name="lng" value="">
  </form>
  <?php 
  //  require_once ("footer.php");
     ?>
</body>
</html>