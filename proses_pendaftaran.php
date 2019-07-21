<?php

include("connection.php");

if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $penyakit = $_POST['penyakit'];

    $sql = "INSERT INTO obat (id,nama, umur, penyakit ) 
    VALUE ('$id', '$nama', '$umur', '$penyakit')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
    
        header('Location: form_pendaftaran.php?status=sukses');
    } else {
        header('Location: form_pendaftaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>