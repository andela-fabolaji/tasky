<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($desc, $completed) {
        $this->description = $desc;
        $this->completed = $completed;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function getDetails() {
        return [
            'desc' => $this->description,
            'dueDate' => $this->dueDate
        ];
    }

    public function complete()
    {
        $this->completed = true;
    }
}