<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

 	$buffer = ""; 
    $separator = ","; //, atau ;
    $newline = "\r\n"; 
    		    
    $buffer = "id_pendaftar".$separator ."nama_pendaftar".$separator ."tempat_lahir".$separator ."tgl_lahir".$separator ."alamat".$separator ."no_tlpa".$separator."no_tlpo".$separator."ipk".$separator."prestasi".$separator."nama_ortu".$separator."penghasilan".$separator."jumlah_tanggungan".$separator."upload_khs".$separator."upload_kk".$separator."upload_prestasi".$separator."username".$separator."password".$separator; 
    $buffer .= $newline; 
    
  $sql="select `id_pendaftar`,`nama_pendaftar`,`tempat_lahir`,`tgl_lahir`,`alamat`,`no_tlpa`,`no_tlpo`,`ipk`,,`prestasi`,`nama_ortu`,`penghasilan`,`jumlah_tanggungan`,`upload_khs`,`upload_kk`,`upload_prestasi`,`username`,`password` from `$tbpendaftar` order by `id_pendaftar` desc";
  $jum=getJum($conn,$sql);	
  if($jum>0){						
	  $arr=getData($conn,$sql);
	  foreach($arr as $d) {		 
					$value=$d["id_pendaftar"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["nama_pendaftar"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["tempat_lahir"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["tgl_lahir"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["alamat"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["no_tlpa"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["no_tlpo"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["ipk"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["prestasi"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["nama_ortu"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["penghasilan"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["jumlah_tanggungan"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["upload_khs"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["upload_kk"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["upload_prestasi"];$buffer .= "\"".$value."\"".$separator; 
          $value=$d["username"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["password"];$buffer .= "\"".$value."\"".$separator; 
				$buffer .= $newline; 
		}	
  }
  else{
    $buffer .= $newline; 
	  }
    header("Content-type: application/vnd.ms-excel"); 
    header("Content-Length: ".strlen($buffer)); 
    header("Content-Disposition: attachment; filename=report.csv"); 
    header("Expires: 0"); 
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
    header("Pragma: public"); 

    print $buffer;
	
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