<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "klinik");

// Check connection
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Pastikan data dikirimkan melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi input
    $gejala1 = mysqli_real_escape_string($koneksi, $_POST['gejala1']);
    $gejala2 = mysqli_real_escape_string($koneksi, $_POST['gejala2']);
    $gejala3 = mysqli_real_escape_string($koneksi, $_POST['gejala3']);

    // Menyimpan data ke database
    $stmt = $koneksi->prepare("INSERT INTO keluhan (gejala1, gejala2, gejala3) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $gejala1, $gejala2, $gejala3); // "sss" berarti string untuk 3 parameter
    $stmt->execute();
    $stmt->close();

    // Logika untuk deteksi penyakit
    if ($gejala1 == "Sering haus dan buang air kecil" && $gejala2 == "Berat badan turun drastis") {
        $diagnosis = "Kemungkinan Anda mengidap Diabetes.";
    } elseif ($gejala1 == "Sakit kepala" && $gejala2 == "Pusing") {
        $diagnosis = "Kemungkinan Anda mengalami Migrain.";
    } elseif ($gejala1 == "Luka sulit sembuh" && $gejala2 == "Mual dan muntah") {
        $diagnosis = "Kemungkinan Anda mengidap Gangguan Pencernaan.";
    } else {
        $diagnosis = "Gejala Anda tidak cocok dengan penyakit yang umum.";
    }

    // Tampilkan hasil diagnosis
    echo "<h2>Hasil Diagnosis:</h2>";
    echo "<p>$diagnosis</p>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
