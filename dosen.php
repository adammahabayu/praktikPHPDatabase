<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $namaDosen = $_POST['namaDosen'];
        $noHp = $_POST['noHp'];
        $sql = "INSERT INTO t_dosen (namaDosen, noHp) VALUES ('$namaDosen', '$noHp')";
        $conn->query($sql);
    } elseif (isset($_POST['edit'])) {
        $idDosen = $_POST['idDosen'];
        $namaDosen = $_POST['namaDosen'];
        $noHp = $_POST['noHp'];
        $sql = "UPDATE t_dosen SET namaDosen='$namaDosen', noHp='$noHp' WHERE idDosen='$idDosen'";
        $conn->query($sql);
    } elseif (isset($_POST['delete'])) {
        $idDosen = $_POST['idDosen'];
        $sql = "DELETE FROM t_dosen WHERE idDosen='$idDosen'";
        $conn->query($sql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8
