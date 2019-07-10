<script language="JavaScript">
function buka(url) {window.open(url, "window_baru", "width=800,height=600,left=320,top=100,resizable=1,scrollbars=1");}
</script>

<span class="infinite_goldtitle"><marquee>TENTANG USAHA <?php echo $namaweb;?></marquee></span><hr>
<div align="left"><span class="TPDhilite">--&gt; <strong>What do we Provide</strong>
<?php
$YPATH="ypathfile";
  $s="select * from `$tbgaleri` order by rand()";
  $q=mysql_query($s);
	$d=mysql_fetch_array($q);							
				$idgaleri=$d["id-galeri"];
				$judul=$d["judul"];
				$kategori=$d["kategori"];
				$gambar=$d["gambar"];
				
				?>
<a href='#' onclick='buka("galeri/zoom.php?id=<?php echo $idgaleri;?>")'>
<img src="<?php echo $YPATH;?>/<?php echo $gambar;?>"
width="260" height="219" align="left" alt="<?php echo $gambar;?>" title="<?php echo $judul;?>"/></a></span> <br>
  <span class="highlight2">-Hardware <br>
  -Software <br>
  -Service <br>
  -Trading PC <br>
  -Networking <br>
-Multi OS. </span></div>
<p> </p>
<div align="left"><span class="highlight">--&gt; <strong>Why do you have to choose Us</strong></span><br>
  <span class="highlight2">-Well Performed<br>
  -Solid Teamwork<br>
  -Pointing Design<br>
  -Widely Range Products<br>
  -Partner with big company networks<br>
  -Kind peoples</span></div>
<p> </p>
<div align="left"><span class="texthighlight">--&gt; <strong>Who we are ?</strong></span><br />
  <span class="infinite_detailtitle">-<?php echo $namausaha;?>, CV<br />
  -<?php echo $namausaha;?>, PT<br />
  -<?php echo $namausaha;?> Yayasan<br />
  -Lembaga Kursus<br />
  -Jual Beli Komputer<br />
  -<?php echo $namausaha;?> Repair 'n Service
</span></div>

