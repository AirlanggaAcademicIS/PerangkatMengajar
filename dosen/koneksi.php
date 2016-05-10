<?php
$my['host'] = "localhost";
$my['user'] = "root";
$my['pass'] = "";
$my['dbs'] = "epbm";

$koneksi=mysql_connect($my['host'],$my['user'],$my['pass']);
if ($koneksi){
echo "db available";
}
if (! $koneksi){
  echo "Koneksi gagal!".mysql_error();
  }
mysql_select_db($my['dbs'])
or die ("Database not found".mysql_error());
?>