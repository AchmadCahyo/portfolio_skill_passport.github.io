<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<?php
include '../config/conn.php';
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <a href="form_tambah_siswa.php" class="navbar-brand">[+] Tambah Siswa</a>
    </nav>
    <h3 class="text-center">Data Siswa</h3>
    <br>
    <div>
        <table class="table table-bordered border-primary text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Hobi</th>
                    <th>Cita-Cita</th>
                    <th>Jumlah Saudara</th>
                    <th>Kelas</th>
                    <th>Agama</th>
                    <th>Kompetensi</th>
                    <th>Hapus</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT siswa.*, kelas.kompetensi from siswa inner join kelas on siswa.id_kelas=kelas.id inner join agama on siswa.id_agama=agama.id;";
                // echo $sql;
                $query = mysqli_query($conn, $sql);

                $no = '1';
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $data['nama'] ?>
                        </td>
                        <td>
                            <?= $data['tplahir'] ?>
                        </td>
                        <td>
                            <?= $data['tglahir'] ?>
                        </td>
                        <td>
                            <?= $data['alamat'] ?>
                        </td>
                        <td>
                            <?= $data['hobi'] ?>
                        </td>
                        <td>
                            <?= $data['cita_cita'] ?>
                        </td>
                        <td>
                            <?= $data['jml_saudara'] ?>
                        </td>
                        <td>
                            <?= $data['id_kelas'] ?>
                        </td>
                        <td>
                            <?= $data['id_agama'] ?>
                        </td>
                        <td>
                            <?= $data['kompetensi']?>
                        </td>
                        <td>
                            <a href="../controller/conn_hapus_siswa.php?siswaId=<?= $data['id'] ?>" class="btn btn-danger"
                                role="button" name="hapus">Hapus</a>
                        </td>
                        <td>
                            <a href="form_edit_siswa.php?siswaId=<?= $data['id'] ?>" class="btn btn-primary" role="button"
                                name="edit">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>

</html>