<?php
require_once 'euler3.php';
class Euler3Test
{
    public static function runTests()
    {
        $testCases = [
            // [число, ожидаемый_результат]
            [2, 2],        // простое число
            [3, 3],        // простое число
            [4, 2],        // 4 = 2 * 2
            [6, 3],        // 6 = 2 * 3
            [15, 5],       // 15 = 3 * 5
            [17, 17],      // простое число
            [25, 5],       // 25 = 5 * 5
            [29, 29],      // простое число
            [49, 7],       // 49 = 7 * 7
            [77, 11],      // 77 = 7 * 11
            [100, 5],      // 100 = 2^2 * 5^2
            [13195, 29],   // известный тест из условия Эйлера
            [600851475143, 6857] // основная задача Эйлера №3
        ];

        $passed = 0;
        $failed = 0;

        foreach ($testCases as [$number, $expected]) {
            try {
                $euler = new Euler3($number);
                $result = $euler->exec();

                if ($result === $expected) {
                    echo "✓ PASS: max prime divisor of $number = $result\n";
                    $passed++;
                } else {
                    echo "✗ FAIL: max prime divisor of $number = $result (expected $expected)\n";
                    $failed++;
                }
            } catch (Exception $e) {
                echo "✗ ERROR: $number - " . $e->getMessage() . "\n";
                $failed++;
            }
        }

        echo "\nResults: $passed passed, $failed failed\n";

        if ($failed === 0) {
            echo "🎉 All tests passed!\n";
        } else {
            echo "❌ Some tests failed!\n";
        }
    }
}
