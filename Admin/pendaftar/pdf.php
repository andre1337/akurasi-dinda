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
    $this->Cell(20,0,'Data Pendaftar',0,0,'L');
    $this->Ln();
    $this->Cell(5,1,'Laporan Data Pendaftar',0,0,'L');
    $this->Ln();
	

	
  }
  
  function Footer(){
	$this->SetY(-4,5);
	$this->Image("../ypathfile/avatar.jpg", (8.5/2)-1.5, 9.8, 3, 1, "JPG", "http://www.lp2maray.com");
    $this->SetY(-2,5);
    $this->Cell(0,1,$this->PageNo(),0,0,'C');
	
  }
} 

$sql = "select * from `$tbpendaftar`";
$jml =  getJum($conn,$sql);

$i=0;
$arr=getData($conn,$sql);
		foreach($arr as $d) {	
  $cell[$i][0]=$d["id_pendaftar"];
  $cell[$i][1]=$d["nama_pendaftar"];
  $cell[$i][2]=$d["tempat_lahir"];
  $cell[$i][3]=$d["tgl_lahir"];
  $cell[$i][4]=$d["alamat"];
  $cell[$i][5]=$d["no_tlpa"];
  $cell[$i][6]=$d["no_tlpo"];
  $cell[$i][7]=$d["ipk"];
  $cell[$i][8]=$d["prestasi"];
  $cell[$i][9]=$d["nama_ortu"];
  $cell[$i][10]=$d["penghasilan"];
  $cell[$i][11]=$d["jumlah_tanggungan"];
  $cell[$i][12]=$d["upload_khs"];
  $cell[$i][13]=$d["upload_kk"];
  $cell[$i][14]=$d["upload_prestasi"];
  $cell[$i][15]=$d["username"];
  $cell[$i][16]=$d["password"];
  $i++;
}
				
				
$pdf=new PDF('L','cm','A4');
//$pdf=new PDF("P","in","Letter");
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B','9');
$pdf->SetFillColor(192,192,192);
$pdf->Cell(1,1,'no','LRTB',0,'L',1);
//$pdf->MultiCell(0, 0.5, $lipsum1, 'LRTB', "L");
$pdf->Cell(3,1,'ID Pendaftar','LRTB',0,'C',1);
$pdf->Cell(3,1,'Nama Pendaftar','LRTB',0,'C',1);
$pdf->Cell(3,1,'Tempat Lahir','LRTB',0,'C',1);
$pdf->Cell(3,1,'Tgl Lahir','LRTB',0,'C',1);
$pdf->Cell(3,1,'Alamat','LRTB',0,'C',1);
$pdf->Cell(3,1,'No Tlp Anak','LRTB',0,'C',1);
$pdf->Cell(3,1,'No Tlp Orangtua','LRTB',0,'C',1);
$pdf->Cell(3,1,'IPK','LRTB',0,'C',1);
$pdf->Cell(3,1,'Prestasi','LRTB',0,'C',1);
$pdf->Cell(3,1,'Nama Orang Tua','LRTB',0,'C',1);
$pdf->Cell(3,1,'Penghasilan','LRTB',0,'C',1);
$pdf->Cell(3,1,'Jumlah Tanggungan','LRTB',0,'C',1);
$pdf->Cell(3,1,'Upload KHS','LRTB',0,'C',1);
$pdf->Cell(3,1,'Upload KK','LRTB',0,'C',1);
$pdf->Cell(3,1,'Upload Prestasi','LRTB',0,'C',1);
$pdf->Cell(3,1,'Username','LRTB',0,'C',1);
$pdf->Cell(3,1,'Password','LRTB',0,'C',1);

$pdf->Ln();
$pdf->SetFont('Arial','','8');

for ($j=0;$j<$i;$j++){
  $pdf->Cell(1,1,$j+1,'B',0,'LRTB');         // no
  $pdf->Cell(3,1,$cell[$j][0],'B',0,'LRTB'); // id_pendaftar
  $pdf->Cell(3,1,$cell[$j][1],'B',0,'LRTB'); // nama_pendaftar
  $pdf->Cell(3,1,$cell[$j][2],'B',0,'LRTB'); // tempat_lahir
  $pdf->Cell(3,1,$cell[$j][3],'B',0,'LRTB'); // tgl_lahir
  $pdf->Cell(3,1,$cell[$j][4],'B',0,'LRTB'); // alamat
  $pdf->Cell(3,1,$cell[$j][5],'B',0,'LRTB'); // no_tlpa
  $pdf->Cell(3,1,$cell[$j][6],'B',0,'LRTB'); // no_tlpo
  $pdf->Cell(3,1,$cell[$j][7],'B',0,'LRTB'); // ipk
  $pdf->Cell(3,1,$cell[$j][8],'B',0,'LRTB'); // prestasi
  $pdf->Cell(3,1,$cell[$j][9],'B',0,'LRTB'); // nama_ortu
  $pdf->Cell(3,1,$cell[$j][10],'B',0,'LRTB'); // penghasilan
  $pdf->Cell(3,1,$cell[$j][11],'B',0,'LRTB'); // jumlah_tanggungan
  $pdf->Cell(3,1,$cell[$j][12],'B',0,'LRTB'); // upload_khs
  $pdf->Cell(3,1,$cell[$j][13],'B',0,'LRTB'); // upload_kk
  $pdf->Cell(3,1,$cell[$j][14],'B',0,'LRTB'); // upload_prestasi
  $pdf->Cell(3,1,$cell[$j][15],'B',0,'LRTB'); // username
  $pdf->Cell(3,1,$cell[$j][16],'B',0,'LRTB'); // password
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

