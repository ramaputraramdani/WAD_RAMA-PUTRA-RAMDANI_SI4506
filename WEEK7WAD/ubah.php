<?php
require 'fungsi.php';

$nomor = $_GET["nomor"];

$krpk = query("SELECT * FROM jenis_kerupuk WHERE nomor = $nomor ")[0];
if(isset($_POST["submit"])){


    //cek apakah data berhasil di ubah atau gagal
    if( ubah($_POST)>0) {
        echo "
            <script>
                alert('jenis berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('jenis gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Merubah jenis Kerupuk palembang</title>
  </head>
  <body>
    <h1>UPDATE JENIS KERUPUK PALEMBANG</h1>
    <form action="" method="post">
        <input type ="hidden" name = "nomor" value ="<?= $krpk["nomor"];?>">
        <ul>

            <li>
                <label for="nama_kerupuk">Nama kerupuk : </label>
                <input type="text" name="nama_kerupuk" nomor="nama_kerupuk" 
                value ="<?= $krpk["nama_kerupuk"];?>">
            </li>

            <li>
                <label for="kode_kerupuk">Kode kerupuk : </label>
                <input type="text" name="kode_kerupuk" nomor="kode_kerupuk" 
                value ="<?= $krpk["kode_kerupuk"];?>">

            </li>

            <li>
                <label for="harga_kerupuk">Harga kerupuk : </label>
                <input type="text" name="harga_kerupuk" nomor="harga_kerupuk" 
                value ="<?= $krpk["harga_kerupuk"];?>">

            </li>

            <li>
                <label for="stock_kerupuk">Stock kerupuk : </label>
                <input type="text" name="stock_kerupuk" nomor="stock_kerupuk" 
                value ="<?= $krpk["stock_kerupuk"];?>">

            </li>

            <li>
                <button type="submit" name="submit">Update jenis!</button>
            </li>

        </ul>
    </form>
  </body>
</html>

