<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

define('FPDF_FONTPATH', '../ypathcss/bantuan/fpdf/font/');
require('../ypathcss/bantuan/fpdf/fpdf.php');

class PDF extends FPDF{
  function Header(){
    $this->SetTextColor(128,0,0);
    $this->SetFont('Arial','B','12');//	$this->SetFont('Times','',12);
    $this->Cell(20,0,'Data user',0,0,'L');
    $this->Ln();
    $this->Cell(5,1,'Laporan data user',0,0,'L');
    $this->Ln();
	

	
  }
  
  function Footer(){
	$this->SetY(-4,5);
	$this->Image("../ypathfile/avatar.jpg", (8.5/2)-1.5, 9.8, 3, 1, "JPG", "http://www.lp2maray.com");
    $this->SetY(-2,5);
    $this->Cell(0,1,$this->PageNo(),0,0,'C');
	
  }
} 

$sql = "select * from `$tbdatalatih`";
$jml =  getJum($conn,$sql);

$i=0;
$arr=getData($conn,$sql);
		foreach($arr as $d) {	
  $cell[$i][0]=$d["id_datalatih"];
  $cell[$i][1]=$d["ipk"];
  $cell[$i][2]=$d["prestasi"];
  $cell[$i][3]=$d["penghasilan"];
  $cell[$i][4]=$d["jumlah_tanggungan"];
  $cell[$i][5]=$d["organisasi"];
  $cell[$i][6]=$d["penilaian"];
  $cell[$i][7]=$d["keterangan"];
  $i++;
}
				
				
$pdf=new PDF('L','cm','A4');
//$pdf=new PDF("P","in","Letter");
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(192,192,192);
$pdf->Cell(1,1,'no','LR',0,'L',1);
//$pdf->MultiCell(0, 0.5, $lipsum1, 'LR', "L");
$pdf->Cell(2,1,'id_datalatih','LR',0,'C',1);
$pdf->Cell(7,1,'ipk','LR',0,'C',1);
$pdf->Cell(5,1,'prestasi','LR',0,'C',1);
$pdf->Cell(8,1,'penghasilan','LR',0,'C',1);
$pdf->Cell(4,1,'jumlah_tanggungan','LR',0,'C',1); //
$pdf->Cell(3,1,'organisasi','LR',0,'C',1); //
$pdf->Cell(9,1,'penilaian','LR',0,'C',1);
$pdf->Cell(1,1,'keterangan','LR',0,'C',1);
$pdf->Ln();
$pdf->SetFont('Arial','','8');

for ($j=0;$j<$i;$j++){
  $pdf->Cell(1,1,$j+1,'B',0,'L');         // no
  $pdf->Cell(2,1,$cell[$j][0],'B',0,'L'); // id_datalatih
  $pdf->Cell(7,1,$cell[$j][1],'B',0,'L'); // ipk
  $pdf->Cell(5,1,$cell[$j][2],'B',0,'L'); // prestasi
  $pdf->Cell(8,1,$cell[$j][3],'B',0,'L'); // penghasilan
  $pdf->Cell(4,1,$cell[$j][4],'B',0,'L'); // jumlah_tanggungan ?
  $pdf->Cell(3,1,$cell[$j][5],'B',0,'L'); // organisasi ?
  $pdf->Cell(9,1,$cell[$j][6],'B',0,'L'); // penilaian
  $pdf->Cell(1,1,$cell[$j][7],'B',0,'L'); // keterangan
  $pdf->Ln();
}
$pdf->Output();
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	
	$rs->free();
	return $arr;
}
?>

