<?php
$pro="simpan";
$tgl_lahir=WKT(date("Y-m-d"));
$upload_khs0="namafile.pdf";
$upload_kk0="namafile.pdf";
$upload_prestasi0="namafile.pdf";

?>
<link type="text/css" href="<?php echo "admin/$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="admin/<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="admin/<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="admin/<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="admin/<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
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
?>




<div id="accordion">
 <!--  <h3>Registrasi Pendaftar</h3> -->
  <div>
<form action="" method="post" enctype="multipart/form-data">
<table width="587" class="table table-striped table-bordered table-hover">


<tr>
<th width="226" height="37"><label for="id_pendaftar">ID Pendaftar</label>
<th width="10">:
<th width="336" colspan="2"><b><?php echo $id_pendaftar;?></b>
</tr>

<tr>
<td height="47"><label for="nama_pendaftar">Nama Pendaftar</label>
<td>:
<td colspan="2"><input class="form-control" name="nama_pendaftar" type="text" id="nama_pendaftar" value="<?php echo $nama_pendaftar;?>" size="30" required /></td>
</tr>


<tr>
<td height="43"><label for="tempat_lahir">Tempat Lahir</label>
<td>:<td colspan="2"><input class="form-control" name="tempat_lahir" type="text" id="tempat_lahir" value="<?php echo $tempat_lahir;?>" size="15" required/>
</td>
</tr>


<tr>
<td height="48"><label for="tgl_lahir">Tanggal Lahir</label>
<td>:<td colspan="2"><input class="form-control" name="tgl_lahir" type="text" id="tgl_lahir" value="<?php echo $tgl_lahir;?>" size="25" required/>
</td>
</tr>


<tr>
<td height="50"><label for="alamat">Alamat</label>
<td>:<td colspan="2"><input class="form-control" name="alamat" type="text" id="alamat" value="<?php echo $alamat;?>" size="25" required/>
</td>
</tr>


<tr>
<td height="44"><label for="no_tlpa">No Telepon Anak</label>
<td>:<td colspan="2"><input class="form-control" name="no_tlpa" type="text" id="no_tlpa" value="<?php echo $no_tlpa;?>" size="15" required/>
</td>
</tr>

<tr>
<td height="41"><label for="no_tlpo">No Telepon Orang Tua</label>
<td>:<td colspan="2"><input class="form-control" name="no_tlpo" type="text" id="no_tlpo" value="<?php echo $no_tlpo;?>" size="15" required/>
</td>
</tr>

<tr>
<td height="43"><label for="ipk">IPK</label>
<td>:
<td colspan="2"><input class="form-control" name="ipk" type="text" id="ipk" value="<?php echo $ipk;?>" size="30" required/></td>
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
<td height="46"><label for="organisasi">Organisasi Yang Diikuti</label>
<td>:
<td colspan="2"><input class="form-control" name="organisasi" type="text" id="organisasi" value="<?php echo $organisasi;?>" size="30" required/></td>
</tr>

<tr>
<td height="46"><label for="nama_ortu">Nama Orang Tua</label>
<td>:
<td colspan="2"><input class="form-control" name="nama_ortu" type="text" id="nama_ortu" value="<?php echo $nama_ortu;?>" size="30" required/></td>
</tr>



<tr>
<td height="46"><label for="penghasilan">Penghasilan</label>
<td>:
<td colspan="2"><input class="form-control" name="penghasilan" type="text" id="penghasilan" value="<?php echo $penghasilan;?>" size="30" required/></td>
</tr>


<tr>
<td height="38"><label for="jumlah_tanggungan">Jumlah Tanggungan</label>
<td>:
<td colspan="2"><input class="form-control" name="jumlah_tanggungan" type="text" id="jumlah_tanggungan" value="<?php echo $jumlah_tanggungan;?>" size="30" required/></td>
</tr>


<tr>
  <td height="47"><strong>Upload KHS
    </strong>
  <td>:<td colspan="2"><label for="upload_khs"></label>
        <input class="form-control" name="upload_khs" type="file" id="upload_khs" size="20" required/> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_khs;?>")'><?php echo $upload_khs0;?></a></td>
</tr>

<tr>
  <td height="35"><strong>Upload KK</strong>
  <td>:<td colspan="2"><label for="upload_kk"></label>
        <input class="form-control" name="upload_kk" type="file" id="upload_kk" size="20" required/> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_kk;?>")'><?php echo $upload_kk0;?></a></td>
</tr>

<tr>
  <td height="43"><strong>Upload Prestasi
    </strong>
  <td>:<td colspan="2"><label for="upload_prestasi"></label>
        <input class="form-control" name="upload_prestasi" type="file" id="upload_prestasi" size="20" required/> 
      => <a href='#' onclick='buka("pendaftar/zoom.php?id=<?php echo $upload_prestasi;?>")'><?php echo $upload_prestasi0;?></a></td>
</tr>

<tr>
<td height="46"><label for="username">Username</label>
<td>:
<td colspan="2"><input class="form-control" name="username" type="text" id="username" value="<?php echo $username;?>" size="30" required/></td>
</tr>

<tr>
<td height="46"><label for="password">Password</label>
<td>:
<td colspan="2"><input class="form-control" name="password" type="text" id="password" value="<?php echo $password;?>" size="30" required/></td>
</tr>


<tr>
<td height="46"><label for="id_periode">Pilih Periode</label>
<td>:
<td colspan="2">
  <select class="form-control" name="id_periode" id="id_periode" required>
    <option>Pilih</option>
     <?php
	  $s="select * from `tbl_periode`";
	$q=getData($conn,$s);
		foreach($q as $d){							
				$id_periode0=$d["id_periode"];
				$nama_periode=$d["nama_periode"];
	echo"<option value='$id_periode0' ";if($id_periode0==$id_periode){echo"selected";} echo">$id_periode0 - $nama_periode  </option>";
	}
	?>
  </select></td>
</tr>



<tr>
<td>
<td>
<td colspan="2">	<input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
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
</div>

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pendaftar=strip_tags($_POST["id_pendaftar"]);
	//$id_pendaftar0=strip_tags($_POST["id_pendaftar0"]);
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
  $id_periode=strip_tags($_POST["id_periode"]);


$sql="select id_periode from `$tbperiode` where `status`='Aktif'";
  $d=getField($conn,$sql);
        $gid_periode=$d["id_periode"];

 $sql="select * from `$tbpendaftar` where id_periode='$id_periode' and nama_pendaftar='$nama_pendaftar' ";
  $jum=getJum($conn,$sql);
		if($jum > 0){
echo "<script>alert('Mahasiswa  atas nama $nama_pendaftar Sudah Terdaftar!');</script>";

}else{
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
`organisasi`,
`nama_ortu` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`upload_khs` ,
`upload_kk` ,
`upload_prestasi`,
`username` ,
`password` ,
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
'$organisasi',
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
		if($simpan) {echo "<script>alert('Anda Berhasil Registrasi. Silahkan Login untuk Melihat Hasil Pengumuman Sesuai Tanggal yang Ditentukan!');document.location.href='?mnu=registrasi';</script>";}
		else{echo"<script>alert('Data $id_pendaftar gagal disimpan...');document.location.href='?mnu=registrasi';</script>";}
	}
}
?>

