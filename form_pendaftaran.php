<!DOCTYPE html>
<html>
<head>
    <title>Formulir pasien baru</title>
</head>

<body>
    <header>
        <h3>Formulir  pasien baru</h3>
    </header>

    <form action="proses_pendaftaran.php" method="POST">

        <fieldset>
            <p>
            <label for="id">id </label>
            <input type="number" name="id" placeholder="masukkan angka 1-5" min="1" max="5" required />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required />
        </p>
        <p>
            <label for="umur">Umur:</label>

            <input type="number"  name="umur" required>
        </p>
        <p>
            <label for="penyakit">Penyakit: </label>
            <input type="text" name="penyakit" placeholder="Keterangan penyakit">
        </p>

            <input type="submit" value="Daftar" name="daftar" />
        </p>
        <p><a href="member_page.php" target="_blank"> kembali </a></p>

        </fieldset>

    </form>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>


