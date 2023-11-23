<?php
include "../config/conn.php";

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita_cita'];
    $jml_saudara = $_POST['jml_saudara'];
    $kelas = $_POST['kelas'];
    $agama = $_POST['agama'];

    $sql = "UPDATE siswa SET nama = '$nama', tplahir = '$tplahir', tglahir = '$tglahir', alamat = '$alamat', hobi = '$hobi', cita_cita = '$cita', jml_saudara = 'jml_saudara', id_kelas = '$kelas', id_agama = '$agama' WHERE id = $id";
    // echo $sql;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../siswa/index.php');
    } else {
        die("Gagal Menyimpan Perubahan");
    }
} else {
    die("Akses Ubah Gagal");
}

?>