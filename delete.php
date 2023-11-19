<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}


$nim = $_GET['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
