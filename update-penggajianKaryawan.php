<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $Id_Penggajian = $_GET["id_penggajian"];

    //Bagian ini, adalah bagian yang ingin diubah
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama_karyawan"]) ? $_POST["nama_karyawan"] : "";
    $Jabatan = isset($_POST["jabatan_prshn"]) ? $_POST["jabatan_prshn"] : "";
    $Id_Absensi = isset($_POST["id_absensi"]) ? $_POST["id_absensi"] : "";
    $JumlahGaji = isset($_POST["jumlah_gaji"]) ? $_POST["jumlah_gaji"] : "";
    $NoRekening = isset($_POST["no_rekening"]) ? $_POST["no_rekening"] : "";

    $sql = "UPDATE `penggajian_karyawan` SET `nik` = '".$NIK."', `nama_karyawan` = '".$NamaKaryawan."', 
    `jabatan_prshn` = '".$Jabatan."', `id_absensi` = '".$Id_Absensi."', `jumlah_gaji` = '".$JumlahGaji."', 
    `no_rekening` = '".$NoRekening."'
    WHERE `penggajian_karyawan`.`id_penggajian` = '".$Id_Penggajian."';";
    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Data Penggajian Berhasil";
    }else{
        $msg = "Update Data Penggajian Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>