<?php
require 'fungsi.php';

$nomor = $_GET["nomor"];

if(hapus($nomor)>0) {
    echo "
        <script>
            alert('Menu berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}else{
    echo "
    <script>
        alert('Menu tidak dapat dihapus!');
        document.location.href = 'index.php';
    </script>
";
}
?>