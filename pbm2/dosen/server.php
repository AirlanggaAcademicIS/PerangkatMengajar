<?php

$hostname     = "localhost";
$user         = "root";
$pass         = "";
$database     = "pbm";

$conn = mysql_connect($hostname,$user,$pass);
if(!$conn) die ("gagal melakukan koneksi");
mysql_select_db($database,$conn) or die("database tidak ditemukan");
?>