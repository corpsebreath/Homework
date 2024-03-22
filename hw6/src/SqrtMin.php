<?php

namespace src;

class SqrtMin extends Minus
{
    protected $numSqrt;

    public function setSqrtMin($numSqrt) {
        $this->numSqrt = $numSqrt;
    }

    public function getSqrtMin() {
        return $this->numSqrt;
    }

    public function sqrtMinus() {
        return sqrt($this->numMinus - $this->numSqrt);
    }
}
