<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): void
    {
        if ($position < 0 || $position > count($arr) - 1) {
            throw new \InvalidArgumentException();
        }

        array_splice($arr, $position, 1);
        var_dump($arr);
    }
}
