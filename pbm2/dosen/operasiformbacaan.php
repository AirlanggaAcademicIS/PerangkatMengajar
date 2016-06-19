<?php
include 'server.php';
    switch($_GET['action']){
        case 'insert' :
            $data = json_decode(file_get_contents("php://input"));
            $i = 0;
            foreach($data as $k => $v){
                $query = "INSERT INTO bacaan VALUES ('".$v->kodemk."','".$v->judul."','".$v->tahun."','".$v->penulis."','".$v->penerbit."','".$v->kota."')";
                mysql_query($query);
                $i++;
            };
            echo json_encode($i);
            break;
         case 'get' :
                $query = "SELECT KODE_MK,KODE_BACAAN,JUDUL,TAHUN,NAMA_PENULIS,NAMA_PENERBIT,KOTA_PENERBIT FROM bacaan order by KODE_BACAAN";
                $sql  = mysql_query($query);
                $data = array();
                while($row=mysql_fetch_array($sql)) {
                    $data[] = $row;
                }

                echo json_encode($data);
         break;
        case'update' :
            $data = json_decode(file_get_contents("php://input"));
            $i = 0;
            foreach($data as $k => $v){
                $query = "UPDATE bacaan set JUDUL = '".$v->JUDUL."' , TAHUN = '".$v->TAHUN."', NAMA_PENULIS='".$v->NAMA_PENULIS."', NAMA_PENERBIT='".$v->NAMA_PENERBIT."', KOTA_PENERBIT='".$v->KOTA_PENERBIT."' where KODE_BACAAN = '".$v->KODE_BACAAN."'";
                mysql_query($query);
                $i++;
            };
            echo json_encode($i);
            break;
        case'delete' :
            $data = json_decode(file_get_contents("php://input"));
            $i = 0;
            foreach($data as $k => $v){
                $query = "DELETE FROM bacaan where KODE_BACAAN = '".$v."'";
                mysql_query($query);
                $i++;
            };
            echo json_encode($i);
            break;
    }
?>