<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$password = md5($_POST['password']);

$servername = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mybook";

//create connection
$conn = new mysqli($servername, $db_user, $db_password, $db_name);

//check connection
if($conn->connect_error)
{
	die("connection failure:" . $conn->connect_error);
}

$sql = "INSERT INTO user(first_name, last_name, user_name, password)
VALUES('$first_name', '$last_name', '$user_name', '$password')";

if($conn->query($sql) === TRUE)
{
	echo "user id registered";
}else{
	echo "Error:" . $sql . "<br>" .$conn->error;
}

$conn->close();

?>