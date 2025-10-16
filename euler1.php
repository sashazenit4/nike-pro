<?php

class DividedByNumber
{
    public function __construct(
        public int $firstNumber,
        public int $secondNumber,
    )
    {

    }
}

class Euler1
{
    private int $startFrom = 0;

    public function __construct(private readonly int $limit, private readonly DividedByNumber $dividedBy)
    {

    }

    public function findSumOfIntegersDividedBySetValuesLessThanLimit(): int
    {
        $sumOfIntegers = 0;
        for ($i = $this->startFrom; $i < $this->limit; $i++) {
            if ($i % $this->dividedBy->firstNumber == 0 || $i % $this->dividedBy->secondNumber == 0) {
                $sumOfIntegers += $i;
            }
        }

        return $sumOfIntegers;
    }
}
