<?php
include 'lib/koneksi.php';
if (isset($_POST['regis'])) {
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $email = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['email']))));



    $password = sha1($password);

    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO user VALUES (null,'$username','$password','$nama_lengkap','$email',default)");

    if ($query) {
        header("location: login.php");
    } else {
        echo "Gagal";
    }
}