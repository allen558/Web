<?php
session_start();
include "../config.php";
?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_uname = test_input($_POST["uname"]);
    $user_password = test_input($_POST["pword"]);


    $hash = "$2a$10$";
    $string = "iamacomputersciencestudent";
    $hashString = $hash . $string;
    $user_password = crypt($user_password, $hashString);


    $query = "SELECT  uname FROM user WHERE uname='$user_uname' ";
    $uname_results = mysqli_query($link, $query);
    $uname_row = mysqli_fetch_assoc($uname_results);


    if ($uname_row) {

        $username = $uname_row['uname'];
        $query = "SELECT pword,id FROM user WHERE pword='$user_password'";
        $pass_results = mysqli_query($link, $query);
        $pass_row = mysqli_fetch_assoc($pass_results);


        if ($pass_row) {
            $_SESSION["id"] = $pass_row["id"];
            $_SESSION["uname"] = $username;
            header("Location:../home.php");
        } else {
            echo "Password is wrong";
        }
    } else {
        echo "User does not exist";
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;


    $data = mysqli_real_escape_string($link, $data);
    return $data;
}
?>