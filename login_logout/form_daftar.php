<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="form-control border border-primary mt-5">
            <h3 class="text-center">Form Daftar</h3>
            <form action="../controller/conn_tambah_user.php" method="post" class="m-5">
                <label for="">Nama : </label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                <br>
                <label for="">User Name : </label>
                <input type="text" class="form-control" placeholder="Masukkan Username" name="user">
                <br>
                <label for="">Password : </label>
                <input type="password" class="form-control" placeholder="Masukkan Password" name="pass">
                <br>
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Confirm Password" name="cpass">
                <label for="">Role : </label>
                <br>
                <select name="role" id="" class="form-select">
                    <option value="" disabled selected>Pilih Opsi Di Bawah Ini</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="siswa">Siswa</option>
                </select>
                <br>
                <input type="submit" value="Daftar" class="btn btn-primary" name="tambah">
            </form>
        </div>
    </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>

</html>