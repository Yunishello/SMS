<?php 

session_start();

include('connect.php');

$user = mysqli_real_escape_string($connect,trim($_POST['user']));
$pass = mysqli_real_escape_string($connect,trim($_POST['pass']));
$key = mysqli_real_escape_string($connect,trim($_POST['key']));

$store = sha1($pass);

if ($key == 1) {
	$type = 'Admin';
}elseif ($key == 2) {
	$type = 'Teacher';
}elseif ($key == 3) {
	$type = 'Student';
}

if ($user == '') {
	$msg = "username is not specified";
	header('location:../login.php');
}elseif ($pass == '') {
	$msg = "password is not specified";
	header('location:../login.php');
}elseif ($type == '') {
	$msg = "key not specified or is incorrect";
	header('location:../login.php');
}else {
$sql = "SELECT * FROM `users` WHERE `username` = '$user' AND `password` = '$store' AND `usertype` = '$type'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) > 0) {
	
	$_SESSION['id'] = $row['id'];

	if ($key == 1) {
		header('location:../home.php');
	}elseif ($key == 2) {
		header('location:../dash.php');
	}elseif ($key == 3) {
		header('location:../success.php');
	}else {
		header('location:../login.php');
		$msg = 'an error occured please try again later';
		}
	}
}