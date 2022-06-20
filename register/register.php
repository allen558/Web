<?php include "../config.php"; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = test_input($_POST["fname"]);
    $mname = test_input($_POST["mname"]);
    $sname = test_input($_POST["sname"]);
    $uname = test_input($_POST["uname"]);
    $dob = test_input($_POST["dob"]);
    $twitt = test_input($_POST["twitt"]);
    $email = test_input($_POST["email"]);
    $pword = test_input($_POST["pword"]);
    $fb = test_input($_POST["fb"]);
    $twitt = test_input($_POST["twitt"]);
    $ig = test_input($_POST["ig"]);
    $phone = test_input($_POST["phone"]);
    $hash = "$2a$10$";
    $string = "iamacomputersciencestudent";
    $hashString = $hash . $string;
    $pword = crypt($pword, $hashString);



    $cv = $uname . "-" . $_FILES['cv']['name'];
    $file_loc = $_FILES['cv']['tmp_name'];
    $folder = "../cv/";
    $new_file_name = strtolower($cv);
    $final_cv = str_replace(' ', '-', $new_file_name);



    if (move_uploaded_file($file_loc, $folder . $final_cv)) {
     
        $query = "INSERT INTO user (fname, mname, sname ,uname, dob, pword, cv, email, phone, fb, twitt, ig)  VALUES ('$fname','$mname','$sname','$uname','$dob','$pword','$final_cv','$email','$phone','$fb','$twitt','$ig')";
        // echo "$query";
        $insertingData = mysqli_query($link, $query);
    }



    if (!$insertingData) {
        echo "Inserting data to the Db failed";
    } else {
        header("Location:../home.php");
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
<!-- Noela@123 -->