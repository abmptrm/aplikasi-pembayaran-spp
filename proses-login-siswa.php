<?php

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];

include 'koneksi.php';

$sql = "SELECT * FROM siswa WHERE nisn='$nisn' AND nis='$nis'";
$query = mysqli_query($koneksi,$sql);

if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);

    session_start();

    $_SESSION['nisn'] = $nisn;
    $_SESSION['nis'] = $nis;
    $_SESSION['nama'] = $data['nama'];

    header('location: ');

}else{
    echo"<script>alert('Maaf Login Gagal, Silahkan ulangi Lagi'); window.location.assign('index2.php');
    </script>";
}
    
