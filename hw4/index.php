<?php
//Task 1
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo count($arr);
//Task 2
$arr_2 = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo "<br>";
$first_four = array_slice($arr, 0, 4);
$other = array_slice($arr, 4);
$temparr = array_merge($other, $first_four);
var_dump($temparr);
// Task 3
echo "<br>";
$sum = $arr[3] + $arr[4] + $arr[5];
echo $sum;
// Task 4
$firstArr = [
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 5,
    'five' => 12,
];
$secondArr = [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
    'four' => 5,
    'five' => 13,
    'six' => 37,
];
echo "<br>";
var_dump(array_diff($firstArr, $secondArr));
echo "<br>";
var_dump(array_diff($secondArr, $firstArr));
echo "<br>";
var_dump(array_intersect($secondArr, $firstArr));
echo "<br>";
$difElems = array_merge(array_diff($secondArr, $firstArr), array_diff($firstArr, $secondArr));
var_dump($difElems);
echo "<br>";
$firstArr2 = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'four' => 5,
    'five' => [
        'three' => 32,
        'four' => 5,
        'five' => 12,
    ],
];
$secElem = [];
foreach ($firstArr2 as $value) {
    if (is_array($value)) {
        $i = 0;
        foreach ($value as $value2) {
            $i++;
            if($i == 2) {
                $secElem[] = $value2;
                break;
            }
        }
    }
}
var_dump($secElem);
echo "<br>";
$totalElem = 0;
$totalElem += count($firstArr2);
foreach ($firstArr2 as $value) {
    if (is_array($value)) {
        $totalElem += count($value);
    }
}
echo($totalElem);
echo "<br>";
$sumArr = array_sum($firstArr2);
foreach ($firstArr2 as $value) {
    if (is_array($value)) {
        $sumArr += array_sum($value);
    }
}
echo($sumArr);
