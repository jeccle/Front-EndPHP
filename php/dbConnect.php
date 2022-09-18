<?php
$servername = "localhost";
$port = "3306";
$username = "root";
$password = "";
$dbname = "cite_db";
$conn = mysqli_connect($servername, $username, $password, $dbname, $port) or 
die("Connection failed: " . mysqli_connect_error());
?>