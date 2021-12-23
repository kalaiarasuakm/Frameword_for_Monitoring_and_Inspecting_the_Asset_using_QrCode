<?php
$databaseHost = 'localhost';   //your db host 
$databaseName = 'demo';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$sql ="SELECT * FROM persons WHERE asset_status='Stolen'";

$mysqliStatus = $mysqli->query($sql);

$stolen_asset = mysqli_num_rows($mysqliStatus);

$_SESSION['stolen_asset']=$stolen_asset;


 
$mysqli->close();	
?>