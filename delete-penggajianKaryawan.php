<?php
    include "conn.php";
    
    $Id_Penggajian = $_GET["id_penggajian"];
    $sql = "DELETE FROM `penggajian_karyawan` 
    WHERE `penggajian_karyawan`.`id_penggajian` = ".$Id_Penggajian.";";

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