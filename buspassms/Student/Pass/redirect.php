<?php
// database connection
// error_reporting(0);
$con=mysqli_connect('localhost','root','','buspassdb');

if(!empty($_POST['submit']))
{

$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$id_number=$_POST['id_number'];
$image=$_POST['image'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$amount=$_POST['amount'];

mysqli_query($con,"INSERT INTO pass(name,number,email,id_number,image,source,destination,amount)VALUES('$name','$number',' $email','$id_number','$image','$source','$destination','$amount')");

require("C:/xampp\htdocs\Bus_pass\buspassms/fpdf/fpdf.php");
$pdf= new FPDF();
$pdf-> AddPage();


$pdf->SetFont("Arial","B",12);
$pdf->Cell (0,25,"JAIHIND COLLEGE OF ENGINEERING, KURAN",0,1,'C');

$pdf->Cell (0,30,"",0,0,'C');
$pdf->Cell (-30,35,"Photo",1,1,'C');
$pdf->Cell (0,10,"",0,1,'C');

$pdf->Cell (40,10,"Name:",1,0);
$pdf->Cell (00,10,$name,1,1);

$pdf->Cell (40,10,"Contact No:",1,0);
$pdf->Cell (0,10,$number,1,1);

$pdf->Cell (40,10,"Email:",1,0);
$pdf->Cell (0,10,$email,1,1);

$pdf->Cell (40,10,"ID No:",1,0);
$pdf->Cell (0,10,$id_number,1,1);

// $pdf->Cell (40,10,"Image:",1,0);
// $pdf->Cell (0,10,$image,1,1);

$pdf->Cell (40,10,"Source:",1,0);
$pdf->Cell (0,10,$source,1,1);

$pdf->Cell (40,10,"Destination:",1,0);
$pdf->Cell (0,10,$destination,1,1);

$pdf->Cell (40,10,"Amount:",1,0);
$pdf->Cell (0,10,$amount,1,1);

$pdf->Cell (40,70,"Date:",0,1);
$pdf->Cell (40,-50,"Place:",0,0);
$pdf->Cell (130,-50,"Seal of Institute",0,1,'R');

$pdf->output();
}

?>