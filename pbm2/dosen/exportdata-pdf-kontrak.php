<?php
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Contoh Export to PDF</title>

</head>
<body>
<h1>Data Kontrak <!--<img src="../assets/angular/img/logo-unair.png" alt="" height="5%" width="5%">--></h1>
<table border="1">
    <tr>
    <th>Nomor</th>
    <th>Strategi</th>
    <th>Kuis</th>
    <th>UAS</th>
    <th>Tugas</th>
    <th>Tutor</th>
    <th>UTS</th>
    <th>Softskill</th>
    <th>Date</th>
    <th>Pertemuan</th>
    </tr>
    <?php
    //koneksi ke database
    mysql_connect("localhost", "root", "");
    mysql_select_db("pbm");
    
    //query menampilkan data
    $sql = mysql_query("SELECT mengajar.STRATEGI_PERKULIAHAN,mengajar.KUIS,mengajar.UAS,mengajar.TUGAS,mengajar.TUTOR,mengajar.UTS,mengajar.SOFTSKILL,mengajar.HARI_TANGGAL, prasyarat.PERTEMUAN
                from mengajar,prasyarat
                ");
    $no = 1;
    while($data = mysql_fetch_assoc($sql)){
        echo '
        <tr>
            <td>'.$no.'</td>
            <td>'.$data['STRATEGI_PERKULIAHAN'].'</td>
            <td>'.$data['KUIS'].'</td>
            <td>'.$data['UAS'].'</td>
            <td>'.$data['TUGAS'].'</td>
            <td>'.$data['TUTOR'].'</td>            
            <td>'.$data['UTS'].'</td>
            <td>'.$data['SOFTSKILL'].'</td>
            <td>'.$data['HARI_TANGGAL'].'</td>
            <td>'.$data['PERTEMUAN'].'</td>
        </tr>
        ';
        $no++;
    }
    ?>
</table>


</body>
</html>
<?php
// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF();
$pdf->AddPage();
$pdf->WriteHTML($html);
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
    header("Content-Disposition: attachment; filename=exportpdfkontrak.pdf");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=exportpdfkontrak.pdf");
}
$pdf->Output("sample2.pdf","I");

?>