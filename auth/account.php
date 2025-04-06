<?php
session_start();

//Connect database
include "./config/db.php";


//Login script
if (isset($_POST['user_login'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $email = $conn->real_escape_string($_POST['email']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $picture = $row['picture'];
        $phone = $row['phone'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['status'] = $status;
        $_SESSION['id'] = $id;
        if ($status == 'Inactive'){
            $_SESSION['error_message'] = "Account Suspended, contact support";
        }elseif ($status == 'Active'){
            $_SESSION['success_message'] = "Login Successfull";
            header('location: dashboard');
        }
    }else {
        $_SESSION['error_message'] = "Incorrect Login Details";
    }
}