<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kode_prodi = $_POST['kode_prodi'];


$sql = "UPDATE mahasiswa SET nama='$nama', kode_prodi='$kode_prodi' WHERE nim='$nim'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
