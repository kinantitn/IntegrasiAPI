<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $ID_DataCuti = isset($_POST["id_cuti"]) ? $_POST["id_cuti"] : "";
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : "";
    $Status = isset($_POST["status"]) ? $_POST["status"] : "";
    $JenisCuti = isset($_POST["jenis_cuti"]) ? $_POST["jenis_cuti"] : "";
    $LamaCuti = isset($_POST["lama_cuti"]) ? $_POST["lama_cuti"] : "";
    $KeputusanCuti = isset($_POST["keputusan"]) ? $_POST["keputusan"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `data_pengajuan_cuti` (`id_cuti`, `nik`, `nama`, 
    `jabatan`, `status`, `jenis_cuti`, `lama_cuti`, `keputusan`) VALUES 
    ('".$ID_DataCuti."', '".$NIK."', '".$NamaKaryawan."', '".$Jabatan."',
    '".$Status."', '".$JenisCuti."', '".$LamaCuti."', '".$KeputusanCuti."');";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Data Pengajuan Cuti Berhasil Ditambahkan";
    }else{
        $msg = "Data Pengajuan Cuti Gagal Ditambahkan";
    }
    //echo $msg;
    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>