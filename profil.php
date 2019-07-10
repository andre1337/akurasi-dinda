<?php
$pro="simpan";
$tgl_lahir=WKT(date("Y-m-d"));
$upload_khs0="avatar.jpg";
$upload_kk0="avatar.jpg";
$upload_prestasi0="avatar.jpg";
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_lahir").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('pendaftar/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
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
  $id_pendaftar=$_SESSION["cid"];
  $sql="select * from `$tbpendaftar` where `id_pendaftar`='$id_pendaftar'";
  $d=getField($conn,$sql);
        $id_pendaftar=$d["id_pendaftar"];
        $nama_pendaftar=$d["nama_pendaftar"];
        $tempat_lahir=$d["tempat_lahir"];
        $tgl_lahir=WKT($d["tgl_lahir"]);
        $alamat=$d["alamat"];
        $no_tlpa=$d["no_tlpa"];
        $no_tlpo=$d["no_tlpo"];
        $ipk=$d["ipk"];
        $prestasi=$d["prestasi"];
        $organisasi=$d["organisasi"];
        $nama_ortu=$d["nama_ortu"];
        $penghasilan=$d["penghasilan"];
        $jumlah_tanggungan=$d["jumlah_tanggungan"];
        $upload_khs=$d["upload_khs"];
        $upload_kk=$d["upload_kk"];
        $upload_prestasi=$d["upload_prestasi"];
        $username=$d["username"];
        $password=$d["password"];
        $id_periode=$d["id_periode"];
   
?>

<div id="accordion">
 <!--  <h3>Registrasi Pendaftar</h3> -->
  <div>
<!-- <img src="images/imkl.png" width="500px" height="300px"> -->

