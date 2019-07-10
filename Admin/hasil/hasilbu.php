<?php
$pro="simpan";
$tanggal=WKT(date("Y-m-d"));
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('user/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, keterangan=0'); } 
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
if($_GET["pro"]=="ubah"){
	$id_hasil=$_GET["kode"];
	$sql="select * from `$tbhasil` where `id_hasil`='$id_hasil'";
	$d=getField($conn,$sql);
				$id_hasil0=$d["id_hasil"];
				$id_hasil=$d["id_hasil"];
				$id_periode=$d["id_periode"];
				$rekapitulasi=$d["rekapitulasi"];
				$penilaian=$d["penilaian"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				$pro="ubah";		
}
?>

<div id="accordion">
  <h3>Input Hasil</h3>
  <div> 
  
<form action="" method="post" enctype="multipart/form-data">
<table width="444">



<tr>
<td height="46"><label for="id_pendaftar">Pilih Pendaftar</label>
<td>:
<td colspan="2">
  <select class="form-control" name="id_pendaftar" id="id_pendaftar">
    <option>Pilih</option>
     <?php
	  $s="select * from `tbl_pendaftar`";
	$q=getData($conn,$s);
		foreach($q as $d){							
				$id_pendaftar0=$d["id_pendaftar"];
				$nama_pendaftar=$d["nama_pendaftar"];
	echo"<option value='$id_pendaftar0' ";if($id_pendaftar0==$id_id_pendaftar){echo"selected";} echo">$id_pendaftar0 - $nama_pendaftar  </option>";
	}
	?>
  </select></td>
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
<td height="47"><label for="rekapitulasi">rekapitulasi</label><td>:
<td><input class="form-control" name="rekapitulasi" type="text" id="rekapitulasi" value="<?php echo $rekapitulasi;?>" size="30" />
  <label for="kode_barang"></label></td>
</tr>

<tr>
<td height="44"><label for="penilaian">Penilaian</label>
<td>:
<td colspan="2"><input class="form-control" name="penilaian" type="text" id="penilaian" value="<?php echo $penilaian;?>" size="15" /></td>
</tr>

<tr>
<td height="54"><label for="status">Status</label>
<td>:
<td colspan="2"><input class="form-control" name="status" type="text" id="status" value="<?php echo $status;?>" size="30" /></td>
</tr>


<tr>
<td height="44"><label for="keterangan">Keterangan</label>
<td>:<td colspan="2"><input class="form-control" name="keterangan" type="text" id="keterangan" value="<?php echo $keterangan;?>" size="15" /></td></tr>


<tr>
<td>
<td>
<td colspan="2">	<input class="btn btn-info" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_hasil0" type="hidden" id="id_hasil0" value="<?php echo $id_hasil0;?>" />
        <a href="?mnu=data_latih"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>

</div>
<h3>Hasil</h3>
  <div>
  
Hasil: 
| <a href="hasil/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="hasil/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <a href="hasil/xml.php"><img src='ypathicon/xml.png' alt='XML'></a> 
| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
<br>

<table width="809" class="table table-bordered table-hover" id="example2">
  	<thead>
  	<tr >
    <th width="5%"><center>No</th>
     <th width="15%"><center>ID Hasil</th>
    <th width="15%"><center>ID Pendaftar</th> 
    <th width="15%"><center>ID Periode</th>
    <th width="15%"><center>Rekapitulasi</th>
    <th width="15%">Penilaian</th>
    <th width="15%">Status</th>
    <th width="15%">Keterangan</th>
    <th width="10%">Menu</th>
  	</tr>
  	</thead>
  	<tbody>
<?php  
  $sql="select * from `$tbhasil` order by `id_hasil` desc";
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
				$id_hasil=$d["id_hasil"];
				$id_pendaftar=getPendaftar($conn,$d["id_pendaftar"]);
				$id_periode=$d["id_periode"];
				$rekapitulasi=$d["rekapitulasi"];
				$penilaian=$d["penilaian"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td>$id_hasil</td>
				<td>$id_pendaftar</td>
				<td>$id_periode</td>
				<td>$rekapitulasi</td>
				<td>$penilaian</td>
				<td>$status</td>
				<td>$keterangan</td>
				<td align='center'>
<a href='?mnu=hasil&pro=ubah&kode=$id_hasil'><img src='ypathicon/u.png' alt='ubah'></a>
<a href='?mnu=hasil&pro=hapus&kode=$id_hasil'><img src='ypathicon/h.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $id_hasil pada Data Latih ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data Latih belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=hasil'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=hasil'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=hasil'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>


</div>
</div>

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_hasil=strip_tags($_POST["id_hasil"]);
	$id_hasil0=strip_tags($_POST["id_hasil0"]);
	$id_pendaftar=strip_tags($_POST["id_pendaftar"]);
	$id_periode=strip_tags($_POST["id_periode"]);
	$rekapitulasi=strip_tags($_POST["rekapitulasi"]);
	$penilaian=strip_tags($_POST["penilaian"]);
	$status=strip_tags($_POST["status"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	
if($pro=="simpan"){
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
'$status',
'$keterangan'

)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_hasil berhasil disimpan !');document.location.href='?mnu=hasil';</script>";}
		else{echo"<script>alert('Data $id_hasil gagal disimpan...');document.location.href='?mnu=hasil';</script>";}
	}
	else{
$sql="update `$tbhasil` set 
`id_hasil`='$id_hasil',
`id_periode`='$id_periode' ,
`id_pendaftar`='$id_pendaftar',
`rekapitulasi`='$rekapitulasi',
`penilaian`='$penilaian',
`status`='$status',
`keterangan`='$keterangan' 
where `id_hasil`='$id_hasil'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_hasil berhasil diubah !');document.location.href='?mnu=hasil';</script>";}
	else{echo"<script>alert('Data $id_hasil gagal diubah...');document.location.href='?mnu=hasil';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_hasil=$_GET["kode"];
$sql="delete from `$tbhasil` where `id_hasil`='$id_hasil'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data Latih $id_hasil berhasil dihapus !');document.location.href='?mnu=hasil';</script>";}
else{echo"<script>alert('Data Latih $id_hasil gagal dihapus...');document.location.href='?mnu=hasil';</script>";}
}
?>

