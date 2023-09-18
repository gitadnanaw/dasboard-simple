<!DOCTYPE html>
<?php
include 'test.php';
$id_mhs = '';
$nbi_mhs = '';
$nama_mhs = '';
$jekel_mhs = '';
$nomor_mhs = '';
$alamat_mhs = '';

if (isset($_GET['edit'])) {
    $id_mhs = $_GET['edit'];

    $oprasi = "SELECT * FROM tb_mahasiswa WHERE id = '$id_mhs';";
    $sqltest = mysqli_query($var1, $oprasi);

    $hasil = mysqli_fetch_assoc($sqltest);
    $nbi_mhs = $hasil['nbi_mhs'];
    $nama_mhs = $hasil['nama_mhs'];
    $jekel_mhs = $hasil['kelamin_mhs'];
    $nomor_mhs = $hasil['nomor_mhs'];
    $alamat_mhs = $hasil['alamat_mhs'];
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
        <img src="img/Logo-Untag.png" alt="Logo-Untag">
        <a href="#">
            PAW-UTS
        </a>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php" class="col mt-4">
            <input type="hidden" value="<?php echo $id_mhs; ?>" name="id">
            <div class="mb-3 row">
                <label for="nbi" class="col-sm-2 col-form-label">Nbi</label>
                <div class="col-sm-10">
                    <input type="text" name="nbi0" class="form-control" id="nbi" placeholder="Nomor Induk" value="<?php echo $nbi_mhs;
                                                                                                                    ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama0" class="form-control" id="nbi" placeholder="Nama Lengkap" value="<?php echo $nama_mhs;
                                                                                                                    ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
                <div class="col-sm-10">
                    <select name="jekel0" id="kelamin" class="form-select">
                        <option <?php if ($jekel_mhs == 'laki-laki') {
                                    echo "selected";
                                } ?> value="Laki-laki">Laki-Laki</option>
                        <option <?php if ($jekel_mhs == 'perempuan') {
                                    echo "selected";
                                } ?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input type="text" name="nomor0" class="form-control" id="nomor" placeholder="Nomor Handphone" value="<?php echo $nomor_mhs;
                                                                                                                            ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="alamat0" id="alamat"><?php echo $alamat_mhs;
                                                                                ?></textarea>
                </div>
            </div>
            <div class="mb-3">
                <div class="col mt-4">
                    <?php
                    if (isset($_GET['edit'])) {
                    ?>
                        <button type="submit" name="aksi" value="edit1" class="btn btn-primary">Simpan</button>
                    <?php
                    } else {
                    ?>
                        <button type="submit" name="aksi" value="tambah1" class="btn btn-primary">Tambah</button>
                    <?php
                    }
                    ?>
                    <a href="index-home.php" type="button" class="btn btn-danger">Batal</a>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    <footer>
        <p class="copyright">UTS-Adnan Wahabi-1462100077</p>
    </footer>
</body>

</html>