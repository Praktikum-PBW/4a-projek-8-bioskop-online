<?php
if (isset($_SESSION['level']) == "") {
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: ../login.php");
}

if (isset($_GET['page'])) {

    include '../lib/koneksi.php';

    $page = $_GET['page'];

    switch ($page) {
        case 'menu_utama':
            include 'menu_utama.php';
            break;
        default:
            echo "404 Not Found";
            break;
    }
} else {
    include 'menu_utama.php';
}