<?php
if (isset($_POST['tambah'])) {
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $email = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['email']))));
    $level = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['level']))));


    $password = sha1($password);

    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO user VALUES (null,'$username','$password','$nama_lengkap','$email','$level')");

    if ($query) {
        header(header: "location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}