php
    Koneksi ke database mysql
    include conn.php;

    Membuat query untuk mengambil seluruh data karyawan
    $sql = SELECT  FROM data_karyawan;
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        echo $data[nik]. ;

        $item[] = array(
            'NIK'=$data[nik],
            'Jabatan'=$data[jabatan_prshn],
            'Nama_Karyawan'=$data[nama],
            'Tanggal_Lahir'=$data[tgl_lahir],
            'Tempat_Lahir'=$data[tempat_lahir],
            'JenisKelamin'=$data[jenis_kelamin],
            'Alamat'=$data[alamat],
            'NoTelepon'=$data[no_tlpn],
            'SisaHakCuti'=$data[sisa_cuti],
            'EvaluasiKaryawan'=$data[evaluasi_karyawan],
            'Alfa'=$data[alfa],
            'Izin'=$data[izin],
            'Hadir'=$data[hadir],
            'Gaji'=$data[jumlah_gaji],
            'NoRekening'=$data[no_rek],
            'TanggalGabung'=$data['tanggal_bergabung'],
            'Status'=$data['status']
        );
    }

    $response = array(
        'STATUS'='BERHASIL',
        'Data'=$item
    );

    echo json_encode($response);
