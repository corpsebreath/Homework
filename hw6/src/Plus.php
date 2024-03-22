<?php

namespace src;

class Plus extends BaseClass
{
    protected $numPlus;

    public function getPlus() {
        return $this->numPlus;
    }

    public function setPlus($numPlus) {
        $this->numPlus = $numPlus;
    }

    public function calcPlus() {
        return $this->number + $this->numPlus;
    }

    public function calcPow() {
        return $this->number ** $this->power;
    }

}
