<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM departemen";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){

        $item[] = array(
            'ID_Departemen'=>$data["id_dept"],
            'ID_Permohonan'=>$data["id_permohonan"],
            'NamaDepartemen'=>$data["nama_dept"]
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>