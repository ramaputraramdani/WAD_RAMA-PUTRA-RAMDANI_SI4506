<?php
$url = 'localhost';
$username = 'root';
$password =  "";
$database = "kerupuku";

$conn = mysqli_connect($url, $username, $password, $database);

function query($query){
    global $conn ;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama_kerupuk = $data["nama_kerupuk"];
    $kode_kerupuk = $data["kode_kerupuk"];
    $harga_kerupuk = $data["harga_kerupuk"];
    $stock_kerupuk = $data["stock_kerupuk"];

    $query ="INSERT INTO jenis_kerupuk
                VALUES
              ('','$nama_kerupuk', '$kode_kerupuk', '$harga_kerupuk', '$stock_kerupuk')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($nomor){
    global $conn;
    mysqli_query($conn, "DELETE FROM jenis_kerupuk WHERE nomor = $nomor");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $nomor = $data["nomor"];
    $nama_kerupuk = $data["nama_kerupuk"];
    $kode_kerupuk = $data["kode_kerupuk"];
    $harga_kerupuk = $data["harga_kerupuk"];
    $stock_kerupuk = $data["stock_kerupuk"];

    $query ="UPDATE jenis_kerupuk SET
                nama_kerupuk = '$nama_kerupuk' 
                kode_kerupuk = '$kode_kerupuk' 
                harga_kerupuk = '$harga_kerupuk' 
                stock_kerupuk = '$stock_kerupuk'
             WHERE nomor = $nomor
             ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>