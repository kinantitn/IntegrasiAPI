<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $ID_Penilaian = $_GET["id_penilaian"];

    //Bagian ini, adalah bagian yang ingin diubah
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Parameter1 = isset($_POST["parameter1"]) ? $_POST["parameter1"] : "";
    $Parameter2 = isset($_POST["parameter2"]) ? $_POST["parameter2"] : "";
    $ID_Absensi = isset($_POST["id_absensi"]) ? $_POST["id_absensi"] : "";
    $Total_Penilaian = isset($_POST["total_penilaian"]) ? $_POST["total_penilaian"] : "";
    $Masukan = isset($_POST["masukan"]) ? $_POST["masukan"] : "";


    $sql = "UPDATE `penilaian_karyawan` SET `nik` = '".$NIK."', `nama` = '".$NamaKaryawan."', 
    `parameter1` = '".$Parameter1."', `parameter2` = '".$Parameter2."', `id_absensi` = '".$ID_Absensi."', 
    `total_penilaian` = '".$Total_Penilaian."', `masukan` = '".$Masukan."' 
    WHERE `penilaian_karyawan`.`id_penilaian` = '".$ID_Penilaian."';";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data Berhasil";
    }else{
        $msg = "Update Data Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>