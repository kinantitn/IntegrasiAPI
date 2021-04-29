<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    //echo $NIK;
    $Jabatan = isset($_POST["jabatan_prshn"]) ? $_POST["jabatan_prshn"] : "";
    $Nama_Karyawan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    //echo $Nama_Karyawan;
    $Tanggal_Lahir = isset($_POST["tgl_lahir"]) ? $_POST["tgl_lahir"] : "";
    $Tempat_Lahir = isset($_POST["tempat_lahir"]) ? $_POST["tempat_lahir"] : "";
    $JenisKelamin = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : "";
    $Alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $NoTelepon = isset($_POST["no_tlpn"]) ? $_POST["no_tlpn"] : "";
    $SisaHakCuti = isset($_POST["sisa_cuti"]) ? $_POST["sisa_cuti"] : "";
    $EvaluasiKaryawan = isset($_POST["evaluasi_karyawan"]) ? $_POST["evaluasi_karyawan"] : "";
    $Alfa = isset($_POST["alfa"]) ? $_POST["alfa"] : "";
    $Izin = isset($_POST["izin"]) ? $_POST["izin"] : "";
    $Hadir = isset($_POST["hadir"]) ? $_POST["hadir"] : "";
    $Gaji = isset($_POST["jumlah_gaji"]) ? $_POST["jumlah_gaji"] : "";
    $NoRekening = isset($_POST["no_rek"]) ? $_POST["no_rek"] : "";
    $TanggalGabung = isset($_POST["tanggal_bergabung"]) ? $_POST["tanggal_bergabung"] : "";
    $Status = isset($_POST["status"]) ? $_POST["status"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO `data_karyawan` (`nik`, `jabatan_prshn`, `nama`, 
    `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_tlpn`, 
    `sisa_cuti`, `evaluasi_karyawan`, `alfa`, `izin`, `hadir`, `jumlah_gaji`, 
    `no_rek`, `tanggal_bergabung`, `status`) VALUES ('".$NIK."', 
    '".$Jabatan."', '".$Nama_Karyawan."', '".$Tanggal_Lahir."', '".$Tempat_Lahir."', '".$JenisKelamin."', 
    '".$Alamat."', '".$NoTelepon."', '".$SisaHakCuti."', '".$EvaluasiKaryawan."', '".$Alfa."', 
    '".$Izin."', '".$Hadir."', '".$Gaji."', '".$NoRekening."', '".$TanggalGabung."', '".$Status."');";
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