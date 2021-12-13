<?php

class Recurrance {
    public function __construct($startDate, $endDate, $rules) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->rules = $rules;
    }

    public function Collection() {
        return null;
    }
}