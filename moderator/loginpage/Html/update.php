<?php 
require_once("connection.php");
session_start();
$scanned_qrcode=$_SESSION['scanned_qrcode'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];

        $sql_query = "select * from persons where asset_code ='".$scanned_qrcode."'";
		$result = mysqli_query($conn, $sql_query);
		if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
			$col1=$row['s_no'];
			$col2=$row['date_of_purchase'];
			$col3=$row['asset'];
			$col4=$row['tally_reference_no'];
			$col5=$row['fy'];
			$col6=$row['description'];
			$col7=$row['asset_code'];
			$col8=$row['asset_category'];
			$col9=$row['model'];
			$col10=$row['specification'];
			$col11=$row['purchased_or_donated'];
			$col12=$row['bill_amount'];
			$col13=$row['project'];
			$col14=$row['location'];
			$col15=$row['asset_status'];
			$col16=$row['remarks'];
			
			
	
		}
		else{
			$col1="null";
			$col2="null";
			$col3="null";
			$col4="null";
			$col5="null";
			$col6="null";
			$col7="null";
			$col8="null";
			$col9="null";
			$col10="null";
			$col11="null";
			$col12="null";
			$col13="null";
			$col14="null";
			$col15="null";
			$col16="null";
			
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<title>Add Records Form</title>
<style>
body {
background-size: 1526px 967px;
background-repeat: no-repeat;
  background-image: url('test.jpg');
}
</style>

<style>
div.a {
  text-align: center;
}</style>

<style>
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
  top:50%;
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
</style>
<style>
table {
  border-collapse: collapse;
  width: 40%;
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
  width: 105%;
  padding: 5px;
  margin: 0px 0 0px 0;
  border: none;
  background: #f1f1f1;
}	
</style>
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  position:relative;
  bottom:230px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
a:link, a:visited {
	text-decoration: none;
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

</head>
<body>
<div class="a">
</div>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<img src="..\images\login.png"  class="responsive">
<img src="..\Images\logo.png"  class="response">
<h1 class="text">Regenboog India Foundation</h1>
<h2 class="wel">Welcome to Asset Upadte Page</h2>
<center>
<form action="updates.php" method="post">
<table class="page">
	<tr>
    	<td><label for="sNo">S.No</label></td>
        <td><input type="text" value="<?php echo $col1;?>" name="s_no" id="sNo" ></td>
    </tr>
    <tr>
    	<td><label for="dateOfPurchase">Date of Purchase</label></td>
        <td><input type="text" value="<?php echo $col2;?>" name="date_of_purchase" id="dateOfPurchase" ></td>
    </tr>
    <tr>
    	<td><label for="asset">Asset:</label></td>
        <td><input type="text" value="<?php echo $col3;?>" name="asset" id="asset" ></td>
    </tr>
	 <tr>
    	<td><label for="tallyReferenceNo">Tally Reference No</label></td>
        <td><input type="text" value="<?php echo $col4;?>" name="tally_reference_no" id="tallyReferenceNo" ></td>
    </tr>
	<tr>
    	<td><label for="fY">FY</label></td>
        <td><input type="text" value="<?php echo $col5;?>" name="fy" id="fY" ></td>
    </tr>
	<tr>
    	<td><label for="description">Description</label></td>
        <td><input type="text" value="<?php echo $col6;?>" name="description" id="description" ></td>
    </tr>
	<tr>
    	<td><label for="assetCode">Asset Code</label></td>
        <td><input type="text" value="<?php echo $col7;?>" name="asset_code" id="assetCode" ></td>
    </tr>
	<tr>
    	<td><label for="assetCategory">Asset Category</label></td>
        <td><input type="text" value="<?php echo $col8;?>" name="asset_category" id="assetCategory"></td>
    </tr>
	<tr>
    	<td><label for="model">Make / Model</label></td>
        <td><input type="text" value="<?php echo $col9;?>" name="model" id="model" ></td>
    </tr>
	<tr>
    	<td><label for="specification">Serial No / Model / Specification</label></td>
        <td><input type="text" value="<?php echo $col10;?>" name="specification" id="specification" ></td>
    </tr>
	<tr>
    	<td><label for="purchasedODonated">Purchased OR Donated</label></td>
        <td><input type="text" value="<?php echo $col11;?>" name="purchased_or_donated" id="purchasedODonated" ></td>
    </tr>
	<tr>
    	<td><label for="billAmount">Bill Amount</label></td>
        <td><input type="text" value="<?php echo $col12;?>" name="bill_amount" id="billAmount" ></td>
    </tr>
	<tr>
    	<td><label for="project">Project</label></td>
        <td><input type="text" value="<?php echo $col13;?>" name="project" id="project" ></td>
    </tr>
	<tr>
    	<td><label for="location">Location</label></td>
        <td><input type="text" value="<?php echo $col14;?>" name="location" id="location" ></td>
    </tr>
	<tr>
    	<td><label for="assetStatus">Asset Status</label></td>
        <td><input type="text" value="<?php echo $col15;?>" name="asset_status" id="assetStatus" ></td>
    </tr>
	<tr>
    	<td><label for="remarks">Remarks</label></td>
        <td><input type="text" value="<?php echo $col16;?>" name="remarks" id="remarks" ></td>
    </tr>
	<tr>
		<td><label for="scanningTime">Scanning Time</label></td>
		<td><input type="text" value="<?php echo $time; ?>" name="update_scanning_time" id="scanningTime"></td>
	</tr>
	<tr>
		<td><label for="scanningDate">Scanning Date</label></td>
		<td><input type="text" value="<?php echo $date; ?>"name="update_scanning_date" id="scanningDate"></td>
	</tr>
	</table>
<button class="button" type="submit" name="submit" >Submit</button>
</form>
</center>
</body>
</html>