<?php
require 'fungsi.php';
if(isset($_POST["submit"])){

    //cek apakah data berhasil di input atau gagal
    if( tambah($_POST)>0) {
        echo "
            <script>
                alert('Menu berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('Menu tidak dapat ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Menambah jenis kerupuk palembang</title>
  </head>
  <body>
    <h1>MANAMBAHKAN JENIS KERUPUK PALEMBANG</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_kerupuk">Nama kerupuk : </label>
                <input type="text" name="nama_kerupuk">
            </li>
            <li>
                <label for="kode_kerupuk">Kode kerupuk : </label>
                <input type="text" name="kode_kerupuk">
            </li>
            <li>
                <label for="harga_kerupuk">Harga kerupuk : </label>
                <input type="text" name="harga_kerupuk">
            </li>
            <li>
                <label for="stock_kerupuk">Stock kerupuk : </label>
                <input type="text" name="stock_kerupuk">
            </li>
            <li>
                <button type="submit" name="submit">Add Menu!</button>
            </li>
        </ul>
    </form>
  </body>
</html>

