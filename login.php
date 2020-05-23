<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "kisanseva";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$contact = $_POST["contact"];
$password = $_POST["password"];
$salt = "kisanseva";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from registerform WHERE contact = '".$contact."' and password = '".$password_encrypted."'");


$row = mysqli_fetch_array($sql);


if($row["total"] > 0){
	?>
	<script>
	window.location.href='profile.php';
	alert('Login successful');
	</script>
	
	
	<?php
}
else{
	?>
	<script>
	window.location.href='my-account.html';
	alert('Login Failed..');
	alert('Please Enter The Correct Details..');
	</script>
	</script>
	<?php
}








?>