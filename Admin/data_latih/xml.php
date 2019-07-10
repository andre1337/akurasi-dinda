<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbdatalatih`";
if(getJum($conn,$sql)>0){
	print "<user>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_datalatih=$d["id_datalatih"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
			    $penilaian=$d["penilaian"];
				$keterangan=$d["keterangan"];
												
				print "<record>\n";
				print "  <ipk>$ipk</ipk>\n";
				print "  <prestasi>$prestasi</prestasi>\n";
				print "  <penghasilan>$penghasilan</penghasilan>\n";
				print "  <jumlah_tanggungan>$jumlah_tanggungan</jumlah_tanggungan>\n";
				print "  <organisasi>$organisasi</organisasi>\n";
				print "  <penilaian>$penilaian</penilaian>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <id_datalatih>$id_datalatih</id_datalatih>\n";
				print "</record>\n";
			}
	print "</user>\n";
}
else{
	$null="null";
	print "<user>\n";
		print "<record>\n";
				print "  <ipk>$null</ipk>\n";
				print "  <prestasi>$null</prestasi>\n";
				print "  <penghasilan>$null</penghasilan>\n";
				print "  <jumlah_tanggungan>$null</jumlah_tanggungan>\n";
				print "  <organisasi>$null</organisasi>\n";
				print "  <penilaian>$null</penilaian>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_datalatih>$null</id_datalatih>\n";
		print "</record>\n";
	print "</user>\n";
	}
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
	