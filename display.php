<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result === FALSE) {
    die("Error executing query: " . $conn->error);
}

?>



<?php
if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['kode_prodi'] . "</td>";
        echo "<td><a href='edit.php?nim=" . $row['nim'] . "'>Edit</a> | <a href='delete.php?nim=" . $row['nim'] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Tidak ada data mahasiswa.</td></tr>";
}

$conn->close();
?>
