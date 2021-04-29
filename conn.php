<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "utsintegrasiapi";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    if(!$conn){
        die("Koneksi gagal");
    }
?>