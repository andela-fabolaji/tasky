<?php
session_start();

require 'core/bootstrap.php';

//if (isset($_SESSION['user'])) {
//    header('Location: user/profile');
//} else {
require Router::load('routes.php')
    ->navigate(Request::uri(), Request::method());
//}