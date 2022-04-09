<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user'");

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}