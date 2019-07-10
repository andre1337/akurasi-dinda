<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
session_start();
//error_reporting(0);
require_once"konmysqli.php";


if(!isset($_SESSION["cid"])){
echo"<script>document.location.href='login/Login.php';</script>";
}

$mnu=$_GET["mnu"];
date_default_timezone_set("Asia/Jakarta");

$sql="select * from `$tbperiode` where `status`='Aktif'";
  $d=getField($conn,$sql);
        $gid_periode=$d["id_periode"];
        $gnama_periode=$d["nama_periode"];
        $gdeskripsi=$d["deskripsi"];
        $gstatus=$d["status"];
        $gketerangan=$d["keterangan"];



$sql="select id_pendaftar from `tbl_pendaftar` where `hasil`='Layak'";
  $j1=getJum($conn,$sql);
$sql="select id_pendaftar from `tbl_pendaftar` where `hasil`='Tidak Layak'";
  $j2=getJum($conn,$sql);
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SISTEM SELEKSI BEASISWA YKL</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Layak', <?php echo $j1;?>],
          // ['Eat',      2],
          // ['Commute',  2],
          ['Tidak', <?php echo $j2;?>],
          // ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Admin</b>YKL</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menu Navigation</span>
          </a>
		  
		  
			<div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <?php
				require_once"nav.php";
				?>
           
		   <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/ykl.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Admin</span>
                </a>
                
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/ykl.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

<?php
if($_SESSION["cstatus"]=="Administrator"){  ?>
<li class="treeview"><a href="index.php?mnu=home"> <i class="fa fa-pie-chart"></i> <span>Grafik</span></a></li>
<li class="treeview"><a href="index.php?mnu=user"> <i class="fa fa-user-o"></i> <span>Manajemen User</span> </a></li>
<li class="treeview"><a href="index.php?mnu=periode"> <i class="fa fa-calendar"></i> <span>Periode</span> </a></li>
<li class="treeview"><a href="index.php?mnu=pendaftar"> <i class="fa fa-user"></i> <span>Pendaftar</span></a></li>
<li class="treeview"><a href="index.php?mnu=data_latih"> <i class="fa fa-database"></i> <span>Data Latih</span></a></li>
<!-- <li class="treeview"><a href="index.php?mnu=data_testing"> <i class="fa fa-file-text-o"></i> <span>Data Testing</span></a></li> -->
<li class="treeview"><a href="index.php?mnu=hasil"> <i class="fa fa-folder"></i> <span>Hasil</span></a></li>
<li class="treeview"><a href="index.php?mnu=akurasi"> <i class="fa fa-folder"></i> <span>Akurasi Data</span></a></li>

<li class="treeview"><a href="index.php?mnu=logout"> <i class="fa fa-power-off"></i> <span>Logout</span></a></li>

 <?php }else{ ?>

<li class="treeview"><a href="index.php?mnu=home"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i></a></li>
<li class="treeview"><a href="Login/Login.php"> <i class="fa fa-dashboard"></i> <span>Login</span> <i class="fa fa-angle-left pull-right"></i></a></li>


 <?php }?>        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
            <small></small>
          </h1>
          <ol class="breadcrumb">
         <!--    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
             <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <!-- <h3 class="box-title">Hover Data Table</h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">


         <?php 

if($mnu=="admin"){require_once"admin/admin.php";}
else if($mnu=="user"){require_once"user/user.php";}
else if($mnu=="akurasi"){require_once"akurasi.php";}
else if($mnu=="hasil"){require_once"hasil/hasil.php";}
else if($mnu=="periode"){require_once"periode/periode.php";}
else if($mnu=="pendaftar"){require_once"pendaftar/pendaftar.php";}
else if($mnu=="data_latih"){require_once"data_latih/data_latih.php";}
else if($mnu=="data_testing"){require_once"data_testing/data_testing.php";}
else if($mnu=="login"){require_once"login.php";}
else if($mnu=="nb"){require_once"nb.php";}
else if($mnu=="logout"){require_once"logout.php";}
else {require_once"home.php";}
   
 ?>
          </div><!-- /.row (main row) -->
        </div><!-- /.row (main row) -->
      </div><!-- /.row (main row) -->
    </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>&copy; Copyright 2019 <a href="http://almsaeedstudio.com">Yayasan Kencana Lestari</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->
<?php if($mnu=="" || $mnu=="home"){?>
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<?php }?>    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>



<?php function RP($rupiah){return number_format($rupiah,"2",",",".");}?>
<?php
function WKT($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
return $wk;
}
?>
<?php
function WKTP($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,2,2);

