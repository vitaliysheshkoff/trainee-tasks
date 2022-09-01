<?php

namespace src;

class Task3
{
    public function main(int $inputNumber): int
    {
        if ($inputNumber < 0) {
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
