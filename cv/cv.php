<?php
include "../config.php";
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: ../login/logind.php");
}

$id = $_SESSION['id'];
$query  = "SELECT * FROM user WHERE id = '$id'";
$res = mysqli_query($link, $query);
$last = mysqli_fetch_assoc($res);
$file = $last['file'];
// echo "$res";


header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $file . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>