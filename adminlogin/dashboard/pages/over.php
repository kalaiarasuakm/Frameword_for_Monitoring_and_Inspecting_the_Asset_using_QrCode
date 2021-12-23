<?php
$databaseHost = 'localhost';   //your db host 
$databaseName = 'demo';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 




$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
$sql = "SELECT * FROM persons";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);

$_SESSION['rows_count_value']=$rows_count_value;



 
$mysqli->close();	
?>