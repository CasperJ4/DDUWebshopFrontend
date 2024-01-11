<?php
require_once 'BackEnd\core\init.php'; // Include the Database class file

// Initialize the Database class
$db = Database::getInstance();

$validation = null; // Declare $validation here

if (Input::exists()) {
    $validate = new Validation();
    $validation = $validate->check($_POST, array(
        'email' => array(
            'required' => true,
        ),
        'password' => array(
            'required' => true,
        )
    ));
}
// Use var_dump($validation) only for debugging; remove it in production
var_dump($validation);

// Check if $validation is an object and then if it passed
if ($validation && $validation->passed()) {
    $email = Input::get('email');
    $password = Input::get('password');

    // Retrieve user data from your database based on the provided email
    $user = $db->select('users', '*', 'email = :email', [':email' => $email]);

    if ($user && password_verify($password, $user[0]['password'])) {
        // Successful login
        Session::flash('Success', 'You have successfully logged in!');
        Redirect::to('dashboard.php'); // Redirect to the dashboard or another page
    } else {
        // Invalid login
        echo '<p>Sorry, invalid email or password.</p>';
    }
}
// Use var_dump($validation) only for debugging; remove it in production
var_dump($_POST);
