<?php
session_start();
require_once '../config/db.php';
require_once '../functions/user.php';

// Redirect if already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: ../dashboard.php");
    exit;
}

$errors = [];
$email = '';

// Process form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
    // Validation
    if(empty($email)) {
        $errors[] = "Email is required";
    }

    if(empty($password)) {
        $errors[] = "Password is required";
    }

    // Only proceed if validation passes
    if(empty($errors)) {
        // Process login using the loginUser function (now without validation)
        $result = loginUser($conn, $email, $password);
        
        if($result['status'] === 'success') {
            // Set session variables and redirect
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['user_name'] = $result['user_name'];
            header("Location: ../dashboard.php");
            exit;
        } else {
            // Store errors from login function
            $errors = $result['errors'];
        }
    }
}

// Display the login form with any errors
include 'includes/header.php';
include 'includes/navbar.php';
?>