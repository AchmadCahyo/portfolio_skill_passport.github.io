<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="border border-primary mt-3 p-3">
            <form action="../controller/conn_tambah_siswa.php" method="post">
                <h3 class="text-center mt-3">Form Tambah Siswa</h3>
                <label for="">Nama : </label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                <br>
                <label for="">Tempat Lahir : </label>
                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tplahir">
                <br>
                <label for="">Tanggal Lahir : </label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tglahir">
                <br>
                <label for="">Alamat : </label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                <br>
                <label for="">Hobi : </label>
                <input type="text" class="form-control" placeholder="Hobi" name="hobi">
                <br>
                <label for="">Cita-Cita : </label>
                <input type="text" class="form-control" placeholder="Cita-Cita" name="cita_cita">
                <br>
                <label for="">Jumlah Saudara : </label>
                <input type="number" class="form-control" placeholder="Jumlah Saudara" name="jml_saudara">
                <br>
                <label for="">Kelas : </label>
                <select name="kelas" id="" class="form-control">
                    <option value="" disabled selected>Pilih Opsi Di Bawah Ini</option>
                    <option value="1">X</option>
                    <option value="2">XI</option>
                    <option value="3">XII</option>
                </select>
                <br>
                <label for="">Agama : </label>
                <select name="agama" class="form-control">
                    <option value="" disabled selected>Pilih Opsi Di Bawah Ini</option>
                    <option value="1">Islam</option>
                    <option value="2">Kristen</option>
                    <option value="3">Hindu</option>
                </select>
                <br>
                <label for="">Kompetensi</label>
                <select name="kompetensi" id="" class="form-control">
                    <option value="" disabled selected>Pilih Opsi Di Bawah Ini</option>
                    <option value="1">RPL</option>
                    <option value="2">ANM</option>
                </select>
                <br>
                <input type="submit" value="Tambah" class="btn btn-success" role="button" name="tambah">
            </form>
        </div>
    </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>
</html>