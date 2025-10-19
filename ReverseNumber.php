<?php
class ReverseNumber
{
    public function __construct(private readonly int $number){}

    public function exec(): int
    {
        $num = abs($this->number);
        $result = [];
        while ($num >= 10) {
            $result[] = $num % 10;
            $num = (int)($num / 10);
        }

        $result[] = $num % 10;
        return (int) implode('', $result);
    }

    public function execMathematically(): int
    {
        $num = (string)abs($this->number);
        $numberLength = strlen((string)$num) - 1;
        $resultNumber = 0;
        for ($i = strlen($num) - 1; $i >= 0; $i--) {
            $resultNumber += (int)$num[$i] * pow(10, $numberLength);
            $numberLength--;
        }
        return $resultNumber;
    }
}

echo (new ReverseNumber(328910218390312890))->exec() . PHP_EOL;
echo (new ReverseNumber(328910218390312890))->execMathematically();
