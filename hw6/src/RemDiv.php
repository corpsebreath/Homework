<?php

namespace src;

class RemDiv extends Minus
{
    protected $remDiv;
    public function getRemDiv() {
        return $this->remDiv;
    }

    public function setRemDiv($remDiv) {
        $this->remDiv = $remDiv;
    }

    public function remainDiv() {
        return $this->numMinus % $this->remDiv;
    }
}
