<?php
require_once('koneksi/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM bukutamu WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:manajemen-bukutamu.php?delete=sukses');
    } else {
        header('location:manajemen-bukutamu.php?delete=gagal');
    }
}
else {
    header('location:manajemen-bukutamu.php');
}