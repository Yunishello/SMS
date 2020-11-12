<?php
$connect = mysqli_connect("localhost", "root", "", "sms_php");

if (!$connect) {
	echo "Error connect to Database" . mysqli_error();
}

?>