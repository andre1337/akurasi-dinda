<div id="accordion">
  <h3>Info Data Pengujian</h3>
  <div>

<?php
	$id_pendaftar=$_GET["id"];
	$sql="select * from `$tbpendaftar` where `id_pendaftar`='$id_pendaftar'";
	$d=getField($conn,$sql);
				$id_pendaftar=$d["id_pendaftar"];
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
				$organisasi=$d["organisasi"];
				
				
				$upload_khs=$d["upload_khs"];
				$upload_khs0=$d["upload_khs"];
				$upload_kk=$d["upload_kk"];
				$upload_kk0=$d["upload_kk"];
				$upload_prestasi=$d["upload_prestasi"]; //tambahin kolom di db
				$upload_prestasi0=$d["upload_prestasi"]; //tambahin kolom di db
				$username=$d["username"];
				$password=$d["password"];
				
	
	$v1=($ipk);
	$v2=($prestasi);
	$v3=($penghasilan);
	$v4=($jumlah_tanggungan);
	$v5=($organisasi);
	
	$k1=getV1($ipk);
	$k2=getV2($prestasi);
	$k3=getV3($penghasilan);
	$k4=getV4($jumlah_tanggungan);
	$k5=getV5($organisasi);

				$sql="select * from `$tbperiode` where `id_periode`='$id_periode'";
	$d=getField($conn,$sql);
				$gid_periode=$d["id_periode"];
				$gnama_periode=$d["nama_periode"];
				$gdeskripsi=$d["deskripsi"];
				$gstatus=$d["status"];
				$gketerangan=$d["keterangan"];

}
?>


<div id="accordion">
  <h3>Input Data Pendaftar</h3>
  <div>


<table width="60%">
<tr>
<td width="145" ><label for="nama_periode">Nama Periode</label><td width="30">:
<td width="194" colspan="2"><?php echo $gnama_periode;?></td>
</tr>

<tr>
<td ><label for="deskripsi">Deskripsi</label><td>:<td colspan="2"><?php echo "$gdeskripsi";?>
</td>
</tr>

<tr>
<td colspan="4"><hr>
</tr>

<tr>
<th width="226" height="37"><label for="id_pendaftar">ID Pendaftar</label>
<th width="10">:
<th width="336" colspan="2"><b><?php echo $id_pendaftar;?></b>
</tr>

<tr>
<td height="47"><label for="nama_pendaftar">Nama Pendaftar</label>
<td>:
<td colspan="2"><?php echo $nama_pendaftar;?></td>
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
<td height="42"><label for="prestasi">Prestasi</label>
<td>:
<td colspan="2"><?php echo $prestasi;?></td>
</tr>


<tr>
<td height="46"><label for="nama_ortu">Nama Orang Tua</label>
<td>:
<td colspan="2"><?php echo $nama_ortu;?></td>
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
<td height="38"><label for="jumlah_tanggungan">Prestasi</label>
<td>:
<td colspan="2"><?php echo $prestasi;?></td>
</tr>


<tr>
  <td height="47"><strong>Dokumen
    </strong>
  <td>:<td colspan="2">
  <?php
  echo"<a href='downloadget.php?file=$upload_khs'>KHS</a> |<a href='downloadget.php?file=$upload_kk'>KK</a> | <a href='downloadget.php?file=$upload_prestasi'>PRESTASI</a> |";
  ?>
  </td>
</tr>



</table>

<hr>

<?php
	
	
	$sql="select distinct(penilaian) from `tbl_datalatih`  order by `penilaian` asc";		
	$arr=getData($conn,$sql);
	$i=0;
		foreach($arr as $d) {						
				$penilaian=$d["penilaian"];
				$ik[$i]=$penilaian;
				$nhasil[$i]=$penilaian;
				$i++;
		}
	
	$jumK1=getOut($conn,$ik[0]);
	$jumK2=getOut($conn,$ik[1]);
	$jumK3=getOut($conn,$ik[2]);
	
	$totK=$jumK1+$jumK2+$jumK3;

$jumG1A=getKK($conn,'n1',$k1,$ik[0]);
$jumG1B=getKK($conn,'n1',$k1,$ik[1]);
$jumG1C=getKK($conn,'n1',$k1,$ik[2]);

$jumG2A=getKK($conn,'n2',$k2,$ik[0]);
$jumG2B=getKK($conn,'n2',$k2,$ik[1]);
$jumG2C=getKK($conn,'n2',$k2,$ik[2]);

$jumG3A=getKK($conn,'n3',$k3,$ik[0]);
$jumG3B=getKK($conn,'n3',$k3,$ik[1]);
$jumG3C=getKK($conn,'n3',$k3,$ik[2]);

$jumG4A=getKK($conn,'n4',$k4,$ik[0]);
$jumG4B=getKK($conn,'n4',$k4,$ik[1]);
$jumG4C=getKK($conn,'n4',$k4,$ik[2]);

