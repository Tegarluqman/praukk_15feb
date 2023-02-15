<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
          $id=$_POST['id'];
          $nama=$_POST['penyewa'];
          $almt=$_POST['alamt'];
          $gnre=$_POST['genre'];
          $jdl=$_POST['judul'];  
          $thn=$_POST['tahunfilm'];
          $sw=$_POST['sewa'];
          $kmbl=$_POST['kembali'];
          $hrg=$_POST['harga'];
          
        $sql="UPDATE tb_penyewa SET nama_penyewa='$nama', alamat='$almt' WHERE id_penyewa='$id'";
        $query=mysqli_query($db,$sql);
          
        $sql="UPDATE tb_dvd SET genre_dvd='$gnre', judul_film='$jdl', tahun_film='$thn', tanggal_sewa='$sw', tanggal_kembali='$kmbl', harga='$hrg' WHERE id_dvd='$id'";
        $query=mysqli_query($db,$sql);

          
          

        if($query){
                    header("Location:tampil.php?status=sukses");
        }else{
                    header("gagal mengedit");
        }
}
        ?>
