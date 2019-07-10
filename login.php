<?php
session_start();
?>

<div class="container login-form" style="width:500px;background-color: salmon;">
    <h2 class="login-title" style="text-align:  center; color:  white;"   >Silahkan Login</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <BR>
            <form method="post">
                <BR>
                <div class="input-group login-userinput">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input id="txtUser" type="text" class="form-control" name="user" placeholder="Username">
                </div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input  id="txtPassword" type="password" class="form-control" name="pass" placeholder="Password">
                    <span id="showPassword" class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>  
                </div>
                <button class="btn btn-primary btn-block login-button"  name="Login" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                <div class="checkbox login-options">
                    <label><input type="checkbox"/> Remember Me</label>
                    <a href="#" class="login-forgot">Forgot Username/Password?</a>
                </div>
                <BR><BR>      
            </form>         
        </div>
    </div><br>
</div>

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
		document.location.href='index.php?mnu=home';</script>";
		}
		//elseif(getJum($conn,$sql2)>0){
			
		//	}
		else{
			session_destroy();
			echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='index.php?mnu=login';</script>";
		}
}


?>