<?php
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
if (empty($_POST['nip']) || empty($_POST['password'])) {
$error = "NIP or Password is invalid";
}
else
{
// Variabel username dan password
$nip=$_POST['nip'];
$password=$_POST['password'];
// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "");
// Mencegah MySQL injection 
$nip = stripslashes($nip);
$password = stripslashes($password);
$nip = mysql_real_escape_string($nip);
$password = mysql_real_escape_string($password);
// Seleksi Database
$db = mysql_select_db("pbm", $connection);
// SQL query untuk memeriksa apakah karyawan terdapat di database?
$query = mysql_query("select * from dosen where PASSWORD='$password' AND NIP='$nip'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$nip; // Membuat Sesi/session
header("location: profile.php"); // Mengarahkan ke halaman profil
} else {
$error = "NIP atau Password belum terdaftar";
}
mysql_close($connection); // Menutup koneksi
}
}
?>