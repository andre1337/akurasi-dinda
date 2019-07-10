<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbpendaftar`";
if(getJum($conn,$sql)>0){
	print "<pendaftar>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_pendaftar=$d["id_pendaftar"];
				$nama_pendaftar=$d["nama_pendaftar"];
				$tempat_lahir=$d["tempat_lahir"];
				$tgl_lahir=$d["tgl_lahir"];
			    $alamat=$d["alamat"];
				$no_tlpa=$d["no_tlpa"];
				$no_tlpo=$d["no_tlpo"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$nama_ortu=$d["nama_ortu"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$upload_khs=$d["upload_khs"];
				$upload_kk=$d["upload_kk"];
				$upload_prestasi=$d["upload_prestasi"];
				$username=$d["username"];
				$password=$d["password"];
										

				print "<record>\n";
				print "  <nama>$nama_pendaftar</nama>\n";
				print "  <tempat_lahir>$tempat_lahir</tempat_lahir>\n";
				print "  <tgl_lahir>$tgl_lahir</tgl_lahir>\n";
				print "  <alamat>$alamat</alamat>\n";
				print "  <no_tlpa>$no_tlpa</no_tlpa>\n";
				print "  <no_tlpo>$no_tlpo</no_tlpo>\n";
				print "  <ipk>$ipk</ipk>\n";
				print "  <prestasi>$prestasi</prestasi>\n";
				print "  <nama_ortu>$nama_ortu</nama_ortu>\n";
				print "  <penghasilan>$penghasilan</penghasilan>\n";
				print "  <jumlah_tanggungan>$jumlah_tanggungan</jumlah_tanggungan>\n";
				print "  <upload_khs>$upload_khs</upload_khs>\n";
				print "  <upload_kk>$upload_kk</upload_kk>\n";
				print "  <upload_prestasi>$upload_prestasi</upload_prestasi>\n";
				print "  <username>$username</username>\n";
				print "  <password>$password</password>\n";
				print "</record>\n";
			}
	print "</pendaftar>\n";
}
else{
	$null="null";
	print "<pendaftar>\n";
		print "<record>\n";
				print "  <nama>$null</nama>\n";
				print "  <tempat_lahir>$null</tempat_lahir>\n";
				print "  <tgl_lahir>$null</tgl_lahir>\n";
				print "  <alamat>$null</alamat>\n";
				print "  <no_tlpa>$null</no_tlpa>\n";
				print "  <no_tlpo>$null</no_tlpo>\n";
				print "  <ipk>$null</ipk>\n";
				print "  <prestasi>$null</prestasi>\n";
				print "  <nama_ortu>$null</nama_ortu>\n";
				print "  <penghasilan>$null</penghasilan>\n";
				print "  <jumlah_tanggungan>$null</jumlah_tanggungan>\n";
				print "  <upload_khs>$null</upload_khs>\n";
				print "  <upload_kk>$null</upload_kk>\n";
				print "  <upload_prestasi>$null</upload_prestasi>\n";
				print "  <username>$null</username>\n";
				print "  <password>$null</password>\n";
		print "</record>\n";
	print "</pendaftar>\n";
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
	