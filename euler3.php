<?php

class Euler3
{
   public function __construct(private readonly int $numberToSearchMaxPrimeDivisor)
   {

   }

   public static function isNumberPrime(int $number): bool
   {
       for ($i = 2; $i <= sqrt($number); $i++) {
           if ($number % $i === 0) {
               return false;
           }
       }

       return true;
   }

    public function exec(): int
    {
        $number = $this->numberToSearchMaxPrimeDivisor;

        $isPrime = self::isNumberPrime($number);
        if ($isPrime) {
            return $number;
        }

        $maxDivisor = 1;
        $sqrt = (int)sqrt($number);

        for ($i = $sqrt; $i >= 2; $i--) {
            if (self::isNumberDivisor($number, $i)) {
                // Проверяем оба делителя: i и number/i
                if (self::isNumberPrime($number / $i)) {
                    if ($number / $i > $maxDivisor) {
                        $maxDivisor = $number / $i;
                    }
                }
                if (self::isNumberPrime($i) && $i > $maxDivisor) {
                    $maxDivisor = $i;
                }
            }
        }

        return $maxDivisor;
    }

   public static function isNumberDivisor(int $number, int $divisor): bool
   {
       return $number % $divisor === 0;
   }
}
