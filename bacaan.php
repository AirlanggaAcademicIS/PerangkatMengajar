
<?php
include ("DBconnect.php");

$nama = $_POST['namapengarang'];
$tahun = $_POST['tahunterbit'];
$judul = $_POST['judulbuku'];
$kota = $_POST['kotatempatterbit'];
$penerbit = $_POST['namapenerbit'];


$query="INSERT INTO bacaan(`NAMA_PENULIS`,`TAHUN`,`JUDUL`,`KOTA_PENERBIT`,`NAMA_PENERBIT`) VALUES('".$nama."','".$tahun."','".$judul."','".$kota."','".$penerbit."')";
$res=mysql_query($query);

if (!$res){
	echo "<script> alert ('Gagal di tambahkan!!');
	history.go(-1);
	</script>";
}
else {
	echo "<script> alert ('Data berhasil ditambahkan!!');
	history.go(-1);
	</script>";
}


?>