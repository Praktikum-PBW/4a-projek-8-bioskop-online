<?php
if (isset($_POST['tambah'])) {
    $jns_studio = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jns_studio']))));
    $jml_kursi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jml_kursi']))));
    //$id_jumlah = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_jadwal']))));


    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO studio VALUES (null,'$jns_studio','$jml_kursi')");

    if ($query) {
        header(header: "location: index.php?page=studio");
    } else {
        echo "Gagal";
    }
}