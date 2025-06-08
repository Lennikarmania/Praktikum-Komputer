<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY KANTOR LENNI</title>
    <link rel="stylesheet" href="css/styles.css">
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
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="php/data_petugas.php">Data Petugas</a></li>
                    <li><a href="php/data_pegawai.php">Data Pegawai</a></li>
                    <li><a href="php/data_supplier.php">Data Supplier</a></li>
                    <li><a href="php/data_lokasi.php">Data Lokasi</a></li>
                    <li><a href="php/data_inventaris.php">Data Inventaris</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h1>INVENTORY KANTOR LENNI</h1>
                <h2>Inventarisasi Barang Aset Kantor</h2>
            </header>
            <main>
                <div class="filter-section">
                    <label for="kategori">-- Semua Kategori --</label>
                    <select id="kategori">
                        <option value="all">Semua Kategori</option>
                        <option value="laptop">Laptop</option>
                        <option value="printer">Printer</option>
                        <option value="projector">Projector</option>
                        <option value="camera">Camera</option>
                        <option value="monitor">Monitor</option>
                        <option value="keyboard">Keyboard</option>
                        <option value="mouse">Mouse</option>
                        <option value="router">Router</option>
                    </select>
                    <button class="tampilkan-btn">Tampilkan</button>
                </div>

                <h3>Selamat Datang di Sistem Inventaris Kantor Lenni</h3>
                <p>Gunakan menu di sidebar untuk menavigasi data inventaris dan informasi terkait lainnya.</p>

            </main>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>