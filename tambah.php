<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_tambah.php" method="POST">
    <fieldset>
    <p>
        <label for="nama_penyewa">Nama penyewa:</label>
        <input type="text" name="nama"/>
    </p>
    <p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"></textarea>
    </p>
    <p>
        <label for="genre_dvd">genre:</label>
        <input type="text" name="genre"/>
    </p>
    <p>
        <label for="judul_film">judul film:</label>
        <input type="text" name="judul"/>
    </p>
    <p>
        <label for="tahun_film">tahun film:</label>
        <input type="year" name="tahun"/>
    </p>
    <p>
        <label for="tanggal_sewa">tanggal sewa:</label>
        <input type="date" name="sewa"/>
    </p>
    <p>
        <label for="tanggal_kembali">tanggal kembali:</label>
        <input type="date" name="kembali"/>
    </p>
    <p>
        <label for="harga">harga:</label>
        <input type="number" name="harga"/>
    <p>
    <input type="submit" value="Tambah" name="tambah" />
    </p>
</fieldset>
</form>
</body>
</html>
