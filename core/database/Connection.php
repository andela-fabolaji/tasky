<?php

class Connection
{
    public static function make($config)
    {
        // require 'config.php';

        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['user'],
                $config['pass'],
                $config['options']
            );
        } catch (PDOException $e) {
            $error = "<span style=\"color: red\">Connection failed. {$e->getMessage()}</span>";
            require $_SERVER['DOCUMENT_ROOT'] . '/views/errors.view.php';
            die();
        }
    }
}