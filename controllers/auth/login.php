<?php

dieDump($_REQUEST);

$userid = $_REQUEST['userid'];
$password = $_REQUEST['password'];

$app['database']->fetchUser($userid, $password);