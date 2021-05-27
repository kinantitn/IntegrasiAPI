<?php
    //Koneksi ke database mysql
    include "conn.php";

    //Membuat query untuk mengambil seluruh data karyawan
    $sql = "SELECT * FROM data_karyawan";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nik"]." ";

        $item[] = array(
            'NIK'=>$data["nik"],
            'Jabatan'=>$data["jabatan_prshn"],
            'NamaKaryawan'=>$data["nama"],
            'Tanggal_Lahir'=>$data["tgl_lahir"],
            'TempatLahir'=>$data["tempat_lahir"],
            'JenisKelamin'=>$data["jenis_kelamin"],
            'Alamat'=>$data["alamat"],
            'NoTelepon'=>$data["no_telp"],
            'ID_Cuti'=>$data["id_cuti"],
            'SisaHakCuti'=>$data["sisa_cuti"],
            'ID_Penilaian'=>$data["id_penilaian"],
            'EvaluasiKaryawan'=>$data["evaluasi_karyawan"],
            'ID_Penggajian'=>$data["id_penggajian"],
            'NoRekening'=>$data["no_rekening"],
            'ID_Departemen'=>$data["id_dept"],
            'Status'=>$data['status']
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>