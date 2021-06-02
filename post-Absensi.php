<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $ID_Absensi = isset($_POST["id_absensi"]) ? $_POST["id_absensi"] : "";
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : "";
    $Alfa = isset($_POST["alfa"]) ? $_POST["alfa"] : "";
    $Izin = isset($_POST["izin"]) ? $_POST["izin"] : "";
    $Hadir = isset($_POST["hadir"]) ? $_POST["hadir"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `absensi` (`id_absensi`, `nik`, `jabatan_prshn`, `nama`, `alfa`, `izin`, `hadir`) 
    VALUES ('".$ID_Absensi."', '".$NIK."', '".$Jabatan."', '".$NamaKaryawan."', '".$Alfa."', '".$Izin."', '".$Hadir."');";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Data Absensi Berhasil Ditambahkan";
    }else{
        $msg = "Data Absensi Gagal Ditambahkan";
    }
    //echo $msg;
    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?> 