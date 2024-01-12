<?php
require_once 'BackEnd\core\init.php'; // Include the Database class file

$db = Database::getInstance();

if (Input::exists()) 
{
    $validate = new Validation();
    $validation = $validate->check($_POST, array(
        'username' => array('required' => true), // Changed from 'email' to 'username'
        'password' => array('required' => true)
    ));
    if ($validation && $validation->passed()) 
    {
        $username = Input::get('username'); // Changed from 'email' to 'username'
        $password = Input::get('password');
        $adminid = Input::get('is_admin');
        $user = $db->select('wsusers', '*', 'username = :username', [':username' => $username]); // Changed table and parameter
        if ($user && $user[0]['password'] === $password) {
            $_SESSION['user'] = $user[0]['username']; // Setting the session variable
            var_dump($user[0]['is_admin']);
            // Check if the user is an admin
            if ($user[0]['is_admin'] === 1) 
            {
                $_SESSION['admin'] = true;
                Redirect::to('index.php');
                var_dump($_SESSION['admin']);
            } else
                Session::flash('Success', 'You have successfully logged in!');
                Redirect::to('index.php');
        } else {
            echo '<p>Sorry, invalid username or password.</p>'; // Changed from 'email' to 'username'
        }
     }
}
