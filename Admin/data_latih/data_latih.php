<?php
error_reporting(0);
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
	$id_datalatih=$_GET["kode"];
	$sql="select * from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
	$d=getField($conn,$sql);
				$id_datalatih0=$d["id_datalatih"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
				$penilaian=$d["penilaian"];
				$keterangan=$d["keterangan"];
				
				$pro="ubah";		
}
?>

<div id="accordion">
  <h3>Input Data Latih</h3>
  <div> 

<form name="import_export_form" method="post" action="" enctype="multipart/form-data">
    <label>Select Excel File : </label><input type="file" name="excelfile"/><br>
    <input type="submit" name="form_submit2" class="btn btn-info" />
    </form>
<hr>
  
<form action="" method="post" enctype="multipart/form-data">
<table width="444">

<tr>
<td width="145" height="52"><label for="ipk">IPK</label><td width="30">:
<td width="194" colspan="2">
<input class="form-control" name="ipk" type="text" id="ipk" value="<?php echo $ipk;?>" size="30" /></td>
</tr>

<tr>
<td height="56" valign="top"><label for="prestasi">Prestasi</label><td valign="top">:<td colspan="2" valign="top">
<input  type="radio" name="prestasi" id="prestasi"  value="Layak" <?php if($prestasi=="Internasional"){echo"checked";}?>/>Tingkat Internasional <br>
<input  type="radio" name="prestasi" id="prestasi" value="Nasional" <?php if($prestasi=="Nasional"){echo"checked";}?>/>Tingkat Nasional <br>
<input  type="radio" name="prestasi" id="prestasi"  value="Kabupaten" <?php if($prestasi=="Propinsi"){echo"checked";}?>/>Tingkat Propinsi <br>

<input  type="radio" name="prestasi" id="prestasi" checked="checked"  value="Tidak Ada" <?php if($prestasi=="Tidak Ada"){echo"checked";}?>/>Tidak Ada



</td>
</tr>

<tr>
<td height="47"><label for="penghasilan">Penghasilan</label><td>:
<td><input class="form-control" name="penghasilan" type="text" id="penghasilan" value="<?php echo $penghasilan;?>" size="30" />
</td>
</tr>

<tr>
<td height="44"><label for="jumlah_tanggungan">Jumlah Tanggungan</label>
<td>:
<td colspan="2">
<input class="form-control" name="jumlah_tanggungan" type="text" id="jumlah_tanggungan" value="<?php echo $jumlah_tanggungan;?>" size="15" /></td>
</tr>


<tr>
<td height="44"><label for="organisasi">Organisasi yang Diikuti</label>
<td>:
<td colspan="2">
<input class="form-control" name="organisasi" type="text" id="organisasi" value="<?php echo $organisasi;?>" size="15" /></td>
</tr>

<tr>
<td height="44"><label for="keterangan">Catatan</label>
<td>:<td colspan="2"><input class="form-control" name="keterangan" type="text" id="keterangan" value="<?php echo $keterangan;?>" size="15" /></td></tr>


<?php
if($_GET["pro"]=="ubah"){
	?>
<tr>
<td height="43"><label for="penilaian">Hasil Penilaian</label>
<td>:<td colspan="2">
<input type="radio" name="penilaian" id="penilaian"  value="Layak" <?php if($penilaian=="Layak"){echo"checked";}?>/>Layak 
<input type="radio" name="penilaian" id="penilaian" value="Tidak Layak" <?php if($penilaian=="Tidak Layak"){echo"checked";}?>/>Tidak Layak
<input type="radio" name="penilaian" id="penilaian" checked="checked"  value="Cadangan" <?php if($penilaian=="Cadangan"){echo"checked";}?>/>Cadangan
</td></tr>

<?php
}
?>
<tr>
<td>
<td>
<td colspan="2">	<input class="btn btn-info" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_datalatih0" type="hidden" id="id_datalatih0" value="<?php echo $id_datalatih0;?>" />
        <a href="?mnu=data_latih"><input class="btn btn-danger" name="Batal" type="button" id="Batal" value="Batal" /></a><br>
