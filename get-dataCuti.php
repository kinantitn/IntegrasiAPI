<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM data_pengajuan_cuti";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){

        $item[] = array(
            'ID_DataCuti'=>$data["id_cuti"],
            'NIK'=>$data["nik"],
            'NamaKaryawan'=>$data["nama"],
            'Jabatan'=>$data["jabatan"],
            'Status'=>$data['status'],
            'JenisCuti'=>$data["jenis_cuti"],
            'LamaCuti'=>$data["lama_cuti"],
            'KeputusanCuti'=>$data["keputusan"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>