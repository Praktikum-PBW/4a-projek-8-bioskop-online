<?php
if (isset($_POST['edit'])) {
    $id_user = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_user']))));
    $username = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['username']))));
    $password = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['password']))));
    $nama_lengkap = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['nama_lengkap']))));
    $email = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['email']))));
    $level = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['level']))));


    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE user SET id_user= '$id_user', username = '$username', nama_lengkap='$nama_lengkap', email='$email', level='$level' WHERE id_user='$id_user'");
    } else {
        //$password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE user SET id_user='$id_user', username = '$username', password = '$password', nama_lengkap='$nama_lengkap', email='$email',  level='$level' WHERE id_user='$id_user'");
    }


    if ($query) {
        echo "Update Berhasil";
        header("Location: index.php?page=user");
    } else {
        echo "Mohon Maaf Update Gagal Dilakukan";
    }
}