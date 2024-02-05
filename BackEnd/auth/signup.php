<?php
require_once 'BackEnd/core/init.php'; 

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username']; // Make sure this matches the 'name' attribute in your form
    $password = $_POST['password']; // Same as above

    // Validate form data (you can add more validation rules here)
    if (empty($username) || empty($password)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Ideally, hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Save the user data to the database
    $user = new User();
    $user->create(array(
        'username' => $username,
        'password' => $hashedPassword // Store the hashed password
    ));
    
    // Redirect to a success page
    header("Location: index.php");
}
