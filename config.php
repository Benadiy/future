<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'future';

$db_connection = new mysqli($host, $user, $pass, $dbname);

if ( !$db_connection ) {
	die("Connection failed: " . mysqli_connect_error());
}