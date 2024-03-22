<?php

namespace src;

abstract class BaseClass
{
    protected $number;
    protected $power;

    public function getPower() {
        return $this->power;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setPower($power) {
        $this->power = $power;
    }

    abstract public function calcPow();
}
