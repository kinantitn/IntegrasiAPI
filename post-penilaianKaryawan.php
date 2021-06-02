<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $ID_Penilaian = isset($_POST["id_penilaian"]) ? $_POST["id_penilaian"] : "";
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Parameter1 = isset($_POST["parameter1"]) ? $_POST["parameter1"] : "";
    $Parameter2 = isset($_POST["parameter2"]) ? $_POST["parameter2"] : "";
    $ID_Absensi = isset($_POST["id_absensi"]) ? $_POST["id_absensi"] : "";
    $Total_Penilaian = isset($_POST["total_penilaian"]) ? $_POST["total_penilaian"] : "";
    $Masukan = isset($_POST["masukan"]) ? $_POST["masukan"] : "";


    //Query menambahkan data
    $sql = "INSERT INTO `penilaian_karyawan` (`id_penilaian`, `nik`, `nama`, `parameter1`, `parameter2`, `id_absensi`, `total_penilaian`, `masukan`)
    VALUES ('".$ID_Penilaian."', '".$NIK."', '".$NamaKaryawan."', '".$Parameter1."', '".$Parameter2."', '".$ID_Absensi."', '".$Total_Penilaian."', '".$Masukan."');";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Data Berhasil Ditambahkan";
    }else{
        $msg = "Data Gagal Ditambahkan";
    }
    //echo $msg;
    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>