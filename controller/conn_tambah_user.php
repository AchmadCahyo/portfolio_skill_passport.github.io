<?php
session_start();
include '../config/conn.php';

if (isset($_SESSION['nama'])) {
    // header('location: ../login_logout/form_daftar.php');
    // exit();
}

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['user'];
    $password = hash('sha256', $_POST['pass']);
    $cpass = hash('sha256', $_POST['cpass']);
    $role = $_POST['role'];

    if ($password == $cpass) {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (nama, username, password, role, cpass) VALUES ('$nama', '$username', '$password', '$role', '$cpass')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Registrasi Berhasil!')</script>";

            } else {
                echo "<script>alert('Terjadi Kesalahan.')</script>";

            }

        } else {
            echo "<script>alert('User Sudah Terdaftar.')</script>";

        }

    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }

}
?>