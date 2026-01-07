<?php
include 'db.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM users 
          WHERE username='$user' AND password='$pass'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
