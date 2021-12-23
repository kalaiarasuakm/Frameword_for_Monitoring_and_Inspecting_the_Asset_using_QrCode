<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
$scanned_qrcode=$_SESSION['scanned_qrcode'];
if(isset($_POST['submit'])){
	$s_no=$_POST['s_no'];
	$date_of_purchase=$_POST['date_of_purchase'];
	$asset=$_POST['asset'];
	$tally_reference_no=$_POST['tally_reference_no'];
	$fy=$_POST['fy'];
	$description=$_POST['description'];
	$asset_code=$_POST['asset_code'];
	$asset_category=$_POST['asset_category'];
	$model=$_POST['model'];
	$specification=$_POST['specification'];
	$purchased_or_donated=$_POST['purchased_or_donated'];
	$bill_amount=$_POST['bill_amount'];
	$project=$_POST['project'];
	$location=$_POST['location'];
	$asset_status=$_POST['asset_status'];
	$remarks=$_POST['remarks'];
	$update_scanning_time=$_POST['update_scanning_time'];
	$update_scanning_date=$_POST['update_scanning_date'];
	
// Attempt update query execution
$sql = "UPDATE persons SET s_no='$s_no',date_of_purchase='$date_of_purchase',asset='$asset',tally_reference_no='$tally_reference_no',fy='$fy', description='$description', asset_code='$asset_code', asset_category='$asset_category', model='$model', specification='$specification',purchased_or_donated='$purchased_or_donated',bill_amount='$bill_amount',project='$project',location='$location',asset_status='$asset_status',remarks='$remarks', update_scanning_time='$update_scanning_time', update_scanning_date='$update_scanning_date' WHERE asset_code ='".$scanned_qrcode."'";
if(mysqli_query($link, $sql)){
     header('Location: popupdate.html');
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
} 
// Close connection
mysqli_close($link);
?>