<form action="" method="post" enctype="multipart/form-data">
<!-- <table width="587"> -->
  <br>


            <div class="col-md-6" >
                  <div id="block-id_pendaftar" class="row bord-bottom ">
                      <label for="id_pendaftar" class="col-md-5">Kode Pendaftar</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $id_pendaftar;?></td>
                          </tr><p class="help-block"><span id="error-field-id_pendaftar"></span></p>          
                        </div>
                    </div>


                    <div id="block-nama_pendaftar" class="row bord-bottom ">
                      <label for="nama_pendaftar" class="col-md-5">Nama Pendaftar</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $nama_pendaftar;?></td>
                          </tr><p class="help-block"><span id="error-field-nama_pendaftar"></span></p>          
                        </div>
                    </div>

                    <div id="block-tempat_lahir" class="row bord-bottom ">
                      <label for="tempat_lahir" class="col-md-5">Tempat Lahir</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $tempat_lahir;?></td>
                          </tr><p class="help-block"><span id="error-field-tempat_lahir"></span></p>          
                        </div>
                    </div>


                    <div id="block-tgl_lahir" class="row bord-bottom ">
                      <label for="tgl_lahir" class="col-md-5">Tanggal Lahir</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $tgl_lahir;?></td>
                          </tr><p class="help-block"><span id="error-field-tgl_lahir"></span></p>          
                        </div>
                    </div>



                     <div id="block-alamat" class="row bord-bottom ">
                      <label for="alamat" class="col-md-5">Alamat</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $alamat;?></td>
                          </tr><p class="help-block"><span id="error-field-alamat"></span></p>          
                        </div>
                    </div>

                    <div id="block-no_tlpa" class="row bord-bottom ">
                      <label for="no_tlpa" class="col-md-5">No Tlp Anak</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $no_tlpa;?></td>
                          </tr><p class="help-block"><span id="error-field-no_tlpa"></span></p>          
                        </div>
                    </div>



                    <div id="block-no_tlpo" class="row bord-bottom ">
                      <label for="no_tlpo" class="col-md-5">No Tlp Orang Tua</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $no_tlpo;?></td>
                          </tr><p class="help-block"><span id="error-field-no_tlpo"></span></p>          
                        </div>
                    </div>

                    <div id="block-nama_ortu" class="row bord-bottom ">
                      <label for="nama_ortu" class="col-md-5">Nama Orang Tua</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $nama_ortu;?></td>
                          </tr><p class="help-block"><span id="error-field-nama_ortu"></span></p>          
                        </div>
                    </div>
                    
                    <div id="block-ipk" class="row bord-bottom ">
                      <label for="ipk" class="col-md-5">IPK</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $ipk;?></td>
                          </tr><p class="help-block"><span id="error-field-ipk"></span></p>          
                        </div>
                    </div>

                    <div id="block-prestasi" class="row bord-bottom ">
                      <label for="prestasi" class="col-md-5">Prestasi</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $prestasi;?></td>
                          </tr><p class="help-block"><span id="error-field-prestasi"></span></p>          
                        </div>
                    </div>



                    <div id="block-organisasi" class="row bord-bottom ">
                      <label for="organisasi" class="col-md-5">Organisasi Yang Diikuti</label>
                        <div class="col-md-7" style="display:block;word-wrap:break-word;">
                          <?php echo $organisasi;?></td>
                          </tr><p class="help-block"><span id="error-field-organisasi"></span></p>          
                        </div>
                    </div>
          </div>

          <div class="col-md-6">
              <div id="block-penghasilan" class="row bord-bottom ">
                <label for="penghasilan" class="col-md-5">penghasilan</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $penghasilan;?></td>
                      </tr><p class="help-block"><span id="error-field-penghasilan"></span></p>          
                    </div>
              </div>

              <div id="block-jumlah_tanggungan" class="row bord-bottom ">
                <label for="jumlah_tanggungan" class="col-md-5">Jumlah Tanggungan</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $jumlah_tanggungan;?></td>
                      </tr><p class="help-block"><span id="error-field-jumlah_tanggungan"></span></p>          
                    </div>
              </div>

              <div id="block-upload_khs" class="row bord-bottom ">
                <label for="upload_khs" class="col-md-5">Upload KHS</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $upload_khs;?></td>
                      </tr><p class="help-block"><span id="error-field-upload_khs"></span></p>          
                    </div>
              </div>

              <div id="block-upload_kk0" class="row bord-bottom ">
                <label for="upload_kk0" class="col-md-5">Upload KK</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $upload_kk0;?></td>
                      </tr><p class="help-block"><span id="error-field-upload_kk0"></span></p>          
                    </div>
              </div>

              <div id="block-upload_prestasi" class="row bord-bottom ">
                <label for="upload_prestasi" class="col-md-5">Upload Prestasi</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $upload_prestasi;?></td>
                      </tr><p class="help-block"><span id="error-field-upload_prestasi"></span></p>          
                    </div>
              </div>

              <div id="block-username" class="row bord-bottom ">
                <label for="username" class="col-md-5">Username</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $username;?></td>
                      </tr><p class="help-block"><span id="error-field-username"></span></p>          
                    </div>
              </div>

              <div id="block-password" class="row bord-bottom ">
                <label for="password" class="col-md-5">Password</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo $password;?></td>
                      </tr><p class="help-block"><span id="error-field-password"></span></p>          
                    </div>
              </div>

              <div id="block-id_periode" class="row bord-bottom ">
                <label for="id_periode" class="col-md-5">Pilih Periode</label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                      <?php echo getPeriode($conn,$id_periode);?></td>
                      </tr><p class="help-block"><span id="error-field-id_periode"></span></p>          
                    </div>
              </div>

              <div id="block-upload_khs" class="row bord-bottom ">
                <label for="upload_khs" class="col-md-5"></label>
                    <div class="col-md-7" style="display:block;word-wrap:break-word;">
                     <a href="?mnu=updateprofil"><input class="btn btn-danger" name="updateprofil" type="button" id="updateprofil" value="Update Profil" /></a>
                      </tr><p class="help-block"><span id="error-field-upload_khs"></span></p>          
                    </div>
              </div>

          </div>

</div><!-- 
</table> -->
</form>

</div>
</div>

