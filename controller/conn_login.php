<?php
session_start();
include "../config/conn.php";

if (isset($_SESSION["nama"])) {
    // header("location: ../login_logout/login_form.php");
    // exit();
}

if (isset($_POST["masuk"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = hash('sha256', $_POST['pass']);
    // $password = hash('sha256', $_POST['pass']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    // echo $sql;

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($row["role"] == "admin") {
            $_SESSION["username"] = $username;
            $SESEION["role"] = "admin";
            header("location: ../siswa/index.php");

        } else if ($row["role"] == "petugas") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "petugas";
            header("location: ../siswa/index.php");

        } else if ($row["role"] == "siswa") {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = "siswa";
            header("location: ../siswa/form_edit_siswa.php");

        } else {
            echo "<script>alert('Gagal Login!')</script>";
        }
        // $_SESSION["nama"] = $row["nama"];
        // header("location: ../login_logout/login_form.php");
        // exit();

    } else {
        echo "<scrpit>alert('Username Atau Password Salah. Silahkan Coba Lagi!')</script>";
    }
}
?>