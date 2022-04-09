<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bioskop_online";

$koneksi = mysqli_connect(hostname: $db_host, username: $db_user, password: $db_pass, database: $db_name);

// if ($koneksi) {
//     echo "Berhasil";
// } else {
//     echo "Gagal";
// }