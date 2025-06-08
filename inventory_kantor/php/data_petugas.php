<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas - INVENTORY KANTOR LENNI</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <i class="fa-solid fa-l" style="font-size: 40px; color: #4CAF50;"></i>
                </div>
            <div class="menu">
                <h3>Menu</h3>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="data_petugas.php" class="active">Data Petugas</a></li>
                    <li><a href="data_pegawai.php">Data Pegawai</a></li>
                    <li><a href="data_supplier.php">Data Supplier</a></li>
                    <li><a href="data_lokasi.php">Data Lokasi</a></li>
                    <li><a href="data_inventaris.php">Data Inventaris</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h1>INVENTORY KANTOR LENNI</h1>
                <h2>Inventarisasi Barang Aset Kantor</h2>
            </header>
            <main>
                <h3>Data Petugas</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Jabatan</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> <td>1</td> <td>Budi Santoso</td> <td>Administrator</td> <td>0812-3456-7890</td> </tr>
                        <tr> <td>2</td> <td>Siti Aminah</td> <td>Petugas Gudang</td> <td>0813-9876-5432</td> </tr>
                        <tr> <td>3</td> <td>Joko Susilo</td> <td>Petugas Inventaris</td> <td>0878-1122-3344</td> </tr>
                        <tr> <td>4</td> <td>Ani Lestari</td> <td>Asisten Administrasi</td> <td>0857-5566-7788</td> </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>