$judul_bln=array(1=> "Jan", "Feb", "Mar", "Apr", "Mei","Jun", "Jul", "Agu", "Sep","Okt", "Nov", "Des");
$wk=$tanggal." ".$judul_bln[(int)$bulan]."'".$tahun;
return $wk;
}
?>
<?php
function BAL($tanggal){
  $arr=split(" ",$tanggal);
  if($arr[1]=="Januari" || $arr[1]=="January"){$bul="01";}
  else if($arr[1]=="Februari" || $arr[1]=="February"){$bul="02";}
  else if($arr[1]=="Maret" || $arr[1]=="March"){$bul="03";}
  else if($arr[1]=="April" || $arr[1]=="April"){$bul="04";}
  else if($arr[1]=="Mei" || $arr[1]=="May"){$bul="05";}
  else if($arr[1]=="Juni" || $arr[1]=="Juny"){$bul="06";}
  else if($arr[1]=="Juli" || $arr[1]=="July"){$bul="07";}
  else if($arr[1]=="Agustus" || $arr[1]=="August"){$bul="08";}
  else if($arr[1]=="September" || $arr[1]=="September"){$bul="09";}
  else if($arr[1]=="Oktober" || $arr[1]=="October"){$bul="10";}
  else if($arr[1]=="November"|| $arr[1]=="November"){$bul="11";}
  else if($arr[1]=="Nopember" || $arr[1]=="November"){$bul="11";}
  else if($arr[1]=="Desember" || $arr[1]=="December"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";  
}
?>

<?php
function BALP($tanggal){
  $arr=split(" ",$tanggal);
  if($arr[1]=="Jan"){$bul="01";}
  else if($arr[1]=="Feb"){$bul="02";}
  else if($arr[1]=="Mar"){$bul="03";}
  else if($arr[1]=="Apr"){$bul="04";}
  else if($arr[1]=="Mei"){$bul="05";}
  else if($arr[1]=="Jun"){$bul="06";}
  else if($arr[1]=="Jul"){$bul="07";}
  else if($arr[1]=="Agu"){$bul="08";}
  else if($arr[1]=="Sep"){$bul="09";}
  else if($arr[1]=="Okt"){$bul="10";}
  else if($arr[1]=="Nov"){$bul="11";}
  else if($arr[1]=="Nop"){$bul="11";}
  else if($arr[1]=="Des"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";  
}
?>


<?php
function process($conn,$sql){
$s=false;
$conn->autocommit(FALSE);
try {
  $rs = $conn->query($sql);
  if($rs){
      $conn->commit();
      $last_inserted_id = $conn->insert_id;
    $affected_rows = $conn->affected_rows;
      $s=true;
  }
} 
catch (Exception $e) {
  echo 'fail: ' . $e->getMessage();
    $conn->rollback();
}
$conn->autocommit(TRUE);
return $s;
}

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
  $rs->free();
  return $jum;
}

function getField($conn,$sql){
  $rs=$conn->query($sql);
  $rs->data_seek(0);
  $d= $rs->fetch_assoc();
  $rs->free();
  return $d;
}

function getData($conn,$sql){
  $rs=$conn->query($sql);
  $rs->data_seek(0);
  $arr = $rs->fetch_all(MYSQLI_ASSOC);
  //foreach($arr as $row) {
  //  echo $row['nama_kelas'] . '*<br>';
  //}
  
  $rs->free();
  return $arr;
}

function getAdmin($conn,$kode){
$field="username";
$sql="SELECT `$field` FROM `tb_admin` where `kode_admin`='$kode'";
$rs=$conn->query($sql); 
  $rs->data_seek(0);
  $row = $rs->fetch_assoc();
  $rs->free();
    return $row[$field];
  }
function getPendaftar($conn,$kode){
$field="nama_pendaftar";
$sql="SELECT `$field` FROM `tbl_pendaftar` where `id_pendaftar`='$kode'";
$rs=$conn->query($sql); 
  $rs->data_seek(0);
  $row = $rs->fetch_assoc();
  $rs->free();
    return $row[$field];
  }
  
  function getPeriode($conn,$kode){
$field="nama_periode";
$sql="SELECT `$field` FROM `tbl_periode` where `id_periode`='$kode'";
$rs=$conn->query($sql); 
  $rs->data_seek(0);
  $row = $rs->fetch_assoc();
  $rs->free();
    return $row[$field];
  }
  
 function getV1($v){
	$r="Rendah";
	if($v>3.5){$r="Tinggi";}	
	else if($v>3.0){$r="Sedang";}			
	return $r;
 }
  function getV2($v){
	return $v;
 }
 
  function getV3($v){
	$r="Kurang";
	if($v>4000000){$r="Mampu";}	
	else if($v>3000000){$r="Menengah";}	
	return $r;
 }
 
 function getV4($v){
	$r="Sedikit";
	if($v>3){$r="Banyak";}	
	else if($v>1){$r="Cukup";}		
	return $r;
 }

function getV5($org){
	$ar=explode(",",$org);
	$v=count($ar);
	$r="?";

  if($org==""){
    $r="Tidak";
  }
  else{
  	if($v>2){$r="Banyak";}	
  	else if($v>0){$r="Sedikit";}	
  }
	return $r;
 }
 
?>



<?php
function getKKN($conn,$kolom,$data,$kat){
 echo  $sql="select `id_datalatih` from `tbl_datalatih` where `$kolom`='$data' and `penilaian`='$kat'";
  $jum=getJum($conn,$sql);
  return $jum;
}
        
function getKK($conn,$kolom,$data,$kat){
  $sql="select `id_datalatih` from `tbl_datalatih` where `$kolom`='$data' and `penilaian`='$kat'";
  $jum=getJum($conn,$sql);
  return $jum;
}

function getOut($conn,$kat){
  $sql="select `id_datalatih` from `tbl_datalatih` where `penilaian`='$kat'";
  $jum=getJum($conn,$sql);
  return $jum;
}



?>