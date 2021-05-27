<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $ID_Departemen = $_GET["id_dept"];

    //Bagian ini, adalah bagian yang ingin diubah
    $ID_Permohonan = isset($_POST["id_permohonan"]) ? $_POST["id_permohonan"] : "";
    $NamaDepartemen = isset($_POST["nama_dept"]) ? $_POST["nama_dept"] : "";

    $sql = "UPDATE `departemen` SET `id_permohonan` = '".$ID_Permohonan."', 
    `nama_dept` = '".$NamaDepartemen."' WHERE `departemen`.`id_dept` = '".$ID_Departemen."';";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data Departemen Berhasil";
    }else{
        $msg = "Update Data Departemen Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>