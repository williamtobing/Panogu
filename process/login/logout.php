<?php
	session_start();
	session_destroy();
	header("Locaiton:../../index.php");
	exit;
?>