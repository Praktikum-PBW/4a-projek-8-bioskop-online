<?php
if (isset($_POST['login'])) {
    session_start();

    include 'lib/koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' && password='$password'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
        if ($data['level'] == "Admin") {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header("location: admin/index.php");
        } else if ($data['level'] == "Customer") {
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            header("location: customer/index.php");
        }
    } else {
        $_SESSION['error'] = "Username atau password salah";
        header("Location:login.php");
    }
}