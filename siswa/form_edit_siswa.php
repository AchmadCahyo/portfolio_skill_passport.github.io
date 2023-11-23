<?php
include "../config/conn.php";

if (isset($_GET['edit'])) {
    header("location: index.php");
}

$id = $_GET["siswaId"];

$sql = "SELECT * FROM siswa WHERE id=$id";
// echo $sql;
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center">Edit Data Siswa</h2>
    <br>
    <div class="container">
        <div class="border border-primary mt-3 p-3">
            <form action="../controller/conn_edit_siswa.php" method="POST">
                <div>
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Nama : </label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Tempat Lahir : </label>
                    <input type="text" class="form-control" name="tplahir" value="<?php echo $siswa['tplahir'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Tanggal Lahir : </label>
                    <input type="date" class="form-control" name="tglahir" value="<?php echo $siswa['tglahir'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Alamat : </label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $siswa['alamat'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Hobi : </label>
                    <input type="text" class="form-control" name="hobi" value="<?php  echo $siswa['hobi']?>">
                </div>
                <br>
                <div>
                    <label for="">Cita-Cita : </label>
                    <input type="text" class="form-control" name="cita_cita" value="<?php echo $siswa['cita_cita'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Jumlah Saudara : </label>
                    <input type="number" class="form-control" name="jml_saudara" value="<?php echo $siswa['jml_saudara'] ?>">
                </div>
                <br>
                <div>
                    <label for="">Kelas : </label>
                    <select name="kelas" id="" class="form-control" value="<?php echo $siswa['kelas'] ?>">
                        <option value="1">X</option>
                        <option value="2">XI</option>
                        <option value="3">XII</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="">Agama : </label>
                    <select name="agama" class="form-control" value="<?php echo $siswa['agama'] ?>">
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Hindu</option>
                    </select>
                </div>
                <br>
                <div>
                    <label for="">Kompetensi</label>
                    <select name="kompetensi" id="" class="form-control" value="<?php echo $siswa['kompetensi'] ?>">
                        <option value="1">RPL</option>
                        <option value="2">ANM</option>
                    </select>
                </div>
                    <input type="submit" value="Edit" class="btn btn-success" role="button" name="edit">
            </form>
        </div>
    </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>
</html>