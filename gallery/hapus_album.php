<?php
include "koneksi.php";
session_start();

$albumid = $_GET['albumid'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jika user yakin untuk menghapus
    if (isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
        $sql = mysqli_query($conn, "DELETE FROM album WHERE albumid='$albumid'");
        header("location:album.php");
    } else {
        // Jika user membatalkan penghapusan
        header("location:album.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Album</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-container {
            text-align: center;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c82333;
        }

        button + button {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Konfirmasi Hapus Album</h2>
    <p>Apakah Anda yakin ingin menghapus album ini?</p>
    <div class="btn-container">
        <form action="" method="post">
            <input type="hidden" name="confirm" value="yes">
            <button type="submit">Ya, Hapus</button>
            <button type="button" onclick="location.href='album.php'">Tidak, Batal</button>
        </form>
    </div>
</div>

</body>
</html>