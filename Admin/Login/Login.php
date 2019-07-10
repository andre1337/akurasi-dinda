<?php

require_once"..\konmysqli.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Aplikasi Sistem Beasiswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/1.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" method="post">
					<div class="login100-form-avatar">
						<img src="images/ykl.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Yayasan Kencana Lestari
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="user" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type="submit" name="Login" class="login100-form-btn" >
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<!-- <a href="#" class="txt1">
							Forgot Username / Password?
						</a> -->
					</div>

					<!-- <div class="text-center w-full">
						<a class="txt1" href="#">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
if(isset($_POST["Login"])){
	$usr=$_POST["user"];
	$pas=$_POST["pass"];
	
		$sql1="select * from `$tbuser` where `username`='$usr' and `password`='$pas' and `status`='Aktif'";
		$sql2="select * from `$tbpendaftar` where `username`='$usr' and `password`='$pas' and `status`='Aktif'";
		
		if(getJum($conn,$sql1)>0){
			$d=getField($conn,$sql1);
				$kode=$d["id_user"];
				$nama=$d["nama_user"];
				   $_SESSION["cid"]=$kode;
				   $_SESSION["cnama"]=$nama;
				   $_SESSION["cstatus"]="Administrator";
		echo "<script>alert('Otentikasi ".$_SESSION["cstatus"]." AN ".$_SESSION["cnama"]." (".$_SESSION["cid"].") berhasil Login!');
		document.location.href='../index.php?mnu=home';</script>";
		}
		//elseif(getJum($conn,$sql2)>0){
			
		//	}
		else{
			session_destroy();
			echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='Login.php';</script>";
		}
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
?>