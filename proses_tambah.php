<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
          $nama=$_POST['nama'];
          $almt=$_POST['alamat'];
          $gnre=$_POST['genre'];
          $jdl=$_POST['judul'];  
          $thn=$_POST['tahun'];
          $sw=$_POST['sewa'];
          $kmbl=$_POST['kembali'];
          $hrg=$_POST['harga'];


          $sql = "INSERT INTO tb_dvd(genre_dvd,judul_film,tahun_film,tanggal_sewa,tanggal_kembali,harga) 
          VALUES ('$gnre','$jdl','$thn','$sw','$kmbl','$hrg')";
          $query = mysqli_query($db, $sql); 

          $sql="SELECT max(id_dvd)AS dv FROM tb_dvd LIMIT 1";
          $query = mysqli_query($db, $sql);                                                                             

          $data=mysqli_fetch_array($query);
          $d=$data['dv'];
          
          $sql="INSERT INTO tb_penyewa(nama_penyewa, alamat, id_dvd)
           VALUES ('$nama','$almt','$d')";
          $query = mysqli_query($db, $sql);
          

          if($query){
                    header('location:tampil.php?status=sukses');
          }else{
                    header('location:tampil.php?status=gagal');
          }
          }
          ?>


