<!DOCTYPE html>
<html>
<head>
    <title>Arkademy</title>
</head>

<body>
    <header>
        <h3>Input Produk</h3>
    </header>

    <form action="proses.php" method="POST">

        <fieldset>

        <p>
            <label for="id">id: </label>
            <input type="text" name="id" placeholder="id" />
        </p>
        <p>
            <label for="nama_produk">Nama Produk: </label>
            <input type="text" name="nama_produk" placeholder="nama_produk" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <input type="text" name="keterangan" placeholder="keterangan" />
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" placeholder="harga" />
        </p>
        <p>
            <label for="jumlah">Jumlah: </label>
            <input type="text" name="jumlah" placeholder="jumlah" />
        </p>
            <input type="submit" value="Input" name="input" />
        </p>

        </fieldset>

    </form>

    </body>
</html>