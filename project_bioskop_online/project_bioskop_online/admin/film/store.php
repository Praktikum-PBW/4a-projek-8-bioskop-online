<?php
if (isset($_POST['tambah'])) {
    $judul = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['judul']))));
    $genre = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['genre']))));
    $rating_usia = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['rating_usia']))));
    $durasi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['durasi']))));
    $sinopsis = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['sinopsis']))));

    //poster
    $extensi_diperbolehkan = array('png', 'jpg');
    $poster = $_FILES['poster']['name'];
    $x = explode(separator: '.', string: $poster);
    $ekstensi = strtolower(string: end(array: $x));
    $ukuran = $_FILES['poster']['size'];
    $file_tmp = $_FILES['poster']['tmp_name'];

    if (in_array(needle: $ekstensi, haystack: $extensi_diperbolehkan) == true) {
        if ($ukuran < 10044070) {
            move_uploaded_file(from: $file_tmp, to: '../assets/img/' . $poster);
            $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO film VALUES (null, '$judul','$poster','$genre','$rating_usia','$durasi','$sinopsis')");

            if ($query) {
                header(header: "location: index.php?page=film");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi tidak sesuai";
    }
}