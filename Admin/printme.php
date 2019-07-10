<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
session_start();
echo"<link href='ypathcss/amazon.css' rel='stylesheet' type='text/css' />";

echo $_SESSION["gab0"];

echo"<hr>";
echo $_SESSION["gab"];
echo $_SESSION["gab2"];

?>
