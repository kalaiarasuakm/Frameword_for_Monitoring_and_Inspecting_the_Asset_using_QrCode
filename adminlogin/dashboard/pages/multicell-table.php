<?php
//include pdf_mc_table.php 
include('pdf_mc_table.php');
//Database connection
$conn = new mysqli('localhost', 'root', '', 'demo');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$select = "SELECT * FROM `persons` ORDER BY s_no";
$result = $conn->query($select);
//make new object
$pdf =new PDF_MC_Table('L','mm','A3');
$pdf->AddPage();
$pdf->Image('logo.png',360,0,50);
$pdf->Image('login.png',10,0,50);
$pdf->SetFont('Times','I',30);
$pdf->SetTextColor(0,191,255);
$pdf->Cell(400,30,'Framework for  Monitoring and  Inspecting of Assets using QR Code',0,0,'C');
$pdf->Ln();
$pdf->SetFont('Times','I',30);
$pdf->SetTextColor(0,191,255);
$pdf->Cell(400,30,'Newly Entered Asset Details',0,0,'C');
$pdf->Ln();
//set width for each column 
$pdf->SetWidths(Array(10,20,25,20,25,30,30,20,30,15,30,20,25,25,25,20,23,23));
$width_cell=array(10,20,25,20,25,30,30,20,30,15,30,20,25,25,25,20,23,23);
//set line height
$pdf->SetLineHeight(5);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','B',13);
$pdf->SetFillColor(255,255,255); 
//Header Starts	
$pdf->Cell($width_cell[0],5,'S.No',1,0,'C'); 
$pdf->Cell($width_cell[1],5,'DOP',1,0,'C');
$pdf->Cell($width_cell[2],5,'Asset',1,0,'C');
$pdf->Cell($width_cell[3],5,'FY',1,0,'C'); 
$pdf->Cell($width_cell[4],5,'Description',1,0,'C');
$pdf->Cell($width_cell[5],5,'Asset Code',1,0,'C'); 
$pdf->Cell($width_cell[6],5,'Asset Category',1,0,'C');
$pdf->Cell($width_cell[7],5,'Model',1,0,'C'); 
$pdf->Cell($width_cell[8],5,'Specification',1,0,'C'); 
$pdf->Cell($width_cell[9],5,'POD',1,0,'C'); 
$pdf->Cell($width_cell[10],5,'Bill Amount',1,0,'C'); 
$pdf->Cell($width_cell[11],5,'Project',1,0,'C'); 
$pdf->Cell($width_cell[12],5,'Location',1,0,'C'); 
$pdf->Cell($width_cell[13],5,'Asset Status',1,0,'C'); 
$pdf->Cell($width_cell[14],5,'Remarks',1,0,'C'); 
$pdf->Cell($width_cell[15],5,'TOS',1,0,'C'); 
$pdf->Cell($width_cell[16],5,'DOS',1,0,'C');
$pdf->Ln(5);
//Records in the database
$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(0,0,0);
foreach($result as $item){
	$pdf->Row(Array(
	$item['s_no'],
	$item['date_of_purchase'],
	$item['asset'],
	$item['fy'],
	$item['description'],
	$item['asset_code'],
	$item['asset_category'],
	$item['model'],
	$item['specification'],
	$item['purchased_or_donated'],
	$item['bill_amount'],
	$item['project'],
	$item['location'],
	$item['asset_status'],
	$item['remarks'],
	$item['scanning_time'],
	$item['scanning_date'],
	
	));
}

$pdf->Output();
?>

