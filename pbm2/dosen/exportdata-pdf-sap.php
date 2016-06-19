<?php
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Contoh Export to PDF</title>

</head>
<body>
<h1>Data SAP <!--<img src="../assets/angular/img/logo-unair.png" alt="" height="5%" width="5%">--></h1>
<table border="1">
    <tr>
    <th>Nomor</th>
    <th>Peretemuan Ke</th>
    <th>Tahap Pembelajaran</th>
    <th>Kegiatan Pengajar</th>
    <th>Kegiatan Mahasiswa</th>
    <th>Media dan Alat Pengajaran</th>
    <th>Evaluasi</th>
    </tr>
    <?php
    //koneksi ke database
    mysql_connect("localhost", "root", "");
    mysql_select_db("pbm");
    
    //query menampilkan data
    $sql = mysql_query("SELECT PERTEMUAN,TAHAP_PEMBELAJARAN,KEG_PENGAJAR,KEG_MAHASISWA,EVALUASI,ALAT_PENGAJAR,DATE
                from prasyarat
                ");
    $no = 1;
    while($data = mysql_fetch_assoc($sql)){
        echo '
        <tr>
            <td>'.$no.'</td>
            <td>'.$data['PERTEMUAN'].'</td>
            <td>'.$data['TAHAP_PEMBELAJARAN'].'</td>
            <td>'.$data['KEG_PENGAJAR'].'</td>
            <td>'.$data['KEG_MAHASISWA'].'</td>
            <td>'.$data['EVALUASI'].'</td>            
            <td>'.$data['ALAT_PENGAJAR'].'</td>
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
    header("Content-Disposition: attachment; filename=exportpdfsap.pdf");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=exportpdfsap.pdf");
}
$pdf->Output("sample2.pdf","I");

?>