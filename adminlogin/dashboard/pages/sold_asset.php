<?php
$databaseHost = 'localhost';   //your db host 
$databaseName = 'demo';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql ="SELECT * FROM persons WHERE asset_status='Sold'";

$mysqliStatus = $mysqli->query($sql);

$sold_asset = mysqli_num_rows($mysqliStatus);

$_SESSION['sold_asset']=$sold_asset;


 
$mysqli->close();	
?>