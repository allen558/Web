<?php
session_start();
include "../config.php";
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $alname = test_input($_POST["alname"]);
    $doe = test_input($_POST["doe"]);
    $dog = test_input($_POST["dog"]);
    $hname= test_input($_POST["hname"]);
    $tname = test_input($_POST["tname"]);
    $sor = test_input($_POST["sor"]);
    $co = test_input($_POST["co"]);
    $add = test_input($_POST["add"]);
    $email = test_input($_POST["email"]);
    $phone = $_SESSION["phone"];


    $query = "INSERT INTO alumni (alname, doe, dog, hname, tname, sor, co, add, email, phonestd_id)  VALUES ('$alname', '$doe', '$dog', '$hname', '$tname', '$sor', '$co', '$add', '$email', '$phone')";


    $insertingData = mysqli_query($link, $query);

    if (!$insertingData) {
        echo "Inserting data to the DB failed" . mysqli_error($link);
    } else {
        // echo "You inserted data to the DB";
        header("Location: ../my_details/show_details.php");
    }
}

function test_input($data)
{
    global $link;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

    $data = mysqli_real_escape_string($link, $data);

    return $data;
}

?>
