<?php
 include 'test.php';

 if(isset($_POST['aksi'])){
    if($_POST['aksi']=="tambah1"){

        $nbi0 =$_POST['nbi0'];
        $nama0 =$_POST['nama0'];
        $jekel0 =$_POST['jekel0'];
        $nomor0 = $_POST['nomor0'];
        $alamat0 =$_POST['alamat0'];

        $que = "INSERT INTO tb_mahasiswa VALUES (null,'$nbi0', '$nama0', '$jekel0', '$nomor0', '$alamat0')";
        $sqltest  = mysqli_query($var1,$que);
            if($sqltest){
                header("location: index-home.php");
                //echo "berhasil di tambahkan <a href='index.php'>[home]</a>";
            } else{
                echo $que;
            }
        //echo $nbi0." | ". $nama0." | ". $jekel0 ." | ".$foto0 ." | ". $alamat0 . "</br>";
        //echo "ini tambah data <a href='index.php'>[home]</a>";
    } else if($_POST['aksi']=="edit1") {
        header("location: index-home.php");
        //var_dump($_POST);
        $id_mhs = $_POST['id'];
        $nbi_mhs = $_POST['nbi0'];
        $nama_mhs = $_POST['nama0'];
        $jekel_mhs = $_POST['jekel0'];
        $nomor_mhs = $_POST['nomor0'];
        $alamat_mhs = $_POST['alamat0'];

        $query1 = "UPDATE tb_mahasiswa SET nbi_mhs='$nbi_mhs', nama_mhs='$nama_mhs',
         kelamin_mhs='$jekel_mhs', nomor_mhs='$nomor_mhs', alamat_mhs='$alamat_mhs' WHERE id='$id_mhs'";
        $sqltest = mysqli_query($var1,$query1);
    }
    
 }
 if(isset($_GET['hapus'])){
    $id_test = $_GET['hapus'];
    $que = " DELETE FROM tb_mahasiswa WHERE id ='$id_test'";
    $sqltest = mysqli_query($var1,$que);

    if($sqltest){
        header("location: index-home.php");
        //echo "berhasil di tambahkan <a href='index.php'>[home]</a>";
    } else{
        echo $que;
    }
    //echo "ini hapus data <a href='index.php'>[home]</a>";
 }
?>