<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    //echo $NIK;
    $Jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : "";
    $Nama_Karyawan = isset($_POST["nama_karyawan"]) ? $_POST["nama_karyawan"] : "";
    //echo $Nama_Karyawan;
    $Divisi = isset($_POST["divisi"]) ? $_POST["divisi"] : "";
    $Permintaan = isset($_POST["permintaan"]) ? $_POST["permintaan"] : "";
    $Keputusan = isset($_POST["keputusan"]) ? $_POST["keputusan"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `permohonan_karyawan_baru` (`nik`, `jabatan`, `nama_karyawan`, 
    `divisi`, `permintaan`, `keputusan`) VALUES ('".$NIK."', 
    '".$Jabatan."', '".$Nama_Karyawan."', '".$Divisi."', '".$Permintaan."', '".$Keputusan."');";
    //echo $sql;
    //echo 'test';

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