<?php

include "vendor\autoload.php";

use src\Compas;
use src\Divide;
use src\Minus;
use src\Multiply;
use src\Plus;
use src\RemDiv;
use src\SqrtMin;
use src\Task1;git 

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
