<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: tabel.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Arkademy</title>
</head>

<body>
    <header>
        <h3>Edit Barang</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $barang['id'] ?>" />

        <p>
            <label for="id">id: </label>
            <input type="text" name="id" placeholder="id" value="<?php echo $barang['id'] ?>" />
        </p>
        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama_produk" value="<?php echo $barang['nama_produk'] ?>" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" placeholder="keterangan" value="<?php echo $barang['keterangan'] ?>"/>
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" placeholder="harga" value="<?php echo $barang['harga'] ?>"/>
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" placeholder="jumlah" value="<?php echo $jumlah = $barang['jumlah'] ?>"/>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>