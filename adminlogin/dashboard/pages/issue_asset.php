<?php
$databaseHost = 'localhost';   //your db host 
$databaseName = 'demo';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql ="SELECT * FROM persons WHERE asset_status='In use'";

$mysqliStatus = $mysqli->query($sql);

$use_asset = mysqli_num_rows($mysqliStatus);

$_SESSION['use_asset']=$use_asset;



 
$mysqli->close();	
?>