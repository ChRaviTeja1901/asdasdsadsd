<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "kisanseva";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name=$_POST["name"];
$contact=$_POST["contact"];
$email = $_POST["email"];
$username=$_POST["username"];
$password = $_POST["password"];
$salt = "kisanseva";
$password_encrypted = sha1($password.$salt);



$sql = "INSERT INTO registerform (name,contact,email,username,password) 
VALUES ('$name', '$contact' ,'$email','$username','$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		window.location.href='my-account.html';
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		window.location.href='my-account.html';
		alert('Values did not insert');
	</script>
	<?php
}


?>




















