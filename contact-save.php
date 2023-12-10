<?php
require_once('koneksi/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = strip_tags(mysqli_escape_string($connectDb, $_POST['nama']));
    $email = strip_tags(mysqli_escape_string($connectDb, $_POST['email']));

    $pesan = strip_tags(mysqli_escape_string($connectDb, $_POST['pesan']));

    $query = "INSERT INTO bukutamu(nama, email, pesan) VALUES('{$nama}', '{$email}', '{$pesan}')";
    $result = mysqli_query($connectDb, $query);

    if ($result) {
        header('location:index.php?message=sukses');
    } else {
        header('location:index.php?message=gagal');    
    }
} else {
    header('location:index.php');
}