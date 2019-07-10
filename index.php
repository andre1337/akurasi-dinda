<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
session_start();
//error_reporting(0);
require_once"admin/konmysqli.php";




$mnu=$_GET["mnu"];
date_default_timezone_set("Asia/Jakarta");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Beasiswa</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/ykl.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                           <!--  <p><i class="fa fa-phone-square"></i> +0123 456 70 90</p> -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/ico/1ykl.png" height="90px" width="160px"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                     <?php if(isset($_SESSION["cid"])){?>
                        <li><a href="index.php?mnu=profil" >Profil</a></li>
                        <li><a href="index.php?mnu=pengumuman" >Pengumuman</a></li>
                        <li><a href="index.php?mnu=logout" >Logout</a></li>

                     <?php }else{?>
                        <li><a href="index.php?mnu=home" >Home</a></li>
                        <li><a href="index.php?mnu=registrasi" >Daftar Beasiswa</a></li>
                        <li><a href="index.php?mnu=info">Informasi</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#myModal">Login</a></li>
                      </ul>
           <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Silahkan Login Terlebih Dahulu</center></h4>
                      </div>
                      <div class="modal-body">
                        <form method="post">
                              <BR>
                              <div class="input-group login-userinput">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                  <input id="txtUser" type="text" class="form-control" name="user" placeholder="Username" required/>
                              </div>
                              <br />
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                  <input  id="txtPassword" type="password" class="form-control" name="pass" placeholder="Password" required/>
                                  <span id="showPassword" class="input-group-btn">
                          <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </span>  
                              </div>
                              <button class="btn btn-primary btn-block login-button"  name="Login" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                              <div class="checkbox login-options">
                                  
                              </div>    
                          </form>      
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div> -->
                    </div>
              
            </div>
          </div>
                   <?php }?>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->
<?php if($mnu=="" || $mnu=="home"){?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">YAYASAN KENCANA LESTARI</h1>
                                    <div class="animation animated-item-2">
                                        Selamat Datang di Website Penerimaan Beasiswa Yayasan Kencana Lestari
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="index.php?mnu=registrasi">Pendaftaran</a>
                                    <a class="btn-slide white animation animated-item-3" href="index.php?mnu=info">Seputar Informasi</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(images/slider/11.png)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">YAYASAN KENCANA LESTARI</h1> 
                                    <div class="animation animated-item-2">
                                       Selamat Datang di Website Penerimaan Beasiswa Yayasan Kencana Lestari
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="index.php?mnu=registrasi">Pendaftaran</a>
                                    <a class="btn-slide animation animated-item-3" href="index.php?mnu=info">Seputar Informasi</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->
 <?php }?>
 
<?php if($mnu=="home" || $mnu==""){}else{?>
    <section id="recent-works">
        <div class="container">
           <!--  <div class="center fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->

            <div class="row">
               
               
               
               
                 <?php 

if($mnu=="admin"){require_once"admin/admin.php";}
else if($mnu=="user"){require_once"user/user.php";}
else if($mnu=="registrasi"){require_once"registrasi.php";}
else if($mnu=="info"){require_once"info.php";}
else if($mnu=="infodetail"){require_once"infodetail.php";}
else if($mnu=="pengumuman"){require_once"pengumuman.php";}
else if($mnu=="profil"){require_once"profil.php";}
// else if($mnu=="login"){require_once"login.php";}
else if($mnu=="data_latih"){require_once"data_latih/data_latih.php";}
//else if($mnu=="login"){require_once"login.php";}
else if($mnu=="updateprofil"){require_once"updateprofil.php";}
else if($mnu=="logout"){require_once"admin/logout.php";}
else {require_once"home.php";}
   
 ?>
 
 
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->
<?pHp }?>
   

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Yayasan Kencana Lestari</a>. All Rights Reserved.
                </div>
                <!-- <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>
    <!--/#footer-->
<?php if($mnu=="" || $mnu=="home"){?>
    <script src="js/jquery.js"></script>
<?php }?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php
if(isset($_POST["Login"])){
  $usr=$_POST["user"];
  $pas=$_POST["pass"];
  
    echo $sql1="select * from `$tbpendaftar` where `username`='$usr' and `password`='$pas'";
    
    if(getJum($conn,$sql1)>0){
      $d=getField($conn,$sql1);
        $kode=$d["id_pendaftar"];
        $nama=$d["nama_pendaftar"];
           $_SESSION["cid"]=$kode;
           $_SESSION["cnama"]=$nama;
           $_SESSION["cstatus"]="Pendaftar";
    echo "<script>alert('Otentikasi ".$_SESSION["cstatus"]." ".$_SESSION["cnama"]." (".$_SESSION["cid"].") berhasil Login!');
    document.location.href='index.php?mnu=profil';</script>";
    }
    //elseif(getJum($conn,$sql2)>0){
      
    //  }
    else{
      session_destroy();
      echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
      document.location.href='index.php?mnu=home';</script>";
    }
}


?>
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
  if($arr[1]=="Januari"){$bul="01";}
  else if($arr[1]=="Februari"){$bul="02";}
  else if($arr[1]=="Maret"){$bul="03";}
  else if($arr[1]=="April"){$bul="04";}
  else if($arr[1]=="Mei"){$bul="05";}
  else if($arr[1]=="Juni"){$bul="06";}
  else if($arr[1]=="Juli"){$bul="07";}
  else if($arr[1]=="Agustus"){$bul="08";}
  else if($arr[1]=="September"){$bul="09";}
  else if($arr[1]=="Oktober"){$bul="10";}
  else if($arr[1]=="November"){$bul="11";}
  else if($arr[1]=="Nopember"){$bul="11";}
  else if($arr[1]=="Desember"){$bul="12";}
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
function getPeriode($conn,$kode){
$field="nama_periode";
$sql="SELECT `$field` FROM `tbl_periode` where  `id_periode`='$kode'";
$rs=$conn->query($sql); 
  $rs->data_seek(0);
  $row = $rs->fetch_assoc();
  $rs->free();
    return $row[$field];
  }
?>