<!-- <input onClick="return confirm('Apakah Anda benar-benar akan Generate data latih #WARNING DATA LAMA AKAN DIHILANGKAN !')" class="btn btn-info" name="gen" type="submit" id="gen" value="Generate Data Latih" /> -->
</td></tr>
</table>
</form>
</div>


 <?php  
  $sqlq="select distinct(penilaian) from `tbl_datalatih` order by `penilaian` asc";
  $jumq=getJum($conn,$sqlq);
		if($jumq <1){
			echo"<h1>Maaf data belum tersedia...</h1>";
			}								
	$arrq=getData($conn,$sqlq);
		foreach($arrq as $dq) {							
				$penilaian=$dq["penilaian"];

?> 
<h3>Data Latih <?php echo $penilaian;?></h3>
  <div>
  
Data Latih <?php echo $penilaian;?>: 
<a href="data_latih/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="data_latih/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>

<table width="809" class="table table-striped table-bordered table-hover" id="example2">
  	<thead>
  	<tr >
    <th width="5%"><center>No</th>
     <th width="10%"><center>IPK</th>
    <th width="15%"><center>Prestasi</th>
    <th width="15%"><center>Penghasilan</th>
    <th width="15%"><center>Jumlah Tanggungan</th>
	 <th width="15%"><center>Organisasi</th>
    <!-- <th width="10%"><center>Catatan</th>
    <th width="10%"><center>Menu</th> -->
  	</tr>
  	</thead>
  	<tbody>
<?php  
  $sql="select * from `$tbdatalatih` where penilaian='$penilaian' order by `id_datalatih` desc";
  $jum=getJum($conn,$sql);
		if($jum > 0){
	//--------------------------------------------------------------------------------------------
	$batas   = 25;
	$page = $_GET['page'];
	if(empty($page)){$posawal  = 0;$page = 1;}
	else{$posawal = ($page-1) * $batas;}
	
	$sql2 = $sql." LIMIT $posawal,$batas";
	$no = $posawal+1;
	//--------------------------------------------------------------------------------------------									
	$arr=getData($conn,$sql2);
		foreach($arr as $d) {							
				$id_datalatih=$d["id_datalatih"];
				$ipk=$d["ipk"];
				$prestasi=$d["prestasi"];
				$penghasilan=$d["penghasilan"];
				$jumlah_tanggungan=$d["jumlah_tanggungan"];
				$organisasi=$d["organisasi"];
				$keterangan=$d["keterangan"];
				$penilaian=$d["penilaian"];
				
				$n1=$d["n1"];
				$n2=$d["n2"];
				$n3=$d["n3"];
				$n4=$d["n4"];
				$n5=$d["n5"];
				
				
				
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td><label title='$n1'>$ipk</label></td>
				<td><label title='$n2'>$prestasi</label></td>
				<td><label title='$n3'>$penghasilan</label></td>
				<td><label title='$n4'>$jumlah_tanggungan</label></td>
				<td><label title='$n5'>$organisasi</label></td>
			
				</tr>";
			
			$no++;
			}//while , 	<td>$keterangan</td>
// 				<td align='center'>
// <a href='?mnu=data_latih&pro=ubah&kode=$id_datalatih'><img src='ypathicon/edit.png' alt='ubah'></a>
// <a href='?mnu=data_latih&pro=hapus&kode=$id_datalatih'><img src='ypathicon/delete.png' alt='hapus' 
// onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $ipk pada Data Latih ?..\")'></a></td>
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=data_latih'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=data_latih'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=data_latih'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>


</div>
<?php }?>





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
	
	$totK=$jumK1+$jumK2;
	$P1=$jumK1/$totK;  
	$P2=$jumK2/$totK;


$jumIPKR=getKK($conn,'n1',"Rendah","Layak");
$jumIPKS=getKK($conn,'n1',"Sedang","Layak");
$jumIPKT=getKK($conn,'n1',"Tinggi","Layak");
$PIPKR = $jumIPKR/$jumK1;
$PIPKS = $jumIPKS/$jumK1;
$PIPKT = $jumIPKT/$jumK1;
$jumIPKR2=getKK($conn,'n1',"Rendah","Tidak Layak");
$jumIPKS2=getKK($conn,'n1',"Sedang","Tidak Layak");
$jumIPKT2=getKK($conn,'n1',"TInggi","Tidak Layak");
$PIPKR2 = $jumIPKR2/$jumK2;
$PIPKS2 = $jumIPKS2/$jumK2;
$PIPKT2 = $jumIPKT2/$jumK2;
//1


//$sql="select `id_datalatih` from `tbl_datalatih` where `n2`='Tidak Ada' and `penilaian`='Layak'";
$jumPIT=getKK($conn,'n2',"Tidak Ada","Layak");
$jumPIP=getKK($conn,'n2',"Propinsi","Layak");
$jumPIN=getKK($conn,'n2',"Nasional","Layak");
$jumPII=getKK($conn,'n2',"International","Layak");
$PPIT = $jumPIT/$jumK1;
$PPIP = $jumPIP/$jumK1;
$PPIN = $jumPIN/$jumK1;
$PPII = $jumPII/$jumK1;

$jumPIT2=getKK($conn,'n2',"Tidak Ada","Tidak Layak");
$jumPIP2=getKK($conn,'n2',"Propinsi","Tidak Layak");
$jumPIN2=getKK($conn,'n2',"Nasional","Tidak Layak");
$jumPII2=getKK($conn,'n2',"International","Tidak Layak");
$PPIT2 = $jumPIT2/$jumK2;
$PPIP2 = $jumPIP2/$jumK2;
$PPIN2 = $jumPIN2/$jumK2;
$PPII2 = $jumPII2/$jumK2;
// //2 $jumG2A=getKK($conn,'n2',$k2,$ik[0]);
// // $jumG2B=getKK($conn,'n2',$k2,$ik[1]);


$jumPNK=getKK($conn,'n3',"Kurang","Layak");
$jumPNMN=getKK($conn,'n3',"Menengah","Layak");
$jumPNMM=getKK($conn,'n3',"Mampu","Layak");
$PPNK = $jumPNK/$jumK1;
$PPNMN = $jumPNMN/$jumK1;
$PPNMM = $jumPNMM/$jumK1;
$jumPNK2=getKK($conn,'n3',"Kurang","Tidak Layak");
$jumPNMN2=getKK($conn,'n3',"Menengah","Tidak Layak");
$jumPNMM2=getKK($conn,'n3',"Mampu","Tidak Layak");
$PPNK2 = $jumPNK2/$jumK2;
$PPNMN2 = $jumPNMN2/$jumK2;
$PPNMM2 = $jumPNMM2/$jumK2;
// //3 $jumG3A=getKK($conn,'n3',$k3,$ik[0]);
// // $jumG3B=getKK($conn,'n3',$k3,$ik[1]);

//
$jumJTS=getKK($conn,'n4',"Sedikit","Layak");
$jumJTC=getKK($conn,'n4',"Cukup","Layak");
$jumJTB=getKK($conn,'n4',"Banyak","Layak");
$PJTS = $jumPNK/$jumK1;
$PJTC = $jumPNMN/$jumK1;
$PJTB = $jumPNMM/$jumK1;
$jumJTS2=getKK($conn,'n4',"Sedikit","Tidak Layak");
$jumJTC2=getKK($conn,'n4',"Cukup","Tidak Layak");
$jumJTB2=getKK($conn,'n4',"Banyak","Tidak Layak");
$PJTS2 = $jumJTS2/$jumK2;
$PJTC2 = $jumJTC2/$jumK2;
$PJTB2 = $jumJTB2/$jumK2;
// //2 $jumG4A=getKK($conn,'n4',$k4,$ik[0]);
// // $jumG4B=getKK($conn,'n4',$k4,$ik[1]);


$jumOT=getKK($conn,'n5',"Tidak","Layak");
$jumOS=getKK($conn,'n5',"Sedikit","Layak");
$jumOB=getKK($conn,'n5',"Banyak","Layak");
$POT = $jumOT/$jumK1;
$POS = $jumOS/$jumK1;
$POB = $jumOB/$jumK1;
$jumOT2=getKK($conn,'n5',"Tidak","Tidak Layak");
$jumOS2=getKK($conn,'n5',"Sedikit","Tidak Layak");
$jumOB2=getKK($conn,'n5',"Banyak","Tidak Layak");
$POT2 = $jumOT2/$jumK2;
$POS2 = $jumOS2/$jumK2;
$POB2 = $jumOB2/$jumK2;


//5 $jumG5A=getKK($conn,'n5',$k5,$ik[0]);
// $jumG5B=getKK($conn,'n5',$k5,$ik[1]);

$gab="
<h3>Probabilitas Kelas</h3>
<div>
<h3>Probabilitas Klass</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>Class<td>Formula<td>Probabilitas</tr>";
$gab.="<tr><td>Layak<td>$jumK1/$totK<td>$P1</tr>";
$gab.="<tr><td>Tidak Layak<td>$jumK2/$totK<td>$P2</tr>";
$gab.="</table></div>";
echo $gab;
//=====================

$gab="
 <h3>Probabilitas  IPK</h3>
<div>
<h3>Probabilitas IPK</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>IPK<td>Formula Layak<td>Formula Tidak Layak</tr>";
$gab.="<tr><td>Rendah<td>$jumIPKR/$jumK1<td>$jumIPKR2/$jumK2</tr>";
$gab.="<tr><td>Sedang<td>$jumIPKS/$jumK1<td>$jumIPKS2/$jumK2</tr>";
$gab.="<tr><td>Tinggi<td>$jumIPKT/$jumK1<td>$jumIPKT2/$jumK2</tr>";
$gab.="</table></div>";

echo $gab;

//=====================

$gab="
 <h3>Probabilitas   Prestasi</h3>
<div>
<h3>Probabilitas Prestasi</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>Prestasi<td>Formula Layak<td>Formula Tidak Layak</tr>";
$gab.="<tr><td>Tidak<td>$jumPIT/$jumK1<td>$jumPIT2/$jumK2</tr>";
$gab.="<tr><td>Propinsi<td>$jumPIP/$jumK1<td>$jumPIP2/$jumK2</tr>";
$gab.="<tr><td>Nasional<td>$jumPIN/$jumK1<td>$jumPIN2/$jumK2</tr>";
$gab.="<tr><td>International<td>$jumPII/$jumK1<td>$jumPII2/$jumK2</tr>";
$gab.="</table></div>";

echo $gab;
// //=====================

$gab="
 <h3>Probabilitas   Penghasilan</h3>
<div>
<h3>Probabilitas Penghasilan</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>Penghasilan<td>Formula Layak<td>Formula Tidak Layak</tr>";
$gab.="<tr><td>Kurang<td>$jumPNK/$jumK1<td>$jumPNK2/$jumK2</tr>";
$gab.="<tr><td>Menengah<td>$jumPNMN/$jumK1<td>$jumPNMN2/$jumK2</tr>";
$gab.="<tr><td>Mampu<td>$jumPNMM/$jumK1<td>$jumPNMM2/$jumK2</tr>";
$gab.="</table></div>";

echo $gab;
//=====================

$gab="
 <h3>Probabilitas   Jumlah Tanggungan</h3>
<div>
<h3>Probabilitas Jumlah Tanggungan</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>Jumlah Tanggungan<td>Formula Layak<td>Formula Tidak Layak</tr>";
$gab.="<tr><td>Sedikit<td>$jumJTS/$jumK1<td>$jumJTS2/$jumK2</tr>";
$gab.="<tr><td>Cukup<td>$jumJTC/$jumK1<td>$jumJTC2/$jumK2</tr>";
$gab.="<tr><td>Banyak<td>$jumJTB/$jumK1<td>$jumJTB2/$jumK2</tr>";
$gab.="</table></div>";

echo $gab;
//=====================

$gab="
 <h3>Probabilitas   Organisasi Yang Diikuti</h3>
<div>
<h3>Probabilitas Organisasi Yang Diikuti</h3>";
$gab.="<table width='50%' border='1'>";
$gab.="<tr><td>Organisasi Yang Diikuti<td>Formula Layak<td>Formula Tidak Layak</tr>";
$gab.="<tr><td>Tidak<td>$jumOT/$jumK1<td>$jumOT2/$jumK2</tr>";
$gab.="<tr><td>Sedikit<td>$jumOS/$jumK1<td>$jumOS2/$jumK2</tr>";
$gab.="<tr><td>Banyak<td>$jumOB/$jumK1<td>$jumOB2/$jumK2</tr>";
$gab.="</table></div>";

echo $gab;
//=====================

?>


<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_datalatih0=strip_tags($_POST["id_datalatih0"]);
	
	$ipk=($_POST["ipk"]);
	$prestasi=($_POST["prestasi"]);
	$penghasilan=($_POST["penghasilan"]);
	$jumlah_tanggungan=($_POST["jumlah_tanggungan"]);
	$organisasi=($_POST["organisasi"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	$v1=getV1($ipk);
	$v2=getV2($prestasi);
	$v3=getV3($penghasilan);
	$v4=getV4($jumlah_tanggungan);
	$v5=getV5($organisasi);
	
if($pro=="simpan"){
$sql=" INSERT INTO `tbl_datalatih` (
`id_datalatih` ,`n1` ,`n2` ,`n3` ,`n4` ,`n5` ,
`ipk` ,
`prestasi` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`organisasi` ,
`keterangan` ,
`penilaian` 

) VALUES (
'','$v1', '$v2', '$v3', '$v4', '$v5',  
'$ipk', 
'$prestasi',
'$penghasilan',
'$jumlah_tanggungan',
'$organisasi',
'$keterangan',
'$penilaian'

)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_datalatih berhasil disimpan !');document.location.href='?mnu=data_latih';</script>";}
		else{echo"<script>alert('Data $id_datalatih gagal disimpan...');document.location.href='?mnu=data_latih';</script>";}
	}
	else{
$sql="update `$tbdatalatih` set 
`ipk`='$ipk',`n1`='$v1',`n2`='$v2',`n3`='$v3',`n4`='$v4',`n5`='$v5',
`prestasi`='$prestasi' ,
`penghasilan`='$penghasilan',
`jumlah_tanggungan`='$jumlah_tanggungan',
`organisasi`='$organisasi',
`keterangan`='$keterangan',
`penilaian`='$penilaian' 
where `id_datalatih`='$id_datalatih0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_datalatih berhasil diubah !');document.location.href='?mnu=data_latih';</script>";}
	else{echo"<script>alert('Data $id_datalatih gagal diubah...');document.location.href='?mnu=data_latih';</script>";}
	}//else simpan
}
?>


