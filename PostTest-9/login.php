<?php
session_start();

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi sederhana (Contoh: username = "admin", password = "password")
    if ($username === "Rakesh" && $password === "rakeshimut") {
        // Jika login berhasil, atur sesi dan redirect ke halaman lain
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika login gagal, tampilkan pesan error
        $error = "Username atau password salah!";
    }
}
?>
