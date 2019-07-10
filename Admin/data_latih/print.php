<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data mahasiswa:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>id_datalatih</td>
    <th width="25%"><center>ipk</td>
    <th width="25%"><center>prestasi</td>
    <th width="20%"><center>penghasilan</td>
    <th width="20%"><center>jumlah_tanggungan</td>
    <th width="20%"><center>organisasi</td>	
    <th width="10%"><center>penilaian</td>
    <th width="5%"><center>keterangan</td>
  </tr>
<?php  
  $sql="select * from `$tbuser` order by `id_datalatih` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_datalatih=$d["id_datalatih"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
				$penilaian=$d["penilaian"];
				$keterangan=$d["keterangan"];
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_datalatih</td>
				<td>$ipk</td>
				<td>$prestasi</td>
				<td>$penghasilan</td>
				<td>$jumlah_tanggungan</td>
				<td>$organisasi</td>
				<td>$penilaian</td>
				<td>$keterangan</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_datalatih</td>
				<td>$ipk</td>
				<td>$prestasi</td>
				<td>$penghasilan</td>
				<td>$jumlah_tanggungan</td>
				<td>$organisasi</td>
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

