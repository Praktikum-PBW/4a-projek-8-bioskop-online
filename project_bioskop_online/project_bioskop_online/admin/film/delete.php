<?php
if (isset($_GET['id_film'])) {
    $id_film = $_GET['id_film'];

    $query = mysqli_query($koneksi, "DELETE FROM film WHERE id_film='$id_film'");

    if ($query) {
        header("Location: index.php?page=film");
    } else {
        echo "Gagal";
    }
}