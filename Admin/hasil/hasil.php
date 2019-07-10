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

<div id="accordion">
  <?php  
  $sqlv="select distinct(id_periode) from `$tbhasil` order by `id_periode` asc";
  $jumv=getJum($conn,$sqlv);
		if($jumv <1){
			echo"<h1>Maaf data penilaian belum tersedia</h1>";
		}
	$arrv=getData($conn,$sqlv);
		foreach($arrv as $dv) {							
				$id_periode=$dv["id_periode"];
				$periode=getPeriode($conn,$id_periode);
				?>
<h3>Hasil Penilaian <?php echo $periode;?></h3>
  <div>
  
Hasil  Penilaian  <?php echo $periode;?>: 
<a href="hasil/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="hasil/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>

<table width="809" class="table table-striped table-bordered table-hover" id="example2">
  	<thead>
  	<tr >
    <th width="5%"><center>No</th>
    <th width="95%"><center>Data Pendaftar</th> 
	<th width="5%"><center>Hapus</th>
    </tr>
  	</thead>
  	<tbody>
<?php  
  $sql="select * from `$tbhasil` where id_periode='$id_periode' order by `id_hasil` desc";
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
					$id_pendaftar=$d["id_pendaftar"];
				$nama=strtoupper(getPendaftar($conn,$d["id_pendaftar"]));
				$rekapitulasi=$d["rekapitulasi"];
				$penilaian=$d["penilaian"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td><b>$nama ($id_pendaftar)</b> #<b>Perhitungan: </b><br>$rekapitulasi => <b>$penilaian</b> <br>Status :$status</td>
				<td>
<a href='?mnu=hasil&pro=hapus&kode=$id_hasil'><img src='ypathicon/delete.png' alt='hapus' 
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
<?php
		}
		?>
</div>

<?php
if($_GET["pro"]=="hapus"){
$id_hasil=$_GET["kode"];
$sql="delete from `$tbhasil` where `id_hasil`='$id_hasil'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data Latih $id_hasil berhasil dihapus !');document.location.href='?mnu=hasil';</script>";}
else{echo"<script>alert('Data Latih $id_hasil gagal dihapus...');document.location.href='?mnu=hasil';</script>";}
}
?>

