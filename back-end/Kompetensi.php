<?php
include ("DBconnect.php");


$subkompetensi = $_POST['subkomp'];
$pokok = $_POST ['pokokbahasan'];

$query="INSERT INTO kompetensi_khusus(`NAMA_KK`, `NAMA_PB`) VALUES('".$subkompetensi."','".$pokok."')";


$subpokokbahasan = $_POST['subpokok'];
$query="INSERT INTO sub_bahasan (`SUB_BAHASAN`) VALUES ('".$subpokokbahasan."')";

$res=mysql_query($query);

?>