<?php
    include "conn.php";
    
    $ID_Permohonan = $_GET["id_permohonan"];
    $sql = "DELETE FROM `permohonan_karyawan_baru` 
    WHERE `permohonan_karyawan_baru`.`id_permohonan` = ".$ID_Permohonan.";";

//running query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Delete data berhasil";
}else{
    $msg = "Delete data gagal";
}
    
$response = array(
    'status' =>'OK',
    'msg' =>$msg
);
echo json_encode($response);

?>