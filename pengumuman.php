


<?php
 
	$id_pendaftar=$_SESSION["cid"];
	$sql="select * from `$tbpendaftar` where `id_pendaftar`='$id_pendaftar' and not hasil=''";
	$jum=getField($conn,$sql);
	if($jum<1){
		echo"WAIT";
	}
	else{
	$d=getField($conn,$sql);
				$id_pendaftar=$d["id_pendaftar"];
				$id_pendaftar0=$d["id_pendaftar"];
				$nama_pendaftar=$d["nama_pendaftar"];
				$tempat_lahir=$d["tempat_lahir"];
				$tgl_lahir=WKT($d["tgl_lahir"]);
				$alamat=$d["alamat"];
				$no_tlpa=$d["no_tlpa"];
				$no_tlpo=$d["no_tlpo"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$nama_ortu=$d["nama_ortu"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$upload_khs=$d["upload_khs"];
				$upload_khs0=$d["upload_khs"];
				$upload_kk=$d["upload_kk"];
				$upload_kk0=$d["upload_kk"];
				$upload_prestasi=$d["upload_prestasi"]; //tambahin kolom di db
				$upload_prestasi0=$d["upload_prestasi"]; //tambahin kolom di db
				$username=$d["username"];
				$password=$d["password"];
				$id_periode=$d["id_periode"];
					$hasil=$d["hasil"];	
$organisasi=$d["organisasi"];

				$sql="select * from `$tbperiode` where `id_periode`='$id_periode'";
	$d=getField($conn,$sql);
				$gid_periode=$d["id_periode"];
				$gnama_periode=$d["nama_periode"];
				$gdeskripsi=$d["deskripsi"];
				$gstatus=$d["status"];
				$gketerangan=$d["keterangan"];

?>


<div id="accordion">
  <h3><b>Pengumuman</b></h3>
  <div>



<table width="444">


<tr>
<td width="145" ><label for="nama_periode">Nama Periode</label><td width="30">:
<td width="194" colspan="2"><?php echo $gnama_periode;?></td>
</tr>

<tr>
<td ><label for="deskripsi">Deskripsi</label><td>:<td colspan="2"><?php echo "$gdeskripsi";?>
</td>
</tr>

<tr>
<td ><label for="status">Status</label>
<td>:<td colspan="2"><?php echo $gstatus." $gketerangan";?></td></tr>



</table>

<hr>
<form action="" method="post" enctype="multipart/form-data">
<table width="587">


<tr>
<th width="226" height="37"><label for="id_pendaftar">ID Pendaftar</label>
<th width="10">:
<th width="336" colspan="2"><b><?php echo $id_pendaftar;?></b>
</tr>

<tr>
<td height="47"><label for="nama_pendaftar">Nama Pendaftar</label>
<td>:
<td colspan="2"><?php echo $nama_pendaftar;?> </td>
</tr>

<tr>
<td height="43"><label for="tempat_lahir">Tempat Lahir</label>
<td>:<td colspan="2"><?php echo $tempat_lahir;?>
</td>
</tr>


<tr>
<td height="48"><label for="tgl_lahir">Tanggal Lahir</label>
<td>:<td colspan="2"><?php echo $tgl_lahir;?>
</td>
</tr>


<tr>
<td height="50"><label for="alamat">Alamat</label>
<td>:<td colspan="2"><?php echo $alamat;?>
</td>
</tr>


<tr>
<td height="44"><label for="no_tlpa">No Telepon Anak</label>
<td>:<td colspan="2"><?php echo $no_tlpa;?>
</td>
</tr>



<tr>
<td height="46"><label for="nama_ortu">Nama Orang Tua</label>
<td>:
<td colspan="2"><?php echo $nama_ortu;?></td>
</tr>

<tr>
<td height="41"><label for="no_tlpo">No Telepon Orang Tua</label>
<td>:<td colspan="2"><?php echo $no_tlpo;?>
</td>
</tr>


<tr>
<td height="43"><label for="ipk">IPK</label>
<td>:
<td colspan="2"><?php echo $ipk;?></td>
</tr>


<tr>
<td height="46"><label for="prestasi">Prestasi</label>
<td>:
<td colspan="2"><?php echo $prestasi;?></td>
</tr>


<tr>
<td height="38"><label for="organisasi">Organisasi Diikuti</label>
<td>:
<td colspan="2"><?php echo $organisasi;?></td>
</tr>

<tr>
<td height="46"><label for="penghasilan">Penghasilan</label>
<td>:
<td colspan="2"><?php echo $penghasilan;?></td>
</tr>


<tr>
<td height="38"><label for="jumlah_tanggungan">Jumlah Tanggungan</label>
<td>:
<td colspan="2"><?php echo $jumlah_tanggungan;?></td>
</tr>




<tr>
<td height="38"><label for="hasil">Hasil</label>
<td>:
<td colspan="2"><?php echo $hasil;?></td>
</tr>



</table>

<?php

}
?>