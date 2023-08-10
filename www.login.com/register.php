<?php

$givenPhone = $_POST['givenPhone'];
$givenEmail = $_POST['givenEmail'];
$givenPassword = $_POST['givenPassword'];



if (empty($givenEmail)||empty($givenPassword)||empty($givenPhone)) {
    echo"please enter all recquired credidentials";
    
} else {
    $conn = mysqli_connect("localhost", "root", "", "login_form");

$sql = "INSERT INTO users (user_phone, user_email, user_password) VALUES ('$givenPhone', '$givenEmail', '$givenPassword');";

mysqli_query($conn, $sql);
    echo $givenEmail . " was registered successfully!";
}

?>