<?php
include 'test.php';
$query = "SELECT * FROM tb_mahasiswa";
$sql = mysqli_query($var1, $query);
$no = 0;
//var_dump($hasil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-dark">
        <img src="img/Logo-Untag.png" alt="Logo-Untag">
        <a href="#">
            PAW-UTS
        </a>
    </nav>
    </nav>
    <!--judul -->
    <div class="container">
        <h1 class="mt-4">Data Mahasiswa</h1>
        <blockquote class="blockquote">
            <p class="mb-0">Data Yang Telah Tersimpan</p>
        </blockquote>
        <a href="index-form.php" type="button" class="btn btn-primary mb-3 ">Tambah Data</a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th>
                            <center>no</center>
                        </th>
                        <th>Nbi</th>
                        <th>Nama</th>
                        <th>Kelamin</th>
                        <th>Nomor Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($hasil = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td>
                                <center><?php
                                        echo ++$no;
                                        ?>.
                                </center>
                            </td>
                            <td>
                                <?php
                                echo $hasil['nbi_mhs'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $hasil['nama_mhs'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $hasil['kelamin_mhs'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $hasil['nomor_mhs'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $hasil['alamat_mhs'];
                                ?>
                            </td>
                            <td>
                                <a href="proses.php?hapus=<?php echo $hasil['id']; ?>" type="button" class="btn btn-danger btn-sm ">Hapus</a>
                                <a href="index-form.php?edit=<?php echo $hasil['id']; ?>" type="button" class="btn btn-success btn-sm ">Edit</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
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
    <footer>
        <p class="copyright">UTS-Adnan Wahabi-1462100077</p>
    </footer>
</body>

</html>