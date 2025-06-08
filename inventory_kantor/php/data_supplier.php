<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier - INVENTORY KANTOR LENNI</title>
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
                    <li><a href="data_petugas.php">Data Petugas</a></li>
                    <li><a href="data_pegawai.php">Data Pegawai</a></li>
                    <li><a href="data_supplier.php" class="active">Data Supplier</a></li>
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
                <h3>Data Supplier</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>Kontak Person</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> <td>1</td> <td>PT. Teknologi Abadi</td> <td>Andi Pratama</td> <td>(021) 1234567</td> <td>Jl. Merdeka No. 10, Jakarta</td> </tr>
                        <tr> <td>2</td> <td>Global Elektronik</td> <td>Citra Dewi</td> <td>(022) 9876543</td> <td>Jl. Asia Afrika No. 5, Bandung</td> </tr>
                        <tr> <td>3</td> <td>Prima Solusi</td> <td>Dwi Susanti</td> <td>(031) 2345678</td> <td>Jl. Kenangan Indah, Surabaya</td> </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>