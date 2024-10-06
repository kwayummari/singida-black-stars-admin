<?php
session_start();
include "./connection/connection2.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['pass'])) {
            $_SESSION['userId'] = $user['id'];
            $_SESSION['userEmail'] = $user['email'];
            $_SESSION['userPhone'] = $user['phone'];
            $_SESSION['userFullName'] = $user['first_name'] . ' ' . $user['last_name'];
            $_SESSION['isSeller'] = $user['isSeller'];
            $_SESSION['role'] = $user['role'];

            $_SESSION['message'] = 'Login successful. Please refresh page and proceed with payment';
            $_SESSION['success'] = true;
            header("location: home.php");
        } else {
            $_SESSION['message'] = 'Invalid email or password.';
            $_SESSION['success'] = false;
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $_SESSION['message'] = 'Invalid email or password.';
        $_SESSION['success'] = false;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    mysqli_free_result($result);
}

mysqli_close($conn);
