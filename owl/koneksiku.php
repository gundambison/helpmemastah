<?php
	$server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'databuku';
	$koneksi = mysqli_connect($server, $username, $password, $database);
//==================LENGKAPILAH dengan ini
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

	
?>