<?php
 if(isset($_POST['form_submit2'])){
		require_once 'Excel/reader.php';
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('CP1251');
		$filename = $_FILES['excelfile']['tmp_name'];
		$nf = $_FILES['excelfile']['name'];
	
	$simpan=process($conn,"truncate `tbl_datalatih` ");

	$data->read($filename);//'Book1.xls');
$n=0;

	for($x =2; $x <=count ($data->sheets[0]["cells"]); $x++){
		$ipk = $data->sheets[0]["cells"][$x][2];
		$prestasi = $data->sheets[0]["cells"][$x][3];
		$penghasilan = $data->sheets[0]["cells"][$x][4];
		$jumlah_tanggungan = $data->sheets[0]["cells"][$x][5];
		$organisasi = $data->sheets[0]["cells"][$x][6];
		$penilaian = $data->sheets[0]["cells"][$x][7];
		//ipk penghasilan jumlah_tanggungan prestasi organisasi
	$v1=getV1($ipk); 
	$v2=getV2($prestasi);
	$v3=getV3($penghasilan);
	$v4=getV4($jumlah_tanggungan);
	$v5=getV5($organisasi);
	
	$n++;
 $sql=" INSERT INTO `tbl_datalatih` (
`id_datalatih` ,`n1` ,`n2` ,`n3` ,`n4` ,`n5` ,
`ipk` ,
`prestasi` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`organisasi` ,
`keterangan` ,
`penilaian` 

) VALUES (
'','$v1', '$v2', '$v3', '$v4', '$v5',  
'$ipk', 
'$prestasi',
'$penghasilan',
'$jumlah_tanggungan',
'$organisasi',
'$nf',
'$penilaian'
)";
	process($conn,$sql);	
		
}
echo "<script>alert('Import data latih Sebanyak $loop berhasil !');document.location.href='?mnu=data_latih';</script>";
}

