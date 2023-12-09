<?php
session_start();

// Definisi informasi pengguna yang valid dalam bentuk array terpisah
$usernames = ['user1', 'user2'];
$passwords = ['password1', 'password2'];

// Menggunakan array_map untuk menggabungkan informasi pengguna ke dalam struktur yang diinginkan
$valid_users = array_map(function($username, $password) {
    return [
        'password' => $password,
        'username' => $username
    ];
}, $usernames, $passwords);

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    // Memeriksa keberadaan username di array valid_users
    $user_found_key = array_search($uname, array_column($valid_users, 'username'));

    if ($user_found_key !== false) {
        $user_info = $valid_users[$user_found_key];

        if ($user_info['password'] === $pass) {
            $_SESSION['user_name'] = $uname;
            $_SESSION['id'] = $user_found_key + 1; // Menggunakan kunci sebagai ID sementara

            echo "Logged In!";
            header("Location: THT.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect Password");
            exit();
        }
    } else {
        header("Location: index.php?error=Invalid User");
        exit();
    }
}
?>
