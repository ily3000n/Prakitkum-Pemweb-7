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


$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
    $nama = $row['nama'];
    $kode_prodi = $row['kode_prodi'];
    echo "<h2>Edit Mahasiswa</h2>";
    echo "<form action='update.php' method='post'>";
    echo "<label for='nim'>NIM:</label>";
    echo "<input type='text' id='nim' name='nim' value='$nim' readonly>";
    echo "<label for='nama'>Nama:</label>";
    echo "<input type='text' id='nama' name='nama' value='$nama' required>";
    echo "<label for='kode_prodi'>Kode Prodi:</label>";
    echo "<input type='text' id='kode_prodi' name='kode_prodi' value='$kode_prodi' required>";
    echo "<button type='submit'>Update</button>";
    echo "</form>";
} else {
    echo "Data mahasiswa tidak ditemukan.";
}

$conn->close();
?>
