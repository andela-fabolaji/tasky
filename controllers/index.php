<?php
//dieDump($_SESSION['user']);
if (isset($_SESSION['user'])) {
    header('Location: user/dashboard');
} else {
    $tasks = $app['database']->selectAll('todos');

    require 'public/views/index.view.php';
}