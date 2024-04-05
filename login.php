<?php
include "database-connection.php";
session_start();

$username=$_REQUEST["username"];
$_SESSION["username"]=$username;

$password = $_REQUEST["password"];
$encryptedpassword = md5($password);



    $query ="SELECT * FROM login WHERE Email  = '$username' AND Password = '$encryptedpassword'";
	$record = mysqli_query($connection, $query ) or die("Coudn't run the query: " . mysqli_query() ) ;


	if (mysqli_num_rows($record)> 0) {

			header('Location: profile.php');
	} 
	else {

     echo "Username or password is not correct <br> Please <a href='login.html'>login</a> again";

	}

?>
