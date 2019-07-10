<?php
$pro="simpan";
$tgl_lahir=WKT(date("Y-m-d"));
$upload_khs0="avatar.jpg";
$upload_kk0="avatar.jpg";
$upload_prestasi0="avatar.jpg";
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
  $id_pendaftar=$_SESSION["cid"];
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
        $organisasi=$d["organisasi"];
        $nama_ortu=$d["nama_ortu"];
        $penghasilan=$d["penghasilan"];
        $jumlah_tanggungan=$d["jumlah_tanggungan"];
        $upload_khs=$d["upload_khs"];
        $upload_kk=$d["upload_kk"];
        $upload_prestasi=$d["upload_prestasi"];
        $username=$d["username"];
        $password=$d["password"];
        $id_periode=$d["id_periode"];
   
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
<td height="42"><label for="prestasi">Prestasi</label>
<td>:
<td colspan="2"><input class="form-control" name="prestasi" type="text" id="prestasi" value="<?php echo $prestasi;?>" size="30" /></td>
</tr>

<tr>
<td height="42"><label for="organisasi">Organisasi</label>
<td>:
<td colspan="2"><input class="form-control" name="organisasi" type="text" id="organisasi" value="<?php echo $organisasi;?>" size="30" /></td>
</tr>

<tr>
<td height="46"><label for="nama_ortu">Nama Orang Tua</label>
<td>:
<td colspan="2"><input class="form-control" name="nama_ortu" type="text" id="nama_ortu" value="<?php echo $nama_ortu;?>" size="30" /></td>
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
<td colspan="2"><input class="form-control" name="password" type="text" id="password" value="<?php echo $password;?>" size="30" /></td>
</tr>


<tr>
<td height="46"><label for="id_periode">Pilih Periode</label>
<td>:
<td colspan="2">
  <select class="form-control" name="id_periode" id="id_periode">
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
  $nama_ortu=strip_tags($_POST["nama_ortu"]);
	$ipk=strip_tags($_POST["ipk"]);
	$prestasi=strip_tags($_POST["prestasi"]);
  $organisasi=strip_tags($_POST["organisasi"]);
	$penghasilan=strip_tags($_POST["penghasilan"]);
	$jumlah_tanggungan=strip_tags($_POST["jumlah_tanggungan"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
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

$sql="update `$tbpendaftar` set 
`nama_pendaftar`='$nama_pendaftar',
`tempat_lahir`='$tempat_lahir' ,
`tgl_lahir`='$tgl_lahir' , 
`alamat`='$alamat'  ,
`no_tlpa`='$no_tlpa' ,
`no_tlpo`='$no_tlpo' ,
`nama_ortu`='$nama_ortu' ,
`ipk`='$ipk' ,
`prestasi`='$prestasi' ,
`organisasi`='$organisasi' ,
`penghasilan`='$penghasilan' ,
`jumlah_tanggungan`='$jumlah_tanggungan' ,
`upload_khs`='$upload_khs' ,
`upload_kk`='$upload_kk' ,
`upload_prestasi`='$upload_prestasi' ,
`username`='$username' ,
`password`='$password' ,
`id_periode`='$id_periode' 
where `id_pendaftar`='$id_pendaftar'";
$ubah=process($conn,$sql);
  if($ubah) {echo "<script>alert('Data $id_pendaftar berhasil diubah !');document.location.href='?mnu=profil';</script>";}
  else{echo"<script>alert('Data $id_pendaftar gagal diubah...');document.location.href='?mnu=profil';</script>";}
  }//else simpan
  
?>