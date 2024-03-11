<?php
// Task 1
/*function Task1($array, $index) {
    if (is_array($array)) {
        if (array_key_exists($index, $array)) {
            return $array[$index];
        }
        foreach ($array as $value) {
            if (is_array($value)) {
                $res = Task1($value, $index);
                if ($res != null) {
                    return $res;
                }
            }
        }
    }
    return null;
}
$array = [
    'fruits' => ['apple', 'orange', 'cherry'],
    'numbers' => [1, 2, 3],
    'colors' => ['red', 'green', 'blue'],
];
$index = 1;
$elem = Task1($array, $index);
if ($elem != null) {
    echo "Элемент с индексом index: ";
    echo $elem;
} else {
    echo "Элемента с таким индексом не существует";
}*/
function Task1($array, $index) {
    $result = [];
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            if ($key === $index) {
                $result[] = $value;
            }
            if (is_array($value)) {
                $res = Task1($value, $index);
                if (!empty($res)) {
                    $result[] = [$key => $res];
                }
            }
        }
    }
    return $result;
}

$array = [
    'countries' => [
        'Europe' => [
            'Western' => ['France', 'Germany', 'Spain'],
            'Eastern' => ['Poland', 'Hungary', 'Czech Republic'],
        ],
        'Asia' => [
            'Eastern' => ['Japan', 'China', 'South Korea'],
            'Western' => ['Turkey', 'Iran', 'Saudi Arabia'],
        ],
    ],
    'fruits' => [
        'tropical' => ['banana', 'pineapple', 'mango'],
        'citrus' => ['orange', 'lemon', 'lime'],
    ],
    'numbers' => [
        'even' => [2, 4, 6],
        'odd' => [1, 3, 5],
    ],
];
$index = 1;
$elems = Task1($array, $index);

if (!empty($elems)) {
    echo "Елементи з індексом $index: ";
    var_dump($elems);
} else {
    echo "Елементів з таким індексом не існує";
}
echo "<br>";

//Task 2
function Task2($str) {
    if (!is_string($str)) {
        return false;
    }
    $counter = 0;
    $length = mb_strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == 'b' || $str[$i] == 'B') {
            $counter++;
        }
    }
    return $counter;
}

$str = "BaBBababanana"; // 5
//$str = 1635;
$result = Task2($str);
if ($result === false) {
    echo "false";
} else {
    echo "Количество букв b в строке: ";
    echo $result;
}
echo "<br>";

//Task 3
function Task3($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += Task3($value);
        } elseif (is_numeric($value)) {
            $sum += $value;
        }
    }
    return $sum;
}
//$array = [1, 2, 5, 7, 9, 12]; //36
//$array = ["one", "two", "four", true, false];
$array = [
    1,
    2,
    [
        3,
        4,
        [
            5,
            6,
            [
                7,
                8,
            ],
        ],
        9,
    ],
    10,
]; //55
echo "Сумма значений: ";
echo Task3($array);
echo "<br>";

// Task 4
function Task4($bigSide, $smallSide) {
    if (is_numeric($bigSide) && is_numeric($smallSide)) {
        /*$horizontalCount = floor($bigSide / $smallSide);
        $squareBig = $bigSide ** 2;
        $count = $horizontalCount ** 2;
        $squareSmall = ($smallSide ** 2);
        $square = $squareSmall * $count;
        var_dump(($squareBig - $square) / $squareSmall);
        return $count;*/
        $count = ($bigSide / $smallSide) ** 2;
        return $count;
    }
}
$bigSide = 10;
$smallSide = 3;
echo "Можно вписать ";
echo Task4($bigSide, $smallSide);
echo " квадратов меньшего размера";
echo "<br>";

