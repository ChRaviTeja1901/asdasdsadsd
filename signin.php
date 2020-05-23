<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "kisanseva";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
$salt = "kisanseva";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password_encrypted."'");


$row = mysqli_fetch_array($sql);


if($row["total"] > 0){
	?>
	<script>
	window.location.href='index.html';
	alert('Login successful');
	</script>
	
	
	<?php
}
else{
	?>
	<script>
	window.location.href='signlog.html';
	alert('Login Failed..');
	alert('Please Enter The Correct Details..');
	</script>
	<?php
}








?>