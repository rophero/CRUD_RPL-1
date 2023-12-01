<?php
    require 'functions.php';

    $supplier = query("SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #007bff; /* Warna latar belakang navbar biru */
            overflow: hidden;
            z-index: 1000;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #0056b3; /* Warna latar belakang navbar saat dihover */
            color: white;
        }

        h1 {
            color: #006400;
            margin-top: 60px; /* Menyesuaikan margin atas untuk memberi ruang bagi navbar */
        }

        a.btn {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #007bff; /* Warna tombol biru */
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff; /* Warna latar belakang header biru */
            color: white;
        }

        tr:nth-child(even) {
            background-color: #cce5ff; /* Warna latar belakang baris ganjil */
        }

        .aksi-btn {
            display: flex;
            gap: 5px;
        }

        .aksi-btn button {
            padding: 8px 12px;
            background-color: #0056b3; /* Warna tombol biru tua */
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="data_pembeli.php">Pembelian</a>
        <a href="data_supplier.php">Supplier</a>
        <a href="data_barang.php">Barang</a>
    </div>

    <h1>Daftar Data Supplier</h1>
    <a href="tambah_supplier.php" class="btn btn-primary">Tambah Data Supplier</a>

    <table>
        <tr>
            <th>No</th>
            <th>ID Supplier</th>
            <th>Nama Supplier</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($supplier as $brg) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $brg['id_supplier'];?></td>
                <td><?= $brg['nama_supplier'];?></td>
                <td><?= $brg['no_telp'];?></td>
                <td><?= $brg['alamat'];?></td>
                <td class="aksi-btn">
                    <a href="ubah_supplier.php?id=<?php echo $brg['id_supplier'];?>"><button type="button" class="btn btn-success">Ubah</button></a>
                    <a href="hapus_supplier.php?id=<?php echo $brg['id_supplier'];?>"><button type="button" class="btn btn-success">Hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php } ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


