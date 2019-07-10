<link href="style.css" rel="stylesheet" type="text/css">
<?php
mysql_connect("localhost","root","");
mysql_select_db("pintar");

echo "<table><tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";

// Langkah 1: Tentukan batas,cek halaman & posisi data
$batas   = 5;
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi  = 0;
	$halaman = 1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

//Langkah 2: Sesuaikan perintah SQL
$tampil = "SELECT * FROM anggota LIMIT $posisi,$batas";
$hasil  = mysql_query($tampil);

$no = $posisi+1;
while($r=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$r[nama]</td><td>$r[alamat]</td></tr>";
  $no++;
}
echo "</table><br>";

//Langkah 3: Hitung total data dan halaman 
$tampil2 = mysql_query("SELECT * FROM anggota");
$jmldata = mysql_num_rows($tampil2);
$jmlhal  = ceil($jmldata/$batas);

// Link ke halaman sebelumnya (Prev)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<a href=$_SERVER[PHP_SELF]?halaman=$prev>« Prev</a> ";
}
else{ 
	echo "« Prev ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</a> ";
}
else{
	echo " $i ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<a href=$_SERVER[PHP_SELF]?halaman=$next>Next »</a>";
}
else{ 
	echo "Next »";
}
?>
