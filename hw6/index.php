<?php
// Task 1

abstract class BaseClass
{
    protected $numPlus;
    protected $comNum;
    protected $devNum;
    protected $numMinus;
    protected $remDiv;
    protected $numSqrt;
    protected $numMultiply;
    protected $number;
    protected $power;

    public function getPlus() {
        return $this->numPlus;
    }

    public function getCom() {
        return $this->comNum;
    }

    public function getDev() {
        return $this->devNum;
    }

    public function getMinus() {
        return $this->numMinus;
    }

    public function getRemDiv() {
        return $this->remDiv;
    }

    public function getSqrtMin() {
        return $this->numSqrt;
    }
    public function getMultiply() {
        return $this->numMultiply;
    }

    public function getPower() {
        return $this->power;
    }

    public function getNumber() {
        return $this->number;
    }
    public function setPlus($numPlus) {
        $this->numPlus = $numPlus;
    }

    public function setCom($comNum) {
        $this->comNum = $comNum;
    }

    public function setDev($devNum) {
        $this->devNum = $devNum;
    }

    public function setRemDiv($remDiv) {
        $this->remDiv = $remDiv;
    }

    public function setSqrtMin($numSqrt) {
        $this->numSqrt = $numSqrt;
    }

    public function setMinus($numMinus) {
        $this->numMinus = $numMinus;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setPower($power) {
        $this->power = $power;
    }

    abstract public function calcPow();
    abstract public function calcPlus();
    abstract public function calcMinus();
}
class Task1 extends BaseClass
{
    public function calcPow() {
        return $this->number ** $this->power;
    }

    public function calcPlus() {
        return $this->number + $this->numPlus;
    }

    public function calcMinus() {
        return $this->number - $this->numMinus;
    }
}

class Plus extends BaseClass
{
    public function calcPow() {
        return $this->number ** $this->power;
    }

    public function calcPlus() {
        return $this->number + $this->numPlus;
    }

    public function calcMinus() {
        return $this->number - $this->numMinus;
    }
}

class Compas extends Plus
{
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

class Devide extends Plus
{
    public function dev() {
        return $this->numPlus / $this->devNum;
    }
}

class Minus extends BaseClass
{
    public function calcPow() {
        return $this->number ** $this->power;
    }

    public function calcPlus() {
        return $this->number + $this->numPlus;
    }

    public function calcMinus() {
        return $this->number - $this->numMinus;
    }
}

class RemDiv extends Minus
{
    public function remainDiv() {
        return $this->numMinus % $this->remDiv;
    }
}

class SqrtMin extends Minus
{
    public function sqrtMinus() {
        return sqrt($this->numMinus - $this->numSqrt);
    }
}

class Multiply
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

$res5 = new Devide();
$res5->setPlus(50);
$res5->setDev(5);
echo "Деление: ";
echo $res5->dev();
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
