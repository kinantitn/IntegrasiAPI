<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM permohonan_karyawan_baru";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nik"]." ";

        $item[] = array(
            'ID_permohonan'=>$data["id_permohonan"],
            'Divisi'=>$data["divisi"],
            'NIK'=>$data["nik"],
            'Jabatan'=>$data["jabatan"],
            'Nama_Karyawan'=>$data["nama_karyawan"],
            'Permintaan'=>$data["permintaan"],
            'Keputusan'=>$data["keputusan"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
    ?>