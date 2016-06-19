<?php
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Contoh Export to PDF</title>

</head>
<body>
<h1>Data GBPP <!--<img src="../assets/angular/img/logo-unair.png" alt="" height="5%" width="5%">--></h1>
<table border="1">
    <tr>
    <th>Nomor</th>
    <th>Mata Ajar</th>
    <th>Kompetensi</th>
    <th>Kompetensi Khusus</th>
    <th>Pokok Bahasan</th>
    <th>Sub Pokok Bahasan</th>
    <th>Metode</th>
    <th>Media</th>
    <th>Waktu</th>
    <th>Bacaan</th>
    </tr>
    <?php
    //koneksi ke database
    mysql_connect("localhost", "root", "");
    mysql_select_db("pbm");
    
    //query menampilkan data
    $sql = mysql_query("SELECT KODE_MK,KODE_KK,NAMA_KK,NAMA_PB,SUB_PB,METODE,MEDIA,WAKTU,BACAAN
                from kompetensi_khusus where
                KODE_MK=KODE_MK");
    $no = 1;
    while($data = mysql_fetch_assoc($sql)){
        echo '
        <tr>
            <td>'.$no.'</td>
            <td>'.$data['KODE_MK'].'</td>
            <td>'.$data['KODE_KK'].'</td>
            <td>'.$data['NAMA_KK'].'</td>
            <td>'.$data['NAMA_PB'].'</td>
            <td>'.$data['SUB_PB'].'</td>            
            <td>'.$data['METODE'].'</td>
            <td>'.$data['MEDIA'].'</td>
            <td>'.$data['WAKTU'].'</td>
            <td>'.$data['BACAAN'].'</td>
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
    header("Content-Disposition: attachment; filename=exportpdfgbpp.pdf");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=exportpdfgbpp.pdf");
}
$pdf->Output("sample2.pdf","I");

?>