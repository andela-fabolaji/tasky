<?php

/**
 * A method to dump data on the screen
 *
 * @param array $data array of data
 */
function dieDump($data, $readable = false) {
    if ($readable === true) {
        echo '<pre>';
        die(print_r($data));
        echo '</pre>';
    } else {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }
}