?>


<?php 
if (isset($_POST['gen'])){
$loop=200;
$pres=array(0=> "International", "Nasional", "Propinsi", "Tidak Ada");
$org=array(0=> "A,B,C,D,E,F", "A,B,C,D,E", "A,B,C,D", "A,B,C", "A,B","A", "");
$pen=array(0=> "Layak", "Tidak Layak");
	
	$simpan=process($conn,"truncate `tbl_datalatih` ");
	
	for($i =0; $i<$loop; $i++){
$ipk=rand(0,4000)/1000;
$r1=rand(0,6);
$r2=rand(0,6);
$r3=rand(0,1);

$prestasi=$pres[$r1];

$penghasilan=rand(0,30000000);
$jumlah_tanggungan=rand(0,10);
$organisasi=$org[$r2];
	$v1=getV1($ipk);
	$v2=getV2($prestasi);
	$v3=getV3($penghasilan);
	$v4=getV4($jumlah_tanggungan);
	$v5=getV5($organisasi);
	$penilaian=$pen[$r3];
	$n++;
	$sql=" INSERT INTO `tbl_datalatih` (
`id_datalatih` ,`n1` ,`n2` ,`n3` ,`n4` ,`n5` ,
`ipk` ,
`prestasi` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`organisasi` ,
`keterangan` ,
`penilaian` 

) VALUES (
'','$v1', '$v2', '$v3', '$v4', '$v5',  
'$ipk', 
'$prestasi',
'$penghasilan',
'$jumlah_tanggungan',
'$organisasi',
'Generate',
'$penilaian'
)";
	
$simpan=process($conn,$sql);
	}//for
