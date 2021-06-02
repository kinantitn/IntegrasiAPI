<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data tabel penilaian karyawan
    $sql = "SELECT * FROM penilaian_karyawan";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nik"]." ";

        $item[] = array(
            'ID_Penilaian'=>$data["id_penilaian"],
            'NIK'=>$data["nik"],
            'NamaKaryawan'=>$data["nama"],
            'Parameter1'=>$data["parameter1"],
            'Parameter2'=>$data["parameter2"],
            'ID_Absensi'=>$data["id_absensi"],
            'Total_Penilaian'=>$data["total_penilaian"],
            'Masukan'=>$data["masukan"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>