<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM permohonan_karyawan_baru";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nik"]." ";

        $item[] = array(
            'ID_Permohonan'=>$data["id_permohonan"],
            'divisi'=>$data["divisi"],
            'NIK'=>$data["nik"],
            'NamaKaryawan'=>$data["nama_karyawan"],
            'jabatan'=>$data["jabatan"],
            'Permintaan'=>$data["permintaan"],
            'Keputusan'=>$data['keputusan']
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>