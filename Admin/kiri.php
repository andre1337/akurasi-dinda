<div id=groupmodul>
       <table id=tablemodul>               
       		<tr><th width="150">Menu</th></tr>                 

 <?php
if(isset($_SESSION["cid"])){	
      echo"<tr><td><a href='index.php?mnu=home'>Home</a></td></tr>";
      echo"<tr><td><a href='index.php?mnu=profil'>Profil</a></td></tr>";
	  echo"<tr><td><a href='index.php?mnu=kontak'>Kontak</a></td></tr>";
}
else{
	 echo"<tr><td><a href='index.php?mnu=home'>Home</a></td></tr>";
	 echo"<tr><td><a href='index.php?mnu=profil'>Profil</a></td></tr>";
	 echo"<tr><td><a href='index.php?mnu=kontak'>Kontak</a></td></tr>";
	}
	
	 echo"<tr><td><hr></td></tr>";
	  echo"<tr><td>"; 	
	 require_once"statistik/statistik.php"; 
	  echo"</td></tr>";

      ?>
      
</table></div>
