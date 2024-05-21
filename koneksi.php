<?php
    //variabel koneksi dengan database mysql
    $host = "localhost";
    $user = "root";
    $paswd = "";
    $name = "crud";

    //proses koneksi
    $link = mysqli_connect($host,$user,$paswd,$name);

    //periksa koneksi, jika gagal akan menampilkan pesan error
    if(!$link){
        die("Koneksi dengan database Gagal: ".mysqli_connect_error().
    " - ".mysqli_connect_error());
    }
?>