<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbhasil`";
if(getJum($conn,$sql)>0){
	print "<user>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_hasil=$d["id_hasil"];
				$id_pendaftar=$d["id_pendaftar"];
				$id_periode=$d["id_periode"];
				$rekapitulasi=$d["rekapitulasi"];
				$penilaian=$d["penilaian"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
												
				print "<record>\n";
				print "  <id_pendaftar>$id_pendaftar</id_pendaftar>\n";
				print "  <id_periode>$id_periode</id_periode>\n";
				print "  <rekapitulasi>$rekapitulasi</rekapitulasi>\n";
				print "  <penilaian>$penilaian</penilaian>\n";
				print "  <status>$status</status>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <id_hasil>$id_hasil</id_hasil>\n";
				print "</record>\n";
			}
	print "</user>\n";
}
else{
	$null="null";
	print "<user>\n";
		print "<record>\n";
				print "  <id_pendaftar>$null</id_pendaftar>\n";
				print "  <id_periode>$null</id_periode>\n";
				print "  <rekapitulasi>$null</rekapitulasi>\n";
				print "  <penilaian>$null</penilaian>\n";
				print "  <status>$null</status>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_hasil>$null</id_hasil>\n";
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
	