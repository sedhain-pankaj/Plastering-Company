<?php
$connection = mysqli_connect("localhost", "root", "") or
die("Could not connect mysql: " . mysqli_error() );
$dbName = "databasehopd";
mysqli_select_db($connection, $dbName) or
die("Could not find database: " . mysqli_error() ) ;
?>