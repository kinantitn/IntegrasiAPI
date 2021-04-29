<?php
    //Koneksi ke database mysql
    include "conn.php";

    //echo "update";

    //Menangkap variabel parameter get
    $NIK = $_GET["nik"];
    //echo $NIK;

    //Bagian ini, adalah bagian yang ingin diubah
    $SisaHakCuti = isset($_POST["sisa_cuti"]) ? $_POST["sisa_cuti"] : "";

    $sql = "UPDATE `data_karyawan` SET `sisa_cuti` = '".$SisaHakCuti."' 
    WHERE `data_karyawan`.`nik` = '".$NIK."';";
    //echo $sql;

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data Sisa Hak Cuti Karyawan Berhasil";
    }else{
        $msg = "Update Data Sisa Hak Cuti Karyawan Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>