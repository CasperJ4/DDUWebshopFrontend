<?php
session_start();

// Assuming 'BackEnd' and 'core' directory names are capitalized as shown in the error messages.
require_once 'BackEnd/core/Config.php';
require_once 'BackEnd/core/Database.php';
require_once 'BackEnd/core/Input.php';
require_once 'BackEnd/class/Validation.php';
require_once 'BackEnd/core/Session.php';
require_once 'BackEnd/class/User.php'; // Assuming the class filename is User.php, adjust if it's different
require_once 'BackEnd/core/Redirect.php';
require_once 'BackEnd/class/products.php'; // Assuming the class filename is Products.php, adjust if it's different
require_once 'BackEnd/class/Cart.php'; // Assuming the class filename is Cart.php, adjust if it's different
require_once 'BackEnd/class/Category.php'; 
