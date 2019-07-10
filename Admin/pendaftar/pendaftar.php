<?php
$pro="simpan";
$tgl_lahir=WKT(date("Y-m-d"));
$upload_khs0="namafile.pdf";
$upload_kk0="namafile.pdf";
$upload_prestasi0="namafile.pdf";
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_lahir").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('pendaftar/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

 <link rel="stylesheet" href="js/jquery-ui.css">
  <link rel="stylesheet" href="resources/demos/style.css">
<script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>


<?php
  $sql="select `id_pendaftar` from `$tbpendaftar` order by `id_pendaftar` desc";
  $q=mysqli_query($conn, $sql);
  $jum=mysqli_num_rows($q);
  $th=date("y");
  $bl=date("m")+0;if($bl<10){$bl="0".$bl;}

  $kd="P00".$th.$bl;//KEG1610001
  if($jum > 0){
   $d=mysqli_fetch_array($q);
   $idmax=$d["id_pendaftar"];
   
   $bul=substr($idmax,5,2);
   $tah=substr($idmax,3,2);
    if($bul==$bl && $tah==$th){
     $urut=substr($idmax,7,3)+1;
     if($urut<10){$idmax="$kd"."00".$urut;}
     else if($urut<100){$idmax="$kd"."0".$urut;}
     else{$idmax="$kd".$urut;}
    }//==
    else{
     $idmax="$kd"."001";
     }   
   }//jum>0
  else{$idmax="$kd"."001";}
  $id_pendaftar=$idmax;



