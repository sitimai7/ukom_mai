<?php
$koneksi = mysqli_connect("localhost", "root", "", "ukom_mai");

if (mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}

?>