<?php
include_once '../include/db_connect.php';

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt1 = "SELECT id FROM members WHERE email = '$email' LIMIT 1";
    $stmt2 = "SELECT id FROM members WHERE username = '$username' LIMIT 1";


    $res1 = $con->query($stmt1);

    if ($res1->num_rows == 1) {
        // A user with this email address already exists
        $error_msg .= '<p id="error">A user with this email address already exists.</p>';
    }

    $res2 = $con->query($stmt2);

    if ($res2->num_rows == 1) {
        // A user with this username already exists
        $error_msg .= '<p id="error">A user with this username already exists.</p>';
    }

    if (empty($error_msg)) {
    // Create a random salt
    $random_salt = hash('sha512', "jackisthebestgsd");

    // // Create salted password 
    // $password = hash('sha512', $password . $random_salt);

    // Insert the new user into the database 
    $insert_stmt = $con->query("INSERT INTO members (username, email, password, salt) VALUES ('$username', '$email', '$password', '$random_salt')");

    // Execute the prepared query.
    // if (!$con->query($insert_stmt)) {

    //     header('Location: ../error.php?err=Registration failure: INSERT');
    // }
    // echo 'aiwen panga pa gaya';
    header('Location: ./a.php');
    }
    else{
        echo $error_msg;
    }
}