<?php

namespace src;

class Task1
{
    public function main(int $inputNumber): string
    {
        return $inputNumber > 30 ? 'More than 30'
            : ($inputNumber > 20 ? 'More than 20'
                : ($inputNumber > 10 ? 'More than 10'
                    : 'Equal or less than 10'));
    }
}
