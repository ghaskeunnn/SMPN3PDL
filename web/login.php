<?php
// Mengambil nilai dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Menghubungkan ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'lomba';

$conn = mysqli_connect($host, $user, $pass, $db);

$check = mysqli_query($conn,"SELECT * FROM login WHERE username='$username' && password='$password'") or die (mysql_error());

if (mysqli_num_rows($check)) {
    while ($row = mysqli_fetch_array($check)) {
        session_start();

        header("location: home.html");
    }
} else {
    header("location:index.html");
}

?>