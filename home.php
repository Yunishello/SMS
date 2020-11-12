<?php 
session_start();

include('includes/connect.php');


if (isset($_SESSION['success'])) {
	$success = $_SESSION['success'];
}elseif (isset($_SESSION['error'])) {
	$error = $_SESSION['error'];
}
echo $success .'<br>';
echo $error ;
?>