<?php
    include "conn.php";
    
    $ID_DataCuti = $_GET["id_cuti"];
    $sql = "DELETE FROM `data_pengajuan_cuti` 
    WHERE `data_pengajuan_cuti`.`id_cuti` = ". $ID_DataCuti.";";

//running query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Hapus Data Pengajuan Cuti Berhasil";
}else{
    $msg = "Hapus Data Pengajuan Cuti Gagal";
}
    
$response = array(
    'status' =>'OK',
    'msg' =>$msg
);
echo json_encode($response);

?>