<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Arkademy</title>
</head>

<body>
    <header>
        <h3>Tabel Barang</h3>
    </header>

    <nav>
        <a href="input.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['id']."</td>";
            echo "<td>".$barang['nama_produk']."</td>";
            echo "<td>".$barang['keterangan']."</td>";
            echo "<td>".$barang['harga']."</td>";
            echo "<td>".$barang['jumlah']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$barang['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$barang['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>