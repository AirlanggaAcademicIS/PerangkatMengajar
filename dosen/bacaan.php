<?php
include ("../DBconnect.php");
$nama = $_POST['namapengarang'];
$tahun = $_POST['tahunterbit'];
$judul = $_POST['judulbuku'];
$kota = $_POST['kotatempatterbit'];
$penerbit = $_POST['namapenerbit'];

echo $kode." ".$nama." ".$prodi." ".$dosen;

$query="INSERT INTO bacaan(`NAMA_PENULIS`,`TAHUN`,`JUDUL`,`KOTA_PENERBIT`,`NAMA_PENERBIT`) VALUES('".$nama."','".$tahun."','".$judul."','".$kota."','".$penerbit."')";
$res=mysql_query($query);
?>