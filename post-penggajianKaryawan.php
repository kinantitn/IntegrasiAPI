<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Mendapatkan variabel post
    $Id_Penggajian = isset($_POST["id_penggajian"]) ? $_POST["id_penggajian"] : "";
    $NIK = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $NamaKaryawan = isset($_POST["nama_karyawan"]) ? $_POST["nama_karyawan"] : "";
    $Jabatan = isset($_POST["jabatan_prshn"]) ? $_POST["jabatan_prshn"] : "";
    $Id_Absensi = isset($_POST["id_absensi"]) ? $_POST["id_absensi"] : "";
    $JumlahGaji = isset($_POST["jumlah_gaji"]) ? $_POST["jumlah_gaji"] : "";
    $NoRekening = isset($_POST["no_rekening"]) ? $_POST["no_rekening"] : "";

    //Query menambahkan data
    $sql = "INSERT INTO 'penggajian_karyawan' ('id_penggajian', 'nik', 'nama_karyawan', 'jabatan_prshn', 'id_absensi', 'jumlah_gaji', 'no_rekening') 
    VALUES ('".$Id_Penggajian."', '".$NIK."', '".$NamaKaryawan."', '".$Jabatan."', '".$Id_Absensi."', '".$JumlahGaji."', '".$NoRekening."');"; 
    //Running Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Data Penggajian Berhasil Ditambahkan";
    }else{
        $msg = "Data Penggajian Gagal Ditambahkan";
    }
    //echo $msg;
    $response = array(
        'STATUS'=>'BERHASIL',
        'msg'=>$msg
    );

    echo json_encode($response);
?>