<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pendaftar=strip_tags($_POST["id_pendaftar"]);
	//$id_pendaftar0=strip_tags($_POST["id_pendaftar0"]);
	$nama_pendaftar=strip_tags($_POST["nama_pendaftar"]);
	$tempat_lahir=strip_tags($_POST["tempat_lahir"]);
	$tgl_lahir=BAL(strip_tags($_POST["tgl_lahir"]));
	$alamat=strip_tags($_POST["alamat"]);
	$no_tlpa=strip_tags($_POST["no_tlpa"]);
	$no_tlpo=strip_tags($_POST["no_tlpo"]);
	$ipk=strip_tags($_POST["ipk"]);
	$prestasi=strip_tags($_POST["prestasi"]);
  $organisasi=strip_tags($_POST["organisasi"]);
	$nama_ortu=strip_tags($_POST["nama_ortu"]);
	$penghasilan=strip_tags($_POST["penghasilan"]);
	$jumlah_tanggungan=strip_tags($_POST["jumlah_tanggungan"]);
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$id_periode=strip_tags($_POST["id_periode"]);


 $sql="select * from `$tbpendaftar` where id_periode='$id_periode' and nama_pendaftar='$nama_pendaftar' ";
  $jum=getJum($conn,$sql);
		if($jum > 0){
echo "<script>alert('Mahasiswa  atas nama $nama_pendaftar Sudah Terdaftar!');</script>";

}else{
	$upload_khs0=strip_tags($_POST["upload_khs0"]);
	if ($_FILES["upload_khs"] != "") {
		@copy($_FILES["upload_khs"]["tmp_name"],"$YPATH/".$_FILES["upload_khs"]["name"]);
		$upload_khs=$_FILES["upload_khs"]["name"];
		} 
	else {$upload_khs=$upload_khs0;}
	if(strlen($upload_khs)<1){$upload_khs=$upload_khs0;}


	$upload_kk0=strip_tags($_POST["upload_kk0"]);
	if ($_FILES["upload_kk"] != "") {
		@copy($_FILES["upload_kk"]["tmp_name"],"$YPATH/".$_FILES["upload_kk"]["name"]);
		$upload_kk=$_FILES["upload_kk"]["name"];
		} 
	else {$upload_kk=$upload_kk0;}
	if(strlen($upload_kk)<1){$upload_kk=$upload_kk0;}


	$upload_prestasi0=strip_tags($_POST["upload_prestasi0"]);
	if ($_FILES["upload_prestasi"] != "") {
		@copy($_FILES["upload_prestasi"]["tmp_name"],"$YPATH/".$_FILES["upload_prestasi"]["name"]);
		$upload_prestasi=$_FILES["upload_prestasi"]["name"];
		} 
	else {$upload_prestasi=$upload_prestasi0;}
	if(strlen($upload_prestasi)<1){$upload_prestasi=$upload_prestasi0;}
	
$sql=" INSERT INTO `$tbpendaftar` (
`id_pendaftar` ,
`nama_pendaftar` ,
`tempat_lahir` ,
`tgl_lahir` ,
`alamat` ,
`no_tlpa` ,
`no_tlpo` ,
`ipk` ,
`prestasi` ,
`organisasi` ,
`nama_ortu` ,
`penghasilan` ,
`jumlah_tanggungan` ,
`upload_khs` ,
`upload_kk` ,
`upload_prestasi`,
`username` ,
`password` ,
`id_periode` 
  
) VALUES (
'$id_pendaftar', 
'$nama_pendaftar', 
'$tempat_lahir',
'$tgl_lahir',
'$alamat' ,
'$no_tlpa' ,
'$no_tlpo' ,
'$ipk' ,
'$prestasi' ,
'$organisasi' ,
'$nama_ortu' ,
'$penghasilan' ,
'$jumlah_tanggungan' ,
'$upload_khs' ,
'$upload_kk' ,
'$upload_prestasi' ,
'$username' ,
'$password' ,
'$id_periode' 

)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Berhasil Registrasi !');document.location.href='?mnu=registrasi';</script>";}
		else{echo"<script>alert('Data $id_pendaftar gagal disimpan...');document.location.href='?mnu=registrasi';</script>";}
	}
}
?>


