<?php
    include "conn.php";
    
    $ID_Penilaian = $_GET["id_penilaian"];
    $sql = "DELETE FROM `penilaian_karyawan` 
    WHERE `penilaian_karyawan`.`id_penilaian` = ".$ID_Penilaian.";";

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