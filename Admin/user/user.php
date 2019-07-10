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
win=window.open('user/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>
<!-- -->

<!--  <link rel="stylesheet" href="js/jquery-ui.css"> -->
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

<!-- -->
<?php
  $sql="select `id_user` from `$tbuser` order by `id_user` desc";
   $jum= getJum($conn,$sql);
  $kd="USR";
		if($jum > 0){
				$d=getField($conn,$sql);
    			$idmax=$d['id_user'];	
				$urut=substr($idmax,3,2)+1;//01
				if($urut<10){$idmax="$kd"."0".$urut;}
				else{$idmax="$kd".$urut;}
			}
		else{$idmax="$kd"."01";}
  $id_user=$idmax;
?>

<?php
if($_GET["pro"]=="ubah"){
	$id_user=$_GET["kode"];
	$sql="select * from `$tbuser` where `id_user`='$id_user'";
	$d=getField($conn,$sql);
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$tlp_user=$d["tlp_user"];
				$email=$d["email"];
				$username=$d["username"];
				$password=$d["password"];
				$keterangan=$d["keterangan"];
				$status=$d["status"];
				$pro="ubah";		
}
?>
<!-- -->
<!-- <div id="accordion"> -->
  <h3>Input Data User</h3>
  <div>
  <!-- -->
<form action="" method="post" enctype="multipart/form-data">
<table width="519" class="table table-striped table-bordered table-hover">


<tr>
<th width="123" height="41"><label for="id_user">ID User</label>
<th width="10">:
<th width="371" colspan="2"><b><?php echo $id_user;?></b>
</tr>

<tr>
<td height="50"><label for="nama_user">Nama User</label>
<td>:
<td colspan="2"><input name="nama_user" class="form-control" type="text" id="nama_user" value="<?php echo $nama_user;?>" size="30" /></td>
</tr>

<tr>
<td height="49"><label for="tlp_user">Telepon</label>
<td>:<td colspan="2"><input name="tlp_user"  class="form-control"  type="text" id="tlp_user" value="<?php echo $tlp_user;?>" size="15" />
</td>
</tr>

<tr>
<td height="48"><label for="email">Email</label>
<td>:
<td><input class="form-control"  name="email" type="text" id="email" value="<?php echo $email;?>" size="30" />
  </td>
</tr>

<tr>
<td height="42"><label for="username">Username</label>
<td>:
<td colspan="2"><input class="form-control"  name="username" type="text" id="username" value="<?php echo $username;?>" size="15" /></td>
</tr>

<tr>
<td height="47"><label for="password">Password</label>
<td>:
<td colspan="2"><input class="form-control"  name="password" type="text" id="password" value="<?php echo $password;?>" size="30" /></td>
</tr>

<tr>
<td height="43"><label for="status">Status</label>
<td>:<td colspan="2">
<input type="radio" name="status" id="status"  checked="checked" value="Aktif" <?php if($status=="Aktif"){echo"checked";}?>/>Aktif 
<input type="radio" name="status" id="status" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?>/>Tidak Aktif
</td></tr>
<tr>
<td height="52"><label for="keterangan">Keterangan</label>
<td>:<td colspan="2"><input class="form-control"  name="keterangan" type="text" id="keterangan" value="<?php echo $keterangan;?>" size="25" />
</td>
</tr>



<tr>
<td height="40">
<td>
<td colspan="2">	<input name="Simpan" class="btn btn-info"  type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_user" type="hidden" id="id_user" value="<?php echo $id_user;?>" />
        <input name="id_user0" type="hidden" id="id_user0" value="<?php echo $id_user0;?>" />
        <a href="?mnu=user"><input name="Batal" class="btn btn-danger"  type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
<!-- --></div>
 <?php  
  $sqlq="select distinct(status) from `$tbuser` order by `id_user` desc";
  $jumq=getJum($conn,$sqlq);
		if($jumq <1){
			echo"<h1>Maaf data belum tersedia...</h1>";
			}								
	$arrq=getData($conn,$sqlq);
		foreach($arrq as $dq) {							
				$status=$dq["status"];

?>     

<h3>Data User <?php echo $status;?></h3>
  <div>
<!-- -->

Data user: 
<a href="user/pdf.php" class="btn btn-danger" style="color:white;">PDF</a> 
<a href="user/xls.php" class="btn btn-success" style="color:white;">Excel</a> 
<a class="btn btn-primary" style="color:white;" alt='PRINT' OnClick="PRINT()">Print</a>
<br><br>

<table id="example2" class="table table-striped table-bordered table-hover">
  <thead>
  <tr >
    <th width="3%"><center>No</th>
    <th width="10%"><center>ID User</th>
    <th width="20%"><center>Nama</th>
    <th width="10%"><center>Telepon</th>
    <th width="25%"><center>Email</th>
    <th width="10%"><center>Status</th>
    <th width="15%"><center>Keterangan</th>
    <th width="15%"><center>Menu</th>
  </tr>
  </thead>
  <tbody>
<?php  
  $sql="select * from `$tbuser` where status='$status' order by `id_user` desc";
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
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$tlp_user=$d["tlp_user"];
				$email=$d["email"];
				$username=$d["username"];
				$password=$d["password"];
				$status=$d["status"];
				$keterangan=$d["keterangan"];
				
echo"<tr>
				<td>$no</td>
				<td>$id_user</td>
				<td>$nama_user</td>
				<td>$tlp_user</td>
				<td>$email</td>
				<td>$status</td>
				<td>$keterangan</td>
				<td align='center'>
<a href='?mnu=user&pro=ubah&kode=$id_user'><img src='ypathicon/edit.png' alt='ubah'></a>
<a href='?mnu=user&pro=hapus&kode=$id_user'><img src='ypathicon/delete.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_user pada data user ?..\")'></a></td>
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=user'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=user'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=user'>Next »</a></span>";
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
	$id_user=strip_tags($_POST["id_user"]);
	$nama_user=strip_tags($_POST["nama_user"]);
	$tlp_user=strip_tags($_POST["tlp_user"]);
	$email=strip_tags($_POST["email"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$status=strip_tags($_POST["status"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
	
if($pro=="simpan"){
$sql=" INSERT INTO `tbl_user` (
`id_user` ,
`nama_user` ,
`tlp_user` ,
`email` ,
`username` ,
`password` ,
`status` ,
`keterangan` 

) VALUES (
'$id_user', 
'$nama_user', 
'$tlp_user',
'$email',
'$username',
'$password',
'$status',
'$keterangan'

)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_user berhasil disimpan !');document.location.href='?mnu=user';</script>";}
		else{echo"<script>alert('Data $id_user gagal disimpan...');document.location.href='?mnu=user';</script>";}
	}
	else{
$sql="update `$tbuser` set 
`nama_user`='$nama_user',
`tlp_user`='$tlp_user' ,
`email`='$email',
`username`='$username',
`password`='$password',
`status`='$status',
`keterangan`='$keterangan' 
where `id_user`='$id_user'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_user berhasil diubah !');document.location.href='?mnu=user';</script>";}
	else{echo"<script>alert('Data $id_user gagal diubah...');document.location.href='?mnu=user';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_user=$_GET["kode"];
$sql="delete from `$tbuser` where `id_user`='$id_user'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data user $id_user berhasil dihapus !');document.location.href='?mnu=user';</script>";}
else{echo"<script>alert('Data user $id_user gagal dihapus...');document.location.href='?mnu=user';</script>";}
}
?>

