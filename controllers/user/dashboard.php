<?php

if (!isset($_SESSION['user'])) {
    header('Location: /');
}

require('public/views/user/dashboard.view.php');