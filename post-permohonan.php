<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $ID_Permohonan = isset($_POST["id_permohonan"]) ? $_POST["id_permohonan"] : "";
    $divisi = isset($_POST["divisi"]) ? $_POST["divisi"] : "";
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama_karyawan"]) ? $_POST["nama_karyawan"] : "";
    $Permintaan = isset($_POST["permintaan"]) ? $_POST["permintaan"] : "";
    $Keputusan = isset($_POST["keputusan"]) ? $_POST["keputusan"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `permohonan_karyawan_baru` (`id_permohonan`, `divisi` , `permintaan`, `keputusan` ,
    `nik` , `nama_karyawan`)
    VALUES ('".$ID_Permohonan."' , '".$divisi."' , '".$NIK."' , '".$NamaKaryawan."' , '".$Permintaan."' ,
     '".$Keputusan."' ,);";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Data Departemen Berhasil Ditambahkan";
    }else{
        $msg = "Data Departemen Gagal Ditambahkan";
    }
    //echo $msg;
    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>