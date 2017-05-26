<?php

$getRoutes = [
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'products' => 'controllers/products.php',
    'contact' => 'controllers/contact.php',
    'user/dashboard' => 'controllers/user/dashboard.php'
];

$postRoutes = [
    'signup'=> 'controllers/auth/signup.php',
    'auth/login' => 'controllers/auth/login.php'
];

$router->get($getRoutes);
$router->post($postRoutes);
