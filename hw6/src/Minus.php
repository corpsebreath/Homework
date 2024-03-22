<?php

namespace src;

class Minus extends BaseClass
{
    protected $numMinus;

    public function getMinus() {
        return $this->numMinus;
    }

    public function setMinus($numMinus) {
        $this->numMinus = $numMinus;
    }

    public function calcMinus() {
        return $this->number - $this->numMinus;
    }

    public function calcPow() {
        return $this->number ** $this->power;
    }
}
