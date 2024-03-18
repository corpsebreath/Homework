<?php
// Task 1

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
class Task1 extends BaseClass
{
    public function calcPow() {
        return $this->number ** $this->power;
    }
}

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

// Task 2
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

$result = new Task1();
$result->setNumber(7);
$result->setPower(3);
echo "Возведение в степень: ";
echo $result->calcPow();
echo "<br>";

$res2 = new Plus();
$res2->setNumber(7);
$res2->setPlus(3);
echo "Сложение: ";
echo $res2->calcPlus();
echo "<br>";

$res3 = new Minus();
$res3->setNumber(7);
$res3->setMinus(5);
echo "Вычитание: ";
echo $res3->calcMinus();
echo "<br>";

$task1 = new Task1();
$task1->setNumber(7);
$multiply = new Multiply();
$multiply->setNumber($task1);
$multiply->setMultiply(10);
$result = $multiply->calcMustiply();
echo "Умножение: ";
echo $result;
echo "<br>";

$res4 = new Compas();
$res4->setPlus(5);
$res4->setCom(5);
echo "Сравнение: ";
echo $res4->comp();
echo "<br>";

$res5 = new Divide();
$res5->setPlus(50);
$res5->setDiv(5);
echo "Деление: ";
echo $res5->div();
echo "<br>";

$res6 = new RemDiv();
$res6->setMinus(47);
$res6->setRemDiv(5);
echo "Деление с остатком: ";
echo $res6->remainDiv();
echo "<br>";

$res7 = new SqrtMin();
$res7->setMinus(54);
$res7->setSqrtMin(5);
echo "Корень из вычитания: ";
echo $res7->sqrtMinus();
echo "<br>";
