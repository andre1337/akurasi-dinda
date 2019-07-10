<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan Hasil:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>No</td>
    <th width="10%"><center>ID Hasil</td>
    <th width="25%"><center>ID Pendaftar</td>
    <th width="25%"><center>ID Periode</td>
    <th width="20%"><center>Rekapitulasi</td>
    <th width="20%"><center>Penilaian</td>
    <th width="20%"><center>Status</td>	
    <th width="5%"><center>Keterangan</td>
  </tr>
<?php  
  $sql="select * from `$tbhasil` order by `id_hasil` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_hasil=$d["id_hasil"];
				$id_pendaftar=$d["id_pendaftar"];
				$id_periode=$d["id_periode"];
				$rekapitulasi=$d["rekapitulasi"];
				$penilaian=$d["penilaian"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_hasil</td>
				<td>$id_pendaftar</td>
				<td>$id_periode</td>
				<td>$rekapitulasi</td>
				<td>$penilaian</td>
				<td>$status</td>
				<td>$penilaian</td>
				<td>$keterangan</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_hasil</td>
				<td>$id_pendaftar</td>
				<td>$id_periode</td>
				<td>$rekapitulasi</td>
				<td>$penilaian</td>
				<td>$status</td>
				<td>$penilaian</td>
				<td>$keterangan</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data mahasiswa belum tersedia...</blink></td></tr>";}
		
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

