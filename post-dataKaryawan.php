<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    //echo $NIK;
    $Jabatan = isset($_POST["jabatan_prshn"]) ? $_POST["jabatan_prshn"] : "";
    $NamaKaryawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    //echo $Nama_Karyawan;
    $Tanggal_Lahir = isset($_POST["tgl_lahir"]) ? $_POST["tgl_lahir"] : "";
    $TempatLahir = isset($_POST["tempat_lahir"]) ? $_POST["tempat_lahir"] : "";
    $JenisKelamin = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : "";
    $Alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $NoTelepon = isset($_POST["no_telp"]) ? $_POST["no_telp"] : "";
    $ID_Cuti = isset($_POST["id_cuti"]) ? $_POST["id_cuti"] : "";
    $SisaHakCuti = isset($_POST["sisa_cuti"]) ? $_POST["sisa_cuti"] : "";
    $ID_Penilaian = isset($_POST["id_penilaian"]) ? $_POST["id_penilaian"] : "";
    $EvaluasiKaryawan = isset($_POST["evaluasi_karyawan"]) ? $_POST["evaluasi_karyawan"] : "";
    $ID_Penggajian = isset($_POST["id_penggajian"]) ? $_POST["id_penggajian"] : "";
    $NoRekening = isset($_POST["no_rekening"]) ? $_POST["no_rekening"] : "";
    $ID_Departemen = isset($_POST["id_dept"]) ? $_POST["id_dept"] : "";
    $Status = isset($_POST["status"]) ? $_POST["status"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `data_karyawan` (`nik`, `jabatan_prshn`, `nama`, 
    `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telp`, `id_cuti`, `sisa_cuti`, 
    `id_penilaian`, `evaluasi_karyawan`, `id_penggajian`, `no_rekening`, `id_dept`, 
    `status`) VALUES ('".$NIK."', '".$Jabatan."', '".$NamaKaryawan."', '".$Tanggal_Lahir."', 
    '".$TempatLahir."', '".$JenisKelamin."', '".$Alamat."', '".$NoTelepon."', '".$ID_Cuti."', 
    '".$SisaHakCuti."', '".$ID_Penilaian."', '".$EvaluasiKaryawan."', '".$ID_Penggajian."', 
    '".$NoRekening."', '".$ID_Departemen."', '".$Status."');";
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