<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'crud_new';
    $var1 = mysqli_connect($host,$user,$pass,$db);
    if($var1){
        //echo "koneksi berhasil";
    }
	mysqli_select_db($var1, $db);
?>

