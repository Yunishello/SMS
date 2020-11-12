<?php 

include('connect.php');

#.......Value Import

			$user = mysqli_real_escape_string($connect,trim($_POST['user']));
			$pass = mysqli_real_escape_string($connect,trim($_POST['pass']));
			$cpass = mysqli_real_escape_string($connect,trim($_POST['cpass']));
			$key = mysqli_real_escape_string($connect,trim($_POST['key']));

#.......Varifing Passward Match

			if ($pass == $cpass) {
				$store = sha1($pass);
			}else {
				$_SESSION['error'] = "Password not match";
				header('location:../index.php');
			}

#.......Set key Type

			if ($key == 1) {
				$type = 'Admin';
			}elseif ($key == 2) {
				$type = 'Teacher';
			}elseif ($key == 3) {
				$type = 'Student';
			}

#........Saving SQL

			$save = "INSERT INTO `users` ( `username`, `password`, `usertype`) VALUES ('$user', '$store', '$type')";
			$query = mysqli_query($connect,$save);

			if ($query>0) {
					header('location:../home.php');
					$_SESSION['success'] = "registration successfull";

					echo $_SESSION['success'];
				}
				else{
					header('location:../index.php');
					$_SESSION['error'] = "An Error Occured";
					echo $_SESSION['error'];
				}

