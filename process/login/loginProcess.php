<?php
	include ("config.php");
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		

		$q = "SELECT * FROM user WHERE username = '$username'";
		$rs = mysqli_query($mysqli, $q);
			$row = mysqli_fetch_assoc($rs);
			if ($password == $row['password']) {
				//echo "sukses 1";
				# code...
				$_SESSION['username'] = $username;
				$_SESSION['role'] = $row['role'];
				if (isset($_SESSION['role'])) {
					//echo "sukses 2";
					# code...
					$roles = $_SESSION['role'];
					if ($roles == 1) {
					//	echo "sukses 3";
						# code...
						$_SESSION['admin'] = TRUE;
						header('Location: ../../admin/index.php');
						exit;
					}else if ($roles == 2) {
					//	echo "sukses 4";
						# code...
						header("location: ../../guest/index.php?username=$username");
						exit;
					}else if ($roles == 3) {
					//	echo "sukses 5";
						# code...
						header('Location: ../../guide/index.php');
						exit;
					}else if ($roles == 4) {
					//	echo "sukses 6";
						# code...
						header('Location: ../../student/index.php');
						exit;
					}
				}
			}else{
				//echo "gagal1";
				echo "<script>alert('INVALID USERNAME OR PASSWORD');location='../../login.php';</script>";
				# code...						//redirect('../../login.php');
					exit;
			}
	//}
?>