<?php
    // Task 1
        echo("Task 1: 7 % 3");
        $var1 = 7;
        $var2 = 3;
        echo("= \n");
        echo($var1 % $var2);
        echo("<br>");
    //Task 2
        echo("Task 2: 7 / 7.15 = \n");
        $result = intdiv(7, 7.15);
        echo($result);
        echo("<br>");
    //Task 3
        echo("Task 3: sqrt(25) = \n");
        $result3 = sqrt(25);
        echo($result3);
        echo("<br>");
    //Task 4
        $strg = "Десять негритят пошли купаться в море";
        $words = explode(" ", $strg);
        echo("Task 4: $strg\n");
        echo("Fourth word: $words[3]");
        echo("<br>");
    //Task 5
        echo("Task 5: $strg\n");
        $smbl_str = mb_substr($strg, 16, 1, "UTF-8");
        echo("Seventeenth symbol: $smbl_str");
        echo("<br>");
    //Task 6
        $new_strg = 'Десять негритят пошли купаться в море';
        echo("Task 6: $new_strg\n");
        $new_strg = mb_convert_case($new_strg, MB_CASE_TITLE, "UTF-8");
        echo($new_strg);
        echo("<br>");
    //Task 7
        echo("Task 7: $strg\n");
        $length = mb_strlen($strg);
        echo("String length: $length\n");
        echo("<br>");
    //Task 8
        echo("Task 8: ");
        $var3 = true;
        $var4 = 1;
        if ($var3 == $var4) {
            echo("variables are equal");
            echo("<br>");
        } else {
            echo ("variables are not equal");
            echo("<br>");
        }
    //Task 9
        echo("Task 9: ");
        $var5 = false;
        $var6 = 0;
        if ($var5 === $var6) {
            echo("variables are identical");
            echo("<br>");
        } else {
            echo ("variables are not identical");
            echo("<br>");
        }
    //Task 10
        echo("Task 10: ");
        $str1 = "three";
        $str2 = "три";
        $length1 = mb_strlen($str1);
        $length2 = mb_strlen($str2);
        if ($length1 > $length2) {
            echo("three > три");
            echo("<br>");
        } else {
            echo ("three < три");
            echo("<br>");
        }
     //Task 11
        echo("Task 11: ");
        $int1 = 125 * 13 + 7;
        $int2 = 223 + 28 * 2;
        if ($int1 > $int2) {
            echo("int1 > int2");
            echo("<br>");
        } else {
            echo ("int1 < int2");
            echo("<br>");
        }