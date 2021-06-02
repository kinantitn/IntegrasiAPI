<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh absensi karyawan
    $sql = "SELECT * FROM absensi";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){

        $item[] = array(
            'ID_Absensi'=>$data["id_absensi"],
            'NIK'=>$data["nik"],
            'NamaKaryawan'=>$data["nama"],
            'Jabatan'=>$data["jabatan_prshn"],
            'Alfa'=>$data["alfa"],
            'Izin'=>$data["izin"],
            'Hadir'=>$data["hadir"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>
