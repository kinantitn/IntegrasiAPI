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
            'Nama Karyawan'=>$data["nama"],
            'Tanggal Lahir'=>$data["tgl_lahir"],
            'Tempat Lahir'=>$data["tempat_lahir"],
            'Jenis Kelamin'=>$data["jenis_kelamin"],
            'Alamat'=>$data["alamat"],
            'No Telepon'=>$data["no_tlpn"],
            'Sisa Hak Cuti'=>$data["sisa_cuti"],
            'Evaluasi Karyawan'=>$data["evaluasi_karyawan"],
            'Alfa'=>$data["alfa"],
            'Izin'=>$data["izin"],
            'Hadir'=>$data["hadir"],
            'Gaji'=>$data["jumlah_gaji"],
            'No.Rekening'=>$data["no_rek"],
            'TanggalB'=>$data['tanggal_bergabung'],
            'Status'=>$data['status']
        );
    }

    $response = array(
        'STATUS'=>'BERHASIL',
        'Data'=>$item
    );

    echo json_encode($response);
?>