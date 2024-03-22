<?php

namespace src;

class Divide extends Plus
{
    protected $divNum;

    public function setDiv($divNum) {
        $this->divNum = $divNum;
    }

    public function getDiv() {
        return $this->divNum;
    }

    public function div() {
        return $this->numPlus / $this->divNum;
    }
}