if($_GET["pro"]=="ubah"){
	$id_pendaftar=$_GET["kode"];
	$sql="select * from `$tbpendaftar` where `id_pendaftar`='$id_pendaftar'";
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
				$pro="ubah";		
$organisasi=$d["organisasi"];

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



<table width="444" class="table table-striped table-bordered table-hover">


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
<form action="" method="post" enctype="multipart/form-data" >
<table width="587" class="table table-striped table-bordered table-hover">


<tr>
<th width="226" height="37"><label for="id_pendaftar">ID Pendaftar</label>
<th width="10">:
<th width="336" colspan="2"><b><?php echo $id_pendaftar;?></b>
</tr>

<tr>
<td height="47"><label for="nama_pendaftar">Nama Pendaftar</label>
<td>:
<td colspan="2"><input class="form-control" name="nama_pendaftar" type="text" id="nama_pendaftar" value="<?php echo $nama_pendaftar;?>" size="30" /></td>
</tr>

<tr>
<td height="43"><label for="tempat_lahir">Tempat Lahir</label>
<td>:<td colspan="2"><input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php echo $tempat_lahir;?>" size="15" />
</td>
</tr>


<tr>
<td height="48"><label for="tgl_lahir">Tanggal Lahir</label>
<td>:<td colspan="2"><input class="form-control" name="tgl_lahir" type="text" id="tgl_lahir" value="<?php echo $tgl_lahir;?>" size="25" />
</td>
</tr>


<tr>
<td height="50"><label for="alamat">Alamat</label>
<td>:<td colspan="2"><input class="form-control" name="alamat" type="text" id="alamat" value="<?php echo $alamat;?>" size="25" />
</td>
</tr>


<tr>
<td height="44"><label for="no_tlpa">No Telepon Anak</label>
<td>:<td colspan="2"><input class="form-control" name="no_tlpa" type="text" id="no_tlpa" value="<?php echo $no_tlpa;?>" size="15" />
</td>
</tr>



<tr>
<td height="46"><label for="nama_ortu">Nama Orang Tua</label>
<td>:
<td colspan="2"><input class="form-control" name="nama_ortu" type="text" id="nama_ortu" value="<?php echo $nama_ortu;?>" size="30" /></td>
</tr>

<tr>
<td height="41"><label for="no_tlpo">No Telepon Orang Tua</label>
<td>:<td colspan="2"><input class="form-control" name="no_tlpo" type="text" id="no_tlpo" value="<?php echo $no_tlpo;?>" size="15" />
</td>
</tr>


<tr>
<td height="43"><label for="ipk">IPK</label>
<td>:
<td colspan="2"><input class="form-control" name="ipk" type="text" id="ipk" value="<?php echo $ipk;?>" size="30" /></td>
</tr>


<tr>
<td height="56" valign="top"><label for="prestasi">Prestasi</label><td valign="top">:<td colspan="2" valign="top">
<input  type="radio" name="prestasi" id="prestasi"  value="International" <?php if($prestasi=="International"){echo"checked";}?>/>Tingkat Internasional <br>
<input  type="radio" name="prestasi" id="prestasi" value="Nasional" <?php if($prestasi=="Nasional"){echo"checked";}?>/>Tingkat Nasional <br>
<input  type="radio" name="prestasi" id="prestasi"  value="Propinsi" <?php if($prestasi=="Propinsi"){echo"checked";}?>/>Tingkat Propinsi <br>
<input  type="radio" name="prestasi" id="prestasi" checked="checked"  value="Tidak Ada" <?php if($prestasi=="Tidak Ada"){echo"checked";}?>/>Tidak Ada
</td>
</tr>

<tr>
<td height="38"><label for="organisasi">Organisasi Diikuti</label>
<td>:
<td colspan="2"><input class="form-control" name="organisasi" type="text" id="organisasi" value="<?php echo $organisasi;?>" size="30" /></td>
</tr>

<tr>
<td height="46"><label for="penghasilan">Penghasilan</label>
<td>:
<td colspan="2"><input class="form-control" name="penghasilan" type="text" id="penghasilan" value="<?php echo $penghasilan;?>" size="30" /></td>
</tr>


<tr>
<td height="38"><label for="jumlah_tanggungan">Jumlah Tanggungan</label>
<td>:
<td colspan="2"><input class="form-control" name="jumlah_tanggungan" type="text" id="jumlah_tanggungan" value="<?php echo $jumlah_tanggungan;?>" size="30" /></td>
</tr>





<tr>
  <td height="47"><strong>Upload KHS
    </strong>
  <td>:<td colspan="2"><label for="upload_khs"></label>
        <input class="form-control" name="upload_khs" type="file" id="upload_khs" size="20" /> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_khs;?>")'><?php echo $upload_khs0;?></a></td>
</tr>

<tr>
  <td height="35"><strong>Upload KK</strong>
  <td>:<td colspan="2"><label for="upload_kk"></label>
        <input class="form-control" name="upload_kk" type="file" id="upload_kk" size="20" /> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_kk;?>")'><?php echo $upload_kk0;?></a></td>
</tr>

<tr>
  <td height="43"><strong>Upload Prestasi
    </strong>
  <td>:<td colspan="2"><label for="upload_prestasi"></label>
        <input class="form-control" name="upload_prestasi" type="file" id="upload_prestasi" size="20" /> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_prestasi;?>")'><?php echo $upload_prestasi0;?></a></td>
</tr>

<tr>
<td height="46"><label for="username">Username</label>
<td>:
<td colspan="2"><input class="form-control" name="username" type="text" id="username" value="<?php echo $username;?>" size="30" /></td>
</tr>

<tr>
<td height="46"><label for="password">Password</label>
<td>:
<td colspan="2"><input class="form-control" name="password" type="password" id="password" value="<?php echo $password;?>" size="30" /></td>
</tr>



<tr>
<td>
<td>
<td colspan="2">	<input class="btn btn-info" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
          <input name="id_periode" type="hidden" id="id_periode" value="<?php echo $gid_periode;?>" />

        <input name="id_pendaftar" type="hidden" id="id_pendaftar" value="<?php echo $id_pendaftar;?>" />
        <input name="upload_kk0" type="hidden" id="upload_kk0" value="<?php echo $upload_kk0;?>" />
       <input name="upload_khs0" type="hidden" id="upload_khs0" value="<?php echo $upload_khs0;?>" />
       <input name="upload_prestasi0" type="hidden" id="upload_prestasi0" value="<?php echo $upload_prestasi0;?>" />
        <input name="id_pendaftar0" type="hidden" id="id_pendaftar0" value="<?php echo $id_pendaftar0;?>" />
        <a href="?mnu=pendaftar"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>

</div>
 <?php  
  $sqlq="select distinct(id_periode) from `$tbpendaftar` order by `id_periode` desc";
  $jumq=getJum($conn,$sqlq);
		if($jumq <1){
			echo"<h1>Maaf data belum tersedia...</h1>";
			}								
	$arrq=getData($conn,$sqlq);
		foreach($arrq as $dq) {							
				$id_periode=$dq["id_periode"];

?> 
<h3>Data Pendaftar Periode <?php echo getPeriode($conn,$id_periode);?></h3>
  <div>


Data Pendaftar: 
<a href="pendaftar/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="pendaftar/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>
<table width="1146" class="table table-striped table-bordered table-hover" id="example2">
  	<thead>
  	<tr >
    <th width="2%"><center>No</th>
    <th width="30%"><center>Data Pendaftar</th>
    <th width="15%"><center>Data Orang Tua</th>
    <th width="15%"><center>Hasil</th>	
    <th width="11%"><center>Menu</th>
  	</tr>
  	</thead>
  	<tbody>
<?php  
  $sql="select * from `$tbpendaftar` where id_periode='$id_periode' order by `id_pendaftar` desc";
  $jum=getJum($conn,$sql);
		if($jum > 0){
	//--------------------------------------------------------------------------------------------
	$batas   = 10;
	$page = $_GET['page'];
	if(empty($page)){$posawal  = 0;$page = 1;}
	else{$posawal = ($page-1) * $batas;}
	
	$sql2 = $sql." LIMIT $posawal,$batas";
	$no = $posawal+1;
	//--------------------------------------------------------------------------------------------									
	$arr=getData($conn,$sql2);
		foreach($arr as $d) {							
				$id_pendaftar=$d["id_pendaftar"];
				$nama_pendaftar=strtoupper($d["nama_pendaftar"]);
				$tempat_lahir=$d["tempat_lahir"];
				$tgl_lahir=WKT($d["tgl_lahir"]);
				$alamat=$d["alamat"];
				$no_tlpa=$d["no_tlpa"];
				$no_tlpo=$d["no_tlpo"];
				$nama_ortu=$d["nama_ortu"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$organisasi=$d["organisasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$upload_khs=$d["upload_khs"];
				$upload_kk=$d["upload_kk"];
				$upload_prestasi=$d["upload_prestasi"];
				$username=$d["username"];
				$password=$d["password"];
				$hasil=$d["hasil"];

					
echo"<tr bgcolor='$color'>
				<td>$no</td>
				
				<td>
				<b>Nama :  $nama_pendaftar ($id_pendaftar) </b>
				<br><b>TTL</b> :</b> $tempat_lahir , $tgl_lahir
				<br><b>No Anak</b> : $no_tlpa
				<br><b>IPK</b> :$ipk
				<br><b>Prestasi</b>: $prestasi 
				<br><b>Organisasi yang Diikuti</b> : $organisasi						
				<br><b>Dokumen</b> : 
				<a href='downloadget.php?file=$upload_khs'>KHS</a> |
				<a href='downloadget.php?file=$upload_kk'>KK</a> |
				<a href='downloadget.php?file=$upload_prestasi'>PRESTASI</a> |
				</td>

				<td>
				<br><b>Orang Tua</b>: $nama_ortu 
				<br><b>Alamat</b> : </b> $alamat
				<br><b>No Orang Tua</b>: $no_tlpo
				<br><b>Penghasilan Orang Tua</b>: Rp ".RP($penghasilan)." 
				<br><b>Jumlah Tanggungan</b>: $jumlah_tanggungan Orang
				</td>

				<td>
				<center>$hasil</center>
				</td>

				<td align='center'>
<a href='?mnu=nb&id=$id_pendaftar'><img src='ypathicon/proses.png' title='Proses Naive Bayes'></a>				
<a href='?mnu=pendaftar&pro=ubah&kode=$id_pendaftar'><img src='ypathicon/edit.png' title='ubah'></a>
<a href='?mnu=pendaftar&pro=hapus&kode=$id_pendaftar'><img src='ypathicon/delete.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $id_pendaftar pada data pendaftar ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data pendaftar belum tersedia...</blink></td></tr>";}
?>
 </tbody>
</table>

<?php
//Langkah 3: Hitung total data dan page 
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=pendaftar'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=pendaftar'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=pendaftar'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>

</div>
<?php }?>
</div>

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pendaftar=strip_tags($_POST["id_pendaftar"]);
	$id_pendaftar0=strip_tags($_POST["id_pendaftar0"]);
	$nama_pendaftar=strip_tags($_POST["nama_pendaftar"]);
	$tempat_lahir=strip_tags($_POST["tempat_lahir"]);
	$tgl_lahir=BAL(strip_tags($_POST["tgl_lahir"]));
	$alamat=strip_tags($_POST["alamat"]);
	$no_tlpa=strip_tags($_POST["no_tlpa"]);
	$no_tlpo=strip_tags($_POST["no_tlpo"]);
	$ipk=strip_tags($_POST["ipk"]);
	$prestasi=strip_tags($_POST["prestasi"]);
	$organisasi=strip_tags($_POST["organisasi"]);
	$nama_ortu=strip_tags($_POST["nama_ortu"]);
	$penghasilan=strip_tags($_POST["penghasilan"]);
	$jumlah_tanggungan=strip_tags($_POST["jumlah_tanggungan"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$hasil=strip_tags($_POST["hasil"]);
	$id_periode=strip_tags($_POST["id_periode"]);

	$upload_khs0=strip_tags($_POST["upload_khs0"]);
	if ($_FILES["upload_khs"] != "") {
		@copy($_FILES["upload_khs"]["tmp_name"],"$YPATH/".$_FILES["upload_khs"]["name"]);
		$upload_khs=$_FILES["upload_khs"]["name"];
		} 
	else {$upload_khs=$upload_khs0;}
	if(strlen($upload_khs)<1){$upload_khs=$upload_khs0;}


	$upload_kk0=strip_tags($_POST["upload_kk0"]);
	if ($_FILES["upload_kk"] != "") {
		@copy($_FILES["upload_kk"]["tmp_name"],"$YPATH/".$_FILES["upload_kk"]["name"]);
		$upload_kk=$_FILES["upload_kk"]["name"];
		} 
	else {$upload_kk=$upload_kk0;}
	if(strlen($upload_kk)<1){$upload_kk=$upload_kk0;}


	$upload_prestasi0=strip_tags($_POST["upload_prestasi0"]);
	if ($_FILES["upload_prestasi"] != "") {
		@copy($_FILES["upload_prestasi"]["tmp_name"],"$YPATH/".$_FILES["upload_prestasi"]["name"]);
		$upload_prestasi=$_FILES["upload_prestasi"]["name"];
		} 
	else {$upload_prestasi=$upload_prestasi0;}
	if(strlen($upload_prestasi)<1){$upload_prestasi=$upload_prestasi0;}
	
if($pro=="simpan"){
$sql=" INSERT INTO `$tbpendaftar` (
`id_pendaftar` ,
`nama_pendaftar` ,
`tempat_lahir` ,
`tgl_lahir` ,
`alamat` ,
`no_tlpa` ,
`no_tlpo` ,
`ipk` ,
`prestasi` ,
`organisasi`  ,
`nama_ortu` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`upload_khs` ,
`upload_kk` ,
`upload_prestasi` ,
`username` ,
`password`  ,
`id_periode` 
) VALUES (
'$id_pendaftar', 
'$nama_pendaftar', 
'$tempat_lahir',
'$tgl_lahir',
'$alamat' ,
'$no_tlpa' ,
'$no_tlpo' ,
'$ipk' ,
'$prestasi' ,
'$organisasi' ,
'$nama_ortu' ,
'$penghasilan' ,
'$jumlah_tanggungan' ,
'$upload_khs' ,
'$upload_kk' ,
'$upload_prestasi' ,
'$username' ,
'$password' ,
'$id_periode' 
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_pendaftar berhasil disimpan !');document.location.href='?mnu=nb&id=$id_pendaftar';</script>";}
		else{echo"<script>alert('Data $id_pendaftar gagal disimpan...');document.location.href='?mnu=pendaftar';</script>";}
	}
	else{
$sql="update `$tbpendaftar` set 
`nama_pendaftar`='$nama_pendaftar',
`tempat_lahir`='$tempat_lahir' ,
`tgl_lahir`='$tgl_lahir' , 
`alamat`='$alamat'  ,
`no_tlpa`='$no_tlpa' ,
`no_tlpo`='$no_tlpo' ,
`ipk`='$ipk' ,
`prestasi`='$prestasi' ,
`organisasi`='$organisasi'  ,
`nama_ortu`='$nama_ortu' ,
`penghasilan`='$penghasilan' ,
`jumlah_tanggungan`='$jumlah_tanggungan' ,
`upload_khs`='$upload_khs' ,
`upload_kk`='$upload_kk' ,
`upload_prestasi`='$upload_prestasi' ,
`username`='$username' ,
`password`='$password' ,
`id_periode`='$id_periode' 
where `id_pendaftar`='$id_pendaftar0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_pendaftar berhasil diubah !');document.location.href='?mnu=nb&id=$id_pendaftar';</script>";}
	else{echo"<script>alert('Data $id_pendaftar gagal diubah...');document.location.href='?mnu=pendaftar';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_pendaftar=$_GET["kode"];
$sql="delete from `$tbpendaftar` where `id_pendaftar`='$id_pendaftar'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data pendaftar $id_pendaftar berhasil dihapus !');document.location.href='?mnu=pendaftar';</script>";}
else{echo"<script>alert('Data pendaftar $id_pendaftar gagal dihapus...');document.location.href='?mnu=pendaftar';</script>";}
}
?>

