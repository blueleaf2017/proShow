<?php
$servername = "localhost";
$username = "root";
$password = "chenyong";
$dbname = "test";
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// �������
mysqli_set_charset($conn,"utf8");
//mysqli_query($conn,"set name utf8");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

