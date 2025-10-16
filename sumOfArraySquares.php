<?php

class SumOfSquares
{
    public function __construct(private readonly array $array)
    {
    }

    public function exec(): int
    {
        $sumSquares = 0;
        foreach ($this->array as $square) {
            $sumSquares += pow($square, 2);
        }

        return $sumSquares;
    }
}

$cbrec = new SumOfSquares([-2, 3, 4]);
echo $cbrec->exec();
