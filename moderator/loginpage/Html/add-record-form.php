<?php
$scanned_qrcode=$_POST['qr-input'];
session_start();
$_SESSION['scanned_qrcode']=$scanned_qrcode;


// To get the current time and date
date_default_timezone_set("Asia/Kolkata");
$time=date("Y/m/d");
$date= date("h:i:s A\n");
$scanning_date=0;
$_SESSION['scanning_date']=$scanning_date;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<title>Add Records Form</title>
<style>
body {
background-size: 1526px 967px;
background-repeat: no-repeat;
background-image: url('test.jpg');
}

div.a {
  text-align: center;
}

html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:60%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}

table {
  border-collapse: collapse;
  width: 50%;
}
td,th {
  border:none;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: none;
}
label {
	font-size:20px;
	font-style:oblique;
	font-weight:bold;
}	
input {
  width: 100%;
  padding: 5px;
  margin: 0px 0 0px 0;
  border: none;
  background: #f1f1f1;
}	
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: orange;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	
.text {
	 font-family: "Audiowide", sans-serif;
	 color:white;
	 text-align:center;
	 font-size:65px;
	 position:relative;
	 bottom:205px;
	 
	 
}
.wel{
	font-family: "Audiowide", sans-serif;
	 color:white;
	 text-align:center;
	 font-size:40px;
	 position:relative;
	 bottom:240px;
	 
	 
}	
.page{
	position:relative;
	bottom:250px;
	left:0px;
}	
 .responsive{
	width:13%;
	height:auto;
}
.response{
	width:13%;
	height:auto;
	position:relative;
	top:0px;
	left:1100px;
	border-radius:70%;
}
</style>
<body>
<div class="a">
</div>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<img src="..\images\login.png"  class="responsive">
<img src="..\images\logo.png"  class="response">
<h1 class="text">Regenboog India Foundation</h1>
<h2 class="wel">Welcome to Asset Entry Page</h2>
<center>
<form class="page" action="insert.php" method="post">
<br>
<table>
    <tr>
    	<td><label for="dateOfPurchase">Date of Purchase</label></td>
        <td><input type="date" name="date_of_purchase" id="dateOfPurchase"></td>
    </tr>
    <tr>
    	<td><label for="asset">Asset:</label></td>
        <td><input type="text" name="asset" id="asset"></td>
    </tr>
	 <tr>
    	<td><label for="tallyReferenceNo">Tally Reference No</label></td>
        <td><input type="text" name="tally_reference_no" id="tallyReferenceNo"></td>
    </tr>
	<tr>
    	<td><label for="fY">FY</label></td>
        <td><input type="text" name="fy" id="fY"></td>
    </tr>
	<tr>
    	<td><label for="description">Description</label></td>
        <td><input type="text"  name="description" id="description"></td>
    </tr>
	<tr>
    	<td><label for="assetCode">Asset Code</label></td>
        <td><input type="text" value="<?php echo $scanned_qrcode; ?>" name="asset_code" id="assetCode"></td>
    </tr>
	<tr>
    	<td><label for="assetCategory">Asset Category</label></td>
        <td><input type="text" name="asset_category" id="assetCategory"></td>
    </tr>
	<tr>
    	<td><label for="model">Make / Model</label></td>
        <td><input type="text" name="model" id="model"></td>
    </tr>
	<tr>
    	<td><label for="specification">Serial No / Model / Specification</label></td>
        <td><input type="text" name="specification" id="specification"></td>
    </tr>
	<tr>
    	<td><label for="purchasedODonated">Purchased OR Donated</label></td>
        <td><input type="text" name="purchased_or_donated" id="purchasedODonated"></td>
    </tr>
	<tr>
    	<td><label for="billAmount">Bill Amount</label></td>
        <td><input type="number" name="bill_amount" id="billAmount"></td>
    </tr>
	<tr>
    	<td><label for="project">Project</label></td>
        <td><input type="text" name="project" id="project"></td>
    </tr>
	<tr>
    	<td><label for="location">Location</label></td>
        <td><input type="text" name="location" id="location"></td>
    </tr>
	<tr>
    	<td><label for="assetStatus">Asset Status</label></td>
        <td><input type="text" list="assetStatus" name="asset_status" id="assetStatus"></td>
		<datalist id="assetStatus">
		<option value="Condemned">
		<option value="In use">
		<option value="Sold">
		<option value="Stolen">
		</datalist>
    </tr>
	<tr>
    	<td><label for="remarks">Remarks</label></td>
        <td><input type="text" name="remarks" id="remarks"></td>
    </tr>
	<tr>
		<td><label for="scanningTime">Scanning Time</label></td>
		<td><input type="text" value="<?php echo $time; ?>" name="scanning_time" id="scanningTime"></td>
	</tr>
	<tr>
		<td><label for="scanningDate">Scanning Date</label></td>
		<td><input type="text" value="<?php echo $date; ?>"name="scanning_date" id="scanningDate"></td>
	</tr>
	</table>
	<button class="button">Submit</button>
</form>
</center>
</body>
</html>