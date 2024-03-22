<?php

namespace src;

final class Multiply
{
    private $num;
    private $numMultiply;

    public function getMultiply() {
        return $this->numMultiply;
    }

    public function setNumber(Task1 $task1) {
        $this->num = $task1->getNumber();
    }

    public function setMultiply($numMultiply) {
        $this->numMultiply = $numMultiply;
    }

    public function calcMustiply() {
        return $this->num * $this->numMultiply;
    }
}
