<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data mahasiswa:</h3>
 

<table width="90%" border="0">
  <tr>
       <th width="3%"><center>No</th>
    <th width="10%"><center>ID User</th>
    <th width="20%"><center>Nama</th>
    <th width="10%"><center>Telepon</th>
    <th width="30%"><center>Email</th>
    <th width="30%"><center>Username</th>
    <th width="20%"><center>Password</th>
 <!--    <th width="10%"><center>Status</th> -->
 <!--    <th width="15%"><center>Keterangan</th> -->
   <!--  <th width="10%"><center>Menu</th> -->
  </tr>
<?php  
  $sql="select * from `$tbuser` order by `id_user` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$tlp_user=$d["tlp_user"];
				$email=$d["email"];
				$username=$d["username"];
				$password=$d["password"];
				$keterangan=$d["keterangan"];
				$status=$d["status"];
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_user</td>
				<td>$nama_user</td>
				<td>$tlp_user</td>
				<td>$email</td>
				<td>$username</td>
				<td>$password</td>
			
			
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_user</td>
				<td>$nama_user</td>
				<td>$tlp_user</td>
				<td>$email</td>
				<td>$username</td>
				<td>$password</td>
			
			
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

