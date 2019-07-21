<?php include("connection.php"); ?>
<!DOCTYPE html>
<head>
    <title> pasien page </title>
</head>

<body>
    <header>
        <h3>pasien yang sudah mendaftar</h3>
    </header>

    <nav>
        <p>klik <a href="form_pendaftaran.php">[+] Tambah Baru</a> untuk mendaftar </p>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>umur</th>
            <th>penyakit</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM obat";
        $query = mysqli_query($db, $sql);

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$pasien['id']."</td>";
            echo "<td>".$pasien['nama']."</td>";
            echo "<td>".$pasien['umur']."</td>";
            echo "<td>".$pasien['penyakit']."</td>";
            echo "<td>";
            echo "<a href='ubah.php?id=".$pasien['id']."'>Ubah</a> | ";
            echo "<a href='hapus.php?id=".$pasien['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>