<?php
require_once 'BackEnd\core\init.php';
session_start();
session_unset();
session_destroy();
Redirect::to('login.php');