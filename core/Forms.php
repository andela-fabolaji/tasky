<?php

class Forms {
    protected $errors = array();

    public static function validateForm($formDetails) {

        $formObject = new static;

        foreach ($formDetails as $field) {
            if ($field === '' || !$field) {
                $formObject->errors[$field] = "{$field} not present";
            }
        }

        return count($formObject->errors) < 1 ? true : false;
    }
}