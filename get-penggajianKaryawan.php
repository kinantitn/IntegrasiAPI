<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM penggajian_karyawan";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nik"]." ";

        $item[] = array(
            'Id_Penggajian'=>$data["id_penggajian"],
            'NIK'=>$data["nik"],
            'NamaKaryawan'=>$data["nama_karyawan"],
            'Jabatan'=>$data["jabatan_prshn"],
            'Id_Absensi'=>$data["id_absensi"],
            'JumlahGaji'=>$data["jumlah_gaji"],
            'NoRekening'=>$data["no_rekening"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>