<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris - INVENTORY KANTOR LENNI</title>
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
                    <li><a href="data_supplier.php">Data Supplier</a></li>
                    <li><a href="data_lokasi.php">Data Lokasi</a></li>
                    <li><a href="data_inventaris.php" class="active">Data Inventaris</a></li>
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

                <h3>Data Inventaris Barang</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Label</th>
                            <th>Nomor Seri</th>
                            <th>Nama Barang</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';

                        $query = "SELECT * FROM inventaris ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    echo "<td>" . $row['kode_label'] . "</td>";
                                    echo "<td>" . $row['nomor_seri'] . "</td>";
                                    echo "<td>" . $row['nama_barang'] . "</td>";
                                    echo "<td>" . $row['status'] . "</td>";
                                    echo "<td>" . $row['lokasi'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data inventaris.</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Error saat mengambil data: " . mysqli_error($koneksi) . "</td></tr>";
                        }

                        mysqli_close($koneksi);
                        ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>