<?php
//  echo "<li><a href='download/downloadget.php?file=$file' title='$judul'>$judul</a> ($hits)</li>";
$direktori = "ypathfile/";
$namafile=$_GET["file"];

if (!file_exists($direktori.$namafile)) {
  echo "<h1>Access forbidden!</h1>
        <p>Maaf, file $namafile yang Anda download sudah tidak tersedia atau filenya (direktorinya) telah diproteksi. <br />
        Silahkan hubungi <a href='mailto:adminweb@yahoo.com'>Administrator $namafile</a>.</p>";
  exit();
}
else {
  header("Content-Type: octet/stream");
  header("Content-Disposition: attachment; filename=\"".$namafile."\"");
  $fp = fopen($direktori.$namafile, "r");
  $data = fread($fp, filesize($direktori.$namafile));
  fclose($fp);
  print $data;
}
?>
