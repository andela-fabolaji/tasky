<?php

$isFormPure = Forms::validateForm([
    $_REQUEST['username'],
    $_REQUEST['email'],
    $_REQUEST['password']
]);

if ($isFormPure) {
    $userData = [
        'username' => $username = htmlspecialchars($_REQUEST['username']),
        'email' => $email = htmlspecialchars($_REQUEST['email']),
        'password' => $password = htmlspecialchars($_REQUEST['password'])
    ];

    $newUser = $app['database']->signupUser($userData);
    if ($newUser) {
        $_SESSION['user'] = $newUser[0]->username;
        header('Location: user/profile');
    }
} else {
    echo 'Incomplete data. All fields are required';
}