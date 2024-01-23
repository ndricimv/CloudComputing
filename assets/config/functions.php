<?php
session_start();

function registerUser($username, $password, $role) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (emri, mbiemri, username, password, email, role) VALUES ('$emri','$mbiemri','$username', '$hashedPassword', '$email', '$role')";
    return mysqli_query($conn, $query);
}

function loginUser($username, $password) {
    global $conn;
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        return true;
    } else {
        return false;
    }
}

?>
