<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $ID_Departemen = isset($_POST["id_dept"]) ? $_POST["id_dept"] : "";
    $ID_Permohonan = isset($_POST["id_permohonan"]) ? $_POST["id_permohonan"] : "";
    $NamaDepartemen = isset($_POST["nama_dept"]) ? $_POST["nama_dept"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `departemen` (`id_dept`, `id_permohonan`, `nama_dept`)
    VALUES ('".$ID_Departemen."', '".$ID_Permohonan."', '".$NamaDepartemen."');";

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