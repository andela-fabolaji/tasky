<?php

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/Forms.php';
require 'helpers/functions.php';

$app = [];

$app['config'] = require 'core/database/config.php';

$pdo = Connection::make($app['config']['database']);

$app['database'] = new QueryBuilder($pdo);