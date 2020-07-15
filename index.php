<!DOCTYPE html>
<html>
<head>
    <title>Arkademy</title>
</head>

<body>
    <header>
        <h1>CRUD Data Barang</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="input.php">Daftar Baru</a></li>
            <li><a href="tabel.php">Tabel Barang</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input barang berhasil!";
            } else {
                echo "Input gagal gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>