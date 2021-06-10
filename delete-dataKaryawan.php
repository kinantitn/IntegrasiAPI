<?php
    include "conn.php";
    
    $NIK = $_GET["nik"];
    $sql = "DELETE FROM `data_karyawan` 
    WHERE `data_karyawan`.`nik` = ". $NIK.";";

//running query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Hapus Data Karyawan Berhasil";
}else{
    $msg = "Hapus Data Karyawan Gagal";
}
    
$response = array(
    'status' =>'OK',
    'msg' =>$msg
);
echo json_encode($response);

?>