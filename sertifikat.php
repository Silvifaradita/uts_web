<?php
// Koneksi ke database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data sertifikat dari database
$sql = "SELECT * FROM certificates";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop setiap baris data
    while($row = $result->fetch_assoc()) {
        // Buat sertifikat HTML
        echo "<h1>Certificate of Completion</h1>";
        echo "<p>Name: " . $row["name"]. "</p>";
        echo "<p>Course: " . $row["course"]. "</p>";
        echo "<p>Date: " . $row["date"]. "</p>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
