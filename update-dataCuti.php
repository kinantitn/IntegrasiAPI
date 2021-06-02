<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Menangkap variabel parameter get
    $ID_DataCuti = $_GET["id_cuti"];

    //Bagian ini, adalah bagian yang ingin diubah
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $Jabatan = isset($_POST["jabatan"]) ? $_POST["jabatan"] : "";
    $Status = isset($_POST["status"]) ? $_POST["status"] : "";
    $JenisCuti = isset($_POST["jenis_cuti"]) ? $_POST["jenis_cuti"] : "";
    $LamaCuti = isset($_POST["lama_cuti"]) ? $_POST["lama_cuti"] : "";
    $KeputusanCuti = isset($_POST["keputusan"]) ? $_POST["keputusan"] : "";

    $sql = "UPDATE `data_pengajuan_cuti` SET `nik` = '".$NIK."', `nama` = '".$NamaKaryawan."', 
    `jabatan` = '".$Jabatan."', `status` = '".$Status."', `jenis_cuti` = '".$JenisCuti."', 
    `lama_cuti` = '".$LamaCuti."', `keputusan` = '".$KeputusanCuti."' 
    WHERE `data_pengajuan_cuti`.`id_cuti` = '".$ID_DataCuti."';";

    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Pengajuan Data Cuti Karyawan Berhasil";
    }else{
        $msg = "Update Pengajuan Data Cuti Karyawan Gagal";
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>