<?php
include "koneksi.php";
session_start();

$fotoid=$_GET['fotoid'];


$sql=mysqli_query($conn,"DELETE FROM foto where fotoid='$fotoid'");
header("location:foto.php");
?>