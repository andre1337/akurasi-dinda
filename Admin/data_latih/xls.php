<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

 	$buffer = ""; 
    $separator = ","; //, atau ;
    $newline = "\r\n"; 
    		    
    $buffer = "id_datalatih".$separator ."ipk".$separator ."prestasi".$separator ."penghasilan".$separator ."jumlah_tanggungan".$separator ."organisasi".$separator ."penilaian".$separator."keterangan".$separator; 
    $buffer .= $newline; 
    
  $sql="select `id_datalatih`,`ipk`,`prestasi`,`penghasilan`,`jumlah_tanggungan`, `organisasi`, `penilaian`, `keterangan` from `$tbdatalatih` order by `id_datalatih` desc";
  $jum=getJum($conn,$sql);	
  if($jum>0){						
	  $arr=getData($conn,$sql);
	  foreach($arr as $d) {		 
					$value=$d["id_datalatih"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["ipk"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["prestasi"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["penghasilan"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["jumlah_tanggungan"];$buffer .= "\"".$value."\"".$separator; 
          $value=$d["organisasi"];$buffer .= "\"".$value."\"".$separator;
					$value=$d["penilaian"];$buffer .= "\"".$value."\"".$separator;
          $value=$d["keterangan"];$buffer .= "\"".$value."\"".$separator; 
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