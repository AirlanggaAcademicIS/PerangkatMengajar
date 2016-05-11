<?php
$host="localhost";
$user="root";
$pass="";
$database="epbm1";
$fail=false;

mysql_connect($host,$user,$pass) or die (
    "<table width=100% height=100% border=0><tr><td align='center' valign='center'>
    <h2>Server Connection Fail</h2><a href='../perangkat-pbm.php'>Go to Home</a>
    </td></tr></table>"
);

mysql_select_db($database) or die (
    "<table width=100% height=100% border=0><tr><td align='center' valign='center'>
    <h2>Database Connection Fail</h2><a href='../perangkat-pbm.php'>Go to Home</a>
    </td></tr></table>"
);

?>