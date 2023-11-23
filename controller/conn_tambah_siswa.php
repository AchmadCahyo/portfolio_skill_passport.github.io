<?php
include "../config/conn.php";

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita_cita'];
    $saudara = $_POST['jml_saudara'];
    $kelas = $_POST['kelas'];
    $agama = $_POST['agama'];
    // $kompetensi = $_POST['kompetensi'];

    $sql = "INSERT INTO siswa (nama, tplahir, tglahir, alamat, hobi, cita_cita, jml_saudara, id_kelas, id_agama) VALUE ('$nama', '$tplahir', '$tglahir', '$alamat', '$hobi', '$cita', '$saudara', '$kelas', '$agama')";
    // echo $sql;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header ('location: ../siswa/index.php?status=sukses');
    }else{
        header ('location: ../siswa/index.php?status=gagal');
    }
}
?>