$jumG5A=getKK($conn,'n5',$k5,$ik[0]);
$jumG5B=getKK($conn,'n5',$k5,$ik[1]);
$jumG5C=getKK($conn,'n5',$k5,$ik[2]);


	
$HA=($jumK1/$totK)*($jumG1A/$jumK1)*($jumG2A/$jumK1)*($jumG3A/$jumK1)*($jumG4A/$jumK1)*($jumG5A/$jumK1);
$HB=($jumK2/$totK)*($jumG1B/$jumK2)*($jumG2B/$jumK2)*($jumG3B/$jumK2)*($jumG4B/$jumK2)*($jumG5B/$jumK2);
$HC=($jumK3/$totK)*($jumG1C/$jumK3)*($jumG2C/$jumK3)*($jumG3C/$jumK3)*($jumG4C/$jumK3)*($jumG5C/$jumK3);

$SHA="($jumK1/$totK) x ($jumG1A/$jumK1) x ($jumG2A/$jumK1) x ($jumG3A/$jumK1) x ($jumG4A/$jumK1) x ($jumG5A/$jumK1) ";
$SHB="($jumK2/$totK) x ($jumG1B/$jumK2) x ($jumG2B/$jumK2) x ($jumG3B/$jumK2) x ($jumG4B/$jumK2) x ($jumG5B/$jumK2) ";
$SHC="($jumK3/$totK) x ($jumG1C/$jumK3) x ($jumG2C/$jumK3) x ($jumG3C/$jumK3) x ($jumG4C/$jumK3) x ($jumG5C/$jumK3) ";



	$max=$HA;
	$smax=$SHA;
	$index=2;
if($HA>=$HB && $HA>=$HC ){
	$max=$HA;
	$smax=$SHA;
	$index=0;
	}
else if($HB>=$HA && $HB>=$HB ){
	$max=$HB;
	$smax=$SHB;
	$index=1;
	}
else if($HC>=$HA && $HC>=$HB ){
	$max=$HC;
	$smax=$SHC;
	$index=2;
	}
$nout=$nhasil[$index];
$iout=$ik[$index];
					
$gab="<h3>Perhitungan</h3>";
$gab.= "<b>$nhasil[0] => $SHA =$HA</b><br>";
$gab.= "<b>$nhasil[1] => $SHB =$HB</b><br>";
$gab.= "<b>$nhasil[2] => $SHC =$HC</b><br>";


$gab2= "
<table><tr>
<td><b>Analisa  Perhitungan Naive Bayes Tertinggi Adalah : $nout </b>
<br>Dengan Nilai Bobot: $max
<td>
<img src='ypathicon/print.png' width='20' height='20' title='PRINT' OnClick='PRINTME()'>
</tr>
</table>
";

$gab22= "
<table><tr>
<td><b>Analisa  Perhitungan Naive Bayes Tertinggi Adalah : $nout </b>
<br>Dengan Nilai Bobot: $max
</tr>
</table>
";
$rekapitulasi=  "$nhasil[0] => $SHA =$HA<br>";
$rekapitulasi.= "$nhasil[1] => $SHB =$HB<br>";
$rekapitulasi.= "$nhasil[2] => $SHC =$HC<br>";
$rekapitulasi.="Nilai Tertinggi Adalah : $nout dengan Nilai Bobot: $max";

$gab0="<h1>Analisa Kepuasan terhadap Beasiswa</h1> 
NIM : $nim<br>
Nama Mahasiswa: $nm<br> 
<b>IPK:</b> $v1 ($k1)<br>
<b>Prestasi:</b> $v1 ($k2)<br>
<b>Penghasilan:</b> $v1 ($k3)<br>
<b>Jumlah Tanggungan:</b> $v1 ($k4)<br> 
<b>Organisasi:</b> $v1 ($k5)<br>";

$_SESSION["gab"]=$gab0;

//echo $gab0;
echo $gab;
echo $gab2;
$_SESSION["gab0"]=$gab0;
$_SESSION["gab"]=$gab;
$_SESSION["gab2"]=$gab22."<hr>Analisa Kepuasan terhadap Beasiswa
 $nm Adalah : $nout dengan Nilai Bobot: $max";

	
$penilaian=$iout;
$keterangan_pengujian=$rekapitulasi;
	
$sql="delete from `$tbhasil` where `id_pendaftar`='$id_pendaftar'";
$hapus=process($conn,$sql);


$sql=" INSERT INTO `$tbhasil` (
`id_hasil` ,
`id_pendaftar` ,
`id_periode` ,
`rekapitulasi` ,
`penilaian` ,
`status` ,
`keterangan`  

) VALUES (
'', 
'$id_pendaftar',
'$id_periode',
'$rekapitulasi',
'$penilaian',
'Proses',
'$max'
)";
	
$simpan=process($conn,$sql);

echo $sql="update `$tbpendaftar` set hasil='$penilaian' where `id_pendaftar`='$id_pendaftar'";
$up=process($conn,$sql);

?>
</div>


<?php

				
function getKK($conn,$kolom,$data,$kat){
  $sql="select `id_datalatih` from `tbl_datalatih` where `$kolom`='$data' and `penilaian`='$kat'";
  $jum=getJum($conn,$sql);
  return $jum;
}

function getOut($conn,$kat){
  $sql="select `id_datalatih` from `tbl_datalatih` where `penilaian`='$kat'";
  $jum=getJum($conn,$sql);
  return $jum;
}



?>