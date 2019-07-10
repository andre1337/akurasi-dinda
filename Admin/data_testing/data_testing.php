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
win=window.open('user/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, prediksi=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>
<!-- -->

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

<!-- -->
<?php
  $sql="select `id_datatesting` from `$tbdatatesting` order by `id_datatesting` desc";
   $jum= getJum($conn,$sql);
  $kd="USR";
		if($jum > 0){
				$d=getField($conn,$sql);
    			$idmax=$d['id_datatesting'];	
				$urut=substr($idmax,3,2)+1;//01
				if($urut<10){$idmax="$kd"."0".$urut;}
				else{$idmax="$kd".$urut;}
			}
		else{$idmax="$kd"."01";}
  $id_datatesting=$idmax;
?>

<?php
if($_GET["pro"]=="ubah"){
	$id_datatesting=$_GET["kode"];
	$sql="select * from `$tbdatatesting` where `id_datatesting`='$id_datatesting'";
	$d=getField($conn,$sql);
				$id_datatesting=$d["id_datatesting"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
				$kelas=$d["kelas"];
				$prediksi=$d["prediksi"];
				$nilailayak=$d["nilailayak"];
				$nilaitidak=$d["nilaitidak"];
				$kesesuaian=$d["kesesuaian"];
				$pro="ubah";		
}
?>
<!-- -->
<div id="accordion">
  <h3>Input Data Testing</h3>
  <div>
  <!-- -->
<form action="" method="post" enctype="multipart/form-data">
<table width="519">


<tr>
<th width="123" height="41"><label for="id_datatesting">ID Testing</label>
<th width="10">:
<th width="371" colspan="2"><b><?php echo $id_datatesting;?></b>
</tr>

<tr>
<td height="50"><label for="ipk">IPK</label>
<td>:
<td colspan="2"><input name="ipk" class="form-control" type="text" id="ipk" value="<?php echo $ipk;?>" size="30" /></td>
</tr>

<tr>
<td height="49"><label for="prestasi">Prestasi</label>
<td>:<td colspan="2"><input name="prestasi"  class="form-control"  type="text" id="prestasi" value="<?php echo $prestasi;?>" size="15" />
</td>
</tr>

<tr>
<td height="48"><label for="penghasilan">Penghasilan</label>
<td>:
<td><input class="form-control"  name="penghasilan" type="text" id="penghasilan" value="<?php echo $penghasilan;?>" size="30" />
  </td>
</tr>

<tr>
<td height="42"><label for="jumlah_tanggungan">Jumlah Tanggungan</label>
<td>:
<td colspan="2"><input class="form-control"  name="jumlah_tanggungan" type="text" id="jumlah_tanggungan" value="<?php echo $jumlah_tanggungan;?>" size="15" /></td>
</tr>

<tr>
<td height="47"><label for="organisasi">Organisasi</label>
<td>:
<td colspan="2"><input class="form-control"  name="organisasi" type="text" id="organisasi" value="<?php echo $organisasi;?>" size="30" /></td>
</tr>

<tr>
<td height="52"><label for="kelas">Kelas</label>
<td>:<td colspan="2"><input class="form-control"  name="kelas" type="text" id="kelas" value="<?php echo $kelas;?>" size="25" />
</td>
</tr>

<tr>
<td height="52"><label for="prediksi">Prediksi</label>
<td>:<td colspan="2"><input class="form-control"  name="prediksi" type="text" id="prediksi" value="<?php echo $prediksi;?>" size="25" />
</td>
</tr>

<tr>
<td height="52"><label for="nilailayak">Nilai Layak</label>
<td>:<td colspan="2"><input class="form-control"  name="nilailayak" type="text" id="nilailayak" value="<?php echo $nilailayak;?>" size="25" />
</td>
</tr>

<tr>
<td height="52"><label for="nilaitidak">Nilai tidak</label>
<td>:<td colspan="2"><input class="form-control"  name="nilaitidak" type="text" id="nilaitidak" value="<?php echo $nilaitidak;?>" size="25" />
</td>
</tr>

<tr>
<td height="52"><label for="kesesuaian">Kesesuaian</label>
<td>:<td colspan="2"><input class="form-control"  name="kesesuaian" type="text" id="kesesuaian" value="<?php echo $kesesuaian;?>" size="25" />
</td>
</tr>

<tr>
<td height="40">
<td>
<td colspan="2">	<input name="Simpan" class="btn btn-info"  type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_datatesting" type="hidden" id="id_datatesting" value="<?php echo $id_datatesting;?>" />
        <input name="id_datatesting0" type="hidden" id="id_datatesting0" value="<?php echo $id_datatesting0;?>" />
        <a href="?mnu=data_testing"><input name="Batal" class="btn btn-danger"  type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
<!-- --></div>
 <?php  
  $sqlq="select distinct(prediksi) from `$tbdatatesting` order by `id_datatesting` desc";
  $jumq=getJum($conn,$sqlq);
		if($jumq <1){
			echo"<h1>Maaf data belum tersedia...</h1>";
			}								
	$arrq=getData($conn,$sqlq);
		foreach($arrq as $dq) {							
				$prediksi=$dq["prediksi"];

?>     

<h3>Data User <?php echo $prediksi;?></h3>
  <div>
<!-- -->

Data user: 
<a href="user/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="user/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>

<table id="example2" class="table table-bordered table-bordered table-hover">
  <thead>
  <tr >
    <th width="3%"><center>No</th>
    <th width="10%"><center>ID Testing</th>
    <th width="20%"><center>IPK</th>
    <th width="10%"><center>Prestasi</th>
    <th width="25%"><center>Penghasilan</th>
    <th width="10%"><center>Jumlah Tanggungan</th>
    <th width="15%"><center>Organisasi</th>
   	<th width="15%"><center>Kelas</th>
   	<th width="15%"><center>Prediksi</th>
   	<th width="15%"><center>Nilai Layak</th>
   	<th width="15%"><center>Nilai Tidak</th>
   	<th width="15%"><center>Kesesuaian</th>	
    <th width="15%"><center>Menu</th>
  </tr>
  </thead>
  <tbody>
<?php  
  $sql="select * from `$tbdatatesting` where prediksi='$prediksi' order by `id_datatesting` desc";
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
				$id_datatesting=$d["id_datatesting"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
				$kelas=$d["kelas"];
				$prediksi=$d["prediksi"];
				$nilailayak=$d["nilailayak"];
				$nilaitidak=$d["nilaitidak"];
				$kesesuaian=$d["kesesuaian"];
echo"<tr>
				<td>$no</td>
				<td>$id_datatesting</td>
				<td>$ipk</td>
				<td>$prestasi</td>
				<td>$penghasilan</td>
				<td>$jumlah_tanggungan</td>
				<td>$organisasi</td>
				<td>$kelas</td>
				<td>$prediksi</td>
				<td>$nilailayak</td>
				<td>$nilaitidak</td>
				<td>$kesesuaian</td>
				<td align='center'>
<a href='?mnu=data_testing&pro=ubah&kode=$id_datatesting'><img src='ypathicon/edit.png' alt='ubah'></a>
<a href='?mnu=data_testing&pro=hapus&kode=$id_datatesting'><img src='ypathicon/delete.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $ipk pada data user ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data user belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=data_testing'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=date(format)'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=data_testing'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-- -->

</div>
<?php }?>
</div>
<!-- -->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_datatesting=strip_tags($_POST["id_datatesting"]);
	$ipk=strip_tags($_POST["ipk"]);
	$prestasi=strip_tags($_POST["prestasi"]);
	$penghasilan=strip_tags($_POST["penghasilan"]);
	$jumlah_tanggungan=strip_tags($_POST["jumlah_tanggungan"]);
	$organisasi=strip_tags($_POST["organisasi"]);
	$kelas=strip_tags($_POST["kelas"]);
	$prediksi=strip_tags($_POST["prediksi"]);
	$nilailayak=strip_tags($_POST["nilailayak"]);
	$nilaitidak=strip_tags($_POST["nilaitidak"]);
	$kesesuaian=strip_tags($_POST["kesesuaian"]);

if($pro=="simpan"){
$sql=" INSERT INTO `tbl_datatesting` (
`id_datatesting` ,
`ipk` ,
`prestasi` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`organisasi` ,
`kelas`,
`prediksi` ,
`nilailayak` ,
`nilaitidak` ,
`kesesuaian`

) VALUES (
'$id_datatesting', 
'$ipk', 
'$prestasi',
'$penghasilan',
'$jumlah_tanggungan',
'$organisasi',
'$kelas' ,
'$prediksi',
'$nilailayak' ,
'$nilaitidak' ,
'$kesesuaian' 


)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_datatesting berhasil disimpan !');document.location.href='?mnu=data_testing';</script>";}
		else{echo"<script>alert('Data $id_datatesting gagal disimpan...');document.location.href='?mnu=data_testing';</script>";}
	}
	else{
$sql="update `$tbdatatesting` set 
`ipk`='$ipk',
`prestasi`='$prestasi' ,
`penghasilan`='$penghasilan',
`jumlah_tanggungan`='$jumlah_tanggungan',
`organisasi`='$organisasi',
`kelas`='$kelas',
`prediksi`='$prediksi',
`nilailayak`='$nilailayak',
`nilaitidak`='$nilaitidak',
`kesesuaian`='$kesesuaian'
where `id_datatesting`='$id_datatesting'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_datatesting berhasil diubah !');document.location.href='?mnu=data_testing';</script>";}
	else{echo"<script>alert('Data $id_datatesting gagal diubah...');document.location.href='?mnu=data_testing';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_datatesting=$_GET["kode"];
$sql="delete from `$tbdatatesting` where `id_datatesting`='$id_datatesting'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data user $id_datatesting berhasil dihapus !');document.location.href='?mnu=data_testing';</script>";}
else{echo"<script>alert('Data user $id_datatesting gagal dihapus...');document.location.href='?mnu=data_testing';</script>";}
}
?>

