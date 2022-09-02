<?php

namespace src;

class Task3
{
    public function main($inputNumber): int
    {
        if (!is_int($inputNumber) || $inputNumber < 10) {
            throw new \InvalidArgumentException();
        }

        while ($inputNumber > 9) {
            $sum = 0;
            $n = strlen((string)$inputNumber);

            for ($i = 0; $i < $n; $i++) {
                $sum += $inputNumber % 10;
                $inputNumber = (int)($inputNumber / 10);
            }

            $inputNumber = $sum;
        }

        return $inputNumber;
    }
}
