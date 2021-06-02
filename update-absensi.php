<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $ID_Absensi = $_GET["id_absensi"];

    //Bagian ini, adalah bagian yang ingin diubah
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : "";
    $Alfa = isset($_POST["alfa"]) ? $_POST["alfa"] : "";
    $Izin = isset($_POST["izin"]) ? $_POST["izin"] : "";
    $Hadir = isset($_POST["hadir"]) ? $_POST["hadir"] : "";

    $sql = "UPDATE `absensi` SET `nik` = '".$NIK."', `nama` = '".$NamaKaryawan."', 
    `jabatan_prshn` = '".$Jabatan."', `alfa` = '".$Alfa."', `izin` = '".$Izin."', 
    `hadir` = '".$Hadir."'
    WHERE `absensi`.`id_absensi` = '".$ID_Absensi."';";


    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data Absensi Karyawan Berhasil";
    }else{
        $msg = "Update Data Absensi Karyawan Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>