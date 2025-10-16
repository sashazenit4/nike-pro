<?php
# Дано число. Выведите в консоль сумму первой и последней цифры этого числа.

class Solution
{
    public function __construct(private int $number){}

    /*public function exec(): int
    {
        $firstDigit = 0;
        $lastDigit = 0;
        $lifehack = (string) $this->number;
        $firstDigit = $lifehack[0];
        $lastDigit = $lifehack[-1];
        return $result = (int) ($firstDigit + $lastDigit);

    }*/

//    public function exec(): int
//    {
//        $numberToString = (string) $this->number;
//        $stringLength = strlen($numberToString);
//
//        return (int) $numberToString[0] + (int) $numberToString[--$stringLength];
//    }

    public function exec(): int
    {
        $num = abs($this->number); // на случай отрицательных чисел
        $lastDigit = $num % 10;

        // Находим первую цифру
        while ($num >= 10) {
            $num = (int)($num / 10);
        }

        $firstDigit = $num;

        return $firstDigit + $lastDigit;
    }
}

$crw = new Solution(3242354);

echo $crw->exec();
