<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan Data Pendaftar:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>id pendaftar</td>
    <th width="25%"><center>nama pendaftar</td>
    <th width="25%"><center>tempat lahir</td>
    <th width="20%"><center>tgl lahir</td>
    <th width="10%"><center>alamat</td>
    <th width="5%"><center>no_tlpa</td>
    <th width="5%"><center>no_tlpo</td>
    <th width="5%"><center>ipk</td>
    <th width="5%"><center>prestasi</td>
    <th width="5%"><center>nama_ortu</td>
    <th width="5%"><center>penghasilan</td>
    <th width="5%"><center>jumlah_tanggungan</td>
   	<th width="5%"><center>upload khs</td>
   	<th width="5%"><center>upload kk</td>
   	<th width="5%"><center>upload prestasi</td>
   	<th width="5%"><center>username</td>
   	<th width="5%"><center>password</td>
   			
  </tr>
<?php  
  $sql="select * from `$tbpendaftar` order by `id_pendaftar` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
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
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_pendaftar</td>
				<td>$nama_pendaftar</td>
				<td>$tempat_lahir</td>
				<td>$tgl_lahir</td>
				<td>$no_tlpa</td>
				<td>$no_tlpo</td>
				<td>$ipk</td>
				<td>$prestasi</td>
				<td>$nama_ortu</td>
				<td>$penghasilan</td>
				<td>$jumlah_tanggungan</td>
				<td>$upload_khs</td>
				<td>$upload_kk</td>
				<td>$upload_prestasi</td>
				<td>$username</td>
				<td>$password</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_pendaftar</td>
				<td>$nama_pendaftar</td>
				<td>$tempat_lahir</td>
				<td>$tgl_lahir</td>
				<td>$no_tlpa</td>
				<td>$no_tlpo</td>
				<td>$ipk</td>
				<td>$prestasi</td>
				<td>$nama_ortu</td>
				<td>$penghasilan</td>
				<td>$jumlah_tanggungan</td>
				<td>$upload_khs</td>
				<td>$upload_kk</td>
				<td>$upload_prestasi</td>
				<td>$username</td>
				<td>$password</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data Pendaftar belum tersedia...</blink></td></tr>";}
		
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

</table>

