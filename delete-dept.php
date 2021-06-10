<?php
    include "conn.php";
    
    $ID_Departemen = $_GET["id_dept"];
    $sql = "DELETE FROM `departemen` 
    WHERE `departemen`.`id_dept` = ". $ID_Departemen.";";

//running query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Hapus Data Departemen Berhasil";
}else{
    $msg = "Hapus Data Departemen Gagal";
}
    
$response = array(
    'status' =>'OK',
    'msg' =>$msg
);
echo json_encode($response);

?>