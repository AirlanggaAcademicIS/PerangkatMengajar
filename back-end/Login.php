<?php
include ("DBconnect.php");
$user= $_GET['NIP'];
$password= $_GET['Pass'];
$query="SELECT * FROM dosen WHERE nip='".$user."'";
$res=mysql_query($query);

if($data=mysql_fetch_array($res)){
    if(md5($password) == $data[2]){
        echo "<h3>Login Success</h3>";
    } else {
        echo "<h3>Login Fail</h3>";
    }
} else {
    echo "<h3>Login Fail</h3>";
}
?>