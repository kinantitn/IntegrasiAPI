<?php
    include "conn.php";
    
    $id_absensi = $_GET["ID_Absensi"];
    $sql = "DELETE FROM `absensi` 
    WHERE `absensi`.`ID_Absensi` = ".$id_absensi.";";

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