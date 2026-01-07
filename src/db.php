<?php
$conn = mysqli_connect(
    "db",
    "root",
    "root",
    "lab_sqli"
);

if (!$conn) {
    die("DB Error");
}
?>
