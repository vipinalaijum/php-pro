<?php

if (isset($_POST['register'])) {
    // Retrieve form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate username
    if (empty($username)) {
        echo "Username is required.";
        exit;
    }

    // Validate email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Validate password
    if (empty($password)) {
        echo "Password is required.";
        exit;
    }

    // Further validation and processing can be added as needed

    // Registration successful
    echo "Registration successful!";

    // In a real-world scenario, you would typically store this information in a database
}

?>
