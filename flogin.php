<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "kisanseva";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["contact"];
$password = $_POST["password"];
$salt = "kisanseva";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from registerform WHERE contact = '".$contact."' and 
	password = '".$password_encrypted."'");


$row = mysqli_fetch_array($sql);


if($row["total"] > 0){
	?>
	<script>
	window.location.href='my-accountf.html';
	alert('Login successful');
	</script>
	
	
	<?php
}
else{
	?>
	<script>
	
	alert('Login Failed..');
	alert('Please Enter The Correct Details..');
	</script>
	<?php
}


