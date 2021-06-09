<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $ID_Permohonan = $_GET["id_permohonan"];

    //Bagian ini, adalah bagian yang ingin diubah
    $Keputusan = isset($_POST["keputusan"]) ? $_POST["keputusan"] : "";
    echo $Keputusan;
    $sql = "UPDATE `permohonan_karyawan_baru` SET `keputusan` = '".$Keputusan."' 
    WHERE `permohonan_karyawan_baru`.`id_permohonan` = '".$ID_Permohonan."';";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data permohonan karyawan baru Berhasil";
    }else{
        $msg = "Update Data permohonan karyawan baru Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
    ?>