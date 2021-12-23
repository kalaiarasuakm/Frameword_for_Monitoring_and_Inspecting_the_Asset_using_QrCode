<?php
/* Attempt MySQL server linkection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check linkection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Receiving the passed variable
session_start();
$scanned_qrcode=$_SESSION['scanned_qrcode'];



// Escape user inputs for security
$date_of_purchase = mysqli_real_escape_string($link, $_REQUEST['date_of_purchase']);
$asset = mysqli_real_escape_string($link, $_REQUEST['asset']);
$tally_reference_no = mysqli_real_escape_string($link, $_REQUEST['tally_reference_no']);
$fy = mysqli_real_escape_string($link, $_REQUEST['fy']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$asset_code = mysqli_real_escape_string($link, $_REQUEST['asset_code']);
$asset_category = mysqli_real_escape_string($link, $_REQUEST['asset_category']);
$model = mysqli_real_escape_string($link, $_REQUEST['model']);
$specification = mysqli_real_escape_string($link, $_REQUEST['specification']);
$purchased_or_donated = mysqli_real_escape_string($link, $_REQUEST['purchased_or_donated']);
$bill_amount = mysqli_real_escape_string($link, $_REQUEST['bill_amount']);
$project = mysqli_real_escape_string($link, $_REQUEST['project']);
$location = mysqli_real_escape_string($link, $_REQUEST['location']);
$asset_status = mysqli_real_escape_string($link, $_REQUEST['asset_status']);
$remarks = mysqli_real_escape_string($link, $_REQUEST['remarks']);
$scanning_time = mysqli_real_escape_string($link, $_REQUEST['scanning_time']);
$scanning_date = mysqli_real_escape_string($link, $_REQUEST['scanning_date']);

// attempt insert query execution
$sql = "INSERT INTO persons(date_of_purchase, asset, tally_reference_no, fy, description, asset_code, asset_category, model, specification, purchased_or_donated, bill_amount, project, location, asset_status, remarks, scanning_time, scanning_date) VALUES ('$date_of_purchase', '$asset', '$tally_reference_no', '$fy', '$description', '$asset_code', '$asset_category', '$model', '$specification', '$purchased_or_donated', '$bill_amount', '$project', '$location', '$asset_status', '$remarks', '$scanning_time', '$scanning_date')";
if(mysqli_query($link, $sql)){
    header('Location: popup.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close linkection
mysqli_close($link);
?>