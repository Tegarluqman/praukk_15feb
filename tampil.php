<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1> DATA </h1>
    <table border="3">
        <tr>
            <th>Nama Penyewa</th>
            <th>Almat</th>
            <th>Genre Film</th>
            <th>Judul Film</th>
            <th>Tahun Film</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Kembali</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        include("koneksi.php");
        $query = mysqli_query($db,"SELECT * FROM tb_penyewa INNER JOIN 
        tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd");
        
        while($data=mysqli_fetch_array($query)){
                       echo "<tr>";   
                       echo "<td>".$data['nama_penyewa']."</td>";
                       echo "<td>".$data['alamat']."</td>";   
                       echo "<td>".$data['genre_dvd']."</td>";
                       echo "<td>".$data['judul_film']."</td>";
                       echo "<td>".$data['tahun_film']."</td>";
                       echo "<td>".$data['tanggal_sewa']."</td>";
                       echo "<td>".$data['tanggal_kembali']."</td>";
                       echo "<td>".$data['harga']."</td>";
                       
                       echo "<td>";
                       echo "<a href='edit.php?id_penyewa=".$data['id_penyewa']."'>Edit</a> |";
                       echo "<a href='hapus.php?id_penyewa=".$data['id_penyewa']."'>Hapus</a>";
                       echo "</td>";

                       echo "</tr>";
           }
           ?>
        <a href="tambah.php"><input type="button"  value="Tambah">  

    </table>
    </center>
</body>
</html>