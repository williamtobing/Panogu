<?php
	/*session_start();

	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "panogudb");

	//$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
		
	if(!$conn){
		die("Masalah Pada Database");
	}
	$db_use = mysqli_select_db($conn, "panogudb") or die("Select Database Problem !!");*/

	//mysqli_connect("localhost", "root", "");
	//mysqli_select_db("panogudb");
	$db_username = 'root';
	$db_password = '';
	$db_name = 'panogudb';
	$db_host = 'localhost';
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

	function secure($str, $sqlHandle)
	{
		# code...
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle, $secured);

		return $secured;
	}

	function getUserId($username)
	{
		global $mysqli;

		$query = "SELECT id_user FROM user WHERE username = '$username'";
		$query_run = mysqli_query($mysqli, $query);
		$fetched_id = mysqli_fetch_array($query_run);

		//Get id
		$id = $fetched_id['id_user'];

		return $id;
	}

	function redirect($_Location){
		header('Location: ' . $_location);
	}

	/*function lihatmail($url, $link) {
    	echo('<a href ="' . $url . '">' . $link . '</a>');
	}*/
?>