<?php
include 'db.php';

$q = $_GET['q'];

$sql = "SELECT id, username, role 
        FROM users 
        WHERE username LIKE '%$q%'";

$res = mysqli_query($conn, $sql);

echo "<table border=1>";
echo "<tr><th>ID</th><th>Username</th><th>Role</th></tr>";

while ($r = mysqli_fetch_assoc($res)) {
    echo "<tr>";
    echo "<td>{$r['id']}</td>";
    echo "<td>{$r['username']}</td>";
    echo "<td>{$r['role']}</td>";
    echo "</tr>";
}
echo "</table>";
