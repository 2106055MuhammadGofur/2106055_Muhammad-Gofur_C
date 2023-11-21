<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Form Pemesanan Baju</title>
</head>
<body>
    <div class="container">

        <form action="insert.php" method="post">
            <h1>Form Pemesanan Baju</h1>


            <label for="nama">Nama Pemesan:</label>
            <input type="text" id="nama" name="namaPemesan" required>

            <label for="alamat">Alamat Pengiriman:</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="noTelepon" required>

            <label for="jenis_baju">Jenis Baju:</label>
            <select id="jenis_baju" name="jenisBaju" required>
                <option value="kaos">Kaos</option>
                <option value="kemeja">Kemeja</option>
                <option value="jaket">Jaket</option>
            </select>

            <label for="ukuran">Ukuran:</label>
            <select id="ukuran" name="ukuran" required>
                <option value="s">S</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
                </select>

            <label for="jumlah">Jumlah Pesanan:</label>
            <input type="number" id="jumlah" name="jumlahPesanan" required>

            <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
            <input type="date" id="tanggal_pengiriman" name="tanggal">

            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
  

</body>
</html>
