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
$name = '';
$email = '';

// Process form submission
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation
    if(empty($name)) {
        $errors[] = "Name is required";
    }

    if(empty($email)) {
        $errors[] = "Email is required";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if(empty($password)) {
        $errors[] = "Password is required";
    } elseif(strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    // Check if email already exists
    if(empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0) {
            $errors[] = "Email already exists";
        }
    }

    // Only proceed if validation passes
    if(empty($errors)) {
        // Process registration using modified addUser function (without validation)
        $result = addUser($conn, $name, $email, $password);
        
        if($result['status'] === 'success') {
            // Set session variables and redirect
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['user_name'] = $result['user_name'];
            header("Location: ../dashboard.php");
            exit;
        } else {
            // Store errors from registration function
            $errors = $result['errors'];
        }
    }
}

// Display the registration form with any errors
include 'includes/header.php';
include 'includes/navbar.php';
?>