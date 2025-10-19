<?php
class BinarySearch
{
    public function __construct(protected array $sortedArray) {}

    /**
     * @param int $element
     * @return string|int
     * Бинарный поиск
     */
    public function findElementIndex(int $element): string|int
    {
        $left = 0;
        $right = count($this->sortedArray) - 1;
        $midIndex = (int) floor(($left + $right) / 2);
        $arrayKeys = array_keys($this->sortedArray);
        $mid = $arrayKeys[$midIndex];

        while ($left <= $right) {
            if ($this->sortedArray[$mid] === $element) {
                return $mid;
            } elseif ($this->sortedArray[$mid] > $element) {
                $right = $midIndex - 1;
                $midIndex = (int) floor(($left + $right) / 2);
                $mid = $arrayKeys[$midIndex];
            }
            else {
                $left = $midIndex + 1;
                $midIndex = (int) floor(($left + $right) / 2);
                $mid = $arrayKeys[$midIndex];
            }
        }

        return 'not found';
    }
}

$search = new BinarySearch([
    'первый' => 1,
    'второй' => 2,
    'третий' => 3,
    'четвертый' => 4,
    'пятный' => 5,
    'шестой' => 6,
    'седьмой' => 7,
    'восьмой' => 8,
    'девятый' => 9,
]);

echo $search->findElementIndex(11);
