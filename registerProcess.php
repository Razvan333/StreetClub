<?php
session_start();
include 'db_conn.php';

if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])) {
    $full_name =htmlspecialchars( $_POST['full_name']);
    $email =htmlspecialchars( $_POST['email']);
    $password = htmlspecialchars($_POST["password"]);
    $re_password =htmlspecialchars( $_POST['re_password']);


    if (empty($full_name)) {
        header("Location: register.php?error=Full Name is required");
    } else if (empty($email)) {
        header("Location: register.php?error=Email is required");
    } else if (empty($password)) {
        header("Location: register.php?error=Password is required");
    } else if (empty($re_password)) {
        header("Location: register.php?error=Re-enter password is required");
    } else if ($password !== $re_password) {
        header("Location: register.php?error=Re-enter password and Password does not match");
    } else if (empty($_POST['check'])) {
        header("Location: register.php?error=Accept Terms and Condition");
    } else {
        //hashing password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $slq = "SELECT * FROM users WHERE email='$email' ";
        $result = $conn->query($slq);

        if ($result->rowCount() === 1) {
            header("Location: register.php?error=The email is taken, try another");
        } else {
            $sql2 = "INSERT INTO users(full_name,email,password) VALUES('$full_name','$email','$password')";
            $result2 = $conn->query($sql2);

            if ($result2) {
                header("Location: login.php?success=Your account has been created successfully");
            } else {
                header("Location: register.php?error=Unknown error occurred,please try again");
            }
        }
    }
}
