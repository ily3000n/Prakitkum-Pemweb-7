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

$sql = "INSERT INTO mahasiswa (nim, nama, kode_prodi) VALUES ('$nim', '$nama', '$kode_prodi')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