echo "<script>alert('Generate data latih Sebanyak $loop berhasil !');document.location.href='?mnu=data_latih';</script>";

}

?>


<?php
if($_GET["pro"]=="hapus"){
$id_datalatih=$_GET["kode"];
$sql="delete from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data Latih $id_datalatih berhasil dihapus !');document.location.href='?mnu=data_latih';</script>";}
else{echo"<script>alert('Data Latih $id_datalatih gagal dihapus...');document.location.href='?mnu=data_latih';</script>";}
}


/*
function getV1($x){
	$h="Rendah";
	if($x>=3.51){$h="Tinggi";}
	else 	if($x>=3.10){$h="Sedang";}
	else{$h="Rendah";}
return $h;
}

function getV2($x){
	$h="cukup";
	if($x>=3){$h="Sangat Baik";}
	else 	if($x>=2){$h="Baik";}
	else{$h="Cukup";}
return $h;
}


function getV3($x){
	$h="Rendah";
	if($x>=5000000){$h="Mampu";}
	else 	if($x>=2100000){$h="Menengah";}
	else{$h="Rendah";}
return $h;
}
function getV4($x){
	$h="Sedikit";
	if($x>=3){$h="Banyak";}
	else 	if($x>=2){$h="Sedang";}
	else{$h="Sedikit";}
return $h;
}
*/
?>

