<?php
$kecamatan = $_POST['kecamatan'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];
$longtitude = $_POST['longitude'];
$latitude = $_POST['latitude'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kecamatan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO kecamatan (kecamatan, luas, jumlah_penduduk, latitude, longtitude)
VALUES ('$kecamatan', $luas, $jumlah_penduduk, $latitude, $longtitude)";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: ../tabel.php");

?>