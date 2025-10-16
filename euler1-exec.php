<?php
require 'euler1.php';

$solution = new Euler1(1000, new DividedByNumber(3, 5));

print $solution->findSumOfIntegersDividedBySetValuesLessThanLimit();
