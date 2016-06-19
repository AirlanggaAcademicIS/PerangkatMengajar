<?php
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Contoh Export to PDF</title>

</head>
<body>
<h1>Data Identitas</h1>
<table border="1">
    <tr>
    <th>Nomor</th>
    <th>Kode Mata Ajar</th>
    <th>Mata Ajar</th>
    <th>Beban Studi</th>
    <th>Kompetensi</th>
    <th>Atribut Softskill</th>
    <th>Prasyarat</th>
    <th>Penanggung Jawab</th>
    <th>Semester</th>
    </tr>
    <?php
    //koneksi ke database
    mysql_connect("localhost", "root", "");
    mysql_select_db("pbm");
    
    //query menampilkan data
    $sql = mysql_query("SELECT KODE_MK,NAMA_MK,BEBAN_STUDI,KOMPETENSI,ATRIBUT_SS,PRASYARAT,NIP,SEMESTER
                from mata_kuliah where
                KODE_MK=KODE_MK");
    $no = 1;
    while($data = mysql_fetch_assoc($sql)){
        echo '
        <tr>
            <td>'.$no.'</td>
            <td>'.$data['KODE_MK'].'</td>
            <td>'.$data['NAMA_MK'].'</td>
            <td>'.$data['BEBAN_STUDI'].'</td>
            <td>'.$data['KOMPETENSI'].'</td>
            <td>'.$data['ATRIBUT_SS'].'</td>            
            <td>'.$data['PRASYARAT'].'</td>
            <td>'.$data['NIP'].'</td>
            <td>'.$data['SEMESTER'].'</td>
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
    header("Content-Disposition: attachment; filename=exportpdfidentitasma.pdf");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=exportpdfidentitasma.pdf");
}
$pdf->Output("sample2.pdf","I");

?>