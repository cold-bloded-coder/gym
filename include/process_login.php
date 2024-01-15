<?php
include_once 'db_connect.php';

session_start();
function login($email, $password, $con)
{
    $res = $con->query("Select * from members where email = '$email'");
    $row = $res->fetch_assoc();
    if ($row) {

        $user_id = $row["id"];
        $username = $row['username'];
        $db_password = $row["password"];
        $salt = $row["salt"];
        $admin = $row['admin'];

        // echo $password;
        // $password = hash('sha512', $password . $salt);

        // echo $password." ".$db_password;


        if ($db_password === $password) {
            // Password is correct!

            // XSS protection as we might print this value
            $user_id = preg_replace("/[^0-9]+/", "", $user_id);
            $admin = preg_replace("/[^0-9]+/", "", $admin);
            $_SESSION['user_id'] = $user_id;
            // XSS protection as we might print this value
            $username = preg_replace(
                "/[^a-zA-Z0-9_\-]+/",
                "",
                $username
            );
            if ($admin == 1) {
                $_SESSION['admin'] = $admin;
            }
            $_SESSION['username'] = $username;
            $_SESSION['login_string'] = $password;
            // Login successful.
            return true;
        }

    }
}

if (($_POST['email'] != "" and $_POST['password'] != "")) {
    $email = $_POST['email'];
    $password = $_POST['password']; // The hashed password.

    if (login($email, $password, $con) == true) {
        echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
        header('Location: ../php/i.php');
    } else {
        // Login failed 
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page. 
    header('Location: ../index.php?error');
}
?>