<?php

include("connection.php");


if( !isset($_GET['id']) ){
    header('Location: member_page.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM obat WHERE id=$id";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>EDIT DATA PASIEN</title>
</head>

<body>
    <header>
        <h3>Formulir Edit nya</h3>
    </header>

    <form action="member_page.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $pasien['id'] ?>" />

            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="masukkan nama anda" 
            value="<?php echo $pasien['nama'] ?>" />
            </p>
            <p>
            <label for="umur">Umur: </label>
            <input type="number" name="umur" value="<?php echo $pasien['umur'] ?>">
            </p>
            <p>
            <label for="penyakit"> Penyakit: </label>
            <input  required type="text" name="penyakit" placeholder="type penyakit"
                         value="<?php echo $pasien['penyakit'] ?>"/>
            </p>
            <p>
            <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>

<?php

include("connection.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $penyakit= $_POST['penyakit'];
    

    $sql = "UPDATE obat SET id='$id', nama='$nama', umur='$umur', penyakit='$penyakit', WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
          header('Location: member_page.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>

</body>
</html>