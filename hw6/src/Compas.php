<?php

namespace src;

class Compas extends Plus
{
    protected $comNum;

    public function setCom($comNum) {
        $this->comNum = $comNum;
    }

    public function getCom() {
        return $this->comNum;
    }

    public function comp() {
        if ($this->numPlus > $this->comNum) {
            return $this->numPlus;
        } elseif ($this->numPlus < $this->comNum) {
            return $this->comNum;
        } elseif ($this->numPlus === $this->comNum) {
            return "Значения равны";
        }
    }
}
