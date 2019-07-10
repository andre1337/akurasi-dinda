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
<!-- <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script> -->
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

<?php
if($_GET["pro"]=="ubah"){
	$id_periode=$_GET["kode"];
	$sql="select * from `$tbperiode` where `id_periode`='$id_periode'";
	$d=getField($conn,$sql);
				$id_periode0=$d["id_periode"];
				$nama_periode=$d["nama_periode"];
				$deskripsi=$d["deskripsi"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				$pro="ubah";		
}
?>

<!-- <div id="accordion"> -->
  <h3>Input Periode</h3>
  <div> 
  
<form action="" method="post" enctype="multipart/form-data">
<table width="444" class="table table-striped table-bordered table-hover">


<tr>
<td width="145" height="52"><label for="nama_periode">Nama Periode</label><td width="30">:
<td width="194" colspan="2"><input class="form-control" name="nama_periode" type="text" id="nama_periode" value="<?php echo $nama_periode;?>" size="30" /></td>
</tr>

<tr>
<td height="56"><label for="deskripsi">Deskripsi</label><td>:<td colspan="2"><textarea name="deskripsi" cols="15" rows="3" class="form-control" id="deskripsi"><?php echo $deskripsi;?></textarea>
</td>
</tr>

<tr>
<td height="43"><label for="status">Status</label>
<td>:<td colspan="2">
<input type="radio" name="status" id="status"  checked="checked" value="Aktif" <?php if($status=="Aktif"){echo"checked";}?>/>Aktif 
<input type="radio" name="status" id="status" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?>/>Tidak Aktif
</td></tr>


<tr>
<td height="44"><label for="keterangan">Keterangan</label>
<td>:<td colspan="2"><input class="form-control" name="keterangan" type="text" id="keterangan" value="<?php echo $keterangan;?>" size="15" /></td></tr>





<tr>
<td colspan="2">	<input class="btn btn-info" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_periode0" type="hidden" id="id_periode0" value="<?php echo $id_periode0;?>" />
        <a href="?mnu=periode"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>

</div>
<h3>Periode</h3>
  <div>
  
Periode: 
<a href="periode/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="periode/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>

<table width="809" class="table table-striped table-bordered table-hover" id="example2">
  	<thead>
  	<tr >
    <th width="5%"><center>No</th>
     <th width="75%"><center>Nama Periode</th>
    <th width="10%"><center>Status</th>
    <th width="15%"><center>Menu</th>
  	</tr>
  	</thead>
  	<tbody>
<?php  
  $sql="select * from `$tbperiode` order by `id_periode` desc";
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
				$id_periode=$d["id_periode"];
				$nama_periode=strtoupper($d["nama_periode"]);
				$deskripsi=$d["deskripsi"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td><b>$nama_periode</b>
				<br><i>Deskripsi: $deskripsi , cat: $keterangan</i></td>
				<td>$status</td>
				<td align='center'>
<a href='?mnu=periode&pro=ubah&kode=$id_periode'><img src='ypathicon/edit.png' alt='ubah'></a>
<a href='?mnu=periode&pro=hapus&kode=$id_periode'><img src='ypathicon/delete.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_periode pada Data Periode ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data Periode belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=periode'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=periode'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=periode'>Next »</a></span>";
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
	$nama_periode=strip_tags($_POST["nama_periode"]);
	$id_periode0=strip_tags($_POST["id_periode0"]);
	$deskripsi=strip_tags($_POST["deskripsi"]);
	$status=strip_tags($_POST["status"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	if($status=="Aktif"){
		$sql="UPDATE `$tbperiode` set status='Tidak Aktif'";
		$up=process($conn,$sql);

	}
if($pro=="simpan"){
$sql=" INSERT INTO `$tbperiode` (
`id_periode` ,
`nama_periode` ,
`deskripsi` ,
`status` ,
`keterangan` 

) VALUES (
'', 
'$nama_periode', 
'$deskripsi',
'$status',
'$keterangan'

)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_periode berhasil disimpan !');document.location.href='?mnu=periode';</script>";}
		else{echo"<script>alert('Data $id_periode gagal disimpan...');document.location.href='?mnu=periode';</script>";}
	}
	else{
$sql="update `$tbperiode` set 
`nama_periode`='$nama_periode',
`deskripsi`='$deskripsi' ,
`status`='$status',
`keterangan`='$keterangan' 
where `id_periode`='$id_periode0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_periode berhasil diubah !');document.location.href='?mnu=periode';</script>";}
	else{echo"<script>alert('Data $id_periode gagal diubah...');document.location.href='?mnu=periode';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_periode=$_GET["kode"];
$sql="delete from `$tbperiode` where `id_periode`='$id_periode'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data Periode $id_periode berhasil dihapus !');document.location.href='?mnu=periode';</script>";}
else{echo"<script>alert('Data Periode $id_periode gagal dihapus...');document.location.href='?mnu=periode';</script>";}
}
?>

