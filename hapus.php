<?php

include("connection.php");

if( isset($_GET['id']) ){


    $id = $_GET['id'];


    $sql = "DELETE FROM obat WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if( $query ){
        header('Location: member_page.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>